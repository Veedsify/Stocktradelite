<?php

namespace App\Providers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            View::composer('*', function ($view) {
                if (Auth::check()) {
                    $customNotifications = Notification::where('user_id', auth()->user()->id)
                        ->orderBy('id', 'desc')
                        ->limit(5)
                        ->get();

                    $notificationsCount = Notification::where('is_read', false)
                        ->orderBy('id', 'desc')
                        ->limit(5)
                        ->count();

                } else {
                    $customNotifications = collect();
                    $notificationsCount = 0;
                }
                $view->with('customNotifications', $customNotifications);
                $view->with('notificationsCount', $notificationsCount);
            });
        });
    }
}
