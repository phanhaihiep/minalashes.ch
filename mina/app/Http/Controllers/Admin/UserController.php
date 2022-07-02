<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $users = $model->orderBy('id', 'desc')->where('id', '!=', Auth::user()->id)->paginate(20);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = null;
        return view('users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'avatar' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        //Lưu hình ảnh vào thư mục public/upload/avatar
        $hinhthe = $request->file('avatar');
        $gethinhthe = time().'_'.$hinhthe->getClientOriginalName();
        $destinationPath = public_path('upload/avatar');
        $hinhthe->move($destinationPath, $gethinhthe);

        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->avatar = '/upload/avatar/'.$gethinhthe;
        if ($user->save()) {
            return redirect()->route('admin.users.index')->with('success','User created successfully.');
        } else {
            return back()->with('success','User created fail.');
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
        $user = User::FindOrFail($id);
        return view('users.create', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::FindOrFail($id);
        return view('users.create', compact('user'));
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
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'avatar' => 'mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $user = User::FindOrFail($id);
        if($request->hasFile('avatar')) {
            //Lưu hình ảnh vào thư mục public/upload/avatar
            $hinhthe = $request->file('avatar');
            $gethinhthe = time() . '_' . $hinhthe->getClientOriginalName();
            $destinationPath = public_path('upload/avatar');
            $hinhthe->move($destinationPath, $gethinhthe);
            $user->avatar = '/upload/avatar/'.$gethinhthe;
        }

        $user->fill($request->all());
        if ($user->save()) {
            return back()->with('success','User updated successfully.');
        } else {
            return back()->with('success','User updated fail.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::FindOrFail($id);
        if ( $user->delete()) {
            return back()->with('success','User delete successfully.');
        } else {
            return back()->with('success','User delete fail.');
        }
    }
}
