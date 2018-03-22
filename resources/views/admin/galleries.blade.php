<?php
use App\Enumeration\PropertyType;
use DeepCopy\f003\Foo;
?>

@extends('admin.admin_template') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Apartment galleries <small>Here you can manage galleries of each
			apartment</small>
	</h1>

	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a class="active">Apartment galleries</a></li>
	</ol>
</section>
<style>
#accordion .panel-collapse {
	margin: 5px 5px 0 5px;
}

#accordion .box {
	margin-bottom: 1px;
}

#accordion .pull-right {
	float: left !important;
}

#accordion .box-tools {
	position: relative;
	right: 5px;
	top: 0px;
}

#accordion .box-title {
	margin-top: 2px;
}
</style>
<section class="content">

<<<<<<< HEAD
	

=======
>>>>>>> 6e74703ec946d7ca845f510b95f664b3fe83075d



	<div class="row">
		<div class="col-md-12">



			<!-- 			<div class="box box-solid"> -->
			<!-- 				<div class="box-header with-border"> -->
			<!-- 					<h3 class="box-title">Please add facilities to following aparments</h3> -->
			<!-- 				</div> -->
			<!-- /.box-header -->
			<!-- 				<div class="box-body"> -->



			<div class="box-group" id="accordion">
                            @foreach($apartment as $apartments)
				<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
				<div class="panel box box-primary">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion"
								href="#collapseOne"><?php echo $apartments->apartment_name ?></a>
						</h4>
						<button type="button" class="btn btn-block btn-primary"
							style="float: right; width: 100px">
							<i class="fa fa-image"></i> Add photo
						</button>
					</div>


					<div id="collapseOne" class="panel-collapse collapse in">

						<div class="row">
							<div class="col-md-12">


								<div class="box-body">
									<div class="timeline-item">

										<!-- 					<div class="timeline-body"> -->
										<div class="row ">
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100px" height="100px"
														src="http://placehold.it/150x100" alt="..."> <img>

													<!-- /.box-body -->
													<div class="box-footer">
														<a href=""> <i class="fa fa-trash-o"></i>Delete
														</a>&emsp; <a href=""> <i class="fa fa-rotate-left"></i>Rotate
														</a>
													</div>
													<!-- /.box-footer-->
												</div>
											</div>
										 {!! Form::open(["route" => "galleriesStore"]) !!}
                                                                                                <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                {{ Form::file('image[]',['class' => 'control','id' => 'files', 'multiple' => 'multiple']) }}
                                                                                                            </div>
                                                                                                            <div id="selectedFiles"></div> 
                                                                                                </div>
                                                                                    <div class="form-group col-sm-12" style="margin-top: 15px;">
                                                                                        {!! Form::submit('Save', ['class' => 'btn btn-primary uploadImgae']) !!}
                                                                                    </div>
                                                                                  {!! Form::close() !!}
										</div>

										<!-- /.box -->


										<!-- 					</div> -->
									</div>
								</div>


								<!-- /.box-header -->

							</div>
						</div>
                                  
                                
					<div class="field" align="left">
      <h3>Upload your images</h3>
      <input type="file" id="files" name="files[]" multiple />
    </div>
					<br><br>
		
                                        {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}

					</div>
                                             @endforeach 
				</div>
				
			</div>
			<a href="features" class="btn btn-block btn-primary btn-lg"
				style="margin-top: 5px">Continue</a>
		</div>
<<<<<<< HEAD
=======
		<!-- /.box-body -->
		<!-- 			</div> -->
		<!-- /.box -->
		<!-- 		</div> -->
		<!-- 	</div> -->
		<!-- /.col -->

		<!-- 	<div class="row"> -->
		<!-- 		<div class="col-md-12"> -->
		<!-- 			<a href="features" class="btn btn-block btn-primary btn-lg">Continue</a> -->
		<!-- 		</div> -->

		<!-- 	</div> -->
>>>>>>> 6e74703ec946d7ca845f510b95f664b3fe83075d

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="{{ url('/js/displayimages.js')}}"></script>
    <script src="{{ url('/js/selectize.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#subject').selectize({
                maxItems: 5
            });
        });
    $(document).on("click",".uploadImgae",function(e){
       e.preventDefault();
       var uploadImgae=[];
       $(this).closest(".timeline-item").find('input[name^="image"]').each(function(i, sel) {
            var uploadImgae_type = $( this ).val();
            alert(uploadImgae_type);
        });
        
        var token=$("input[name='_token']").val();
       
//        $.ajax({
//            url:'/admin/facilities/create',
//            type:"POST",
//            datatType : 'JSON',
//            data:{"_token":token,"Entertainment_info":Entertainment_info,"Servcie_and_Extras":Servcie_and_Extras,"Food_and_Drink":Food_and_Drink,"View":View,"Accessibility":Accessibility,"id":id},
//        })
//        .done(function(data) {
//            console.log("success");
//            console.log(data);
//            
//        }).
//        fail(function(error) {
//            console.log("error");
//        })
//        .always(function() {
//            console.log("complete");
//        });
    });
</script>
<!-- /.box box box-default-->
@endsection
<<<<<<< HEAD
=======
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
var count =0;
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
        count++;
      for (var i = 0; i < count; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"removeImg\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".removeImg").click(function(){
            $(this).parent(".pip").remove();
          });

          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/

        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
>>>>>>> 6e74703ec946d7ca845f510b95f664b3fe83075d

