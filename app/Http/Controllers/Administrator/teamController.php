<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::paginate(4);
        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_one = $request->file('image_one');
        $file_two = $request->file('image_two');
        $file_three = $request->file('image_three');
        $file_four = $request->file('image_four');

        $image_one = '';
        $image_two = '';
        $image_three = '';
        $image_four = '';

        if(!empty($file_one))
        {
            $image_one = time() . '1' . '.' . $file_one->getClientOriginalExtension();
            $file_one->move("back/images/team/", $image_one);
        }

        if(!empty($file_two))
        {
            $image_two = time() . '2' . '.' . $file_two->getClientOriginalExtension();
            $file_two->move("back/images/team/", $image_two);
        }

        if(!empty($file_three))
        {
            $image_three = time() . '3' . '.' . $file_three->getClientOriginalExtension();
            $file_three->move("back/images/team/", $image_three);
        }

        if(!empty($file_four))
        {
            $image_four = time() . '4' . '.' . $file_four->getClientOriginalExtension();
            $file_four->move("back/images/team/", $image_four);
        }

        Team::create([
            'pre_title' => $request->pre_title,
            'title' => $request->title,
            'image_one' => $image_one,
            'name_one' => $request->name_one,
            'position_one' => $request->position_one,
            'instagram_one' => $request->instagram_one,
            'facebook_one' => $request->facebook_one,
            'twitter_one' => $request->twitter_one,
            'linkedin_one' => $request->linkedin_one,
            'image_two' => $image_two,
            'name_two' => $request->name_two,
            'position_two' => $request->position_two,
            'instagram_two' => $request->instagram_two,
            'facebook_two' => $request->facebook_two,
            'twitter_two' => $request->twitter_two,
            'linkedin_two' => $request->linkedin_two,
            'image_three' => $image_three,
            'name_three' => $request->name_three,
            'position_three' => $request->position_three,
            'instagram_three' => $request->instagram_three,
            'facebook_three' => $request->facebook_three,
            'twitter_three' => $request->twitter_three,
            'linkedin_three' => $request->linkedin_three,
            'image_four' => $image_four,
            'name_four' => $request->name_four,
            'position_four' => $request->position_four,
            'instagram_four' => $request->instagram_four,
            'facebook_four' => $request->facebook_four,
            'twitter_four' => $request->twitter_four,
            'linkedin_four' => $request->linkedin_four
        ]);

        $request->session()->flash('create');
        return redirect()->route('team.index');
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
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $image_one = $team->image_one;
        $image_two = $team->image_two;
        $image_three = $team->image_three;
        $image_four = $team->image_four;

        if(file_exists($image_one))
        {
            unlink('back/images/team/' . $image_one);
        }

        if(file_exists($image_two))
        {
            unlink('back/images/team/' . $image_two);
        }

        if(file_exists($image_three))
        {
            unlink('back/images/team/' . $image_three);
        }

        if(file_exists($image_four))
        {
            unlink('back/images/team/' . $image_four);
        }

        $team->destroy($id);
        return redirect()->route('team.index');
    }
}
