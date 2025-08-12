<?php

namespace App\Http\Controllers;

abstract class Controller
{ 

 public function show()

    {
        $users = User::all();

        return Inertia::render('users/show',[$users->toArray()]);

    }

}
