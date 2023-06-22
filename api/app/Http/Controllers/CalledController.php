<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Called;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalledController extends Controller
{


    public function index()
    {
        return response()->json(Called::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Called::create($request->all());

            return response()->json([
                'success' => true
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'error' => true,
                'stack-trace' => $th
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $called = Called::find($id);

        if(!$called)
            return response()->json([
                'error' => true,
                'message' => 'Called not found'
            ], 404);

        return response()->json($called, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        foreach ($request->all() as $key => $value) {
            DB::table('calleds')
                ->whereId($id)
                    ->update([
                        $key => $value
                    ]);
        }

        return response()->json(['success' => true], 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $called = new Called();
        $called = $called->find($id);

        if(!$called)
            return response()
                ->json([
                    'error' => true,
                    'message' => 'Called not found'
                ]);
        
        $called
            ->whereId($id)
                ->delete();

        return response()->json(
            $called ? ['success' => true] : ['error' => true]
        );
    }
}
