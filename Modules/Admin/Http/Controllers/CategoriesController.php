<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Category;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;
use Modules\Admin\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
  protected $categoryRepo;

  public function __construct(CategoryRepository $categoryRepo)
  {
    $this->categoryRepo = $categoryRepo;
  }

  /**
   * @return View
   */

  public function index(): View
  {
    $categories = $this->categoryRepo->getList();

    return view('admin::categories', compact('categories'));
  }

  public function add(): View
  {
    return view('admin::add_edit_category');
  }

  public function store(CategoryRequest $request)
  {
    $input = $request->all();
    $categories = $this->categoryRepo->add($input);

    return redirect()->route('categories');
  }

  public function edit($id)
  {
    $category = $this->categoryRepo->find($id);

    return view('admin::add_edit_category', compact('category'));
  }

  public function update($id, CategoryRequest $request)
  {
    $input = $request->all();
    $categories = $this->categoryRepo->edit($id, $input);

    return redirect()->route('categories');
  }

  public function delete($id)
  {
    $categories = $this->categoryRepo->delete($id);

    return redirect()->route('categories');
  }
}
