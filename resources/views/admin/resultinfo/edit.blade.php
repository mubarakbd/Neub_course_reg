@extends("admin.layouts.app")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('page_title')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Student Result</h3>
        <div class="card-tools">
        </div>
    </div>
    <div class="card-body">

        <form method="POST"action="{{ url("/admin/resultinfos/$results->id") }}">
            @csrf
            @method("PUT")
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <label for="">Student Reg</label>
                         <div class="controls">
                             <input type="number" name="student_reg"  value="{{$results->student_reg}}" id="" class="form-control"  class="@error('student_reg') is-invalid @enderror" placeholder="Enter Reg No" >
                         </div>
                     </div>
                   
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Student Reg</label>
                        <div class="controls">
                            <input type="text" name="student_name"  value="{{$results->student_name}}" id="" class="form-control"  class="@error('student_name') is-invalid @enderror" placeholder="Enter Reg No" >
                        </div>
                    </div>
                  
                </div>
             </div>
            <div class="row">
                <div class="col-md-6">
                 
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <div class="controls">
                            <select id="" name="semester_id" class="form-control "
                                class="@error('semester_id') is-invalid @enderror">
                                <option value="" selected="" disabled="">Select Semester</option>
                                @foreach ($semester_list as $key => $item )
                                <option value="{{$key}}" {{old('semester_name')==$key?'selected':''}}>{{$item->semester_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                 
                    @error('semester_id')
                    <p class="text-danger text-capitalize">{{ $message }}</p>
                    @enderror
                </div>
            </div>
          
            <div class="row">
                <div class="col-12">
                    <div class="add_item">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="">Course Name</label>
                                    <div class="controls">
                                        <select id="course_name" name="subject_id" class="form-control course_name"
                                            class="@error('subject_id') is-invalid @enderror">
                                            <option value="" selected="" disabled="">Select Course Name</option>
                                            @foreach ($courselist as $key => $item )
                                            <option value="{{$key}}" {{old('subject_id')==$key?'selected':''}}>{{$item->subject_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                             

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="">Course Code</label>
                                    <div class="controls">
                                        <select name="subject_code_id" id="course_code" class="form-control course_code"
                                            class="@error('subject_code_id') is-invalid @enderror">
                                            <option value="" selected="" disabled="">Select Course Code</option>
                                            @foreach ($courselist as $key => $item )
                                            <option value="{{$key}}" {{old('subject_code_id')==$key?'selected':''}}>{{$item->subject_code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('subject_code')
                                <p class="text-danger text-capitalize">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="">Course Credit</label>
                                    <div class="controls">
                                        <select name="subject_credit_id" id="course_credit"
                                            class="form-control course_credit">
                                            <option value="" selected="" disabled="">Select Credit</option>
                                            @foreach ($courselist as $key => $item )
                                            <option value="{{$key}}" {{old('subject_credit')==$key?'selected':''}}>{{$item->subject_credit_id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('subject_credit')
                                <p class="text-danger text-capitalize">{{ $message }}</p>
                                @enderror

                            </div>
                       

                        </div>
                        <div class="row">
                         
                            <div class="col-md-4">
                    
                                <div class="form-group">
                                    <label for="">Letter Grad</label>
                                    <div class="controls">
                                        <select name="letter_grad" id="letter_grad"
                                            class="form-control letter_grad">
                                            <option value="" selected="" disabled="">Select Credit</option>
                                            @foreach ($gradlist as $key => $item )
                                            <option value="{{$key}}" {{old('grad_point')==$key?'selected':''}}>{{$item->letter_grad}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('letter_grad')
                                <p class="text-danger text-capitalize">{{ $message }}</p>
                                @enderror
                    
                            </div>
                            <div class="col-md-4">
                    
                                <div class="form-group">
                                    <label for="">Grad Point</label>
                                    <div class="controls">
                                        <select name="grad_point" id="grad_point"
                                            class="form-control grad_point">
                                            <option value="" selected="" disabled="">Select Gard</option>
                                            @foreach ($gradlist as $key => $item )
                                            <option value="{{$key}}" {{old('grad_point')==$key?'selected':''}}>{{$item->grad_point}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                 
                                </div>
                                @error('grad_point')
                                <p class="text-danger text-capitalize">{{ $message }}</p>
                                @enderror                   
                            </div>                      
                        </div>
                
                </div>
            
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>

        </form>


 
    @endsection
 