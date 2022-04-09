<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeeCateogryRequest;
use App\Models\FeeCategory;
use Illuminate\Http\Request;

class FeeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data['fee_list'] =FeeCategory::get();
        return view("admin.feecategory.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.feecategory.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeeCateogryRequest $request)
    {
        $fee  = new FeeCategory();
        $fee->name =$request->name;
        $fee->save();
        $notification =array(
            'message' => "Fee Category List Insert Successfully",
            'alert-type' => "success"
        );
        return redirect("/admin/feecategory")->with($notification);
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
        $feelist =FeeCategory::find($id);
        if(!$feelist){
        flash("No item Found")->error();
        return redirect('/feecategory');
        }
         $data['feelist'] =$feelist;
         return  view("admin.feecategory.edit",$data);

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
        $feelist = FeeCategory::find($id);
        if(!$feelist){
            return redirect('/admin/courselists');
        }
        $feelist->name =$request->name;
       
        $feelist->save();
        $notification =array(
            'message' => "Fee  Category List Updated Successfully",
            'alert-type' => "success"
        );
        return redirect("/admin/feecategory")->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feelist = FeeCategory::find($id);
        if(!$feelist){
            return redirect('/admin/courselists');
        }
        $feelist->delete();
        $notification =array(
            'message' => "Fee  Category List Delete Successfully",
            'alert-type' => "error"
        );
        return redirect("/admin/feecategory")->with($notification);
    }
}
