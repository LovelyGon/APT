<?php
use App\Enumeration\PropertyType;
 use App\Enumeration\FoodType;
use DeepCopy\f003\Foo;
 use App\Enumeration\ServcieType;
  use App\Enumeration\FamilyType;
  use App\Enumeration\ViewType;
   use App\Enumeration\AccessibilityType;
?>

@extends('admin.admin_template') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Apartment facilities <small>Here you can input basic information of
			your apartment</small>
	</h1>

	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a class="active">Apartment facilities</a></li>
	</ol>
</section>
<style>
    #accordion .panel-collapse{
        margin:5px 5px 0 5px;
    }
    #accordion .box{
        margin-bottom:1px;
    }
    
    #accordion .pull-right{
        float:left !important;
    }
    
    #accordion .box-tools {
        position: relative;
        right: 5px;
        top: 0px;   
    }
    
    #accordion .box-title{
        margin-top:2px;
    }
</style>
<section class="content">

	{!! Form::open(['url' => 'apartment/facilities/save']) !!}

     
    

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
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="box box-default collapsed-box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><?php echo Form::label('Entertainment_info', __('facilities.Entertainment_info'));?> </h3>

										<div class="box-tools pull-right" style="float: left">
											<button type="button" class="btn btn-box-tool"
												data-widget="collapse" style="float: left">
												<i class="fa fa-plus" style="float: left"></i>
											</button>
										</div>
										<!-- /.box-tools -->
									</div>
									<!-- /.box-header -->
								
                                                                                 <?php														
                                                                                $Entertainment_and_Family= FamilyType ::toArray();
                                                                                foreach ($Entertainment_and_Family as $key =>$translatedItems)
                                                                                 {
                                                                           
                                                                                     echo "<div class='box-body'><ul class='todo-list'><li>".Form::checkbox('Entertainment_and_Family[]', $key)."<span class='text'>" .$translatedItems."<br></span></li></ul></div>"; 
                                                                                    
                                                                                       
                                                                                 }
                            ?>
						
									<!-- /.box-body -->

								</div>
								<div class="box box-default collapsed-box box-solid"
									>
									<div class="box-header with-border">
										<h3 class="box-title"><?php echo Form::label('Servcie_info', __('facilities.Servcie_info'));?> </h3>

										<div class="box-tools pull-right">
											<button type="button" class="btn btn-box-tool"
												data-widget="collapse">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<!-- /.box-tools -->
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<ul class="todo-list">
											<li>
												<!-- checkbox --> <input type="checkbox" value=""> <!-- todo text -->
												<span class="text">Design a nice theme</span> <!-- Emphasis label -->

											</li>
											<li><input type="checkbox" value=""> <span class="text">Make
													the theme responsive</span></li>
											<li><input type="checkbox" value=""> <span class="text">Let
													theme shine like a star</span></li>
											<li><input type="checkbox" value=""> <span class="text">Let
													theme shine like a star</span></li>
											<li><input type="checkbox" value=""> <span class="text">Check
													your messages and notifications</span></li>
											<li><input type="checkbox" value=""> <span class="text">Let
													theme shine like a star</span></li>
										</ul>
									</div>
                                                                         <?php														
                                                                                $Servcie_and_Extras= ServcieType ::toArray();
                                                                                foreach ($Servcie_and_Extras as $key =>$translatedItems)
                                                                                 {
                                                                           
                                                                                     echo "<div class='box-body'><ul class='todo-list'><li>".Form::checkbox('Servcie_and_Extras[]', $key)."<span class='text'>" .$translatedItems."<br></span></li></ul></div>"; 
                                                                                    
                                                                                       
                                                                                 }
                            ?>
									<!-- /.box-body -->

								</div>
								<div class="box box-default collapsed-box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><?php echo Form::label('Food_info', __('facilities.Food_info'));?> </h3>

										<div class="box-tools pull-right" style="float: left">
											<button type="button" class="btn btn-box-tool"
												data-widget="collapse" style="float: left">
												<i class="fa fa-plus" style="float: left"></i>
											</button>
										</div>
										<!-- /.box-tools -->
									</div>
									<!-- /.box-header -->
								
                                                                                 <?php														
                                                                                $Food_and_Drink= FoodType ::toArray();
                                                                                foreach ($Food_and_Drink as $key =>$translatedItems)
                                                                                 {
                                                                           
                                                                                     echo "<div class='box-body'><ul class='todo-list'><li>".Form::checkbox('Food_and_Drink[]', $key)."<span class='text'>" .$translatedItems."<br></span></li></ul></div>"; 
                                                                                    
                                                                                       
                                                                                 }
                            ?>
						
									<!-- /.box-body -->

								</div>
<div class="box box-default collapsed-box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><?php echo Form::label('View_info', __('facilities.View_info'));?> </h3>

										<div class="box-tools pull-right" style="float: left">
											<button type="button" class="btn btn-box-tool"
												data-widget="collapse" style="float: left">
												<i class="fa fa-plus" style="float: left"></i>
											</button>
										</div>
										<!-- /.box-tools -->
									</div>
									<!-- /.box-header -->
								
                                                                                 <?php														
                                                                                $View= ViewType ::toArray();
                                                                                foreach ($View as $key =>$translatedItems)
                                                                                 {
                                                                           
                                                                                     echo "<div class='box-body'><ul class='todo-list'><li>".Form::checkbox('View[]', $key)."<span class='text'>" .$translatedItems."<br></span></li></ul></div>"; 
                                                                                    
                                                                                       
                                                                                 }
                            ?>
						
									<!-- /.box-body -->

								</div>
                                                            <div class="box box-default collapsed-box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><?php echo Form::label('Accessibility_info', __('facilities.Accessibility_info'));?> </h3>

										<div class="box-tools pull-right" style="float: left">
											<button type="button" class="btn btn-box-tool"
												data-widget="collapse" style="float: left">
												<i class="fa fa-plus" style="float: left"></i>
											</button>
										</div>
										<!-- /.box-tools -->
									</div>
									<!-- /.box-header -->
								
                                                                                 <?php														
                                                                                $Accessibility= AccessibilityType ::toArray();
                                                                                foreach ($Accessibility as $key =>$translatedItems)
                                                                                 {
                                                                           
                                                                                     echo "<div class='box-body'><ul class='todo-list'><li>".Form::checkbox('Accessibility[]', $key)."<span class='text'>" .$translatedItems."<br></span></li></ul></div>"; 
                                                                                    
                                                                                       
                                                                                 }
                            ?>
						
									<!-- /.box-body -->

								</div>


								
									<div class="row">
										<div class="col-md-2" style="float:left;margin:5px 0px 5px 0px">
											<a href="" class="btn btn-block btn-primary btn-lg">Save</a>
										</div>

									</div>

								

							</div>
                                                     
						</div>
                                       @endforeach         
					</div>
					<a href="features" class="btn btn-block btn-primary btn-lg" style="margin-top:5px">Continue</a>
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
       
	{!! Form::close() !!}
        
</section>
<!-- /.box box box-default-->
@endsection
