<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index', [
            // 'posts' => Post::where('user_id', auth()->user()->id)->get()
            'posts' => Post::whereNotNull('borrower_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $id)
    {
        $posts = Post::find($id);
        $posts = Post::updateOrCreate(
            [
                'id' => $posts->id,
                'name' => $posts->name,
            ],
            [
                'status' => '1',
                'user_id' => $request->user_id,
                'borrow_date' => Carbon::now() -> format('Y-m-d'),
                'due_date' => Carbon::now() -> addDays(7)->format('Y-m-d')
            ]
        );

        return redirect('/dashboard')->with('success', 'Your post has been updated!');

        // $posts = Post::find($id);
        // $posts = Post::updateOrCreate(
        //     [
        //         'id' => $posts->id,
        //         'name' => $posts->name,
        //     ],
        //     [
        //         'status' => '1',
        //         'user_id' => $request->user_id,
        //         'borrow_date' => Carbon::now() -> format('Y-m-d'),
        //         'due_date' => Carbon::now() -> addDays(7)->format('Y-m-d')
        //     ]
        // );

        // return redirect()->route('dashboard.index')
        //     ->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard')->with('success', 'Your post has been deleted!');
    }

}
