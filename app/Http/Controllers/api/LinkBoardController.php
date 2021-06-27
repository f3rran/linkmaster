<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LinkBoard;

class LinkBoardController extends Controller
{
    public function index(){
        $user = auth()->user();

        $boards = LinkBoard::where('user_id', $user->id)->get();

        return response()->json($boards, 200);
    }
}
