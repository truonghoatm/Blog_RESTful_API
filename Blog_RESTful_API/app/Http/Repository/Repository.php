<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/02/2019
 * Time: 23:17
 */

namespace App\Http\Repository;


interface Repository
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($data, $object);
    public function destroy($object);

}