@extends("admin.layouts.app")
@section("contents")

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Class Routin</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('classroutine.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Class Day</label>
                            <div class="controls">
                              <input type="datetime-local" name="class_time" class="form-control"  id="" class="@error('class_time') is-invalid @enderror"  style="width:650px">
                            </div>
                        </div>
                        @error('class_time')
                        <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label for="">Class Time</label>
                            <input type="time" name="time" style="width: 650px">
                        
                        </div>
                       
                        <div class="form-group">
                            <label for="">Course Title</label>
                            <div class="controls">
                                <select name="subject_id" id="course_code" class="form-control course_code"
                                    class="@error('subject_id') is-invalid @enderror" style="width: 650px">
                                    <option value="" selected="" disabled="">Select Course</option>
                                    @foreach ($coureslist as $item )
                                    <option value="{{$item->id}}">{{$item->subject_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('subject_id')
                        <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Semester</label>
                        <div class="controls">
                            <select name="semester_id" id="course_code" class="form-control course_code"
                                class="@error('semester_id') is-invalid @enderror" style="width: 650px">
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
                

                    <div class="form-group">
                        <label for="">Teacher Name</label>
                        <div class="controls">
                            <select name="teacher_id" id="course_code" class="form-control course_code"
                                class="@error('teacher_id') is-invalid @enderror" style="width: 650px">
                                <option value="" selected="" disabled="">Select Teacher </option>
                                @foreach ($teacher_list as $item )
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('teacher_id')
                    <p class="text-danger text-capitalize">{{ $message }}</p>
                    @enderror
                
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Add Routin">
                    </div>
                       
                    
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection










