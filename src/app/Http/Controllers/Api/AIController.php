<?php

namespace App\Http\Controllers\Api;

use App\Ai\Agents\ChatAgent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OllamaService;

class AIController extends Controller
{
    public function chat(Request $request, OllamaService $ollama)
    {
        $result = $ollama->chat($request->message);

        return response()->json([
            'result' => $result
        ]);
    }
}
