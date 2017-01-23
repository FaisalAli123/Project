<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platform;
use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//display all items on items page
    public function index()
    {
        $items=Item::all();
        return view('admin.item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//create platform for game
    public function create()
    {
        $platforms=Platform::pluck('name','id');
        return view('admin.item.create',compact('platforms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');
//      validation for form
        $this->validate($request,[
          'name'=>'required',
          'price'=>'required',
          'edition'=>'required',
        //  'platform'=>'required',
          'description'=>'required',
          'image'=>'image|mimes:png,jpeg,jpg|max:10000'
        ]);
//      end validation for form
//      image upload
        $image=$request->image;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images',$imageName);
          $formInput['image']=$imageName;
        }

        Item::create($formInput);
        return redirect()->route('admin.index');
    }
//end image upload
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// edit a game
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $platforms = Platform::pluck('name','id');
        return view ('admin.item.edit', compact('platforms','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//update new information for game
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $input = $request->all();
        $item->fill($input)->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// delete a game
    public function destroy($id)
    {
        Item::destroy($id);
        return back();
    }
}
