<?php
    use App\Enumeration\InternetType;
    use App\Enumeration\ParkingType;
    use App\Enumeration\ChildrenType;
    use App\Enumeration\BreakfastType;
    use App\Enumeration\PetsType;
    use App\Enumeration\language;
    use App\Enumeration\PopularType;
?>

@extends('admin.admin_template') @section('content')
@if(!empty($error))
					{!! $error !!}
				@endif
				@if(count($errors)>0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{!! $error !!}</li>
							@endforeach
						</ul>
					</div>
				@endif()
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Features <small>Here you can add available features in your apartment</small>
	</h1>
	
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a class="active">features</a></li>
	</ol>
</section>
<section class="content">
 {!! Form::open(['route' => 'features']) !!}
<!-- SELECT2 EXAMPLE -->
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
                                                         foreach ($features as $feature){
                                                            foreach ($internet_type_items as $key =>$translatedItems)
                                                            {

                                                
                                                            echo "<div class='radio'><label>".Form::radio('internet',$key) .$translatedItems."<br></label></div>";

                                                            }
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
                         
                                                                echo "<div class='radio'><label>".Form::radio('parking', $key) .$translatedItems."<br></label></div>";  
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
                                                                echo "<div class='radio'><label>".Form::radio('children', $key) .$translatedItems."<br></label></div>";  
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
                                                                echo "<div class='radio'><label>".Form::radio('breakfast', $key) .$translatedItems."<br></label></div>";  
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
                                                                echo "<div class='radio'><label>".Form::radio('pets', $key) .$translatedItems."<br></label></div>";  
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
                                                        <input type="text" class="form-control"
								id="country" name="country">
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
                                   echo "<div class='col-md-6'><div class='box-body'><ul class='todo-list'><li>".Form::checkbox('popular[]', $key)."<span class='text'>" .$translatedItems."<br></span></li></ul></div></div>";  
                               }
                            ?>
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
                {!! Form::submit('Save and continue', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
	</div>

</div>
{!! Form::close() !!}
</section>

<!-- /.box box box-default-->
@endsection