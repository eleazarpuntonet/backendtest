<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::where('status', 1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user            = new User;
        $user->name      = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email     = $request->input('email');
        $user->gender    = $request->input('gender');
        $user->status    = 1;
        $user->password  = bcrypt('321321');
        $user->save();
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
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
        $user            = User::find($id);
        $user->name      = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email     = $request->input('email');
        $user->gender    = $request->input('gender');
        $user->status    = 1;
        $user->password  = bcrypt('321321');
        $user->save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user            = User::find($id);
        $user->status    = 0;
        $user->save();
        return $user;
    }

    public function massdelete(Request $request)
    {

        foreach($request->input('ids') as $clientid) {
            $user            = User::find($clientid);
            $user->status    = 0;
            $user->save();
        }
        return $request->input('ids');
    }
}
