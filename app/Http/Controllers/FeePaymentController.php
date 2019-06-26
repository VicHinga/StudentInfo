<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\hHttp\Requests;    
use App\FeePayment;
use Illuminate\Support\Facades\DB;

class FeePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view forrecording payment
         return view('090722.FeeForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store information to databse
        $user = new FeePayment;
        $user->Full_Name = Input::get("Full_Name");
        $user->Amount = Input::get("Amount");
        $user->Date_of_Payment = Input::get("Date_of_Payment");
        $user->profile_id = Input::get("profile_id");
        $user->save();

        $posts = FeePayment::all();        
       //return ('The information is stored ');
        return view('090722.Search')->with('posts',$posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        //
        $search = $request->Search;
        $post = DB::table('fee_payments')->where('Full_Name','like','%'.$search.'%')->paginate(5);
        return view('090722.Search',['posts' => $post]);
    }
}
