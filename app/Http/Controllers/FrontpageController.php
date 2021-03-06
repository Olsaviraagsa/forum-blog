<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Comment;
use App\Category;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        $categories = Category::limit(5)->get();
        return view('welcome', compact('posts', 'categories'));
    }

    public function view($slug = '')
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        $post->increment('views');
        return view('post', compact('post'));
    }

    public function addComment(Request $request, $slug = '')
    {
        abort_unless(Auth::check(), 401, 'Sorry you must login first!');
        $user = Auth::user();
        $post = Post::whereSlug($slug)->firstOrFail();
        $request->validate([
            'comment' => ['required', 'string', 'min:10']
        ]);

        $result = Comment::create([
            'content' => $request->comment,
            'user_id' => $user->id,
            'post_id' => $post->id,
        ]);
        if ($result) {
            session()->flash('status', 'Comment succesfully created.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('view-post', ['slug' => $slug]);
    }

    public function destroyComment($comment_id = 0)
    {
        abort_unless(Auth::check(), 401, 'Sorry you must login first!');
        $user = Auth::user();
        $comment = Comment::findOrFail($comment_id);
        $slug = Post::findOrFail($comment->post_id)->slug;
        abort_if($user->id !== $comment->user_id, 403, 'Sorry you\'re unauthorized to delete this resource');
        if ($comment->delete()) {
            session()->flash('status', 'Comment succesfully deleted.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('view-post', ['slug' => $slug]);
    }

    public function search(Request $request)
    {
        $categories = Category::limit(3)->get();
        $keyword = $request->query('keyword');
        $category_id = $request->query('category_id');
        $posts = Post::query()
            ->when($category_id, function ($query, $category_id) {
                return $query->where('category_id', $category_id);
            })
            ->when($keyword, function ($query, $keyword) {
                return $query
                    ->where('title', 'like', "%{$keyword}%")
                    ->orWhere('content', 'like', "%{$keyword}%");
            })
            ->paginate(3);
        $posts->appends($request->only(['keyword']));
        return view('search', compact('posts', 'keyword', 'categories'));
    }
}