<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use Cookie;
use Tracker;
use Session;
use DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $item = Product::all();
         $user = Auth::user();
         //$roles = Role::all();
         

        return view('item.index')->withItem($item);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('item.item');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = New Product;
        $user = Auth::user();

        $item->name = $request -> name;
        $item->description = $request -> description;
        $item->price = $request -> price;
        $item->email = $user -> name;
        //dd($user);

        $item->save();

        return redirect()->route('item');

    }

     public function edit( Request $request)
    {   
        $id  = $request->id;

        $item = New Product;

        $updateDetails=array(
            'name' => $request->get('name'),
            'description'  => $request->get('description'),
            'price' => $request->get('price')

        );

        DB::table('products')
            ->where('id', $id )
            ->update($updateDetails);
        

        return redirect()->route('item');

    }

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
    	$item = DB::table('products')->where('id', $id)->get();

        return view('item.edit')->withItem($item);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $item = Product::findOrFail($id);

    $item->delete();

    Session::flash('flash_message', 'Task successfully deleted!');
    return redirect()->route('item');
    }
}
