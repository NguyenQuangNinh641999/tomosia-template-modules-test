<?php

namespace Modules\Admin\Contracts\Repositories\Mysql;

interface CategoryRepository
{
  /**
   * @param ListUserRequest $request
   */
  public function getList();

  public function find($id);

  public function add($input);

  public function edit($id, $input);

  public function delete($id);
}
