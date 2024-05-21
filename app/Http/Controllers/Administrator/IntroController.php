<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Intro;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $intro = Intro::paginate(5);
        return view('admin.intro.index', compact('intro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/intro/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $image = '';

        if(!empty($file))
        {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('back/images/intro', $image);
        }

        Intro::create([
            'pre_title' => $request->pre_title,
            'title' => $request->title,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'image' => $image,
            'alt' => $request->alt
        ]);

        $request->session()->flash('create');
        return redirect()->route('intro.index');
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
        $intro = Intro::findOrFail($id);
        return view('admin.intro.edit', compact('intro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $intro = Intro::findOrFail($id);
        $file = $request->file('image');
        $image = '';

        if(!empty($file))
        {
            if(file_exists('back/images/intro/' . $intro->image))
            {
                unlink('back/images/intro/' . $intro->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('back/images/intro', $image);
        }
        else
        {
            $image = $intro->image;
        }

        $intro->update([
            'pre_title' => $request->pre_title,
            'title' => $request->title,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'alt' => $request->alt,
            'image' => $image
        ]);

        $request->session()->flash('update');
        return redirect()->route('intro.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $intro = Intro::findOrFail($id);
        $file = $intro->image;
        if(file_exists('back/images/intro/' . $file))
        {
            unlink('back/images/intro/' . $file);
        }
        $intro->destroy($id);
        return redirect()->route('intro.index');
    }
}
