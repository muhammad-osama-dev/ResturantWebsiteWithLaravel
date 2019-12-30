<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\meal;
use App\menu;
class HomeController extends Controller
{
  public function show()
  {
     $meal = meal::all();
    // $meal0 = meal::firstOrFail();
     $menu = menu::with('meals')->get();

     $menu_one_meals = menu::find(1)->meals;
     $menu_two_meals= menu::find(2)->meals;


      return view('/welcome',compact('menu'),compact('menu_one_meals'),compact('menu_two_meals'));//->with($meal0);
  }
}
