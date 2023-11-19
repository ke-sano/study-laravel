<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(): View
    {
        // メッセージテーブルのレコードを全件取得
        $messages = Message::all();
        return view('message/index', ['messages' => $messages]);
    }
}
