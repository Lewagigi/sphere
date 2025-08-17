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
       // $users = User::active()
          //  ->orderByName()
          //  ->get(['id', 'name', 'email']);
         

        return Inertia::render('Show', [
            'users' => auth()->user()->friends()->get(),
        ]);

        
    }
   //  public function show()
   // {
     //   return Inertia::render('Show',['users' => User::all()]);
         //return Inertia::render('Show',[
           // 'users' => $users

      //  ]);
       
  //  }

}
