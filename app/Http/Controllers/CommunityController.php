<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Community::all();
        return view('community', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('community');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate(
            [
                'name' => 'required|string|max:20',
                'title' => 'required|string|max:20',
                'message_content' => 'required|max:255',
                'gender' => 'required',
            ]
        );

        // Insert
        $comments = Community::create($request->all());

        // Message
        return back()->with('success', 'Your comment was successfully posted!');
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
    public function edit($id)
    {
        $comment = Community::find($id);
        return view('edit-comment', compact('comment'));
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
        $comment = Community::find($id);
        $comment->name = $request->name;
        $comment->fav_console = $request->fav_console;
        $comment->title = $request->title;
        $comment->message_content = $request->message_content;
        $comment->gender = $request->gender;

        // Validation
        $request->validate(
            [
                'name' => 'required|string|max:20',
                'title' => 'required|string|max:20',
                'message_content' => 'required|max:255',
                'gender' => 'required',
            ]
        );

        // Update
        $comment->update();

        return redirect()->route('community')->with('update-comment', 'Your comment was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Community::find($id);
        $comment->delete();
        return redirect()->route('community')->with('delete-comment', 'Your comment was successfully deleted.');
    }
}
