<?php

namespace App\Http\Controllers\Threema;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function webhook(Request $request) {
        $validated = $request->validate([
            'from' => 'required|min:8|max:8',
            'to' => 'required|min:8|max:8',
            'messageId' => 'required',
            'date' => 'required|date',
            'nonce' => 'required',
            'box' => 'required',
            'mac' => 'required',
            'nickname' => 'required',
        ]);

        Message::create($validated);
    }
}
