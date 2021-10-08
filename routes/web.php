<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Sugih Mohammad Galih",
        "email" => "smgalih19@gmail.com",
        "image" => "smgalih19.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sugih Mohammad Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eius aut non accusamus provident praesentium, sit necessitatibus dolor fuga, architecto distinctio sapiente earum animi quidem unde veritatis in laborum officia asperiores nisi, numquam reprehenderit quo obcaecati! Explicabo voluptas veritatis, vel aperiam natus maiores amet at quae dolorum quos magni, veniam molestias quis nemo itaque, illum nam atque est animi. Incidunt quod qui iure ad. Eaque perferendis, iste distinctio sit assumenda explicabo omnis aliquid illum earum voluptates quidem voluptatem quas nostrum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sugih Mohammad Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias obcaecati modi placeat impedit atque, explicabo ipsum porro expedita distinctio aliquam dolorem temporibus? Obcaecati alias minima magni, pariatur accusamus, a provident, dolore temporibus iste vero asperiores. Velit, quos quae? At possimus iste eum velit ad error mollitia dignissimos, adipisci distinctio voluptate. Dolorem excepturi animi odit ea? Earum alias quia quas saepe quae expedita animi vel, ipsa dolor, iste dolorem maiores libero pariatur quibusdam itaque mollitia fuga vero qui sapiente dolores laboriosam voluptatem! Debitis assumenda voluptates placeat harum optio porro sint veniam tenetur ipsa? Provident adipisci quam quo ut deleniti molestiae voluptatum."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sugih Mohammad Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eius aut non accusamus provident praesentium, sit necessitatibus dolor fuga, architecto distinctio sapiente earum animi quidem unde veritatis in laborum officia asperiores nisi, numquam reprehenderit quo obcaecati! Explicabo voluptas veritatis, vel aperiam natus maiores amet at quae dolorum quos magni, veniam molestias quis nemo itaque, illum nam atque est animi. Incidunt quod qui iure ad. Eaque perferendis, iste distinctio sit assumenda explicabo omnis aliquid illum earum voluptates quidem voluptatem quas nostrum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sugih Mohammad Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias obcaecati modi placeat impedit atque, explicabo ipsum porro expedita distinctio aliquam dolorem temporibus? Obcaecati alias minima magni, pariatur accusamus, a provident, dolore temporibus iste vero asperiores. Velit, quos quae? At possimus iste eum velit ad error mollitia dignissimos, adipisci distinctio voluptate. Dolorem excepturi animi odit ea? Earum alias quia quas saepe quae expedita animi vel, ipsa dolor, iste dolorem maiores libero pariatur quibusdam itaque mollitia fuga vero qui sapiente dolores laboriosam voluptatem! Debitis assumenda voluptates placeat harum optio porro sint veniam tenetur ipsa? Provident adipisci quam quo ut deleniti molestiae voluptatum."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] == $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});