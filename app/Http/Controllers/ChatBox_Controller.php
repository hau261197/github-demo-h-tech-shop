<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBox_Controller extends Controller
{
    // liên hệ
    public function lien_he(){
        $id_user=\Auth::user()->id;
        $chat=\DB::table('chat_box')
        ->where('id_user',$id_user)
        ->take(-20)
        ->orderBy('time','asc')
        ->get();
        return view('chat',['chat_history'=>$chat]);
    }
    public function ctm_post(Request $request){
        if(isset($request->load_data)){
            $id_user=\Auth::user()->id;
            $chat=\DB::table('chat_box')
            ->where('id_user',$id_user)
            ->take(-20)
            ->orderBy('time','asc')
            ->get();
            $chat_arr= array();
            foreach ($chat as $ch){
                $chat_arr[] = (array)$ch;
            }
            return response()->json($chat_arr);
        }else{
            if(strlen(trim($request->text))>0){
                \DB::table('chat_box')
                ->insert([
                'statut'=>1,
                'id_user'=>\Auth::user()->id,
                'content'=>$request->text,
                'time'=>date('Y-m-d H:i:s'),
                'rep'=>0,
                ]);
            }
            $id_user=\Auth::user()->id;
            $chat=\DB::table('chat_box')
            ->where('id_user',$id_user)
            ->take(-20)
            ->orderBy('time','asc')
            ->get();
            $chat_arr= array();
            foreach ($chat as $ch){
                $chat_arr[] = (array)$ch;
            }
            return response()->json($chat_arr);
        }
    }
    public function new_chat_box(){
        $new_mess = \DB::table('chat_box')
        ->groupBy('id_user')
        ->where('status',1)
        ->where('rep',0)
        ->get();
        $chat_arr= array();
        foreach ($new_mess as $ch){
            $chat_arr[] = (array)$ch;
        }
        return response()->json($chat_arr);
    }
}
