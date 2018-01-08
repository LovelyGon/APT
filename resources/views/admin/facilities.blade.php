<?php
use App\Enumeration\PropertyType;
use DeepCopy\f003\Foo;
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
						<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
						<div class="panel box box-primary">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion"
										href="#collapseOne">Two bed room apartment</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="box box-default collapsed-box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title">Bath room</h3>

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
									<!-- /.box-body -->

								</div>
								<div class="box box-default collapsed-box box-solid"
									>
									<div class="box-header with-border">
										<h3 class="box-title">Servcie and Extras</h3>

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
									<!-- /.box-body -->

								</div>
								<div class="box box-default collapsed-box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title">Food and Drink</h3>

										<div class="box-tools pull-right" style="float: left">
											<button type="button" class="btn btn-box-tool"
												data-widget="collapse" style="float: left">
												<i class="fa fa-plus" style="float: left"></i>
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
									<!-- /.box-body -->

								</div>



								
									<div class="row">
										<div class="col-md-2" style="float:left;margin:5px 0px 5px 0px">
											<a href="" class="btn btn-block btn-primary btn-lg">Save</a>
										</div>

									</div>

								

							</div>
						</div>
						<div class="panel box box-danger">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion"
										href="#collapseTwo">One bed room apartment</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="box-body">Anim pariatur cliche reprehenderit, enim
									eiusmod high life accusamus terry richardson ad squid. 3 wolf
									moon officia aute, non cupidatat skateboard dolor brunch. Food
									truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
									tempor, sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
									craft beer labore wes anderson cred nesciunt sapiente ea
									proident. Ad vegan excepteur butcher vice lomo. Leggings
									occaecat craft beer farm-to-table, raw denim aesthetic synth
									nesciunt you probably haven't heard of them accusamus labore
									sustainable VHS.</div>

							</div>
						</div>
						<div class="panel box box-success">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion"
										href="#collapseThree"> Apartment with pool view </a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="box-body">Anim pariatur cliche reprehenderit, enim
									eiusmod high life accusamus terry richardson ad squid. 3 wolf
									moon officia aute, non cupidatat skateboard dolor brunch. Food
									truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
									tempor, sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
									craft beer labore wes anderson cred nesciunt sapiente ea
									proident. Ad vegan excepteur butcher vice lomo. Leggings
									occaecat craft beer farm-to-table, raw denim aesthetic synth
									nesciunt you probably haven't heard of them accusamus labore
									sustainable VHS.</div>
							</div>
						</div>
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
