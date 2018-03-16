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

 {!! Form::open(['route' => 'postApartment']) !!}

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
                                                        echo Form::select('apartment_type', $star_rating_items,null, ['class' => 'form-control select2']); 
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
                                    
                                                    echo Form::select('apartment_name', $star_rating_items1,null, ['class' => 'form-control apartment_name']); 
                                                ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Custom name</label>
						<div class="alert alert-info alert-dismissible">Just enter a
							custom name in case there's really nothing like your apartment
							from Apartment name</div>
						<input type="text" class="form-control custom_name" id="customName" name="custom_name"
							placeholder="Enter custom name">
					</div>
				</div>


			</div>
			<!-- /.row -->



			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Number of apartment(of this type)</label> <input
							id="numberApartment" type="number" class="form-control number_of_apartment" name="number_of_apartment"></input>
					</div>
				</div>
				<div class="col-md-6">
					<label>Smoking policy</label>
                                                <select id="apartmentType" class="form-control smoking_policy" name="smoking_policy">
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
						onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
				</div>
				<div class="col-md-3">
					<label>Number of living rooms</label> <input id="livingroomNumber" name="number_of_livingroom"
						type="number" min="0" class="form-control number_of_livingroom"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
				</div>
				<div class="col-md-3">
					<label>Number bathrooms</label> <input id=bathroomNumber
						type="number" min="0" class="form-control number_of_bathrooms" name="number_of_bathrooms"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
				</div>
			</div>

		</div>


	</div>

 <div class="row">
	<div class="col-md-12">
                <div class="form-group">
                    <button type="type" class="btn btn-block btn-primary btn-lg">ADD BED</button>
                </div>
	</div>

</div>
{!! Form::close() !!}
	<div class="box box-default " id="Room">
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
                    
                    <div  id='bedroomNumber111'>
                        
                        
                    </div>
                    
                    <div  id='livingroomNumber1111'>

                    </div>

		</div>

	</div>
</section>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).on("click",".btn-block",function(e){
        $(".postApartment").hide();
        $("#Room").show();
        $(".btn-block").hide();
        e.preventDefault();
        var apartment_type = $(".select2").val();
        var apartment_name = $(".apartment_name").val();
        var custom_name = $(".custom_name").val();
        var number_of_apartment = $(".number_of_apartment").val();
        var smoking_policy = $(".smoking_policy").val();
        var number_of_bedrooms = $(".number_of_bedrooms").val();
        var number_of_livingroom = $(".number_of_livingroom").val();
        var number_of_bathrooms = $(".number_of_bathrooms").val();
        var token=$("input[name='_token']").val();
        $.ajax({
            url:'/admin/apartments/create',
            type:"POST",
            datatType : 'JSON',
            data:{"_token":token,"apartment_type":apartment_type,"apartment_name":apartment_name,"custom_name":custom_name,"number_of_apartment":number_of_apartment,"smoking_policy":smoking_policy,"number_of_bedrooms":number_of_bedrooms,"number_of_livingroom":number_of_livingroom,"number_of_bathrooms":number_of_bathrooms},
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
    $(document).ready(function(){
        $("#bedroomNumber").change(function(){
            $(".bedroom").remove();
            var numberBedoomNumber = $("#bedroomNumber").val();
            for(var i = 0; i < parseInt(numberBedoomNumber); i++){
               var e=i+1;
                $("#bedroomNumber111").append(
                        '{!! Form::open(["route" => "postroomApartment"]) !!}'+
                           '<div class="box box-widget widget-user-2">'+
                            '<div class="widget-user-header bedroom" style="padding-left: 10px; padding-right: 10px; background-color: #f5f5f0">'+
                                    '<div class="widget-user-image">'+
                                            '<img class="img-circle" src="http://127.0.0.1:8000/dist/img/bedicon.jpg" alt="User Avatar">'+
                                    '</div>'+
                                    '<h3 class="widget-user-username">Bedroom'+'<span>'+e +'</span>'+' </h3>' +
                                    '<input type="hidden" name="room_id" value="'+ e +'"/>' +

                                    '<h5 class="badge bg-gray">How many bed do you have in this bedroom</h5>'+
                                    '<div class="row bedroom">'+
                                                '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                                '<label>Kind of beds</label> <select id="apartmentType" class="form-control select2 bedroom_kind_of_beds" name="bedroom_kind_of_beds[]">'+
                                                                        '<option style="" selected="selected"  value="N/A">N/A</option>'+
                                                                        '<option style="" selected="selected" value="1 ✯">1 ✯</option>'+
                                                                        '<option class="fa-star" value="2 ✯ ✯">2 ✯ ✯</option>'+
                                                                        '<option class="fa-star" value="3 ✯ ✯ ✯">3 ✯ ✯ ✯</option>'+
                                                                        '<option class="fa-star" value="4 ✯ ✯ ✯ ✯">4 ✯ ✯ ✯ ✯</option>'+
                                                                        '<option class="fa-star" value="5 ✯ ✯ ✯ ✯ ✯">5 ✯ ✯ ✯ ✯ ✯</option>'+
                                                               ' </select>'+
                                                        '</div>'+

                                                '</div>'+


                                                '<div class="col-md-2 ">'+
                                                        '<div class="form-group ">'+
                                                                '<label>Number of beds</label> <input id="bedroomNumbe number_of_bedsr" name="number_of_beds[]" type="number" min="1" class="form-control" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">'+
                                                        '</div>'+
                                                '</div>'+
                                            '<div class="col-md-2">'+
                                                '<div class="form-group">'+
                                                       '<button type="button" class="Addbed">ADD BED</button>'+
                                                '</div>'+
                                                   
                                            '</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                            '<div class="col-md-3">'+
                                                    '<label>How many guests can stay</label> <input id="bathroomNumber" name="guests_can_stay" type="number" min="1" class="form-control guests_can_stay" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">'+
                                            '</div>'+
                                    '</div>'+

                                    '<div class="row" style="margin-top:30px">'+
                                        '<div class="col-md-12 bed">'+
                                                '<div class="form-group">'+
                                                        '<label>Private room</label> <input  class="private_room" type="checkbox" nam="private_room"value="">'+
                                                '</div>'+
                                        '</div>'+
                                             '<div class="col-md-6">'+
                                        '<div class="form-group">'+
                                               '<button type="button" class="addBedroom">Thêm phòng</button>'+
                                        '</div>'+
                                                   
                                    '</div>'+
                                    '</div>'+
                                   
                              
                            '</div>'+
                            
                            '</div>'+
                            '{!! Form::close() !!}'
                );
            }
            });
        
        $("#livingroomNumber").change(function(){
            $(".livingroom").remove();
            var livingroomNumber = $("#livingroomNumber").val();
            for(var i = 0; i < parseInt(livingroomNumber); i++){
                var e=i+1;
                $("#livingroomNumber1111").append(
                    '<div class="box box-widget widget-user-2 ">'+
                    '<div class="widget-user-header livingroom"style="padding-left: 10px; padding-right: 10px; background-color: #f5f5f0">'+
                            '<div class="widget-user-image">'+
                                    '<img class="img-circle" src="{{asset("dist/img/livingroom.jpg")}}"alt="User Avatar">'+
                            '</div>'+
                            '<h3 class="widget-user-username">Living room'+'<span>'+e +'</span>'+' </h3>'+
                            '<h5 class="badge bg-gray">How many sofa beds do you have in the room</h5>'+
                            '<div class="row">'+
                                    '<div class="col-md-3">'+
                                            '<div class="form-group">'+
                                                    '<label>Number of sofa beds</label> <input id=bathroomNumber name="number_of_beds[]" type="number" min="1" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></input>'+
                                            '</div>'+
                                    '</div>'+

                                    '<div class="col-md-3">'+
                                            '<div class="form-group">'+
                                                    '<label>How many guests can stay in the room</label> <input id=bathroomNumber  name="guests_can_stay[]" type="number" min="1" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></input>'+
                                            '</div>'+

                                    '</div>'+
                                    '<div class="col-md-2">'+
                                                '<div class="form-group">'+
                                                       '<button type="button" class="Addlivingroom">ADD BED</button>'+
                                                '</div>'+
                                                   
                                            '</div>'+

                            '</div>'+

                    '</div>'+
                    '</div>'
                                
                );
            }
            });
           
       
    });
    $(document).on("click",".Addbed",function(){
        $(this).closest(".bedroom").append(   
     
                                            '<div class="col-md-6">'+
                                                    '<div class="form-group">'+
                                                            '<label>Kind of beds</label> <select id="apartmentType" class="form-control select2 bedroom_kind_of_beds" name="bedroom_kind_of_beds[]">'+
                                                                    '<option style="" selected="selected"  value="N/A">N/A</option>'+
                                                                    '<option style="" selected="selected" value="1 ✯">1 ✯</option>'+
                                                                    '<option class="fa-star" value="2 ✯ ✯">2 ✯ ✯</option>'+
                                                                    '<option class="fa-star" value="3 ✯ ✯ ✯">3 ✯ ✯ ✯</option>'+
                                                                    '<option class="fa-star" value="4 ✯ ✯ ✯ ✯">4 ✯ ✯ ✯ ✯</option>'+
                                                                    '<option class="fa-star" value="5 ✯ ✯ ✯ ✯ ✯">5 ✯ ✯ ✯ ✯ ✯</option>'+
                                                           ' </select>'+
                                                    '</div>'+

                                            '</div>'+


                                            '<div class="col-md-2 ">'+
                                                    '<div class="form-group ">'+
                                                            '<label>Number of beds</label> <input id="bedroomNumber number_of_beds" name="number_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">'+
                                                    '</div>'+
                                            '</div>'+
                                    '</div>'
        )
    });
    $(document).on("click",".Addlivingroom",function(){
        $(this).closest(".livingroom").append(   
           '<div class="row">'+
                                    '<div class="col-md-3">'+
                                            '<div class="form-group">'+
                                                    '<label>Number of sofa beds</label> <input id=bathroomNumber type="number" name="number_of_beds[]" min="1" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></input>'+
                                            '</div>'+
                                    '</div>'+

                                    '<div class="col-md-3">'+
                                            '<div class="form-group">'+
                                                    '<label>How many guests can stay in the room</label> <input id=bathroomNumber type="number" min="1" class="form-control" name="guests_can_stay[]" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></input>'+
                                            '</div>'+

                                    '</div>'+
                            '</div>'
        )
    });
    $(document).on("click",".addBedroom",function(e){
         //e.preventDefault();
         var bedroom ;
         var guests_can_stay;
        $bedroom= $(this).closest(".bedroom");
        $guests_can_stay=$bedroom.find(".bedroom_kind_of_beds").array();
        console.log($guests_can_stay);
         $bedroom.hide();

    });
</script>