<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResources;

class UserController extends Controller
{
    public function index()
    {
        return UserResources::collection(User::all());
    }

    public function show($id)
    {
        return new UserResources(User::find($id));
    }
}
