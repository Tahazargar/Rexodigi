<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Footer;
use App\Models\FooterAnyQuestion;
use App\Models\FooterQuick;
use App\Models\FooterService;
use App\Models\Header;
use App\Models\TopHeader;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $header = Header::paginate(5);
        $footer = Footer::all()->last();
        $footerServices = FooterService::orderBy('id', 'desc')->paginate(3);
        $footerQuick = FooterQuick::all()->last();
        $footerAnyQuestion = FooterAnyQuestion::all()->last();
        return view('auth.login', compact('topHeader', 'header', 'footer', 'footerServices', 'footerQuick', 'footerAnyQuestion'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
