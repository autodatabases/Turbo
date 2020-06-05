<?php

namespace App\Http\Middleware;

use Closure;

class Locale
{
    /**
     * Set the app locale.
     *
     * Get the locale from session,
     * it should have been set by the user.
     *
     * Keep the locale if already in session.
     * Fallback to French if undefined.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $session_locale = session('locale');
        if (in_array($session_locale, config('app.locales'))) {
            $locale = $session_locale;
        } else {
            $locale = config('app.locale');
        }
        app()->setLocale($locale);
        return $next($request);
    }
}
