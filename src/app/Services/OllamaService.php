<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OllamaService
{
    public function chat($prompt)
    {
        $response = Http::post(env('OLLAMA_URL') . '/api/generate', [
            'model' => 'mistral',
            'prompt' => $prompt,
            'stream' => false,
        ]);

        return $response->json()['response'] ?? null;
    }
}
