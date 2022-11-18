<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GeneralCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUsers(){
        $users = User::paginate(100);
        return response()->json(new GeneralCollection($users,UserResource::class));
    }
}
