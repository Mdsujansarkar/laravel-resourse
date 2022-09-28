<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function getUser($id) {
        $user = User::query()->find($id);
    
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User does not exist']);
        }
    
        return response()->json(['success' => true, 'user' => new UserResource($user)]);
    }
}
