<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/02/2019
 * Time: 23:58
 */

namespace App\Http\Service;


interface BlogService
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function update($request, $id);
    public function destroy($id);
}