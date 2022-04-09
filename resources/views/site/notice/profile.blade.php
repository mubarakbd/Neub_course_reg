
@extends("site.layouts.app");
@section("contents")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
       <h2>YOUR COURSE REGISTRATION  LIST </h2>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
  
    <div class="py-2 px-2">
    <div class="container" data-aos="fade-up">
       
        
            
        
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