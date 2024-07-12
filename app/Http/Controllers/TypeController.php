<?php

namespace App\Http\Controllers;


use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $types = Type::all(); 
    return view('types.index', compact('types'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            
        ]);

        Type::create($validatedData);

        return redirect('/types')->with('success', 'Your type added successfully!');
    }



    public function edit(Type $type)
    {
       
        return view('types.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
{
    $validatedData = $request->validate([
        'name' => 'required',
            'description' => 'required',
    ]);

    $type->update($validatedData);

    return redirect('/types')->with('success', 'Type updated successfully!');

}




    public function destroy(Type $type)
    {
        $type->delete();
        return redirect('/types')->with('success', 'Type deleted successfully!');
    }
}
