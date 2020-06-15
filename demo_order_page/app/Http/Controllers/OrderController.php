<?php

namespace App\Http\Controllers;

use App\order;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class OrderController extends Controller
{
    public function index()
    {
        $data = DB::table('orders')->get();
        return view('welcome', compact('data'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $data = order::where('nameCustomer','like',"%$search%")->orwhere('productName','like',"%$search%")->get();
        return view('welcome', compact('data'));
    }
    public function searchByStatus(Request $request){
        $search = $request->status;
        $data = order::where('status','like',"%$search%")->get();
        return view('welcome', compact('data'));
    }
}
