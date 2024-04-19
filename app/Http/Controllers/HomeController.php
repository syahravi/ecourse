<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Showcase;
use App\Models\Review;
class HomeController extends Controller
{
    public function __invoke()
    {
        // Mengambil jumlah data pada masing-masing model
        $courseCount = Course::count();
        $categoryCount = Category::count();
        $showcaseCount = Showcase::count();
        $authorCount = User::role('author')->count();
        /*
            tampung semua data course kedalam variabel $courses, kemudian kita memanggil relasi menggunakan withcount, selanjutnya pada saat melakukan pemanggilan relasi details yang kita ubah namanya menjadi enrolled, disini kita melakukan sebuah query untuk mengambil data transaksi yang memiliki status "success", disini kita melakukan pembatasan data yang kita ambil hanya sebanyak 6 data dan juga kita urutkan datanya dari yang paling baru.
        */
        $reviews = Review::search('rating')
        ->multiSearch('course', 'name')
        ->multiSearch('user', 'name')->latest()->get();

        $courses = Course::withCount(['videos', 'reviews', 'details as enrolled' => function($query){
            $query->whereHas('transaction', function($query){
                $query->where('status', 'success');
            });
        },])->limit(6)->latest()->get();

        // tampung seluruh data user yang memiliki role "member" kedalam variabel $user.
        $user = User::role('member')->get();

        // passing variable $course, $user, $avgRating kedalam view.
        return view('landing.home', compact('courses', 'user','reviews','courseCount', 'categoryCount', 'showcaseCount', 'authorCount'));
    }
}