<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class CrudeController extends Controller
{
    /**
     * @param validation rules array
     */
    protected $validationRules=[
        'title' => 'required|max:200',
        'description' => 'required|max:10000',
        'thumb' => 'nullable|max:700',
        'price' => 'required|min:0|max:9999.99',
        'series' => 'required|max:100',
        'sale_date' => 'required|date',
        'type' => 'required|max:100'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();
        return view("comics.index",compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        $request->validate($this->validationRules);

        $data=$request->all();

        $newproduct= Comic::create($data);

        return redirect()->route("comics.show", $newproduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.detail",compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.modify",compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate($this->validationRules);

        $data=$request->all();

        $comic->update($data);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
