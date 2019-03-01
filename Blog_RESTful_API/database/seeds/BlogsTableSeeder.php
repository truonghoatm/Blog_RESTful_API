<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();
        $blog->title = 'Tieu de 1';
        $blog->content = 'Noi dung tieu de 1';
        $blog->save();


        $blog = new Blog();
        $blog->title = 'Tieu de 2';
        $blog->content = 'Noi dung tieu de 2';
        $blog->save();




    }
}
