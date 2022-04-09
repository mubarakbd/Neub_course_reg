@extends("admin.layouts.app")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('page_title')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add Student Result</h3>
        <div class="card-tools">
        </div>
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('resultinfos.store')}}">
            @csrf
             <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Student Reg No</label>
                        <div class="controls">
                            <select id="student_reg" name="student_reg" class="form-control student_reg"
                                class="@error('student_reg') is-invalid @enderror">
                                <option value="" selected="" disabled="">Select Course Name</option>
                                @foreach ($course_reglist as $item )
                                <option value="{{$item->id}}">{{$item->student_reg}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                     @error('student_reg')
                     <p class="text-danger text-capitalize">{{ $message }}</p>
                     @enderror
                 </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Student Name</label>
                            <div class="controls">
                                <select id="student_name" name="student_name" class="form-control student_name"
                                    class="@error('student_name') is-invalid @enderror">
                                    <option value="" selected="" disabled="">Select Course Name</option>
                                    @foreach ($course_reglist as $item )
                                    <option value="{{$item->id}}">{{$item->student_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                     @error('student_name')
                     <p class="text-danger text-capitalize">{{ $message }}</p>
                     @enderror
                 </div>
             </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Semester</label>
                        <div class="controls">
                            <select name="semester_id" class="form-control"
                                class="@error('semester_id') is-invalid @enderror">
                                <option value="" selected="" disabled="">Select Semester</option>
                                @foreach ($semester_list as $item )
                                <option value="{{$item->id}}">{{$item->semester_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('semester_id')
                    <p class="text-danger text-capitalize">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Program</label>
                        <div class="controls">
                            <select name="group_id" class="form-control"
                                class="@error('group_id') is-invalid @enderror">
                                <option value="" selected="" disabled="">Select Group</option>
                                @foreach ($grouplist as $item )
                                <option value="{{$item->id}}">{{$item->program_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('group_id')
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
                                            @foreach ($courselist as $item )
                                            <option value="{{$item->id}}">{{$item->subject_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('subject_id')
                                <p class="text-danger text-capitalize">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="">Course Code</label>
                                    <div class="controls">
                                        <select name="subject_code" id="course_code" class="form-control course_code"
                                            class="@error('subject_code') is-invalid @enderror">
                                            <option value="" selected="" disabled="">Select Course Code</option>
                                            @foreach ($courselist as $item )
                                            <option value="{{$item->id}}">{{$item->subject_code}}</option>
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
                                        <select name="subject_credit" id="course_credit"
                                            class="form-control course_credit">
                                            <option value="" selected="" disabled="">Select Credit</option>
                                            @foreach ($courselist as $item )
                                            <option value="{{$item->id}}">{{$item->subject_credit}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('subject_credit_id')
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
                                            @foreach ($gradlist as $item )
                                            <option value="{{$item->id}}">{{$item->letter_grad}}</option>
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
                                            @foreach ($gradlist as $item )
                                            <option value="{{$item->id}}">{{$item->grad_point}}</option>
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
        <div style="visibility: hidden;">
            <div class="whole_extra_item_add" id="whole_extra_item_add">
                <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                    <div class="form-row appended_row">
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="">Course Name</label>
                                <div class="controls">
                                    <select id="course_name" name="subject_id" class="form-control course_name"
                                        class="@error('subject_id') is-invalid @enderror">
                                        <option value="" selected="" disabled="">Select Course Name</option>
                                        @foreach ($courselist as $item )
                                        <option value="{{$item->id}}">{{$item->subject_id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('subject_id')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="">Course Code</label>
                                <div class="controls">
                                    <select name="subject_code_id" id="course_code" class="form-control course_code"
                                        class="@error('subject_code_id') is-invalid @enderror">
                                        <option value="" selected="" disabled="">Select Course Code</option>
                                        @foreach ($courselist as $item )
                                        <option value="{{$item->id}}">{{$item->subject_code_id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('subject_code_id')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-2">

                            <div class="form-group">
                                <label for="">Course Credit</label>
                                <div class="controls">
                                    <select name="subject_credit_id" id="course_credit"
                                        class="form-control course_credit">
                                        <option value="" selected="" disabled="">Select Credit</option>
                                        @foreach ($courselist as $item )
                                        <option value="{{$item->id}}">{{$item->subject_credit_id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('subject_credit_id')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                            @enderror

                        </div>
                   
                        <div class="col-md-2" style="padding-top: 30px;">
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                        </div>
                            <div class="col-md-4">
                    
                                <div class="form-group">
                                    <label for="">Letter Grad</label>
                                    <div class="controls">
                                        <select name="letter_grad" id="letter_grad"
                                            class="form-control letter_grad">
                                            <option value="" selected="" disabled="">Select Credit</option>
                                            @foreach ($gradlist as $item )
                                            <option value="{{$item->id}}">{{$item->letter_grad}}</option>
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
                                            <option value="" selected="" disabled="" >Select Gard</option>
                                            @foreach ($gradlist as $item )
                                            <option value="{{$item->id}}">{{$item->grad_point}}</option>
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
                </div>
            </div>
        </div>
   

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var counter = 0;
            $(document).on("click", ".addeventmore", function () {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
                $(".course_name").on('change', function () {
                    var val = $(this).find(":selected").val();
                    $(this).closest("div.appended_row").find(".course_code").val(val);
                    $(this).closest("div.appended_row").find(".course_credit").val(val);
                });
                $(" .letter_grad").on('change',function(){
                var val = $(this).find(":selected").val();
                $(this).closest("div.appended_row").find(".grad_point").val(val);
            });
            $(" .student_reg").on('change',function(){
                var val = $(this).find(":selected").val();
                $(this).closest("div.appended_row").find(".student_name").val(val);
            });
            });
            $(document).on("click", '.removeeventmore', function (event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1
            });

            $(".course_name").on('change', function () {
                var val = $(this).find(":selected").val();
                $(this).closest("div.row").find(".course_code").val(val);
                $(this).closest("div.row").find(".course_credit").val(val);
            });
           
            $(".student_reg").on('change', function () {
            var val = $(this).find(":selected").val();
            $(this).closest("div.row").find(".student_name").val(val);

        });
        });

    </script>
    @endsection
