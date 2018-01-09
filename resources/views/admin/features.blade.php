<?php
    use App\Enumeration\InternetType;
    use App\Enumeration\ParkingType;
    use App\Enumeration\ChildrenType;
    use App\Enumeration\BreakfastType;
    use App\Enumeration\PetsType;
    use App\Enumeration\PopularType;
?>

@extends('admin.admin_template') @section('content')

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
                                                         foreach ($internet_type_items as $translatedItems)
                                                         {
                                                             echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
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
                                                            foreach ($partking_type_items as $translatedItems)
                                                            {
                                                                echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
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
                                                            foreach ($children_type_items as $translatedItems)
                                                            {
                                                                echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
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
                                                            foreach ($breakfast_type_items as $translatedItems)
                                                            {
                                                                echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
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
                                                            foreach ($Pets_type_items as $translatedItems)
                                                            {
                                                                echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
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
						<div class="form-group">
							<label>How many languages can you speak?</label>
							<div class="form-group has-success">
								<label class="control-label" for="inputSuccess"><i
									class="fa fa-check"></i>English</label> <label
									class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Vietnamese</label>
							</div>
							<select class="form-control select2"  multiple='multiple' id="pre-selected-options">
								<option selected="selected">Please add more languages</option>
								<option>Vietnamese</option>
								<option>English</option>
							</select>
                                                       <form method="post" id="framework_form">
                                                            <div class="form-group">
                                                                <label>Select which Framework you have knowledge</label>
                                                                <select id="framework" name="framework" multiple='multiple'>
                                                                   <option value="Codeigniter">Codeigniter</option>
                                                                   <option value="CakePHP">CakePHP</option>
                                                                   <option value="Laravel">Laravel</option>
                                                                   <option value="YII">YII</option>
                                                                   <option value="Zend">Zend</option>
                                                                   <option value="Symfony">Symfony</option>
                                                                   <option value="Phalcon">Phalcon</option>
                                                                   <option value="Slim">Slim</option>
                                                                </select>
                                                            </div>
                                                       </form>
                                                        <script>
                                                            $(document).ready(function(){
                                                                $('#framework').multiselect({
                                                                }); 
                                                               });
                                                        </script>
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

                               foreach ($Popular_type_items as $translatedItems)
                               {
                                   echo "<div class='col-md-6'><div class='box-body'><ul class='todo-list'><li>".Form::checkbox('sex', $translatedItems)."<span class='text'>" .$translatedItems."<br></span></li></ul></div></div>";  
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
</form>{!! Form::close() !!}
</section>

<!-- /.box box box-default-->
@endsection