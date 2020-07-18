<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __call($method, $parameters)
    {
        $urlArray=  explode('/',url()->current());
       if(strpos($urlArray[3],'list')!==false){
           $className =  substr($urlArray[3],4);

           $object = app('App\\'.$className);
           
        return view('list'.$className);

       }else{
        echo "chahahs";
       }
    }
    public static function __callStatic($name, $arguments)
    {
        echo "called static";
    }


}
