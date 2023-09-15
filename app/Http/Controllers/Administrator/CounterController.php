<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\Counter as ModelsCounter;
use Illuminate\Http\Request;
use SebastianBergmann\LinesOfCode\Counter;

use function Ramsey\Uuid\v1;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counter = ModelsCounter::paginate(4);
        return view('admin.counter.index', compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.counter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ModelsCounter::create([
            'text_one' => $request->text_one,
            'number_one' => $request->number_one,
            'text_two' => $request->text_two,
            'number_two' => $request->number_two,
            'text_three' => $request->text_three,
            'number_three' => $request->number_three,
            'text_four' => $request->text_four,
            'number_four' => $request->number_four,
        ]);

        $request->session()->flash('create');
        return redirect()->route('counter.index');
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
        $counter = ModelsCounter::findOrFail($id);
        return view('admin.counter.edit', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $counter = ModelsCounter::findOrFail($id);
        $counter->update([
            'text_one' => $request->text_one,
            'text_two' => $request->text_two,
            'text_three' => $request->text_three,
            'text_four' => $request->text_four,
            'number_one' => $request->number_one,
            'number_two' => $request->number_two,
            'number_three' => $request->number_three,
            'number_four' => $request->number_four,
        ]);

        $request->session()->flash('update');
        return redirect()->route('counter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $counter = ModelsCounter::findOrFail($id);
        $counter->destroy($id);

        session()->flash('delete');
        return redirect()->route('counter.index');
    }
}
