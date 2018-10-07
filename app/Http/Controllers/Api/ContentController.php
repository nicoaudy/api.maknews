<?php

namespace App\Http\Controllers\Api;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Content as ContentResources;

class ContentController extends Controller
{
    public function index()
    {
        return ContentResources::collection(Content::with(['category', 'user'])->get());
    }

    public function show($id)
    {
        return new ContentResources(Content::find($id));
    }
}
