@extends("admin.layouts.app")
@section("contents")

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Exam Routin</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('exams.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Semester</label>
                            <div class="controls">
                                <select name="semester_id" class="form-control"
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
                            <label for="">Course Code</label>
                            <div class="controls">
                                <select name="subject_id" id="course_code" class="form-control course_code"
                                    class="@error('subject_id') is-invalid @enderror" style="width: 650px">
                                    <option value="" selected="" disabled="">Select Course</option>
                                    @foreach ($courselist as $item )
                                    <option value="{{$item->id}}">{{$item->subject_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('subject_code_id')
                        <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="">Exam Date</label>
                            <input type="datetime-local" name="exam_date" id="" class="form-control" class="@error('exam_date') is-invalid @enderror"  style="width: 650px">
                            <br>
                            @error('exam_date')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Exam Date</label>
                            <input type="time" name="time" id="" class="form-control" class="@error('exam_date') is-invalid @enderror" " style="width: 650px">
                            <br>
                            @error('exam_date')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                      <div class="form-group">
                          <label for="">Room Number</label>
                          <input type="text" name="room" class="form-control" id="" placeholder="Enter Room Number">
                      </div>
                      
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










