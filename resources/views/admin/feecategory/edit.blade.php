@extends("admin.layouts.app")
@section("contents")
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Add Fee Category Item</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ url("/admin/feecategory/$feelist->id") }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="">Fee Categiry</label>
                            <input type="text" name="name" id="" class="form-control" value="{{$feelist->name}}"   style="width: 650px">
                            <br>
                          
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Update Fee Category">
                        </div>
                    </form>
                 </div> 
               </div>
           </div>
           
        </div>
    </div>
</div>

@endsection