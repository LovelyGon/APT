<?php
use App\Enumeration\PropertyType;
use DeepCopy\f003\Foo;
use App\galleries;
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
		/* styles unrelated to zoom */
		* { border:0; margin:0; padding:0; }
		p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;}

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(grab.cur), default; }
		#ex2 img:active { cursor: url(grabbed.cur), default; }
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
                            {!! Form::open(['files' => 'true','id' => 'imageUploadForm']) !!}
                            <?php 
                                $gallerie = DB::table('galleries')->where('apartment_id', $apartments->id)->get();
                                
                            ?>
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
                                         <input type="hidden" name="galleries_id" class="galleries_id" value="<?php echo $apartments->id; ?>"/>
                                        
					<div id="collapseOne" class="panel-collapse collapse in">

						<div class="row">
							<div class="col-md-12">


								<div class="box-body">
									<div class="timeline-item">

										<!-- 					<div class="timeline-body"> -->
										<div class="row ">
											<div class="col-md-12">
                                                                                             @foreach($gallerie as $galleries)
                                                                                               {!! Form::open(['route' => 'galleriesDelete']) !!}
                                                                                            <div class="col-md-2">
                                                                                               
												<div class="box box-solid galleries_images">
                                                                                                        <span class='zoom' id='ex1'>
                                                                                                            <img id="zoom_01" width="200px" height="150px"
                                                                                                                    src="/upload_images/{!! $galleries->image_name !!}" alt="..." data-zoom-image="/upload_images/{!! $galleries->image_name !!}"> <img>
                                                                                                        </span>
<input type="hidden" name="images_id" class="images_id" value="<?php echo $galleries->id; ?>"/>
													<!-- /.box-body -->
													<div class="box-footer">
														<a href="" class="deleteImages"> <i class="fa fa-trash-o"></i>Delete
														</a>&emsp; <a href="" onClick="rotateImage(this.value);"> <i class="fa fa-rotate-left"  ></i>Rotate
														</a>
													</div>
                                                                                                
													<!-- /.box-footer-->
												</div>
                                                                                               
                                                                                            </div>
                                                                                              {!! Form::close() !!}
                                                                                              @endforeach
											</div>
                                                                       
                                                                                    <div class="col-md-12">
                                                                                         <div class="col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        {{ Form::file('image[]',['class' => 'control','id' => 'files', 'multiple' => 'multiple']) }}
                                                                                                                    </div>
                                                                                                                    <div id="selectedFiles"></div> 
                                                                                                        </div>

                                                                                            <div class="form-group col-sm-12" style="margin-top: 15px;">
                                                                                                {!! Form::submit('Save', ['class' => 'btn btn-primary uploadImgae']) !!}
                                                                                            </div>
                                                                                        </div>    
                                                                                    </div>

										<!-- /.box -->


										<!-- 					</div> -->
									</div>
								</div>


								<!-- /.box-header -->

							</div>
						</div>
                                  
                                   
                                  
          
					<br><br>
		
                          
  {!! Form::close() !!}
					</div>
                                             @endforeach 
				</div>
				
			</div>
			<a href="features" class="btn btn-block btn-primary btn-lg"
				style="margin-top: 5px">Continue</a>
		</div>

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

</section>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
  <script src="{{ url('/js/displayimages.js')}}"></script>
    <script src="{{ url('/js/selectize.min.js') }}"></script>
    <script src="{{ url('/js/jquery.zoom.js') }}"></script>
    <script src="{{ url('/js/jquery.elevatezoom.js') }}" type="text/javascript"></script>
    	
    <script>
        $("#zoom_01").elevateZoom({easing : true});
        $(document).ready(function() {
            $('#subject').selectize({
                maxItems: 5,
                imgwidth: 152,
                imgheight: 100,
            });
        });
        $(document).on("click",".deleteImages",function(e){
        var images_id = $(this).closest(".galleries_images").find(".images_id").val();
        $(this).closest(".galleries_images").hide();
        var token=$("input[name='_token']").val();
            $.ajax({
                url:'/admin/galleries/delete',
                type:"POST",
                datatType : 'JSON',
                data:{"_token":token,"images_id":images_id},
            })
            .done(function(data) {
                console.log("success");
                console.log(data);
                
            }).
            fail(function(error) {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
        });
   


</script>
<!-- /.box box box-default-->
@endsection



