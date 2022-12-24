<?php

namespace App\Http\Controllers\Admin;

use App\Models\Laundry;
use App\Models\LaundryRequest;
use App\Http\Requests\StoreLaundryRequest;
use App\Http\Requests\UpdateLaundryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
            
    public function home() {
        $req = LaundryRequest::get()->where('receive', '=',  0)->where('unit', '>',  0);
        $acce = LaundryRequest::get()->where('receive',1);
        $dis = LaundryRequest::get()->where('dispach',1);
        $proce = LaundryRequest::get()->where('process',1);
        $product = Laundry::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard', compact('product','req','acce','dis','proce'));
    }
    public function product() {
        return view('add-product');
    }
    public function laundry(){
        $product = LaundryRequest::orderBy('id', 'DESC')->paginate(10);
        //dd($product);
        return view('laundry', compact('product'));
    }
    public function changePassword()
    {

        return view('adminpassword');
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
    public function adminupdatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth('admin')->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        Admin::whereId(auth('admin')->user('admin')->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("message", "Password changed successfully!");
    }
    public function receive(Request $request)
    {
        $id = $request->id;
        $update = [
                'receive'  => 1,
            ];

        LaundryRequest::where('id',$request->id)->update($update);
        return back()->with("message", "Record Updated successfully!");
    }
    public function process(Request $request)
    {
        $id = $request->id;
        $update = [
                'process'  => 1,
            ];

        LaundryRequest::where('id',$request->id)->update($update);
        return back()->with("message", "Record Updated successfully!");
    }
    public function finish(Request $request)
    {
        $id = $request->id;
        $update = [
                'finish'  => 1,
            ];

        LaundryRequest::where('id',$request->id)->update($update);
        return back()->with("message", "Record Updated successfully!");
    }
    public function dispach(Request $request)
    {
        $id = $request->id;
        $update = [
                'dispach'  => 1,
            ];

        LaundryRequest::where('id',$request->id)->update($update);
        return back()->with("message", "Record Updated successfully!");
    }

}
