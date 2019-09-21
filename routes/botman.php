<?php
use App\Http\Controllers\BotManController;
use App\Http\Controllers\ChatBotController;
use App\Conversations\DemoConversation;

$botman = resolve('botman');


$botman->hears('hi', function($bot) {
    $bot->startConversation(new DemoConversation);
});


$botman->hears('sticker', function($bot) {
	$bot->sendRequest('sendSticker', [
		'sticker' => '1234'
	]);
});