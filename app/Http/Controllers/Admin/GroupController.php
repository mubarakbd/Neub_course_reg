<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Interfaces\IGroupBaseRepository;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
     protected $groupRepo;

    public function __construct(IGroupBaseRepository $groupRepo)
    {
       $this->groupRepo = $groupRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['group_list'] = $this->groupRepo->get();
        return view("admin.group.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.group.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        $this->groupRepo->CrateGroup($request);
        $notification =array(
            'message' => "Group Updated Successfully",
            'alert-type' => "success"
        );
    return redirect('/admin/groups')->with($notification);
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
        $groups = $this->groupRepo->find($id);
        if(!$groups){
          return redirect('/admin/groups');
        }
        $data["groups"] = $groups;
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, $id)
    {  
      $this->groupRepo->UpdateGroup($request,$id);
        return redirect('/admin/groups');
        $notification =array(
                'message' => "Group Updated Successfully",
                'alert-type' => "success"
            );
        return redirect('/admin/groups')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->groupRepo->delete($id);
      $notification =array(
            'message' => "Group Delete Successfully",
            'alert-type' => "error"
        );
        return redirect('/admin/groups')->with($notification);
    }
  }
