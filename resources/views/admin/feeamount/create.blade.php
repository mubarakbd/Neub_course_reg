@extends("admin.layouts.app")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('page_title')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add Fee Amount</h3>
        <div class="card-tools">
        </div>
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('feamouts.store')}}">
            @csrf
        
            <div class="row">
                <div class="col-12">
                    <div class="add_item">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="">Fee Category Item</label>
                                    <div class="controls">
                                        <select name="fee_category_id[]" class="form-control ">
                                            <option value="" selected="" disabled="">Select Course Name</option>
                                            @foreach ($fee_list as $item )
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Amount</label>
                                    <input type="text" name="amount[]" id="" class="form-control" class="@error('name') is-invalid @enderror" placeholder="Enter Amount">
                                    <br>
                                    @error('name')
                                    <p class="text-danger text-capitalize">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                          
                  
                            <div class="col-md-4" style="padding-top: 32px;">
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
                    
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="">Fee Category Item</label>
                                <div class="controls">
                                    <select name="fee_category_id[]" class="form-control ">
                                        <option value="" selected="" disabled="">Select Course Name</option>
                                        @foreach ($fee_list as $item )
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="text" name="amount[]" id="" class="form-control" class="@error('name') is-invalid @enderror" placeholder="Enter Amount">
                                <br>
                                @error('name')
                                <p class="text-danger text-capitalize">{{ $message }}</p>
                            @enderror
                            </div>
                        </div>

                   
                        <div class="col-md-4" style="padding-top: 30px;">
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
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
                $(document).on("click", '.removeeventmore', function (event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1
            });
          
            });
    

        });

    </script>
    @endsection
