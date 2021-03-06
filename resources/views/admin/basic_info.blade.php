<?php
use App\Enumeration\PropertyType;
use App\Enumeration\StarRating;
use DeepCopy\f003\Foo;
?>
@extends('admin.admin_template') 
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		@lang('property.general_info') <small>@lang('property.general_des')</small>
	</h1>
	
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a class="active">@lang('property.general_info')</a></li>
	</ol>
</section>
<section class="content">
<!-- {!! Form::open(['method'=>'post','url' => 'admin/addproperty']) !!} -->
<form action="{{url('admin/addproperty')}}" method="post" enctype="multipart/form-data">
	 {!!csrf_field()!!}
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
							<?php
							   $enter_property_name=__('property.enter_property_name');
							   echo Form::label(__('property.property_name'));
							   echo ('<span style="color: red">*</span>');
                                                            if($basic_info!=null){
                                                                    echo Form::text('property_names',$basic_info->property_name,['class'=>'form-control','placeholder'=>$enter_property_name]);
                                                                }else{
                                                                    echo Form::text('property_name',null,['class'=>'form-control','placeholder'=>$enter_property_name]);
                                                                }
							?>
						</div>
						<!-- /.form-group -->
					</div>
					<!-- /.col -->
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							 <?php		
							$property_type_label = __('property.property_type_label');								
                                                        $translatedItems = PropertyType::toArray();
							 echo Form::label($property_type_label);
                                                         if($basic_info!=null){
                                                     
                                                                    echo Form::select('property_types', $translatedItems,$basic_info->property_type,['class' => 'form-control select2']);
                                                                }else{
                                                   
                                                                    echo Form::select('property_type', $translatedItems,null,['class' => 'form-control select2']);
                                                                }
							 ?>							
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
                                                        <?php
							   $star_rating_label = __('property.rating');								
                                                            $star_rating_items = StarRating::toArray();
                                                             echo Form::label($star_rating_label);
                                                            if($basic_info!=null){
                                                     
                                                                    echo Form::select('star_ratings', $star_rating_items,$basic_info->star_rating, ['class' => 'form-control select2']); 
                                                                }else{
                                                   
                                                                     echo Form::select('star_rating', $star_rating_items,null,['class' => 'form-control select2']); 
                                                                }
							?>
						</div>
					</div>

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
							<?php
							echo Form::label(__('property.property_website'));
                                                        if($basic_info!=null){
                                                                   echo Form::text('websites',$basic_info->website,['class'=>'form-control','placeholder'=>__('property.enter_property_website')]);
                                                                }else{
                                                                    echo Form::text('website',null,['class'=>'form-control','placeholder'=>__('property.enter_property_website')]);
                                                                }
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">@lang('property.address')</h3>
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
							<label>@lang('property.owner')<span style="color: red"> *</span></label> 
							<?php
                                                            if($basic_info!=null){
                                                                echo Form::text('contact_names',$basic_info->contact_name,['class'=>'form-control','placeholder'=>__('property.contactName')]);
                                                            }else{
                                                                echo Form::text('contact_name',null,['class'=>'form-control','placeholder'=>__('property.contactName')]);
                                                            }
							?>
						</div>
					</div>

				</div>
				<!-- /.row -->

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>@lang('property.address')<span style="color: red"> *</span></label> 
							<?php
                                                            if($basic_info!=null){
                                                              echo Form::text('addresses',$basic_info->address,['class'=>'form-control','placeholder'=>__('property.enter_address')]);
                                                            }else{
                                                                echo Form::text('address',null,['class'=>'form-control','placeholder'=>__('property.enter_address')]);
                                                            }
							?>
						</div>

					</div>

				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>@lang('property.address2')</label> 
							<?php
							
                                                        if($basic_info!=null){
                                                              echo Form::text('address_line2s',$basic_info->address_line2,['class'=>'form-control','placeholder'=>__('property.enter_address2')]);
                                                            }else{
                                                               echo Form::text('address_line2',null,['class'=>'form-control','placeholder'=>__('property.enter_address2')]);
                                                            }
							?>
						</div>

					</div>

				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>@lang('property.country')</label> 
                                                        <?php
                                                         if($basic_info!=null){
                                                               echo Form::text('countrys',$basic_info->country,['class'=>'form-control','id'=>'country']);
                                                            }else{
                                                                echo Form::text('country',null,['class'=>'form-control','id'=>'country']);
                                                            }
                                                        ?>
                                                        
                                                  
    				</div>

					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>@lang('property.city')</label> 
							<div id="select_city">
							
						    </div>
						</div>

					</div>

				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-inline">
							<label>@lang('property.phone')<span style="color: red"> *</span></label></br>
								
								  <?php
                                                                    if($basic_info!=null){
                                                                        echo '<input readonly="true" class="form-control" id="callingCode" style="width: 60px" name="callingCode">';
                                                                          echo Form::text('phonenumbers',$basic_info->phonenumber,['class'=>'form-control','id'=>'phoneNumber','style'=>'max-width: 150px;','onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57']);
                                                                    }else{
                                                                        echo '<input readonly="true" class="form-control" id="callingCode" style="width: 60px" name="callingCode">';
                                                                        echo Form::text('phonenumber',null,['class'=>'form-control','id'=>'phoneNumber','style'=>'max-width: 150px;','onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57']);
                                                                    }
                                                                ?>
                                                                
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label id="zipcode">@lang('property.zipcode')</label> 
                                                         <?php
                                                         if($basic_info!=null){
                                                               echo Form::text('zipcodes',$basic_info->zipcode,['class'=>'form-control','id'=>'zipcode']);
                                                            }else{
                                                                echo Form::text('zipcode',null,['class'=>'form-control','id'=>'zipcode']);
                                                            }
                                                        ?>
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
					<b>@lang('property.galary-image')</b>
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
						<input type="file"  id="input03" multiple name="image" 
							style="float: right; width: 100px">
					</div>
				</div>
			</div>
            <div class="box-body">
				<div class="timeline-item">
					<div class="row ">
						<div class ="preview">
							<div class="div_image">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-header -->
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<button  type ="submit" class="btn btn-block btn-primary btn-lg">@lang('property.save')</button>
	</div>
</div>
</form>
<!-- {!! Form::close() !!} -->
</section>
<!-- /.box box box-default-->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(function () {
		$("input[name=image]").previewimage({
			div: ".preview",
			imgwidth: 152,
			imgheight: 100,
            delname: 'Delete'
		});
		//------------------------------------------------------------------
	    $('#input03').filestyle({
				input : false,
				btnClass : 'btn-primary',
				htmlIcon : '<span class="oi oi-folder"></span> '
	    });
	    //------------------------------------------------------------------
	    $("#country").countrySelect({
	    	defaultCountry: "us"
	    });
	    //------------------------------------------------------------------
	    $('.select2').select2();
	    
	});
//--------------------------------------------------------------------------
    $(document).ready(function(){
       $('#country').on('change',function(){
            $countryData = $("#country").countrySelect("getSelectedCountryData");  
	        $iso2 = $countryData['iso2'];
	        $.ajax({
	        	type:'get',
	        	url: '{{URL::to('admin/get_calling_code')}}',
	        	data:{iso2:$iso2},
	        	success:function(data){
	        		$('#callingCode').val('+'+data);
	        		console.log(data);
	        	}
	        });
       });
    });
 //------------------------------------------------------------------------
 $(document).ready(function(){
       $('#country').on('change',function(){
            $countryData = $("#country").countrySelect("getSelectedCountryData");  
	        $iso2 = $countryData['iso2'];
	        $.ajax({
	        	type:'get',
	        	url: '{{URL::to('admin/get_country')}}',
	        	data:{iso2:$iso2},
	        	success:function(data){
	        		$('#select_city').html(data);
	        		console.log(data);
	        	}
	        });
       });
    });
 //-----------------------------------------------------------------------
 $(document).ready(function(){
    $countryData = $("#country").countrySelect("getSelectedCountryData");  
        $iso2 = $countryData['iso2'];
        $.ajax({
        	type:'get',
        	url: '{{URL::to('admin/get_country')}}',
        
        	data:{iso2:$iso2},
        	success:function(data){
        		$('#select_city').html(data);
        		console.log(data);
        	}
        });

        $.ajax({
        	type:'get',
        	url: '{{URL::to('admin/get_calling_code')}}',
        	data:{iso2:$iso2},
        	success:function(data){
        		$('#callingCode').val('+'+data);
        		console.log(data);
        	}
        });
 });
 //------------------------------------------------------------------------
 $(document).ready(function(){
    $text = $('#zipcode').text();
	   if($text == 'Mã bưu điện'){
           $('span.buttonText').text("@lang('property.choose-image')")
	   }
 });
	
</script>