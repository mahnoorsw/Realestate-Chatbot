<?php

namespace App\Http\Controllers;

use App\Models\ChatbotPromptResponse;
use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class BotManController extends Controller
{
    // Chabot using botman
    public function handle()
    {
        $botman = app('botman');
        $botman->hears('{message}', function ($botman, $message) {
            $message = strtolower($message);
            $words = explode(' ', $message);
            $response = ChatbotPromptResponse::whereIn('keyword', $words)->first();
            if (!$response) {
                // If no exact keyword match, try partial matching
                foreach ($words as $word) {
                    $response = ChatbotPromptResponse::whereRaw("keyword LIKE CONCAT('%', ?, '%')", [$word])->first();
                    if ($response) {
                        break; // Stop searching once a match is found
                    }
                }
            }
            if ($response) {
                $botman->reply($response->response);
            } else {
                $botman->reply("I don't fully understand. Are you looking to buy, sell, or rent a home?");
            }

        });
        $botman->listen();
    }

}
