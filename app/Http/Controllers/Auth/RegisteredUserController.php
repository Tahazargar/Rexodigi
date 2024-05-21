<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\FooterAnyQuestion;
use App\Models\FooterQuick;
use App\Models\FooterService;
use App\Models\Header;
use App\Models\TopHeader;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $header = Header::orderBy('id', 'asc')->get();
        $footer = Footer::all()->last();
        $footerServices = FooterService::orderBy('id', 'desc')->paginate(3);
        $footerQuick = FooterQuick::all()->last();
        $footerAnyQuestion = FooterAnyQuestion::all()->last();
        return view('auth.register', compact('topHeader', 'header', 'footer', 'footerServices', 'footerQuick', 'footerAnyQuestion'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:11', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

}
