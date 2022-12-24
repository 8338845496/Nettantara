<?php

namespace App\Http\Controllers;

use App\Models\LaundryRequest;
use App\Http\Requests\StoreLaundryRequestRequest;
use App\Http\Requests\UpdateLaundryRequestRequest;
use Illuminate\Http\Request;
use App\Models\Laundry;
use DB;
use Auth;

class LaundryRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLaundryRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sid = DB::table('laundry_requests')->max('id');

            
        $product = $request->product;
		$unit = $request->unit;
        $date = $request->date;
        $contact = $request->contact;
        $address = $request->address;
        $mobile = $request->mobile;
		$userId = Auth::id();
		
		for($i=0;$i<count($product);$i++)
		{
			//dd($i);
			$datasave = [
            'product'   =>$product[$i],
            'unit'      =>$unit[$i],
            'date'      =>$date,
			'user_id'	=>$userId,
            'contact'   =>$contact,
            'address'   =>$address,
            'mobile'    =>$mobile,
            'order_no'  =>$sid+1,
            'receive'   =>0,
            'process'   =>0,
            'finish'    =>0,
            'dispach'   =>0,
        ];     

        //return dd($datasave);
            DB::table('laundry_requests')->insert($datasave);

		}
        
            

            $id = DB::getPdo()->lastInsertId();
            $sid=session()->put('id',$id);
        
        session()->forget('id');
        //return dd($datasave);
        return redirect()->back()->with('message', 'Saved Succesfully :p');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaundryRequest  $laundryRequest
     * @return \Illuminate\Http\Response
     */
    public function show(LaundryRequest $laundryRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaundryRequest  $laundryRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(LaundryRequest $laundryRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaundryRequestRequest  $request
     * @param  \App\Models\LaundryRequest  $laundryRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaundryRequestRequest $request, LaundryRequest $laundryRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaundryRequest  $laundryRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaundryRequest $laundryRequest)
    {
        //
    }
}
