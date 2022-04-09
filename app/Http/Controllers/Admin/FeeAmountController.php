<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeeAmountRequest;
use App\Models\FeeAmount;
use App\Models\FeeCategory;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use PHPUnit\Framework\Constraint\Count;

class FeeAmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data['fee_amount_list'] = FeeAmount::get();
        return view("admin.feeamount.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['fee_list'] =FeeCategory::get();
        return view("admin.feeamount.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeeAmountRequest $request)
    {
        $feeamount = count($request->fee_category_id);
        if ($feeamount !=NULL) {
            for ($i=0; $i <$feeamount ; $i++) { 
                $fee = new FeeAmount();
                $fee->fee_category_id = $request->fee_category_id[$i];
                $fee->amount = $request->amount[$i];
                $fee->save();
                   
            } // End For Loop
        }
        
        $notification =array(
            'message' => "Fee Amount Insert Successfully",
            'alert-type' => "success"
        );
        return redirect("/admin/feamouts")->with($notification);
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
}
