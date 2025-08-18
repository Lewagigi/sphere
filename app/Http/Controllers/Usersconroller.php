<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia ;

use Illuminate\Http\Request;

class Usersconroller extends Controller
{


  


 public function show()
    {
        $users = User::all()  ;
        
  
   //  public function show()
   // {
     //   return Inertia::render('Show',['users' => User::all()]);
         return Inertia::render('Show',[
           'users' => $users

       ]);
       
  //  }

      }

}
