<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notes',[
            'notes'=>DB::table('notes')->where('user_id',session('user')->id)->paginate(5),
        ]);
    }

    public function viewProfile(){
        $user = DB::table('users')->where('id', session('user')->id)->first();
        return view('viewProfile',[
            'user'=>$user,
        ]);
    }

    public function updateProfile(Request $request){
        DB::table('users')->where('id',session('user')->id)->update([
            'name'=>$request->input('name'),
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]);
        session([
            'user' => DB::table('users')->where('id',session('user')->id)->first()
        ]);
        return redirect('notes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addnote');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array_merge($request->except('_token'),[
            'user_id'=>session('user')->id,
        ]);
        DB::table('notes')->insert($data);
        return redirect('addnote')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editnote',[
            'note'=>DB::table('notes')->where('id',$id)->first(),
        ]);
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
        DB::table('notes')->where('id',$id)->update([
            'title'=>$request->input('title'),
            'notes'=>$request->input('notes',)
        ]);
        return redirect('notes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('notes')->where('user_id',session('user')->id)->where('id',$id)->delete();
        return redirect('notes')->with('message','Deleted Successfully');
    }
}
