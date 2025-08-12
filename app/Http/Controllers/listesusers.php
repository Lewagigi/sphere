<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use phpDocumentor\Reflection\Types\Void_;

class listesusers extends Controller
{
     public function show(string $id): Response

    {
         User::select('id', 'name', 'email')->get();

        return Inertia::render('users/show');

    }


}
