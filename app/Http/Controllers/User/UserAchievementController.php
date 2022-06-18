<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        //Als URL limit, offset en sort parameters bevat
        if($request->has('limit') && $request->has('offset') && $request->has('sort')) {
            return $request->user()->achievements()->orderBy($request->sort)->skip($request->offset)->take($request->limit)->get();
        }
        //Als URL limit en offset parameters bevat
        if($request->has('limit') && $request->has('offset')) {
            return $request->user()->achievements()->skip($request->offset)->take($request->limit)->get();
        }
        //Als URL sort parameter bevat
        if($request->has('sort')) {
            return $request->user()->achievements()->orderBy($request->sort)->get();
        }
        return $request->user()->achievements()->get();
    }
}
