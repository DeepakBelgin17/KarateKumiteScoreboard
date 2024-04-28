<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Cache\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->middleware('guest')->except('logout');
        $this->limiter = $limiter;
    }

    public function showAdminLoginForm()
    {
        return view('auth.loginadmin');
    }

    public function adminLogin(Request $request)
    {
        // Rate limit login attempts
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        // Validate login credentials
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            // Log successful login attempt
            Log::info('Admin login attempt successful.', ['email' => $request->email]);

            // Clear login attempts cache
            $this->clearLoginAttempts($request);

            // Redirect to dashboard on successful login
            return redirect()->intended(route('admin.dashboard'));
        }

        // Log failed login attempt
        Log::error('Admin login attempt failed.', ['email' => $request->email]);

        // Increment login attempts
        $this->incrementLoginAttempts($request);

        // Return response with error message
        return $this->sendFailedLoginResponse($request);
    }

    // Override the sendFailedLoginResponse method to customize the response
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only('email'))
            ->withErrors([
                'email' => __('auth.failed'),
            ]);
    }

    // Override the sendLockoutResponse method to customize the lockout response
    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter->availableIn(
            $this->throttleKey($request)
        );

        return back()->withInput($request->only('email'))
            ->withErrors(['email' => __('auth.throttle', ['seconds' => $seconds])]);
    }
}
