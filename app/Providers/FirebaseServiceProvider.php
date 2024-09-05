<?php

namespace App\Providers;

use Kreait\Firebase\Factory;
use Illuminate\Support\ServiceProvider;

class FirebaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('firebase', function () {
            $serviceAccount = __DIR__ . '/../../storage/app/experienciassignificativ-e2b6d-firebase-adminsdk-q6e56-94691d8592.json';
            return (new Factory)
                ->withServiceAccount($serviceAccount)
                ->createAuth();
        });

        $this->app->singleton('firebase.database', function () {
            $serviceAccount = __DIR__ . '/../../storage/app/experienciassignificativ-e2b6d-firebase-adminsdk-q6e56-94691d8592.json';
            return (new Factory)
                ->withServiceAccount($serviceAccount)
                ->createDatabase();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
