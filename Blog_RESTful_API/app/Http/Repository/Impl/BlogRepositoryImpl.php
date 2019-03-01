<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/02/2019
 * Time: 23:37
 */

namespace App\Http\Repository\Impl;

use App\Blog;
use App\Http\Repository\Eloquent\EloquentRepository;
use App\Http\Repository\BlogRepository;


class BlogRepositoryImpl extends EloquentRepository implements BlogRepository
{
    public function getModel()
    {
        $model = Blog::class;
        return $model;
    }



}