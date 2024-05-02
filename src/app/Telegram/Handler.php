<?php

namespace App\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Stringable;

class Handler extends WebhookHandler
{
    public function hello(): void
    {
        $this->reply('Привет! Я бот!');
    }

    protected function handleChatMessage(Stringable $text): void
    {
        Log::info(json_encode($this->message->toArray(), JSON_UNESCAPED_UNICODE));
    }

}
