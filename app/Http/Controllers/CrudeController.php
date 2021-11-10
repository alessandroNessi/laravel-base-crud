<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class CrudeController extends Controller
{
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
        try{
            $comic=new Comic();
            $comic['title']=$request['title'];
            $comic['description']=$request['description'];
            $comic['thumb']=$request['thumb'];
            $comic['price']=$request['price'];
            $comic['series']=$request['series'];
            $comic['sale_date']=$request['sale_date'];
            $comic['type']=$request['type'];
            $comic->save();
            return $this->show($comic['id']);
        }
        catch(\Exception $e){
            $error=$e->getMessage();
            return view("comics.temp",compact('error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if(!is_numeric($id)){
        //     return $this->destroy($id);
        // }
        $comic=Comic::find($id);
        return view("comics.detail",compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view("comics");
        $comic=Comic::find($id);
        $comic->delete();
        return view("comics");
    }
}
