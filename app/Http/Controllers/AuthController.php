<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\RandomPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showSignupForm()
    {
        return view('user.sign_up');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.unique' => 'This email is already registered.',
        ]);

        // 1) Generate random password
        $plainPassword = Str::random(10); // 10-char random password

        // 2) Create user with hashed password and mark must_change_password = true
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($plainPassword),
            'role_id' => 2,
            'role_type' => 'user',
            'role' => 'User',
            'status' => 'active',
            'must_change_password' => true,
        ]);

        // 3) Send email with the random password
        Mail::to($user->email)->send(new RandomPasswordMail($user, $plainPassword));

        return redirect()->route('user.signin')->with('success', 'Account created. Check your email for login details.');
    }

    public function showSignInForm()
    {
        return view('user.sign_in');
    }

    //
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Ensure user exists
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'No account found for this email.'])->withInput();
        }

        // Attempt login
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            $user->update(['last_login_at' => now()]);

            // If user must change password, redirect to change-password page
            if ($user->must_change_password) {
                return redirect()->route('user.change-password')->with('info', 'Please change your password for security.');
            }

            return redirect()->route('user.Dashboard')->with('success', 'Logged in successfully.');
        }
        return redirect()->route('user.signin')->with('error', 'Invalid credentials.');
    }


    public function showResendForm()
    {
        return view('user.resend-password');
    }

    public function resendRandomPassword(Request $request)
    {
        // dd('No account found for this email.');
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) {

            // return view('user.resend-password')->with('error', 'No account found for this email.');
            return redirect()->route('user.resend-password.form')->with('error', 'No account found for this email.');
            // return back()->withErrors(['email' => 'No account found for this email.']);
        }

        // Generate new random password and email it
        $plainPassword = Str::random(10);
        $user->password = Hash::make($plainPassword);
        $user->must_change_password = true;
        $user->save();

        Mail::to($user->email)->send(new RandomPasswordMail($user, $plainPassword));

        return redirect()->route('user.signin')->with('success', 'A new password has been emailed. Check your inbox.');
    }

    public function showChangePasswordForm()
    {
        return view('user.change-password');
    }

    // public function changePassword(Request $request)
    // {
    //     $request->validate([
    //         'current_password' => 'nullable|required_with:current_password|sometimes',
    //         'password' => 'required|min:8|confirmed',
    //     ]);

    //     $user = Auth::user();

    //     // If you want to verify current_password for extra safety (optional)
    //     // if ($request->filled('current_password') && !Hash::check($request->current_password, $user->password)) {
    //     //     return back()->withErrors(['current_password' => 'Current password is incorrect.']);
    //     // }

    //     $user->password = Hash::make($request->password);
    //     $user->must_change_password = false;
    //     $user->save();

    //     return redirect()->route('user.Dashboard')->with('success', 'Password changed successfully.');
    // }



    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password',
        ]);

        $user = Auth::user();

        // Verify current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Your current password is incorrect.']);
        }

        // Update to new password
        $user->password = Hash::make($request->password);
        $user->must_change_password = false;
        $user->save();

        return redirect()->route('user.Dashboard')->with('success', 'Password changed successfully.');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.signin')->with('success', 'Logged out successfully.');
    }
}
