<?php

namespace App\Livewire;

use App\Models\Poll;
use Livewire\Component;
use Illuminate\Http\Request;

class PollResource extends Component
{
    public $status;

    public function mount(Request $request)
    {
        $token = $request->token;
        $poll = Poll::where('token', $token)->first();
        if (!$poll) abort('403');
        session([
            'poll_id' => $poll->id,
            'poll_token' => $poll->token,
        ]);

        $this->status = 'index';
    }
    public function render()
    {
        return view('livewire.poll-resource');
    }
}
