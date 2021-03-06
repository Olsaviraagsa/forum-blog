<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        abort_unless($user->is_admin, 403, 'Only admin can access this resource!');
        $posts = Post::withTrashed()->whereUserId($user->id)->get();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        abort_unless($user->is_admin, 403, 'Only admin can access this resource!');
        $categories = Category::all()->pluck('name', 'id');
        return view('post.create', compact('categories'));
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
        abort_unless($user->is_admin, 403, 'Only admin can access this resource!');
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'numeric', Rule::in(Category::all()->pluck('id'))],
            'content' => ['required', 'string'],
            'photo' => ['required', 'file', 'image'],
        ]);

        $photo = $request->photo;
        $photoName = time() . md5($photo->getClientOriginalName()) . '.' . $photo->extension();
        $photo->storeAs('public/images', $photoName);

        $result = Post::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'slug' => \Str::slug($request->title, '-'),
            'category_id' => $request->category_id,
            'content' => $request->content,
            'photo' => $photoName
        ]);

        if ($result) {
            session()->flash('status', 'Post succesfully created.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug = '')
    {
        $user = Auth::user();
        abort_unless($user->is_admin, 403, 'Only admin can access this resource!');
        $post = Post::whereSlug($slug)->firstOrFail();
        abort_unless($post->user_id == $user->id, 403, 'Sorry, you\'re unathorized to edit this resource');

        $categories = Category::all()->pluck('name', 'id');
        return view('post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug = '')
    {
        $user = Auth::user();
        abort_unless($user->is_admin, 403, 'Only admin can access this resource!');
        $post = Post::whereSlug($slug)->firstOrFail();
        abort_unless($post->user_id == $user->id, 403, 'Sorry, you\'re unathorized to update this resource');

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'numeric', Rule::in(Category::all()->pluck('id'))],
            'content' => ['required', 'string'],
            'photo' => ['file', 'mimes:jpeg,bmp,png,jpg'],
        ]);

        if ($request->has('photo')) {
            $photo = $request->photo;
            $newPhotoName = time() . md5($photo->getClientOriginalName()) . '.' . $photo->extension();
            $photo->storeAs('public/images', $newPhotoName);
            $oldPhotoName = $post->photo;
            if ($oldPhotoName !== 'post.png') {
                try {
                    unlink(storage_path('app/public/images/' . $oldPhotoName));
                } catch (\Exception $e) {
                    report($e);
                }
            }
            $post->photo = $newPhotoName;
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        if ($post->save()) {
            session()->flash('status', 'Post succesfully updated.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug = '')
    {
        $user = Auth::user();
        abort_unless($user->is_admin, 403, 'Only admin can access this resource!');
        $post = Post::whereSlug($slug)->firstOrFail();
        abort_unless($post->user_id == $user->id, 403, 'Sorry, you\'re unathorized to delete this resource');

        if ($post->delete()) {
            session()->flash('status', 'Post succesfully deleted.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('posts.index');
    }

    /**
     * Restore the specified resource from storage
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function restore($slug = '')
    {
        $user = Auth::user();
        abort_unless($user->is_admin, 403, 'Only admin can access this resource!');
        $post = Post::withTrashed()->whereSlug($slug)->firstOrFail();
        abort_unless($post->user_id == $user->id, 403, 'Sorry, you\'re unathorized to restore this resource');

        if ($post->restore()) {
            session()->flash('status', 'Post succesfully restored.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('posts.index');
    }

    /**
     * Force delete the specified resource from storage
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($slug = '')
    {
        $user = Auth::user();
        abort_unless($user->is_admin, 403, 'Only admin can access this resource!');
        $post = Post::withTrashed()->whereSlug($slug)->firstOrFail();
        abort_unless($post->user_id == $user->id, 403, 'Sorry, you\'re unathorized to delete this resource');

        foreach ($post->comments as $comment) {
            $comment->delete();
        }
        if ($post->forceDelete()) {
            session()->flash('status', 'Post succesfully deleted forever.');
            session()->flash('status-type', 'success');
        } else {
            session()->flash('status', 'Something was wrong, please try again later.');
            session()->flash('status-type', 'danger');
        }
        return redirect()->route('posts.index');
    }
}