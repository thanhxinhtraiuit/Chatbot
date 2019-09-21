<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function handle($bot) {
        $bot->reply('Hello World');
    }
}
