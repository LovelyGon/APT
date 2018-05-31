<?php
    use App\Enumeration\InternetType;
    use App\Enumeration\ParkingType;
    use App\Enumeration\ChildrenType;
    use App\Enumeration\BreakfastType;
    use App\Enumeration\PetsType;
    use App\Enumeration\language;
    use App\Enumeration\PropertyType;
    use App\Enumeration\PopularType;
    use App\Enumeration\StarRating;
 use App\Enumeration\FoodType;
 use App\Enumeration\ServcieType;
  use App\Enumeration\FamilyType;
  use App\Enumeration\ViewType;
   use App\Enumeration\AccessibilityType;
   use App\facilities;

use DeepCopy\f003\Foo;
?>
@extends('admin.admin_template') 
@section('content')

<!-- Content Header (Page header) -->
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
                                                            if($policies!=null){
                                                                    echo Form::text('property_names',$policies->property_name,['class'=>'form-control','placeholder'=>$enter_property_name,'readonly'=>'readonly']);
                                                                }else{
                                                                    echo Form::text('property_name',null,['class'=>'form-control','placeholder'=>$enter_property_name,'readonly'=>'readonly']);
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
                                                         if($policies!=null){
                                                     
                                                                    echo Form::text('property_types',$policies->property_type,['class' => 'form-control ','readonly'=>'readonly']);
                                                                }else{
                                                   
                                                                    echo Form::text('property_type',null,['class' => 'form-control ','readonly'=>'readonly']);
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
                                                            if($policies!=null){
                                                     
                                                                    echo Form::text('star_ratings',$policies->star_rating, ['class' => 'form-control','readonly'=>'readonly']); 
                                                                }else{
                                                   
                                                                     echo Form::text('star_rating',null,['class' => 'form-control ','readonly'=>'readonly']); 
                                                                }
							?>
						</div>
					</div>

				</div>
				<!-- /.row -->

				

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<?php
							echo Form::label(__('property.property_website'));
                                                        if($policies!=null){
                                                                   echo Form::text('websites',$policies->website,['class'=>'form-control','placeholder'=>__('property.enter_property_website'),'readonly'=>'readonly']);
                                                                }else{
                                                                    echo Form::text('website',null,['class'=>'form-control','placeholder'=>__('property.enter_property_website'),'readonly'=>'readonly']);
                                                                }
							?>
						</div>
					</div>
				</div>
                                <div class="row">
					<div class="col-md-6">
						<div class="form-group">
					
                                                        <label>@lang('property.country')<span style="color: red"> *</span></label> 
                                                        <?php
                                                         if($policies!=null){
                                                               echo Form::text('countrys',$policies->country,['class'=>'form-control','id'=>'country','readonly'=>'readonly']);
                                                            }else{
                                                                echo Form::text('country',null,['class'=>'form-control','id'=>'country','readonly'=>'readonly']);
                                                            }
                                                        ?>
                                                        
                                                  
                                                </div>

					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>@lang('property.city')</label> 
							<?php
                                                         if($policies!=null){
                                                               echo Form::text('countrys',$policies->country,['class'=>'form-control','id'=>'country','readonly'=>'readonly']);
                                                            }else{
                                                                echo Form::text('country',null,['class'=>'form-control','id'=>'country','readonly'=>'readonly']);
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
                                                            if($policies!=null){
                                                                echo Form::text('contact_names',$policies->contact_name,['class'=>'form-control','placeholder'=>__('property.contactName'),'readonly'=>'readonly']);
                                                            }else{
                                                                echo Form::text('contact_name',null,['class'=>'form-control','placeholder'=>__('property.contactName'),'readonly'=>'readonly']);
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
                                                            if($policies!=null){
                                                              echo Form::text('addresses',$policies->address,['class'=>'form-control','placeholder'=>__('property.enter_address'),'readonly'=>'readonly']);
                                                            }else{
                                                                echo Form::text('address',null,['class'=>'form-control','placeholder'=>__('property.enter_address'),'readonly'=>'readonly']);
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
							
                                                        if($policies!=null){
                                                              echo Form::text('address_line2s',$policies->address_line2,['class'=>'form-control','placeholder'=>__('property.enter_address2'),'readonly'=>'readonly']);
                                                            }else{
                                                               echo Form::text('address_line2',null,['class'=>'form-control','placeholder'=>__('property.enter_address2'),'readonly'=>'readonly']);
                                                            }
							?>
						</div>

					</div>

				</div>


				

				<div class="row">
					<div class="col-md-6">
						<div class="form-inline">
							<label>@lang('property.phone')<span style="color: red"> *</span></label></br>
								
								  <?php
                                                                    if($policies!=null){
                                                                        echo '<input readonly="true" class="form-control" id="callingCode" style="width: 60px" name="callingCode">';
                                                                          echo Form::text('phonenumbers',$policies->phonenumber,['class'=>'form-control','id'=>'phoneNumber','style'=>'max-width: 150px;','onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57','readonly'=>'readonly']);
                                                                    }else{
                                                                        echo '<input readonly="true" class="form-control" id="callingCode" style="width: 60px" name="callingCode">';
                                                                        echo Form::text('phonenumber',null,['class'=>'form-control','id'=>'phoneNumber','style'=>'max-width: 150px;','onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57','readonly'=>'readonly']);
                                                                    }
                                                                ?>
                                                                
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label id="zipcode">@lang('property.zipcode')</label> 
                                                         <?php
                                                         if($policies!=null){
                                                               echo Form::text('zipcodes',$policies->zipcode,['class'=>'form-control','id'=>'zipcode','readonly'=>'readonly']);
                                                            }else{
                                                                echo Form::text('zipcode',null,['class'=>'form-control','id'=>'zipcode','readonly'=>'readonly']);
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
                    <div class="row ">
                        <div class="col-md-10">
                                <span style="color: green">Tram nghe khong bang mat thay, vi vay
                                        hay su dung hinh anh de cho khach hang biet ve can ho cua ban dep
                                        toi muc nao, hien dai ra sao va dac biet la nhung hinh anh cua
                                        nhung hoat dong, nhung su kien lien quan den khach hang da dien
                                        ra tai can ho cua ban</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-body">
                                    <div class="timeline-item">			<!-- 					<div class="timeline-body"> -->
                                        <div class="row ">
                                            @foreach($propertyGallery as $propertyGallerys)
                                            {!! Form::open(['route' => 'galleriesDelete']) !!}
                                            <div class="col-md-2">

                                                <div class="box box-solid galleries_images">
                                                        <span class='zoom' id='ex1'>
                                                            <img id="zoom_01" width="200px" height="150px"
                                                                    src="/images/{!! $propertyGallerys->image_name !!}" alt="..." data-zoom-image="/upload_images/"> <img>
                                                        </span>
                                                </div>

                                            </div>
                                            {!! Form::close() !!}
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>  
    
</div>
<div class="row" style="margin-bottom:10px ">
    <div class="col-md-12">
        <button  type ="submit" class="btn btn-block btn-primary btn-lg"  onclick="capNhatThongTinToaNha()" >Cập nhật thông tin tòa nhà</button>
    </div>
    <script type="text/javascript">
           function capNhatThongTinToaNha() {
              window.location="{{ url('/admin/basicinfo/') }}";
           }
     </script>                  
 {!! Form::open(['route' => 'features']) !!}
</div>
<?php  if (isset($id)){?>
	<input id="propertyId" name="property_id" value="{{ $id }}" hidden="true"/>
<?php } ?>
<div class="row">
	<div class="col-md-6">
		<div class="box box-default">
		
			<div class="box-header with-border">
				<h3 class="box-title">Internet</h3>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-7">
						<div class="form-group">
						
						
                                                        <?php														
							 $internet_type_items = InternetType::toArray();
                                                
                                                         echo Form::label('interner_type', __('features.interner_info'));
                                                  
                                                            foreach ($internet_type_items as $key =>$translatedItems)
                                                            {
                                                                if($features!=null){
                                                                    echo "<div class='radio'><label>".Form::radio('internet',$key,$features->internet==$key ? true : false) .$translatedItems."<br></label></div>";
                                                                }else{
                                                                    echo "<div class='radio'><label>".Form::radio('internets',$key) .$translatedItems."<br></label></div>";
                                                                }
//                                                            
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
				<h3 class="box-title">Parking</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<div class="row">
					<div class="col-md-7">
						<div class="form-group">
                                                        <?php														
                                                            $partking_type_items= ParkingType ::toArray();
                        
                                                            echo Form::label('Parking_info', __('features.Parking_info'));
                                                            
                                                            foreach ($partking_type_items as $key =>$translatedItems)
                                                            {
                                                                if($features!=null){
                                                                echo "<div class='radio'><label>".Form::radio('parking', $key,$features->parking==$key ? true : false) .$translatedItems."<br></label></div>";  
                                                                }else{
                                                                     echo "<div class='radio'><label>".Form::radio('parkings', $key) .$translatedItems."<br></label></div>";  
                                                                }
//                                                       
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
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Children</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-7">
						<div class="form-group">
                                                        <?php		
                 
                                                            $children_type_items= ChildrenType ::toArray();
                                                            echo Form::label('Children_info', __('features.Children_info'));
                                                            foreach ($children_type_items as $key =>$translatedItems)
                                                            {
                                                                if($features!=null){
                                                                 echo "<div class='radio'><label>".Form::radio('children',$key,$features->children==$key ? true : false ) .$translatedItems."<br></label></div>";  
                                                                }else{
                                                                    echo "<div class='radio'><label>".Form::radio('childrens',$key ) .$translatedItems."<br></label></div>";
                                                                }
                                                            }
							 ?>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Breakfast</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<div class="row">
					<div class="col-md-7">
						<div class="form-group">
                                                        <?php														
                                                            $breakfast_type_items= BreakfastType ::toArray();
                                                            echo Form::label('BreakFast_info', __('features.BreakFast_info'));
                                                            foreach ($breakfast_type_items as $key =>$translatedItems)
                                                            {
                                                                if($features!=null){
                                                                    echo "<div class='radio'><label>".Form::radio('breakfast', $key,$features->breakfast==$key ? true : false) .$translatedItems."<br></label></div>"; 
                                                                }else{
                                                                    echo "<div class='radio'><label>".Form::radio('breakfasts', $key) .$translatedItems."<br></label></div>"; 
                                                                }
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
	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Pets</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-7">
						<div class="form-group">
                                                         <?php														
                                                            $Pets_type_items= PetsType ::toArray();
                                                            echo Form::label('Pets_info', __('features.Pets_info'));
                                                            foreach ($Pets_type_items as $key =>$translatedItems)
                                                            {
                                                                if($features!=null){
                                                                echo "<div class='radio'><label>".Form::radio('pets', $key,$features->pet==$key ? true : false) .$translatedItems."<br></label></div>";  
                                                                }else{
                                                                    echo "<div class='radio'><label>".Form::radio('petses', $key) .$translatedItems."<br></label></div>";
                                                                }
//                                             
                                                            }
//							 ?>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Language</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<div class="row">
					<div class="col-md-7">						
						<div class="form-group" style="width:600px;">
							<label>How many languages can you speak?</label>
							<div class="form-group has-success">
							</div>
							<select class="form-control select2" name="languages[]"  multiple id="pre-selected-options" >
								<option value="VietNam">Việt Name</option>
                                                                <option value="NhatBan">Nhật Bản</option>
                                                                <option value="Nga">Nga</option>
                                                                 <option value="Ando">Ấn độ</option> 
                                                        </select>
                                                        
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
				<h3 class="box-title">Popular facilities</h3>
			</div>

			<div class="row">
                            <?php														
                               $Popular_type_items= PopularType ::toArray();
                               foreach ($Popular_type_items as $key =>$translatedItems)
                                {
                                   if($features!=null){
                                    echo "<div class='col-md-6'><div class='box-body'><ul class='todo-list'><li>".Form::checkbox('popular[]', $key,in_array ($key,explode(',',$features->popular_facility)) ? true : false)."<span class='text'>" .$translatedItems."<br></span></li></ul></div></div>"; 
                                    }else{
                                         echo "<div class='col-md-6'><div class='box-body'><ul class='todo-list'><li>".Form::checkbox('populars[]', $key)."<span class='text'>" .$translatedItems."<br></span></li></ul></div></div>"; 
                                    }
                                }
                            ?>
			</div>

		</div>
	</div>
</div>
<div class="row" style="margin-bottom:10px ">
    <div class="col-md-12">
        <button  type ="type" class="btn btn-block btn-primary btn-lg"  onclick="updateFeatures()" >Cập nhật thông tin features</button>
    </div>
    <script type="text/javascript">
           function updateFeatures() {
              window.location="{{ url('/admin/features/') }}";
           }
     </script>                  
 {!! Form::open(['route' => 'features']) !!}
</div>
</form>
<div class="box box-solid">
	<div class="box-header with-border">
		<h3 class="box-title">Apartments</h3>
		
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="row apartment_row">
                    {!! Form::open(["route" => "apartmentsDelete"]) !!}
				<!-- /.widget-user -->
                                <?php
							$stt=0;
							?>
                        @foreach($apartment as $apartments)
                        <?php $stt=$stt+1 ?>
			<div class="col-md-6 apartment">
                            <input type="hidden" name="room_id"  class="room_id" value="<?php echo  $stt ?>"/>
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header"
						style="padding-left: 10px; padding-right: 10px;background-color: #f5f5f0">
						<div class="widget-user-image">
							<img class="img-circle" src="../dist/img/2bedroom.jpg"
								alt="User Avatar">
						</div>
						<div style="float: right">
                                                   
								
							</div>
						<!-- /.widget-user-image -->
						<h3 class="widget-user-username">{{$apartments->apartment_name}}</h3>
						<h5 class="badge bg-green">$600/month - Number of this type: 5</h5>
						
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							
							<li><a href="#">Living room <span
									class="pull-right badge bg-aqua">{!! $apartments->living_room_number !!}</span></a></li>
							<li><a href="#">Bed room <span class="pull-right badge bg-green">{!! $apartments->bathroom_number !!}</span></a></li>
							<li><a href="#">Bathroom <span class="pull-right badge bg-red">{!! $apartments->bedroom_number !!}</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /.widget-user -->
				<!-- /.widget-user -->
			</div>
                        @endforeach
                         '{!! Form::close() !!}'
                    </div>
		</div>

	</div>
    <div class="row" style="margin-bottom:10px ">
        <div class="col-md-12">
            <button  type ="submit" class="btn btn-block btn-primary btn-lg"  onclick="updateapartments()" >Cập nhật thông tin apartments</button>
        </div>
        <script type="text/javascript">
               function updateapartments() {
                  window.location="{{ url('/admin/apartments/') }}";
               }
            </script>                  
    </div>
        <div class="row">
		<div class="col-md-12">
					<div class="box-group" id="accordion">
                                            @foreach($apartment as $apartments)
                                            {!! Form::open(["route" => "postFacilities"]) !!}
                                            <?php 
                                                    $facilitie = DB::table('facilities')->where('apartment_id', $apartments->id)->get();
                                  
                               
                                                            $a=(json_decode($facilitie [0]->facility, true));
                                                           foreach($a as $b){
                                                               print_r($b);
                                                           }
                                      
                                                        
                                                       
                                                    
                                                   
                                                       
                                
                                            ?>
						<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
						<div class="panel box box-primary apartments">
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
                                                                                <input type="hidden" name="apartments_id"  class="apartments_id" value="<?php echo $apartments->id ?>"/>
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
                                                                           
                                                                                     echo "<div class='box-body'><ul class='todo-list'><li>".Form::checkbox('Entertainment_and_Family[]', $key,null,['class' => 'Entertainment_and_Family'])."<span class='text'>" .$translatedItems."<br></span></li></ul></div>"; 
                                                                                    
                                                                                       
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
								

							</div>
                                                     
						</div>
                                                {!! Form::close() !!}
                                       @endforeach         
					</div>
					 <div class="row" style="margin-bottom:10px ">
        <div class="col-md-12">
            <button  type ="submit" class="btn btn-block btn-primary btn-lg"  onclick="updateapartments()" >Cập nhật thông tin khu vui chơi tòa nha</button>
        </div>
        <script type="text/javascript">
               function updateapartments() {
                  window.location="{{ url('/admin/facilities/') }}";
               }
            </script>                  
    </div>
				</div>
           
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
                            {!! Form::open(['files' => 'true','id' => 'imageUploadForm']) !!}
                            <?php 
                                $gallerie = DB::table('galleries')->where('apartment_id', $apartments->id)->get();
                                
                            ?>
				<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
				<div class="panel box box-primary">
					<div class="box-header with-border">
						<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion"
								href="#collapseOne"><?php echo $apartments->apartment_name ?></a>
						</h4>
		
					</div>
                                         <input type="hidden" name="galleries_id" class="galleries_id" value="<?php echo $apartments->id; ?>"/>
                                        
					<div id="collapseOne" class="panel-collapse collapse in">

						<div class="row">
							<div class="col-md-12">


								<div class="box-body">
									<div class="timeline-item">

										<!-- 					<div class="timeline-body"> -->
										<div class="row ">
											<div class="col-md-12">
                                                                                             @foreach($gallerie as $galleries)
                                                                                               {!! Form::open(['route' => 'galleriesDelete']) !!}
                                                                                            <div class="col-md-2">
                                                                                               
												<div class="box box-solid galleries_images">
                                                                                                        <span class='zoom' id='ex1'>
                                                                                                            <img id="zoom_01" width="200px" height="150px"
                                                                                                                    src="/upload_images/{!! $galleries->image_name !!}" alt="..." data-zoom-image="/upload_images/{!! $galleries->image_name !!}"> <img>
                                                                                                        </span>
<input type="hidden" name="images_id" class="images_id" value="<?php echo $galleries->id; ?>"/>
													<!-- /.box-body -->
													<div class="box-footer">
											
														</a>&emsp; <a href="" onClick="rotateImage(this.value);"> <i class="fa fa-rotate-left"  ></i>Rotate
														</a>
													</div>
                                                                                                
													<!-- /.box-footer-->
												</div>
                                                                                               
                                                                                            </div>
                                                                                              {!! Form::close() !!}
                                                                                              @endforeach
											</div>
                                                                       
                                                                                    <div class="col-md-12">
                                                                                         <div class="col-md-12">
<!--                                                                                                               
                                                                                                                    <div id="selectedFiles"></div> 
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
                                  
                                   
                                  
          
					<br><br>
		
                          
  {!! Form::close() !!}
					</div>
                                             @endforeach 
				</div>
				
			</div>
                        
		</div>
        </div>
            <div class="row" style="margin-bottom:10px ">
        <div class="col-md-12">
            <button  type ="submit" class="btn btn-block btn-primary btn-lg"  onclick="updateapartments()" >Cập nhật thông tin hình ảnh tòa nhà</button>
        </div>
        <script type="text/javascript">
               function updateapartments() {
                  window.location="{{ url('/admin/facilities/') }}";
               }
            </script>                  
    </div>
	{!! Form::close() !!}
        
</section>



<!-- {!! Form::close() !!} -->
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