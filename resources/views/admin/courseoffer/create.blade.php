@extends("admin.layouts.app")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('page_title')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add Course Offer</h3>
        <div class="card-tools">
        </div>
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('coursoffers.store')}}">
            @csrf
            
            <div class="row">
                <div class="col-md-12">
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

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="add_item">
                        <div class="form-group">
                            <label for="">Teacher Name</label>
                            <div class="controls">
                                <select name="teacher_id[]" class="form-control"
                                    class="@error('teacher_id') is-invalid @enderror">
                                    <option value="" selected="" disabled="">Select Teacher</option>
                                    @foreach ($teacher_list as $item )
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('teacher_id')
                        <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        <div class="row">
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="">Course Name</label>
                                    <div class="controls">
                                        <select id="course_name" name="subject_id[]" class="form-control course_name"
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

                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="">Course Code</label>
                                    <div class="controls">
                                        <select name="subject_code[]" id="course_code" class="form-control course_code"
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
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="">Course Credit</label>
                                    <div class="controls">
                                        <select name="subject_credit[]" id="course_credit"
                                            class="form-control course_credit">
                                            <option value="" selected="" disabled="">Select Credit</option>
                                            @foreach ($courselist as $item )
                                            <option value="{{$item->id}}">{{$item->subject_credit}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('subject_credit')
                                <p class="text-danger text-capitalize">{{ $message }}</p>
                                @enderror

                            </div>
                            
                            <div class="col-md-1" style="padding-top: 32px;">
                                <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
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
                    
                        <div class="col-md-5">

                            <div class="form-group">
                                <label for="">Course Name</label>
                                <div class="controls">
                                    <select name="subject_id[]" class="form-control course_name">
                                        <option value="" selected="" disabled="">Select Course Name</option>
                                        @foreach ($courselist as $item )
                                        <option value="{{$item->id}}">{{$item->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="">Course Code</label>
                                <div class="controls">
                                    <select name="subject_code[]" class="form-control course_code">
                                        <option value="" selected="" disabled="">Select Course Code</option>
                                        @foreach ($courselist as $item )

                                        <option value="{{$item->id}}">{{$item->subject_code}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="form-group">
                                <label for="">Course Credit</label>
                                <select name="subject_credit[]" id="course_credit" class="form-control course_credit"
                               >
                                    <option value="" selected="" disabled="">Select Credit</option>
                                    @foreach ($courselist as $item )
                                    <option value="{{$item->id}}">{{$item->subject_credit}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-md-2" style="padding-top: 30px;">
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                        </div>

                        <div class="form-group">
                            <label for="">Teacher Name</label>
                            <div class="controls">
                                <select name="teacher_id[]" class="form-control"
                                    class="@error('teacher_id') is-invalid @enderror" style="width: 650px">
                                    <option value="" selected="" disabled="">Select Teacher</option>
                                    @foreach ($teacher_list as $item )
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
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
    @endsection
