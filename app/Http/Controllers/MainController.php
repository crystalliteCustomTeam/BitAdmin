<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function index(Request $request){
        return view('dashboard');
    }

    function google(Request $request){
        $reviews = DB::table('reviews')->where('platform','google')->get();
        $reviewsCount = DB::table('reviews')->where('platform','google')->count();
        return view('google',['reviews'=>$reviews,'count'=>$reviewsCount]);
    }

    function googleApi(Request $request){
        $reviews = DB::table('reviews')->where('platform','google')->get();
        return $reviews;
    }

    function googleadd(Request $request){
        $result = DB::table('reviews')->insert([
            'platform' => 'google',
            'name' => ($request->input('name') != "") ? $request->input('name') : "Not Added",
            'rating' => ($request->input('rating') != "")? $request->input('rating') : 5,
            'date' => ($request->input('date') != "") ? $request->input('date') : "1 Day Ago",
            'message' => ($request->input('message') != "") ? $request->input('message') : "Not Added",
            'status' => "Active"
        ]);
        if($result){
            $request->session()->flash('status', 'Review Added');
            return redirect()->back();
        }else{
            $request->session()->flash('status', 'Error Found');
            return redirect()->back();
        }
    }

    function deleteReview(Request $request,$id){
        $result = DB::table('reviews')->where('id',$id)->delete();
        if($result){
            $request->session()->flash('status', 'Review Delete');
            return redirect()->back();
        }else{
            $request->session()->flash('status', 'Error Found');
            return redirect()->back();
        }
    }
}
