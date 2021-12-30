<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Dish;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $categories_count = Category::count();
        $users_count = User::count();
        $dishes_count = Dish::count();
        $admins_count = Admin::count();

        return view('dashboard.index',['categories_count'=>$categories_count,'users_count'=>$users_count,'dishes_count'=>$dishes_count,'admins_count'=>$admins_count]);
    }
}
