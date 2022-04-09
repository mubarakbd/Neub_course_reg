@extends("admin.layouts.app")
@section("contents")

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Exam Routin</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ url("/admin/exams/$exam->id") }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <div class="form-group">
                                <label for="">Semester</label>
                                <div class="controls">
                                    <select id="course_name" name="semester_id" class="form-control course_name"
                                               style="width: 650px">
                                                <option value="" selected="" disabled="">Select Course Name</option>
                                                @foreach ($semester_list as $key => $item )
                                                <option value="{{$key}}" {{old('semester_id')==$key?'selected':''}}>{{$item->semester_name}}</option>
                                                @endforeach
                                            </select>
                                </div>
                            </div>
                        </div>
                        @error('semester_id')
                        <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="">Course Code</label>
                            <div class="controls">
                                <select id="course_name" name="subject_id" class="form-control course_name"
                                           style="width: 650px">
                                            <option value="" selected="" disabled="">Select Course Name</option>
                                            @foreach ($courselist as $key => $item )
                                            <option value="{{$key}}" {{old('subject_id')==$key?'selected':''}}>{{$item->subject_name}}</option>
                                            @endforeach
                                        </select>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="">Exam Date</label>
                            <input type="datetime-local" value="{{$exam->exam_date}}" name="exam_date" id="" class="form-control" class="@error('exam_date') is-invalid @enderror" placeholder="Enter Letter Grad" style="width: 650px">
                            <br>
                      
                        </div>
                        <div class="form-group">
                            <label for="">Exam Date</label>
                            <input type="time" name="time" id="" class="form-control"  value="{{$exam->time}}" style="width: 650px">
                            <br>
                            @error('exam_date')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                      <div class="form-group">
                          <label for="">Room Number</label>
                          <input type="text" name="room" value="{{$exam->room}}" class="form-control" id="" placeholder="Enter Room Number">
                      </div>
                      
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Upadte">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection










