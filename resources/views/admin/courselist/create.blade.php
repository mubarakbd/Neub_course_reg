@extends("admin.layouts.app")
@section("contents")
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="card state_hover shadow">
               <div class="card-header text-bolad text-capitalize text-black-50">Add Courselit History</div>
               <div class="card-body">
                <div class="col-md-6">
                    <form action="{{ route('courselists.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Course Name</label>
                            <input type="text" name="subject_name" id="" class="form-control" class="@error('subject_name') is-invalid @enderror" placeholder="Enter course Name" style="width: 650px">
                            <br>
                            @error('subject_name')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Course Code</label>
                            <input type="text" name="subject_code" id="" class="form-control" class="@error('subject_code') is-invalid @enderror" placeholder="Enter Group Name" style="width: 650px">
                            <br>
                            @error('subject_code')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Course Credit</label>
                            <input type="text" name="subject_credit" id="" class="form-control" class="@error('subject_credit') is-invalid @enderror" placeholder="Enter Group Name" style="width: 650px">
                            <br>
                            @error('subject_credit')
                            <p class="text-danger text-capitalize">{{ $message }}</p>
                        @enderror
                        </div>
            
                      
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Add Course">
                        
                        </div>
                        
                    </form>
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
            $(" .letter_grad").on('change',function(){
                var val = $(this).find(":selected").val();
                $(this).closest("div.appended_row").find(".grad_point").val(val);
            });
          
        });

        $(document).on("click", '.removeeventmore', function (event) {
            $(this).closest(".delete_whole_extra_item_add").remove();
            counter -= 1
        });
     
        
      
        $(".letter_grad").on('change', function () {
            var val = $(this).find(":selected").val();
            $(this).closest("div.row").find(".grad_point").val(val);
        
        });
      

    });

</script>
@endsection