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

													<img width="100%" height="100%"
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
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100%" height="100%"
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
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100%" height="100%"
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
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100%" height="100%"
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
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100%" height="100%"
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
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100%" height="100%"
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
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100%" height="100%"
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
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100%" height="100%"
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
											<div class="col-md-2">
												<div class="box box-solid">

													<img width="100%" height="100%"
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


										</div>

										<!-- /.box -->


										<!-- 					</div> -->
									</div>
								</div>


								<!-- /.box-header -->

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
						<button type="button" class="btn btn-block btn-primary"
							style="float: right; width: 100px">
							<i class="fa fa-image"></i> Add photo
						</button>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="box-body">Anim pariatur cliche reprehenderit, enim
							eiusmod high life accusamus terry richardson ad squid. 3 wolf
							moon officia aute, non cupidatat skateboard dolor brunch. Food
							truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
							sunt aliqua put a bird on it squid single-origin coffee nulla
							assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
							beer labore wes anderson cred nesciunt sapiente ea proident. Ad
							vegan excepteur butcher vice lomo. Leggings occaecat craft beer
							farm-to-table, raw denim aesthetic synth nesciunt you probably
							haven't heard of them accusamus labore sustainable VHS.</div>

					</div>
				</div>
				<div class="panel box box-success">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion"
								href="#collapseThree"> Apartment with pool view </a>
						</h4>
						<button type="button" class="btn btn-block btn-primary"
							style="float: right; width: 100px">
							<i class="fa fa-image"></i> Add photo
						</button>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="box-body">Anim pariatur cliche reprehenderit, enim
							eiusmod high life accusamus terry richardson ad squid. 3 wolf
							moon officia aute, non cupidatat skateboard dolor brunch. Food
							truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
							sunt aliqua put a bird on it squid single-origin coffee nulla
							assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
							beer labore wes anderson cred nesciunt sapiente ea proident. Ad
							vegan excepteur butcher vice lomo. Leggings occaecat craft beer
							farm-to-table, raw denim aesthetic synth nesciunt you probably
							haven't heard of them accusamus labore sustainable VHS.</div>
					</div>
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
		{!! Form::close() !!}

</section>
<!-- /.box box box-default-->
@endsection
