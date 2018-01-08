<?php
    use App\Enumeration\PropertyType;
    use App\Enumeration\starRating;
use DeepCopy\f003\Foo;
?>

@extends('admin.admin_template') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		@lang('property.general_info') <small>Here you can input basic information of your apartment</small>
	</h1>
	
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a class="active">@lang('property.general_info')</a></li>
	</ol>
</section>
<section class="content">

{!! Form::open(['url' => 'foo/bar']) !!}
  


<div class="row">
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">@lang('homepage.general')</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool"
						data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>

				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Property name<span style="color: red"> *</span></label> <input
								type="text" class="form-control" id="propertyName"
								placeholder="Enter property name">
						</div>
						<!-- /.form-group -->
					</div>
					<!-- /.col -->
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							 <?php														
							 $translatedItems = PropertyType::toArray();
							 echo Form::label('propertyType', __('property.propertyType'));
							 echo Form::select('size', $translatedItems, null, ['class' => 'form-control select2']); 
							 ?>							
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
                                                        <?php														
							 $translatedItems12 =starRating::toArray();
							 echo Form::label('star_rating', __('star.star_rating'));
							 echo Form::select('size', $translatedItems12, null, [ 'multiple'=>'multiple','class' => 'form-control select2']); 
							 ?>							
<!--							<label>Star rating</label> <select class="form-control select2">
								<option style="" selected="selected">N/A</option>
								<option style="" selected="selected">1 ✯</option>
								<option class="fa-star">2 ✯ ✯</option>
								<option class="fa-star">3 ✯ ✯ ✯</option>
								<option class="fa-star">4 ✯ ✯ ✯ ✯</option>
								<option class="fa-star">5 ✯ ✯ ✯ ✯ ✯</option>
							</select>-->
						</div>
					</div>

					<!-- 					<div class="col-md-3"> -->
					<!-- 						<div class="form-group"> -->
					<!-- 							<label>How many apartments do you have?<span style="color: red">-->
					<!-- 									*</span></label> <input type="number" class="form-control" -->
					<!-- 								id="numberApartment" placeholder="Number of apartment"> -->
					<!-- 						</div> -->
					<!-- 					</div> -->

				</div>
				<!-- /.row -->

				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-info alert-dismissible">
							<h4>
								<i class="icon fa fa-info"></i> Apartment
							</h4>
							Info alert preview. This alert is dismissable.Info alert preview. This alert is dismissable.
							Info alert preview. This alert is dismissable.Info alert preview. This alert is dismissable.
							
						</div>



					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Property website</label> <input type="text"
								class="form-control" id="website"
								placeholder="Enter property website">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Address</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool"
						data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>

				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">


				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Department's owner or who is responsible for it<span
								style="color: red"> *</span></label> <input type="text"
								class="form-control" id="contactName"
								placeholder="Enter contact name">
						</div>
					</div>

				</div>
				<!-- /.row -->

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Address<span style="color: red"> *</span></label> <input
								type="text" class="form-control" id="address"
								placeholder="Enter address">
						</div>

					</div>

				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Address line 2</label> <input type="text"
								class="form-control" id="addresssLine2" placeholder="(optional)">
						</div>

					</div>

				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="form-group">

							<label>Country</label> <input type="text" class="form-control"
								id="country">
						</div>

					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>City</label> <input type="text" class="form-control"
								id="city">

						</div>

					</div>

				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Phone number<span style="color: red"> *</span></label>
							<div class="input-group margin">
								<div class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle"
										data-toggle="dropdown">
										Action <span class="fa fa-caret-down"></span>
									</button>
									<ul class="dropdown-menu">
										<li class=""><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /btn-group -->
								<input type="text" class="form-control" id="phoneNumber">
							</div>
						</div>

					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Zipcode</label> <input type="text" class="form-control"
								id="zipcode">

						</div>

					</div>

				</div>



			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-md-12">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">
					<b>Photo Galaries of your property</b>
				</h3>
				<div class="row ">
					<div class="col-md-10">
						<span style="color: green">Tram nghe khong bang mat thay, vi vay
							hay su dung hinh anh de cho khach hang biet ve can ho cua ban dep
							toi muc nao, hien dai ra sao va dac biet la nhung hinh anh cua
							nhung hoat dong, nhung su kien lien quan den khach hang da dien
							ra tai can ho cua ban</span>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-block btn-primary"
							style="float: right; width: 100px">
							<i class="fa fa-image"></i> Add photo
						</button>
					</div>
				</div>



			</div>

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
		</div>

		<!-- /.box-header -->

	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<a href="features" class="btn btn-block btn-primary btn-lg">Save
			and continue</a>
	</div>

</div>
{!! Form::close() !!}
</section>
<!-- /.box box box-default-->
@endsection