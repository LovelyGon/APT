<?php
use App\Enumeration\StarRating;
?>

@extends('admin.admin_template') @section('content')
<style>
    .Addbed  {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top:5px;
    }
    .Addlivingroom  {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top:5px;
    }
    .widget-user-username span{
        margin-left: 5px;
    }
    #Room{
        Display: None;
    }
    .addBedroom{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top:5px;
    }
    .addLiving{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top:5px;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Add apartment <small>Please add more apartment for your property</small>
	</h1>

	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a class="active">apartments</a></li>
		<li class="active">add apartment</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

 {!! Form::open(['route' =>[ 'storeEditAparrtment',$apartment->id]]) !!}

	<div class="box box-default postApartment">
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
					<div class="form-dgroup">               
                                                    <?php
                                                        $star_rating_label = __('property.apartment');								
                                                        $star_rating_items = StarRating::toArray();
                                                        echo Form::label($star_rating_label);
                                                        echo Form::select('apartment_type', $star_rating_items,$apartment->apartment_type, ['class' => 'form-control select2','required' => 'required']); 
                                                    ?>
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
                                                <?php
                                                    $star_rating_label1 = __('property.apartment');								
                                                    $star_rating_items1 = App\Enumeration\PropertyType::toArray();
                                    
                                                    echo Form::select('apartment_name', $star_rating_items1,$apartment->apartment_name, ['class' => 'form-control apartment_name','required' => 'required']); 
                                                ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Custom name</label>
						<div class="alert alert-info alert-dismissible">Just enter a
							custom name in case there's really nothing like your apartment
							from Apartment name</div>
						<input type="text" class="form-control custom_name" id="customName" name="custom_name" value="<?php echo $apartment->apartment_custom_name ?>"
							placeholder="Enter custom name" required>
					</div>
				</div>


			</div>
			<!-- /.row -->



			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Number of apartment(of this type)</label> <input
							id="numberApartment" type="number" class="form-control number_of_apartment" name="number_of_apartment" required value="<?php echo $apartment->apartment_type_number ?>"></input>
					</div>
				</div>
				<div class="col-md-6">
					<label>Smoking policy</label>
                                                <select id="apartmentType" class="form-control smoking_policy" name="smoking_policy" required value="<?php echo $apartment->smoking_policy ?>">
                                                    <option selected="selected" value="nonesmoking">Non-smoking</option>
                                                    <option value="smoking">Smoking</option>
                                                </select>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<label>Number of bedrooms</label> <input id="bedroomNumber"
						type="number" min="1" class="form-control number_of_bedrooms" name="number_of_bedrooms"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57' required value="<?php echo $apartment->living_room_number ?>" disabled></input>
				</div>
				<div class="col-md-3">
					<label>Number of living rooms</label> <input id="livingroomNumber" name="number_of_livingroom"
						type="number" min="0" class="form-control number_of_livingroom"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57' required value="<?php echo $apartment->bathroom_number ?>" disabled></input>
				</div>
				<div class="col-md-3">
					<label>Number bathrooms</label> <input id=bathroomNumber
						type="number" min="0" class="form-control number_of_bathrooms" name="number_of_bathrooms"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57' required value="<?php echo $apartment->bedroom_number ?>"></input>
				</div>
			</div>

		</div>


	</div>

 <div class="row">
	<div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary btn-lg">Save BED</button>
                </div>
	</div>

</div>
{!! Form::close() !!}
	
</section>

@endsection

