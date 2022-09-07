<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Category;
use App\Models\Post;
use Modules\Admin\Contracts\Repositories\Mysql\UserRepository;

class PostsController extends Controller
{

  // public function __construct(UserRepository $userRepository)
  // {

  // }
  /**
   * @return View
   */

  public function index(): View
  {
    $posts = Post::get();

    return view('admin::posts', compact('posts'));
  }

  public function add(): View
  {
    $categories = Category::get();

    return view('admin::add_edit_posts', compact('categories'));
  }

  public function store(Request $request)
  {
    $input = $request->all();
    Post::create($input);

    return redirect()->route('posts');
  }

  public function edit($id)
  {
    $post = Post::find($id);
    $categories = Category::get();

    return view('admin::add_edit_posts', compact('categories', 'post'));
  }

  public function update($id, Request $request)
  {
    $input = $request->all();
    $post = Post::find($id);
    $post->update($input);

    return redirect()->route('posts');
  }

  public function delete($id)
  {
    $post = Post::find($id);
    $post->delete($id);

    return redirect()->route('posts');
  }
}
