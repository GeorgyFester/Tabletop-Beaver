<?php

namespace App\Models;

use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'language',
        'state',
        'price',
        'payment_method',
        'receiving_method',
        'image',
        'seller_contact',
        'is_active',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function chat(): BelongsTo
    {
        return $this->belongsTo(TelegraphChat::class, 'telegraph_chat_id', 'id');
    }

}
