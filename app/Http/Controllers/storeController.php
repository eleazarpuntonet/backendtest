<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stores;

class storeController extends Controller
{
    /**
     * Display a listing of the resource.
     *@@
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Stores::where('status', 1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store            = new Stores;
        $store->storename = $request->input('storename');
        $store->address   = $request->input('address');
        $store->phone     = $request->input('phone');
        $store->save();
        return $store;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Stores::find($id);
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
        $store            = Stores::find($id);
        $store->storename = $request->input('storename');
        $store->address   = $request->input('address');
        $store->phone     = $request->input('phone');
        $store->save();
        return $store;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function massdelete(Request $request)
    {

        foreach($request->input('ids') as $storeid) {
            $store            = Stores::find($storeid);
            $store->status    = 0;
            $store->save();
        }
        return $request->input('ids');
    }
}
