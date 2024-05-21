<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $password = $request->input('password');
        $hashedPassword = Hash::make($password);

        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => $hashedPassword,
        ]);

        $request->session()->flash('create');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('admin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request -> validate([
            'name' => 'required|string|max:255',
            'mobile' => ['required','string','max:255', Rule::unique('users') -> ignore($id)],
            'email' => ['required','string','max:255','email', Rule::unique('users') -> ignore($user)],
            'role' => 'required|string'
        ]);

        $user -> update([
            'name' => $request -> name,
            'mobile' => $request -> mobile,
            'email' => $request -> email,
            'role' => $request -> role
        ]);

        $request -> session() -> flash('status');

        return redirect() -> route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = USER::findOrFail($id);
        $user->destroy($id);
        session()->flash('delete');
        return redirect()->route('users.index');
    }
}
