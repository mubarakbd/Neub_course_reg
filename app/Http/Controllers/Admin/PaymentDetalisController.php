<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use App\Models\Semester;
use Illuminate\Http\Request;

class PaymentDetalisController extends Controller
{
    public function index(){
        $data['semester_list'] =Semester::get();
        return view("site.payment.index",$data);
    }

    public function Addpayment(PaymentRequest $request){
            
        if($request->hasFile('image')){  	
            $path = $request->file('image')->store('payments', 'public');
        }else{
            $path =null;
        }
       $payment = new Payment();
       $payment->name =$request->name;
       $payment->reg_no =$request->reg_no;
       $payment->semester_id =$request->semester_id;
       $payment->image =$path;
       $payment->save();
      return redirect("/payment")->with('success','Payement Detalis Update Successfully');
    }

    public function DetalisGet (){
        $data['payment_delatis'] = Payment::get();
        return view("admin.payments.index",$data);
    }

   
}

