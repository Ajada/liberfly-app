<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LawyersProgress;

class LawyersProgressController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function index()
    {
        return response()->json(LawyersProgress::all(), 200);
    }

    public function store(Request $request)
    {
        try {
            LawyersProgress::create($request->all());

            return response()->json([
                'success' => true
            ], 200);

        } catch (\Throwable $th) {
            dd($th);
            return response()->json([
                'error' => true,
                'stack-trace' => $th
            ], 400);
        }
    }

    public function show(string $id)
    {
        $lawyers = LawyersProgress::find($id);

        if(!$lawyers)
            return response()->json([
                'error' => true,
                'message' => 'Process not found'
            ], 404);

        return response()->json($lawyers, 200);
    }

    public function update(Request $request, string $id)
    {
        foreach ($request->all() as $key => $value) {
            DB::table('lawyers_progress')
                ->whereId($id)
                    ->update([
                        $key => $value
                    ]);
        }

        return response()->json(['success' => true], 204);
    }

    public function destroy(string $id)
    {
        $lawyers = new LawyersProgress();
        $lawyers = $lawyers->find($id);

        if(!$lawyers)
            return response()
                ->json([
                    'error' => true,
                    'message' => 'Process not found'
                ]);
        
        $lawyers
            ->whereId($id)
                ->delete();

        return response()->json(
            $lawyers ? ['success' => true] : ['error' => true]
        );
    }
}
