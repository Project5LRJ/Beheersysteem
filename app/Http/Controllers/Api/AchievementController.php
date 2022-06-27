<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AchievementController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'exercise_id' => 'required|integer|exists:exercises,id',
        ]);
        if ($validator->fails()) {
            Log::error('Validation error achievement create:', ['ip' => $request->ip(), 'user_id' => $request->user()->id, 'data' => $request->all()]);
            return response()->json(["message" => 'Incorrect data'], 400);
        } else {
            $achievement = Achievement::create([
                "title" => $request->title,
                "description" => $request->description,
                "user_id" => Auth::id(),
                "exercise_id" => $request->exercise_id
            ]);
            Log::info('Achievement created:', ['ip' => $request->ip(), 'user_id' => $request->user()->id, 'achievement_id' => $achievement->id]);
            return $achievement;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        if($achievement->user->id == $request->user()->id) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description' => 'required',
                'exercise_id' => 'required|integer|exists:exercises,id',
            ]);
            if ($validator->fails()) {
                Log::error('Validation error achievement edit:', ['ip' => $request->ip(), 'user_id' => $request->user()->id, 'achievement_id' => $achievement->id, 'data' => $request->all()]);
                return response()->json(["message" => 'Incorrect data'], 400);
            } else {
                $achievement->update($request->all());
                Log::info('Achievement edited:', ['ip' => $request->ip(), 'user_id' => $request->user()->id, 'achievement_id' => $achievement->id]);
                return $achievement;
            }
        } else {
            Log::error('Invalid user error achievement edit:', ['ip' => $request->ip(), 'user_id' => $request->user()->id, 'achievement_id' => $achievement->id]);
            return response()->json(['message' => 'You do not have access to this resource'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Achievement $achievement)
    {
        if($achievement->user->id == $request->user()->id) {
            $achievement->delete();
            Log::info('Achievement deleted:', ['ip' => $request->ip(), 'user_id' => $request->user()->id, 'achievement_id' => $achievement->id]);
        } else {
            Log::error('Invalid user error achievement delete:', ['ip' => $request->ip(), 'user_id' => $request->user()->id, 'achievement_id' => $achievement->id]);
            return response()->json(['message' => 'You do not have access to this resource'], 403);
        }
    }
}
