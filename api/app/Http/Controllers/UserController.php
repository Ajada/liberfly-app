<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register(Request $request) 
    {
        if (!$request->filled(['email', 'password'])) {
            return response()->json([
                'error' => true,
                'msg' => 'Empty mandatory fields'
            ]);
        }

        $user = new User();

        $userExists = $user->whereEmail($request->email)->first();

        if(! $userExists) {
            $user->create($request->all());

            return response()->json([
                'success' => true
            ]);
        }

        return response()->json([
            'error' => true,
            'msg' => 'There is already a user registered with this email'
        ]);
    }

    public function show(string $id)
    {
        $user = User::find($id);

        if(!$user)
            return response()->json([
                'error' => true,
                'message' => 'User not found'
            ], 404);

        return response()->json($user, 200);
    }

    public function update(Request $request, string $id)
    {
        foreach ($request->all() as $key => $value) {
            DB::table('users')
                ->whereId($id)
                    ->update([
                        $key => $value
                    ]);
        }

        return response()->json(['success' => true], 204);
    }

    public function destroy(string $id)
    {
        $users = new User();
        $users = $users->find($id);

        if(!$users)
            return response()
                ->json([
                    'error' => true,
                    'message' => 'User not found'
                ]);
        
        $users
            ->whereId($id)
                ->delete();

        return response()->json(
            $users ? ['success' => true] : ['error' => true]
        );
    }

}
