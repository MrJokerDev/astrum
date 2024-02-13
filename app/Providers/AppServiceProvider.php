<?php

namespace App\Providers;

use App\Models\Courses;
use App\Models\Lang;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->composeUzViews();
    }

    private function composeUzViews()
    {
        $languages = ['eng', 'ru', 'uz'];

        foreach ($languages as $language) {
            View::composer(["front.$language.*"], function ($view) use ($language) {
                $courses = Courses::with('langs')
                    ->whereHas('langs', function ($query) use ($language) {
                        $query->where('lang', $language);
                    })->get();

                $view->with('courses', $courses)->with('langRoute', $language);
            });
        }
    }
}
