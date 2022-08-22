<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Request;
use App\Models\Comment;
use function back;
use function view;

class CmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Comment::orderBy('id', 'desc')->paginate();
        return view('comment.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Comment();
        $post->fill($request->all());
        if ($post->save()) {
            return back()->with('success','Comment created successfully.');
        } else {
            return back()->with('success','Comment created fail.');
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
        $post = Comment::FindOrFail($id);
        return view('comment.update', compact($post));
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
        $post = Comment::FindOrFail($id);
        if ( $post->delete()) {
            return back()->with('success','Comment updated successfully.');
        } else {
            return back()->with('success','Comment updated fail.');
        }
    }
}
