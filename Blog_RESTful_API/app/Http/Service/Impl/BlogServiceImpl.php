<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 01/03/2019
 * Time: 00:01
 */

namespace App\Http\Service\Impl;


use App\Blog;
use App\Http\Repository\BlogRepository;
use App\Http\Service\BlogService;

class BlogServiceImpl implements BlogService
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;

    }

    public function getAll()
    {
        $blogs = $this->blogRepository->getAll();
        return $blogs;
    }

    public function findById($id)
    {
        $blog = $this->blogRepository->findById($id);
        $statusCode = 200;
        if(!$blog)
            $statusCode = 404;
        $data =[
            'blog' => $blog,
            'statusCode' => $statusCode
        ];
        return $data;

    }

    public function create($request)
    {
        $blog = $this->blogRepository->create($request);
        $statusCode = 201;
        if(!$blog)
            $statusCode = 500;
        $data = [
            'blog' => $blog,
            'statusCode' => $statusCode
        ];
        return $data;

    }
    public function update($request, $id)
    {
        $oldBlog = $this->blogRepository->findById($id);
        if(!$oldBlog) {
            $newBlog = null;
            $statusCode = 404;
        }else{
            $newPost = $this->blogRepository->update($request, $oldBlog);
            $statusCode = 200;
        }
        $data = [
            'newBlog' => $newPost,
            'statusCode' => $statusCode
        ];
        return $data;
    }
    public function destroy($id)
    {
        $blog = $this->blogRepository->findById($id);
        $statusCode = 404;
        $message = 'Not found';
        if($blog){
            $this->blogRepository->destroy($blog);
            $statusCode = 200;
            $message = "Delete success";
        }
        $data = [
            'message'=>$message,
            'statusCode'=>$statusCode
        ];
        return $data;
    }

}