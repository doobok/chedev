<?php

namespace App\Http\Controllers;

use App\Services\MonoTransactionsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MonoController extends Controller
{
    public function webhook(Request $request, MonoTransactionsService $service): JsonResponse
    {
        $service->handler($request->all());

        return response()->json([
            'success' => true
        ]);
    }
}
