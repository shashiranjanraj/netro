<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MissingDataController extends Controller
{
    //
    public function testdata(){
        $user = new User;

        $user->shashi('Ranjan','shashui');
        //$user->remba('tata','birla');
    }
    public function testdatastatic(){
        User::shashi('tytyt','poipo');
        
    }
}
