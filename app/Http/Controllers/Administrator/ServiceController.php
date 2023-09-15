<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::paginate(5);
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
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
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('back/images/service', $image);
        }

        Service::create([
            'image' => $image,
            'pre_title' => $request->pre_title,
            'title' => $request->title,
            'box_one_title' => $request->box_one_title,
            'box_one_description' => $request->box_one_description,
            'box_one_button_text' => $request->box_one_button_text,
            'box_one_button_link' => $request->box_one_button_link,
            'box_two_title' => $request->box_two_title,
            'box_two_description' => $request->box_two_description,
            'box_two_button_text' => $request->box_two_button_text,
            'box_two_button_link' => $request->box_two_button_link,
            'box_three_title' => $request->box_three_title,
            'box_three_description' => $request->box_three_description,
            'box_three_button_text' => $request->box_three_button_text,
            'box_three_button_link' => $request->box_three_button_link,
            'box_four_title' => $request->box_four_title,
            'box_four_description' => $request->box_four_description,
            'box_four_button_text' => $request->box_four_button_text,
            'box_four_button_link' => $request->box_four_button_link,
        ]);

        $request->session()->flash('create');
        return redirect()->route('service.index');
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
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::findOrFail($id);
        $file = $request->file('image');
        $image = "";

        if(!empty($file))
        {
            if(file_exists('back/images/service/' . $service->image))
            {
                unlink('back/images/service/' . $service->image);
            }

            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('back/images/service', $image);
        }
        else
        {
            $image = $service->image;
        }

        $service->update([
            'image' => $image,
            'pre_title' => $request->pre_title,
            'title' => $request->title,
            'box_one_title' => $request->box_one_title,
            'box_one_description' => $request->box_one_description,
            'box_one_button_text' => $request->box_one_button_text,
            'box_one_button_link' => $request->box_one_button_link,
            'box_two_title' => $request->box_two_title,
            'box_two_description' => $request->box_two_description,
            'box_two_button_text' => $request->box_two_button_text,
            'box_two_button_link' => $request->box_two_button_link,
        ]);

        $request->session()->flash('update');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $file = $service->image;
        if(file_exists($file))
        {
            unlink('back/images/service/' . $file);
        }

        $service->destroy($id);
        return redirect()->route('service.index');
    }
}
