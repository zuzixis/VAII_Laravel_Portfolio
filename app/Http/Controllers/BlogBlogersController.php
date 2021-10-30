<?php


namespace App\Http\Controllers;



class BlogBlogersController extends Controller
{
    public function __invoke()
    {
        return view("blog-list-of-bloggers");
    }
}

