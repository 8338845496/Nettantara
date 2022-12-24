<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;
use App\Models\LaundryRequest;
use App\Models\User;
use App\Http\Requests\StoreLaundryRequest;
use App\Http\Requests\UpdateLaundryRequest;
use Illuminate\Support\Facades\Hash;
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Laundry::orderBy('id', 'DESC')->paginate(10);
        return view('user-dashboard', compact('product'));
    }
    public function order()
    {
        $product = Laundry::get();
        return view('request-order', compact('product'));
    }
    public function track()
    {
        $userId = Auth::id();
        $product = LaundryRequest::where('user_id', '=',  $userId)->where('unit', '>',  0)->paginate(10);
        //dd($product);
        return view('userorder', compact('product'));
    }
    public function user()
    {
        return view('user');
    }
    public function password()
    {
        return view('changepassword');
    }
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("message", "Password changed successfully!");
    }
}
