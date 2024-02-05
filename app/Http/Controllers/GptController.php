<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GptController extends Controller
{
    public function gpt(Request $req)
    {
        try {
            Log::debug("함수 진입");
            Log::debug($req->question);
            
            $question = $req->question;

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => '사용자가 물어보는 질문에 답변 해주세요. 만약 모르는게 있다면 모른다고 솔직하게 말해주세요'],
                    ['role' => 'user', 'content' => $question],
                ],
            ]);

            $data = $response->json();

            Log::debug("챗지피티 답변 가져오기");
            Log::debug($data);

            $result = $data['choices'][0]['message']['content'];

            return response()->json(['data' => $result]);
        } catch (\Exception $e) {
            Log::error('Error in GptController@gpt: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
