<?php

namespace App\Http\Controllers;

use App\Http\Service\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }


    public function index()
    {
        $blogs = $this->blogService->getAll();
        return response()->json($blogs, 200);
    }

    public function show($id)
    {
        $dataBlog = $this->blogService->findById($id);
        return response()->json($dataBlog['blog'], $dataBlog['statusCode']);
    }

    public function store(Request $request)
    {
        $dataBlog = $this->blogService->create($request->all());
        return response()->json($dataBlog['blog'], $dataBlog['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $dataBlog = $this->blogService->update($request->all(), $id);
        return response()->json($dataBlog['newBlog'], $dataBlog['statusCode']);
    }

    public function destroy($id)
    {
        $dataBlog = $this->blogService->destroy($id);
        return response()->json($dataBlog['message'], $dataBlog['statusCode']);
    }
}
