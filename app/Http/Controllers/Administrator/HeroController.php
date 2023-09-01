<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Hero\CreateHeroRequest;
use App\Http\Requests\Administrator\Hero\UpdateHeroRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::paginate(4);
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateHeroRequest $request)
    {
        $file = $request->file('image');
        $image = "";

        if(!empty($file)){
            $image = time() . "." . $file->getClientOriginalExtension();
            $file -> move('back/images/hero', $image);
        }

        Hero::create([
            'image' => $image,
            'foundation' => $request -> foundation,
            'description' => $request -> description,
            'contact' => $request -> contact,
            'faq' => $request -> faq,
        ]);

        $request->session()->flash('create');
        return redirect()->route('hero.index');

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
        $hero = Hero::findOrFail($id);
        return view('admin.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, string $id)
    {
        $hero = Hero::findOrFail($id);
        $file = $request->file('image');
        $image = '';

        if(!empty($file))
        {
            if(file_exists('back/images/hero/' . $hero->image))
            {
                unlink('back/images/hero/' . $hero->image);
            }
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/hero', $image);
        }
        else
        {
            $image = $hero->image;
        }

        $hero -> update([
            'image' => $image,
            'foundation' => $request->foundation,
            'description' => $request->description,
            'contact' => $request->contact,
            'faq' => $request->faq,

        ]);

        $request->session()->flash('update');
        return redirect()->route('hero.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hero = Hero::findOrFail($id);
        $hero->destroy($id);
        session()->flash('delete');
        return redirect()->route('hero.index');
    }
}
