<?php

use App\Jobs\ProcessRabbitMQMessage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-message', function(){
    ProcessRabbitMQMessage::dispatch();
    
    return "Message sent to RabbitMQ!";
});
