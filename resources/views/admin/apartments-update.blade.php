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
						onkeypress='return event.charCode >= 48 && event.charCode <= 57' required value="<?php echo $apartment->bedroom_number ?>"></input>
                                        <input id="bedroomNumber_living"
						type="hidden" value="<?php echo $apartment->bedroom_number ?>"></input>
				</div>
				<div class="col-md-3">
					<label>Number of living rooms</label> <input id="livingroomNumber" name="number_of_livingroom"
						type="number" min="0" class="form-control number_of_livingroom"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57' required value="<?php echo $apartment->bathroom_number ?>" ></input>
				</div>
				<div class="col-md-3">
					<label>Number bathrooms</label> <input id=bathroomNumber
						type="number" min="0" class="form-control number_of_bathrooms" name="number_of_bathrooms"
						onkeypress='return event.charCode >= 48 && event.charCode <= 57' required value="<?php echo $apartment->bedroom_number ?>"></input>
				</div>
			</div>

		</div>


	</div>
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
         </div>
         <div class="box-body">
                <div  id='bedroomNumber111'>
                    <?php $i=0;?>
                    @foreach($room as $rooms)
                    <?php $i=$i+1?>
                    <div class="box box-widget widget-user-2">
                            <div class="widget-user-header " style="padding-left: 10px; padding-right: 10px; background-color: #f5f5f0">
                                    <div class="widget-user-image">
                                        <img class="img-circle" src="http://127.0.0.1:8000/dist/img/bedicon.jpg" alt="User Avatar">
                                    </div>
                                    <?php if($i==$apartment->bedroom_number){
                 
                                         echo Form::text('bedroom_room',$rooms->id,['class'=>'bedroom_room']);
                                         echo Form::text('bedroom_room_apartment_id',$rooms->apartment_id,['class'=>'bedroom_room_apartment_id']);
                                    }?>
                                    <h3 class="widget-user-username">Bedroom <?php echo $i ?><span></span></h3>
                                   

                                    <h5 class="badge bg-gray">How many bed do you have in this bedroom</h5>
                                    <div class="row">
                                        <div class="row" style="margin-top:30px">
                                           <div class="col-md-12">
                                                   <div class="col-md-1">
                                                            <i class="fa fa-columns" style="font-size:50px"></i>
                                                    </div>
                                                    <div class="col-md-2">
                                                            <div class="form-group ">
                                                                    <label style="font-size:20px;padding-right:100px " >Double </label>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <div class="form-group ">
                                  
                                                                <input id="bedroomNumbe number_of_bed" name="double_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="<?php echo $rooms->kind_of_room; ?>">
                                                           </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:30px">
                                            <div class="col-md-12">
                                                   <div class="col-md-1">
                                                            <i class="fa fa-columns" style="font-size:50px"></i>
                                                    </div>
                                                   <div class="col-md-2">
                                                           <div class="form-group ">
                                                                    <label style="font-size:20px;" >Single</label>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <div class="form-group ">
                                                                    <input id="bedroomNumbe number_of_bedsr" name="single_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="<?php echo $rooms->guest_number; ?>">
                                                            </div>
                                                   </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:30px">
                                            <div class="col-md-12">
                                                  <div class="col-md-1">
                                                          <i class="fa fa-columns" style="font-size:50px"></i>
                                                   </div>
                                                   <div class="col-md-2">
                                                           <div class="form-group ">
                                                                <label style="font-size:20px;" >Sofa</label>
                                                           </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                           <div class="form-group ">
                                                                <input id="bedroomNumbe number_of_bedsr" name="sofa_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="<?php echo $rooms->sofa_bed_number; ?>">
                                                          </div>
                                                   </div>
                                            </div>
                                       </div>
                                       <div class="row" style="margin-top:30px;margin-left: 5px;">
                                            <div class="col-md-7">
                                                <label>How many guests can stay</label> <input id="bathroomNumber" name="guests_can_stay[]" type="number" min="1" class="form-control guests_can_stay" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="<?php echo $rooms->bed_option; ?>">
                                            </div>
                                         </div>
                                        <div class="row" style="margin-top:30px;margin-left: 5px;">
                                            <div class="col-md-12 bed">
                                                   <div class="form-group">
                                                       <label>Private room</label> <input  class="private_room" type="checkbox" name="private_room[]" <?php $rooms->option ? true : false?> >
                                                    </div>
                                            </div>
                                        </div>
                                    
                                   
                              
                            </div>
                            
                            </div>    
                    </div>
                    @endforeach    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#bedroomNumber").change(function(){
            var numberBedoomNumber_living = $("#bedroomNumber_living").val();
            var numberBedoomNumber = $("#bedroomNumber").val();
            $("#Room").show();
            $(".bedroom").remove();
            if(parseInt(numberBedoomNumber_living) <numberBedoomNumber){
            for(var i = parseInt(numberBedoomNumber_living); i < parseInt(numberBedoomNumber); i++){
  
               var e=i+1
                $("#bedroomNumber111").append(
                           '<div class="box box-widget widget-user-2">'+
                            '<div class="widget-user-header bedroom" style="padding-left: 10px; padding-right: 10px; background-color: #f5f5f0">'+
                                    '<div class="widget-user-image">'+
                                            '<img class="img-circle" src="http://127.0.0.1:8000/dist/img/bedicon.jpg" alt="User Avatar">'+
                                    '</div>'+
                                    '<h3 class="widget-user-username">Bedroom'+'<span>'+e +'</span>'+' </h3>' +
                                    '<input type="hidden" name="room_id" value="'+e +'"/>' +

                                    '<h5 class="badge bg-gray">How many bed do you have in this bedroom</h5>'+
                                    '<div class="row bedroom">'+
                                        '<div class="row" style="margin-top:30px">'+
                                           ' <div class="col-md-12">'+
                                                   '<div class="col-md-1">'+
                                                            '<i class="fa fa-columns" style="font-size:50px"></i>'+
                                                    '</div>'+
                                                    '<div class="col-md-2">'+
                                                            '<div class="form-group ">'+
                                                                    '<label style="font-size:20px;padding-right:100px " >Double </label>'+
                                                            '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                            '<div class="form-group ">'+
                                                                    '<input id="bedroomNumbe number_of_bedsr" name="double_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">'+
                                                           ' </div>'+
                                                    '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row" style="margin-top:30px">'+
                                            '<div class="col-md-12">'+
                                                   '<div class="col-md-1">'+
                                                            '<i class="fa fa-columns" style="font-size:50px"></i>'+
                                                    '</div>'+
                                                   ' <div class="col-md-2">'+
                                                            '<div class="form-group ">'+
                                                                    '<label style="font-size:20px;" >Single</label>'+
                                                            '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                            '<div class="form-group ">'+
                                                                    '<input id="bedroomNumbe number_of_bedsr" name="single_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">'+
                                                            '</div>'+
                                                   ' </div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row" style="margin-top:30px">'+
                                            '<div class="col-md-12">'+
                                                  '<div class="col-md-1">'+
                                                          ' <i class="fa fa-columns" style="font-size:50px"></i>'+
                                                   '</div>'+
                                                   '<div class="col-md-2">'+
                                                           '<div class="form-group ">'+
                                                                   '<label style="font-size:20px;" >Sofa</label>'+
                                                           '</div>'+
                                                   '</div>'+
                                                   '<div class="col-md-4">'+
                                                           '<div class="form-group ">'+
                                                                  ' <input id="bedroomNumbe number_of_bedsr" name="sofa_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">'+
                                                          ' </div>'+
                                                   '</div>'+
                                          ' </div>'+
                                       ' </div>'+
                                       ' <div class="row" style="margin-top:30px;margin-left: 5px;">'+
                                            '<div class="col-md-7">'+
                                                    ' <label>How many guests can stay</label> <input id="bathroomNumber" name="guests_can_stay[]" type="number" min="1" class="form-control guests_can_stay" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">'+
                                            ' </div>'+
                                         '</div>'+
                                        '<div class="row" style="margin-top:30px;margin-left: 5px;">'+
                                            '<div class="col-md-12 bed">'+
                                                   ' <div class="form-group">'+
                                                            '<label>Private room</label> <input  class="private_room" type="checkbox" name="private_room[]" value="">'+
                                                    '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    
                                   
                              
                            '</div>'+
                            
                            '</div>'
                );
            }}else{
                var bedroom_room = $(".bedroom_room").val();
                var token=$("input[name='_token']").val();
                var bedroom_room_apartment_id = $(".bedroom_room_apartment_id").val();
                $.ajax({
                        url:'/admin/apartments/room/delete',
                        type:"POST",
                        datatType : 'JSON',
                        data:{"_token":token,"bedroom_room":bedroom_room,"apartment_id":bedroom_room_apartment_id},
                    })
                    .done(function(data) {
                        console.log("success");
                        console.log(data);
                        $(".widget-user-2").remove();
                        $.each(data,function(index,item){
                            var i=1;
                            var html = '<div class="box box-widget widget-user-2">'+
                                '<div class="widget-user-header " style="padding-left: 10px; padding-right: 10px; background-color: #f5f5f0">'+
                                    '<div class="widget-user-image">'+
                                        '<img class="img-circle" src="http://127.0.0.1:8000/dist/img/bedicon.jpg" alt="User Avatar">'+
                                    '</div>'+
                                            
                                        
                                    
                                    '<h3 class="widget-user-username">Bedroom '+i+'<span></span></h3>'+
                                   

                                    '<h5 class="badge bg-gray">How many bed do you have in this bedroom</h5>'+
                                    '<div class="row">'+
                                        '<div class="row" style="margin-top:30px">'+
                                           '<div class="col-md-12">'+
                                                   '<div class="col-md-1">'+
                                                           ' <i class="fa fa-columns" style="font-size:50px"></i>'+
                                                    '</div>'+
                                                    '<div class="col-md-2">'+
                                                            '<div class="form-group ">'+
                                                                    '<label style="font-size:20px;padding-right:100px " >Double </label>'+
                                                            '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                            '<div class="form-group ">'+
                                  
                                                                '<input id="bedroomNumbe number_of_bed" name="double_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="'+item.kind_of_room+'">'+
                                                           '</div>'+
                                                   ' </div>'+
                                            '</div>'+
                                       ' </div>'+
                                        '<div class="row" style="margin-top:30px">'+
                                            '<div class="col-md-12">'+
                                                   '<div class="col-md-1">'+
                                                            '<i class="fa fa-columns" style="font-size:50px"></i>'+
                                                    '</div>'+
                                                   '<div class="col-md-2">'+
                                                           '<div class="form-group ">'+
                                                                    '<label style="font-size:20px;" >Single</label>'+
                                                           ' </div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                           ' <div class="form-group ">'+
                                                                    '<input id="bedroomNumbe number_of_bedsr" name="single_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="'+item.guest_number+'">'+
                                                            '</div>'+
                                                   '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row" style="margin-top:30px">'+
                                            '<div class="col-md-12">'+
                                                  '<div class="col-md-1">'+
                                                          '<i class="fa fa-columns" style="font-size:50px"></i>'+
                                                   '</div>'+
                                                   '<div class="col-md-2">'+
                                                           '<div class="form-group ">'+
                                                                '<label style="font-size:20px;" >Sofa</label>'+
                                                           '</div>'+
                                                   '</div>'+
                                                   '<div class="col-md-4">'+
                                                          ' <div class="form-group ">'+
                                                                '<input id="bedroomNumbe number_of_bedsr" name="sofa_of_beds[]" type="number" min="1" class="form-control number_of_beds" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="'+item.sofa_bed_number+'">'+
                                                          '</div>'+
                                                   '</div>'+
                                           ' </div>'+
                                       '</div>'+
                                       '<div class="row" style="margin-top:30px;margin-left: 5px;">'+
                                           ' <div class="col-md-7">'+
                                               ' <label>How many guests can stay</label> <input id="bathroomNumber" name="guests_can_stay[]" type="number" min="1" class="form-control guests_can_stay" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="'+item.option+'">'+
                                            '</div>'+
                                         '</div>'+
                                        '<div class="row" style="margin-top:30px;margin-left: 5px;">'+
                                            '<div class="col-md-12 bed">'+
                                                   '<div class="form-group">'+
                                                       '<label>Private room</label> <input  class="private_room" type="checkbox" name="private_room[]" '+item.bed_option+' >'+
                                                    '</div>'+
                                           ' </div>'+
                                        '</div>'+
                                    
                                   
                              
                            '</div>'+
                            
                            '</div>    '+
                   ' </div>';
                               i++;      
                            $("#bedroomNumber111").append(html);
                            
                           
                            
                            })
                        }).   
                    fail(function(error) {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
            }
            });
    });
</script>
