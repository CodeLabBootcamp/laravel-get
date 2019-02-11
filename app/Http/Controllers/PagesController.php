<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PagesController extends Controller
{
    public function home()
    {

        $posts = [
            [
                "title" => "Some title",
                "category" => "Sport",
                "text" => "lorem lorem",
                "image" => "https://via.placeholder.com/500"
            ],
            [
                "title" => "Some title",
                "category" => "Sport",
                "text" => "lorem lorem",
                "image" => "https://via.placeholder.com/500"
            ],
            [
                "title" => "Some title",
                "category" => "Sport",
                "text" => "lorem lorem",
                "image" => "https://via.placeholder.com/500"
            ],

        ];
        $data = [
            "posts" => $posts,
        ];
        return view('pages.home', $data);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactForm()
    {

//        $name = $request->name;
//        dump($name);

    }

    public function searchView(Request $request)
    {
        $term = $request->term;
        $posts = [
            [
                "title" => "Ameer Ali",
                "category" => "Sport",
                "text" => "lorem lorem",
                "image" => "https://via.placeholder.com/500"
            ],
            [
                "title" => "Saif Ziyad",
                "category" => "Sport",
                "text" => "lorem lorem",
                "image" => "https://via.placeholder.com/500"
            ],
            [
                "title" => "Ali Ali ALI ALIA LIAALI AILILA ",
                "category" => "Sport",
                "text" => "lorem lorem",
                "image" => "https://via.placeholder.com/500"
            ],

        ];


        $results = [];
        foreach ($posts as $post) {
            if ($post["title"] == $term)
                array_push($results, $post);
        }

        $data = compact('term', 'results');
        return view('pages.search', $data);
    }

    public function storeContact(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $data = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone
        ];
        return Response::json($data);
    }
}
