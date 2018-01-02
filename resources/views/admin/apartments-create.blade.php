@extends('admin.admin_template') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Add apartments <small>Please add more apartment for your property</small>
	</h1>

	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a class="active">apartments</a></li>
		<li class="active">add apartment</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">



	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Apartment</h3>

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
				<div class="col-md-6">
					<div class="form-group">
						<label>Apartment type</label> <select id="apartmentType"
							class="form-control select2">
							<option style="" selected="selected">N/A</option>
							<option style="" selected="selected">1 ✯</option>
							<option class="fa-star">2 ✯ ✯</option>
							<option class="fa-star">3 ✯ ✯ ✯</option>
							<option class="fa-star">4 ✯ ✯ ✯ ✯</option>
							<option class="fa-star">5 ✯ ✯ ✯ ✯ ✯</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">

					<div class="form-group">
						<label>Apartment name</label>
						<div class="alert alert-info alert-dismissible">You can choose one
							of suggested name from the list. If there's no name like your
							apartment. Please enter a custom name</div>
						<select class="form-control select2">

							<option selected="selected">Apartment</option>
							<option>Monthly Rental Hotel</option>
							<option>Shared house</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Custom name</label>
						<div class="alert alert-info alert-dismissible">Just enter a
							custom name in case there's really nothing like your apartment
							from Apartment name</div>
						<input type="text" class="form-control" id="customName"
							placeholder="Enter custom name">
					</div>
				</div>


			</div>
			<!-- /.row -->



			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Number of apartment(of this type)</label> <input
							id="numberApartment" type="number" class="form-control"></input>
					</div>
				</div>
				<div class="col-md-6">
					<label>Smoking policy</label> <select class="form-control select2">

						<option selected="selected" value="nonesmoking">Non-smoking</option>
						<option value="smoking">Smoking</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<label>Number of bedrooms</label> <input id="bedroomNumber"
						type="number" min="1" class="form-control"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
				</div>
				<div class="col-md-3">
					<label>Number of living rooms</label> <input id=livingroomNumber
						type="number" min="0" class="form-control"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
				</div>
				<div class="col-md-3">
					<label>Number bathrooms</label> <input id=bathroomNumber
						type="number" min="0" class="form-control"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
				</div>
			</div>

		</div>


	</div>


	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Room options</h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool"
					data-widget="collapse">
					<i class="fa fa-minus"></i>
				</button>
			</div>
		</div>

		<!-- /.box-header -->
		<div class="box-body">

			<div class="box box-widget widget-user-2">
				<!-- Add the bg color to the header using any of the bg-* classes -->
				<div class="widget-user-header"
					style="padding-left: 10px; padding-right: 10px; background-color: #f5f5f0">
					<div class="widget-user-image">
						<img class="img-circle" src="{{asset('dist/img/bedicon.jpg')}}"
							alt="User Avatar">
					</div>

					<!-- /.widget-user-image -->
					<h3 class="widget-user-username">Bedroom 1</h3>
					<h5 class="badge bg-gray">How many bed do you have in this bedroom</h5>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Kind of beds</label> <select id="apartmentType"
									class="form-control select2">
									<option style="" selected="selected">N/A</option>
									<option style="" selected="selected">1 ✯</option>
									<option class="fa-star">2 ✯ ✯</option>
									<option class="fa-star">3 ✯ ✯ ✯</option>
									<option class="fa-star">4 ✯ ✯ ✯ ✯</option>
									<option class="fa-star">5 ✯ ✯ ✯ ✯ ✯</option>
								</select>
							</div>

						</div>


						<div class="col-md-2">
							<div class="form-group">
								<label>Number of beds</label> <input id="bedroomNumber"
									type="number" min="1" class="form-control"
									onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-3">
							<label>How many guests can stay</label> <input id=bathroomNumber
								type="number" min="1" class="form-control"
								onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
						</div>
					</div>
						
					<div class="row" style="margin-top:30px">
						<div class="col-md-6">
							<div class="form-group">
								<label>Private room</label> <input type="checkbox" value="">
							</div>
						</div>
					</div>

				</div>

			</div>


			<div class="box box-widget widget-user-2">
				<!-- Add the bg color to the header using any of the bg-* classes -->
				<div class="widget-user-header"
					style="padding-left: 10px; padding-right: 10px; background-color: #f5f5f0">
					<div class="widget-user-image">
						<img class="img-circle" src="{{asset('dist/img/livingroom.jpg')}}"
							alt="User Avatar">
					</div>

					<!-- /.widget-user-image -->
					<h3 class="widget-user-username">Living room</h3>
					<h5 class="badge bg-gray">How many sofa beds do you have in the room</h5>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Number of sofa beds</label> <input id=bathroomNumber
								type="number" min="1" class="form-control"
								onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
							</div>

						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>How many guests can stay in the room</label> <input id=bathroomNumber
								type="number" min="1" class="form-control"
								onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

@endsection
