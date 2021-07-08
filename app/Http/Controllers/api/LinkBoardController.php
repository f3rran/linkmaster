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

    public function delete(Request $request){
        $user = auth()->user();
        clock($request);
        $board = LinkBoard::findOrFail($request->id);

        if ($board->user_id == $user->id) {
           $board->delete();

           return true;
        }

        return false;
    }
}
