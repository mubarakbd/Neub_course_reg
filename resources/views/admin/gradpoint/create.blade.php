@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Add GradPoint History</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('gradpoints.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Letter Gard</label>
                            <input type="text" name="letter_grad" id="" class="form-control" class="@error('letter_grad') is-invalid @enderror" placeholder="Enter Letter Grad" style="width: 650px">
                            <br>
                            @error('letter_grad')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Grad Point</label>
                            <input type="text" name="grad_point" id="" class="form-control" class="@error('grad_point') is-invalid @enderror" placeholder="Enter Group Name" style="width: 650px">
                            <br>
                            @error('grad_point')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                      
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Add Gradpoint">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection