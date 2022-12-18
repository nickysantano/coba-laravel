<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
        return view('dashboard.create', [
            'posts' => Post::all(),
            'borrowers' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = Post::find($request->post_id);
        $posts->update(
            [
                'status' => '1',
                'borrower_id' => $request-> user_id,
                'borrow_date' => Carbon::now()->format('Y-m-d'),
                'due_date' => Carbon::now()->addDays(7)->format('Y-m-d')
            ]
        );

        return redirect('/dashboard')->with('success', 'Your post has been updated!');
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

        return redirect('/dashboard')->with('success', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Post::destroy($post->id->borrower_id);\

        // dd($id);
        $post = Post::find($id);

        $post->update([
            'status' => '0',
            'borrower_id' => null,
            'borrow_date' => null,
            'due_date' => null,
        ]);

        return redirect('/dashboard')->with('success', 'Your post has been deleted!');
    }
}
