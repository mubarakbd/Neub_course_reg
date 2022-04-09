@extends("site.layouts.app");
@section("contents")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
   
       <h1>North East University Bangladesh Sylhet</h1>
       <h2>Course Registration Form</h2>
        <h3 class="text-danger font-bold">Spring 2022</h3>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    
    <div class="py-2 px-2">
    <div class="container bg-dark text-white" data-aos="fade-up">
        
            
            <form method="POST" action="{{ route('couresreg.store')}}">
                @csrf
              
                 <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="" class="">Student Reg</label>
                             <div class="controls">
                                 <input type="number" name="student_reg" id="" class="form-control"  class="@error('student_reg') is-invalid @enderror" placeholder="Enter Reg No" >
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
                                 <input type="text" name="student_name" id="" class="form-control"  class="@error('student_name') is-invalid @enderror" placeholder="Enter Name" >
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
                                            <select id="course_name" name="course_id[]" class="form-control course_name"
                                                class="@error('course_id') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Name</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}"> {{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_id')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
    
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Code</label>
                                        <div class="controls">
                                            <select name="course_code[]" id="course_code" class="form-control course_code"
                                                class="@error('course_code') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Code</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_code')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Credit</label>
                                        <div class="controls">
                                            <select name="course_credit[]" id="course_credit"
                                                class="form-control course_credit">
                                                <option value="" selected="" disabled="">Select Credit</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_credit')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
                                  
    
                            </div>
                            <div class="row">
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <div class="controls">
                                            <select id="course_name" name="course_id[]" class="form-control course_name"
                                                class="@error('course_id') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Name</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}"> {{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_id')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
    
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Code</label>
                                        <div class="controls">
                                            <select name="course_code[]" id="course_code" class="form-control course_code"
                                                class="@error('course_code') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Code</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_code')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Credit</label>
                                        <div class="controls">
                                            <select name="course_credit[]" id="course_credit"
                                                class="form-control course_credit">
                                                <option value="" selected="" disabled="">Select Credit</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_credit')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
                                  
    
                            </div>  <div class="row">
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <div class="controls">
                                            <select id="course_name" name="course_id[]" class="form-control course_name"
                                                class="@error('course_id') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Name</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}"> {{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_id')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
    
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Code</label>
                                        <div class="controls">
                                            <select name="course_code[]" id="course_code" class="form-control course_code"
                                                class="@error('course_code') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Code</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_code')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Credit</label>
                                        <div class="controls">
                                            <select name="course_credit[]" id="course_credit"
                                                class="form-control course_credit">
                                                <option value="" selected="" disabled="">Select Credit</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_credit')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
                                  
    
                            </div>  <div class="row">
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <div class="controls">
                                            <select id="course_name" name="course_id[]" class="form-control course_name"
                                                class="@error('course_id') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Name</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}"> {{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_id')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
    
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Code</label>
                                        <div class="controls">
                                            <select name="course_code[]" id="course_code" class="form-control course_code"
                                                class="@error('course_code') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Code</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_code')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Credit</label>
                                        <div class="controls">
                                            <select name="course_credit[]" id="course_credit"
                                                class="form-control course_credit">
                                                <option value="" selected="" disabled="">Select Credit</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_credit')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
                                  
    
                            </div>  <div class="row">
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <div class="controls">
                                            <select id="course_name" name="course_id[]" class="form-control course_name"
                                                class="@error('course_id') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Name</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}"> {{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_id')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
    
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Code</label>
                                        <div class="controls">
                                            <select name="course_code[]" id="course_code" class="form-control course_code"
                                                class="@error('course_code') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Code</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_code')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Credit</label>
                                        <div class="controls">
                                            <select name="course_credit[]" id="course_credit"
                                                class="form-control course_credit">
                                                <option value="" selected="" disabled="">Select Credit</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_credit')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
                                  
    
                            </div>
             
                            <div class="row">
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <div class="controls">
                                            <select id="course_name" name="course_id[]" class="form-control course_name"
                                                class="@error('course_id') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Name</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}"> {{ $item->coursedetalis ? $item->coursedetalis->subject_name : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_id')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
    
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Code</label>
                                        <div class="controls">
                                            <select name="course_code[]" id="course_code" class="form-control course_code"
                                                class="@error('course_code') is-invalid @enderror">
                                                <option value="" selected="" disabled="">Select Course Code</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_code : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_code')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="">Course Credit</label>
                                        <div class="controls">
                                            <select name="course_credit[]" id="course_credit"
                                                class="form-control course_credit">
                                                <option value="" selected="" disabled="">Select Credit</option>
                                                @foreach ($courseoffer as $item )
                                                <option value="{{$item->id}}">{{ $item->coursedetalis ? $item->coursedetalis->subject_credit : "" }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('course_credit')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                    @enderror
    
                                </div>
                                  
    
                            </div>
              
                            <br>
                           
             
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
    
            </form>
    </div>
        </div>
        </div>

      </div>

    </div>
</div>
  </section><!-- End Contact Section -->


 



















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
    
            });
    
        </script>

    

  </div>

 
@endsection