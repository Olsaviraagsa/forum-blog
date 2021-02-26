<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Forum;
use App\Category;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $forum = Forum::withCount('replies')->get();
        return view('forum.index', compact('categories', 'forum'));
        // dd($forum);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $categories = Category::all()->pluck('name', 'id');
        return view('forum.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'numeric', Rule::in(Category::all()->pluck('id'))],
            'content' => ['required', 'string'],
        ]);

        $result = Forum::create([
            'user_id' => $user->id,
            'question' => $request->question,
            'slug' => \Str::slug($request->question, '-'),
            'category_id' => $request->category_id,
            'content' => $request->content,
        ]);

        if ($result) {
            session()->flash('status', 'Your question succesfully published.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug = '')
    {
        $forum = Forum::with('replies')->whereSlug($slug)->firstOrFail();
        return view('forum.show', compact('forum'));
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
        //
    }

    // BALASAN UNTUK PERTANYAAN FORUM
    public function addReply(Request $request, $slug = '')
    {
        $user = Auth::user();
        $forum = Forum::whereSlug($slug)->firstOrFail();
        $request->validate([
            'reply' => ['required', 'string', 'min:10']
        ]);

        $result = Reply::create([
            'content' => $request->reply,
            'user_id' => $user->id,
            'forum_id' => $forum->id,
        ]);
        if ($result) {
            session()->flash('status', 'Reply succesfully added.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('forum.show', ['slug' => $slug]);
    }

    public function destroyReply($reply_id = 0)
    {
        abort_unless(Auth::check(), 401, 'Sorry you must login first!');
        $user = Auth::user();
        $reply = Reply::findOrFail($reply_id);
        $slug = Forum::findOrFail($reply->forum_id)->slug;
        abort_if($user->id !== $reply->user_id, 403, 'Sorry you\'re unauthorized to delete this resource');
        if ($reply->delete()) {
            session()->flash('status', 'Reply succesfully deleted.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('forum.show', ['slug' => $slug]);
    }
}