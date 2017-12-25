@extends('admin.admin_template') @section('content')

<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title">General</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse">
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
					<div class="alert alert-info alert-dismissible">Just enter a custom
						name in case there's really nothing like your apartment from
						Apartment name</div>
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
				<label>Number of bedrooms</label> 
				<input id="bedroomNumber" type="number" min="1" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
			</div>
			<div class="col-md-3">
				<label>Number of living rooms</label> 
				<input id=livingroomNumber type="number" min="0" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
			</div>
			<div class="col-md-3">
				<label>Number bathrooms</label> 
				<input id=bathroomNumber type="number" min="0" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
			</div>
		</div>

	</div>
</div>

@endsection
