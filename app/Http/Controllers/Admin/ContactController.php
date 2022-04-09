<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index (){
        return view("site.application.index");
    }

    public function Application(ContactRequest $request){
         
        $application = new Contact();
        $application->name =$request->name;
        $application->email=$request->email;
        $application->subject =$request->subject;
        $application->message =$request->message;
        $application ->save();
        return redirect("/application")->with('success',' Application message Send Successfully');
    }

    public function ApplicationDetalis(){
        $data['application_list'] = Contact::get();
        return view("admin.aplication.index",$data);
    }
}
