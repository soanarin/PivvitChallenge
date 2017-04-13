<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Purchase;
use App\Offering;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Offering::all();
        return view('home',array('$items'=>$items));
    }

    public function basket()
    {
        //$purchases=Purchase::all();
        $purchases=Purchase::with('offering')->get();
        return view('basket',array('$purchases'=>$purchase));
    }  

    // add new purchase
    public function basket(Request $request)
    {
        //validate input
        $validator = Validator::make($request->all(), [
            'customerName' => 'required|max:100',
            'offeringId'=>'reuqired',
            'quantity'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        //insert to database
        $order=new Purchase;
        $order->offerinId=$request->item;
        $order->customerName=$request->customerName;
        $order->quantity=$request->quantity;
        $order->save();
        return redirect('/basket');
    }   
}
