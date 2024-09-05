<?php

namespace App\Livewire;

use App\Models\Poll;
use Livewire\Component;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use App\Mail\TokenGeneratorMail;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;

class PollLogin extends Component implements HasForms
{

    public $status;

    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
            ])
            ->statePath('data');
    }

    public function submit()
    {
        $this->validate();
        if (Poll::where('email', $this->data['email'])->exists()) {
            $poll = Poll::where('email', $this->data['email'])->first();
        } else {

            $poll = Poll::create([
                'email' => $this->data['email'],
                'token' => Str::random(32),
                'user_data' => [
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                ],
            ]);
        }

        Mail::to($poll->email)->send(new TokenGeneratorMail($poll));
    }




    public function render()
    {
        return view('livewire.poll-login');
    }
}
