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

       $registers =  Register::select('id','Subscription','Payment_date', 'Url','Price' )->get();

       $columns = GetColumn::getColumn();

       return view('registers.index', compact('registers', 'columns'));
    }

    function create()
    {

        return view('registers.create');
    }


    function store(Request $request) {

        $register = new Register;
        $register->user_id = Auth::id();
        $register->subscription = $request->subscription;
        $register->price = $request->price;
        $register->payment_date = $request->payment_date;
        $register->detail = $request->detail;
        $register->url = $request->url;
        $register->save();


        $columns = GetColumn::getColumn();


        // 特定のカラムを除去する例
        $registers = Register::all();
        $registers = $registers->each(function ($register) {
        unset($register->created_at);
        unset($register->updated_at);
});

// dd($registers);
        return view('registers.index', compact('columns', 'registers'));
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
