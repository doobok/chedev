<?php

namespace App\Http\Controllers;

use App\Services\MonoTransactionsService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MonoController extends Controller
{
    public function webhook(Request $request, MonoTransactionsService $service)
    {
        $service->handler($request->all());

        return new Response('', 200, [
            'Content-Type' => 'text/plain',
        ]);
    }
}
