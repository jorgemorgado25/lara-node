<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LRedis;
use App\User;
use App\Events\sendMessage;
class SocketController extends Controller
{
    public function index()
	{
		return view('message');
	}
	public function writemessage()
	{
		return view('writemessage');
	}
	public function sendMessage(Request $request){
		//$redis = LRedis::connection();
		//$users = User::all();
		//$redis->publish('message', $users);
		//$redis->publish('message', $request->data);
		event(new sendMessage($request->data));
		return response()->json('Mensaje enviado', 201);
	}

}
