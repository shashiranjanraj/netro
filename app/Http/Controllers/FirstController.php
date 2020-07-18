<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Brand;

class FirstController extends Controller
{
    //


    public function myFirstMethod(Request $request)
    {
        # code...   


        $brand = new Brand();

        $brand->name = "Samsung";
        $brand->website="www.samsung.com";
        $brand->parent = "Samsung";

        $brand->save();



        return view('myFirstView',['brand'=>$brand]);

    }

}
