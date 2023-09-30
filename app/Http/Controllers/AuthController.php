<?php

namespace App\Http\Controllers;


use App\Models\Post; // memanggil model dalam folder Models

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    /**
     * index
     *
     * @return View
    */

    public function login(): View
    {
        return view('login'); // view('folder.file', compact())
    }

    /**
     * register
     *
     * @return View
     */
    public function register(): View
    {
        return view('register');
    }

     /**
     * register_password
     *
     * @return View
     */
    public function register_password(): View
    {
        return view('register_password');
    }

    /**
     * register_user
     *
     * @return View
     */
    public function register_user(): View
    {
        return view('register_user');
    }

    public function register_mitra(): View
    {
        return view('register_mitra');
    }

    public function forgetPassword(): View
    {
        return view('profile.forgetPassword');
    }

    public function profile(): View
    {
        return view('profile.profile');
    }


    /**
     * store
     *
     * @param  mixed $request
     * 
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required',
            'jurusan'   => 'required',
            'deskripsi'   => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'nama'     => $request->nama,
            'jurusan'     => $request->jurusan,
            'image'     => $image->hashName(),
            'deskripsi'   => $request->deskripsi
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

     /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * 
     */
    public function update(Request $request, $id)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required',
            'jurusan'   => 'required',
            'deskripsi'   => 'required',
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            //update post without image
            $post->update([
                'nama'     => $request->nama,
                'jurusan'   => $request->jurusan,
                'deskripsi'   => $request->deskripsi
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

     /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id)
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}