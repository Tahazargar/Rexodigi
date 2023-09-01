<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::paginate(4);
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $image = "";

        if(!empty($file))
        {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/about', $image);
        }

        About::create([
            'pre_title' => $request->pre_title,
            'title' => $request->title,
            'description' => $request->description,
            'service_title' => $request->service_title,
            'service_title_item_one' => $request->service_title_item_one,
            'service_description_item_one' => $request->service_description_item_one,
            'service_title_item_two' => $request->service_title_item_two,
            'service_description_item_two' => $request->service_description_item_two,
            'service_title_item_three' => $request->service_title_item_three,
            'service_description_item_three' => $request->service_description_item_three,
            'service_title_item_four' => $request->service_title_item_four,
            'service_description_item_four' => $request->service_description_item_four,
            'experience_number' => $request->experience_number,
            'experience_text' => $request->experience_text,
            'image' => $image,
            'alt' => $request->alt,

        ]);

        $request->session()->flash('create');
        return redirect()->route('about.index');
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
        $about = About::findOrFail($id);
        return view('admin/about/edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);
        $file = $request->file('image');
        $image = "";

        if(!empty($file))
        {
            if(file_exists('back/images/about/' . $about->image))
            {
                unlink('back/images/about/' . $about->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('back/images/about', $image);
        }
        else
        {
           $image = $about->image;
        }

        $about->update([
            'image' => $image,
            'pre_title' => $request->pre_title,
            'title' => $request->title,
            'description' => $request->description,
            'service_title' => $request->service_title,
            'service_title_item_one' => $request->service_title_item_one,
            'service_description_item_one' => $request->service_description_item_one,
            'service_title_item_two' => $request->service_title_item_two,
            'service_description_item_two' => $request->service_description_item_two,
            'service_title_item_three' => $request->service_title_item_three,
            'service_description_item_three' => $request->service_description_item_three,
            'service_title_item_four' => $request->service_title_item_four,
            'service_description_item_four' => $request->service_description_item_four,
            'experience_number' => $request->experience_number,
            'experience_text' => $request->experience_text,
            'alt' => $request->alt
        ]);

        $request->session()->flash('update');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
        $file = $about->image;
        if(file_exists('back/images/about/' . $file))
        {
            unlink('back/images/about/' . $file);
        }
        $about->destroy($id);
        return redirect()->route('about.index');
    }
}
