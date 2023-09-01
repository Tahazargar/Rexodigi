<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TopHeader;

class topHeaderController extends Controller
{
    public function index()
    {
        $topHeader = TopHeader::paginate(4);
        return view('admin.topHeader.index', compact('topHeader'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.topHeader.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TopHeader::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,

        ]);
         $request->session()->flash('create');
         return redirect()->route('topHeader.index');
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
        $topHeader = TopHeader::findOrFail($id);
        return view('admin.topHeader.edit', compact('topHeader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $topHeader = TopHeader::findOrFail($id);
        $topHeader->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter
        ]);

        $request->session()->flash('update');
        return redirect()->route('topHeader.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $topHeader = TopHeader::findOrFail($id);
        $topHeader->destroy($id);
        return redirect()->route('topHeader.index');
    }
}
