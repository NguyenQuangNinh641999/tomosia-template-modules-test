<?php

namespace Modules\Admin\Repositories\Mysql;

use App\Models\Category;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;

class CategoryRepoImpl implements CategoryRepository
{
  public function getList()
  {
    return Category::get();
  }

  public function find($id)
  {
    return Category::find($id);
  }

  public function add($input)
  {
    return Category::create($input);
  }

  public function edit($id, $input)
  {
    $category = Category::find($id);
    return $category->update($input);
  }

  public function delete($id)
  {
    $category = Category::find($id);
    return $category->delete();
  }
}
