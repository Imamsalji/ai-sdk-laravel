<?php

namespace App\Http\Controllers\Api;

use App\Ai\Agents\ChatAgent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Ai\Ai as LaravelAi;
use Laravel\Ai\Facades\AI;

class AIController extends Controller
{
    public function chat(Request $request, ChatAgent $agent)
    {
        $response = LaravelAi::agent(ChatAgent::class)
            ->prompt($request->message)
            ->send();

        return response()->json([
            'message' => $response->text(),
        ]);
    }
}
