<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use App\Services\GetColumn;

class registerController extends Controller
{
    //
    function index() {

        $registers =  Register::where('user_id', Auth::id())->get();
        $price = Register::where('user_id', Auth::id())->sum('Price');
        $subscription = Register::where('user_id', Auth::id())->count('Subscription');



       $columns = GetColumn::getColumn();

       return view('registers.index', compact('registers', 'columns', 'price','subscription'));
    }

    function create()
    {

        return view('registers.create');
    }


    function store(Request $request) {





$validated = $request->validate([
        'subscription' => 'required|max:255',
        'price' => 'required|integer',
        'payment_date' => 'required|integer|regex:/^\d{1,2}$/',
        'detail' => 'required',
        'url' => 'required|url',
    ]);




        $register = new Register;
        $register->user_id = Auth::id();
        $register->subscription = $request->subscription;
        $register->price = $request->price;
        $register->Monthly_payment_date = $request->payment_date;
        $register->detail = $request->detail;
        $register->url = $request->url;
        $register->save();


        $columns = GetColumn::getColumn();


        // 特定のカラムを除去する例
        $registers = Register::where('user_id', Auth::id())->get();
        $registers = $registers->each(function ($register) {
        unset($register->created_at);
        unset($register->updated_at);
        });

       $columns = GetColumn::getColumn();

        $price = Register::where('user_id', Auth::id())->sum('Price');
        $subscription = Register::where('user_id', Auth::id())->count('Subscription');

       return view('registers.index', compact('registers', 'columns', 'price','subscription'));
    }
    public function show($id)
    {

     $register =  Register::find($id);
     return view('registers.show', compact('register'));
    }

    public function edit($id)
    {
        $register = Register::find($id);
        return view('registers.edit', compact('register'));
    }
    public function update(Request $request, $id)
{
    $register =  Register::find($id);
     $register->subscription = $request->subscription;
     $register->price = $request->price;
     $register->payment_date = $request->payment_date;
     $register->detail = $request->detail;
     $register->url = $request->url;
     $register->save();

     return redirect()->route('index');

}
public function destroy($id)
{
     $register = Register::find($id);
     $register->delete();

    return redirect()->route('index');
}
}
