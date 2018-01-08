<?php
    use App\Enumeration\InternetType;
    use App\Enumeration\ParkingType;
    use App\Enumeration\ChildrenType;
    use App\Enumeration\BreakfastType;
    use App\Enumeration\PetsType;
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
							 $translatedItems1 = InternetType::toArray();
                                                         echo Form::label('interner_type', __('internet.interner_info'));
                                                         foreach ($translatedItems1 as $translatedItems)
                                                         {
                                                             echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
                                                         }
							 ?>	
<!--							<label>Do you have wifi available for your Guest?</label>
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios1" value="wififree" checked> Yes, it's free
									wifi
								</label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios2" value="wifinotfree"> Yes, but it's not free
								</label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios2" value="No"> No
								</label>
							</div>-->
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
				<h3 class="box-title">Parking</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<div class="row">
					<div class="col-md-7">
						<div class="form-group">
                                                        <?php														
                                                            $translatedItems2= ParkingType ::toArray();
                                                            echo Form::label('Parking_info', __('parking.Parking_info'));
                                                            foreach ($translatedItems2 as $translatedItems)
                                                            {
                                                                echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
                                                            }
							 ?>
<!--							<label>Do you have parking lots for cars?</label>

							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios1" value="option1" checked> Yes, it's free
									parking
								</label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios2" value="option2"> Yes, but it's not free
								</label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios2" value="option2"> No
								</label>
							</div>-->
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
                                                            $translatedItems3= ChildrenType ::toArray();
                                                            echo Form::label('Children_info', __('children.Children_info'));
                                                            foreach ($translatedItems3 as $translatedItems)
                                                            {
                                                                echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
                                                            }
							 ?>
<!--							<label>Could you accommodate children?</label>

							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios1" value="option1" checked> Yes
								</label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios2" value="option2"> No
								</label>
							</div>-->
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
                                                            $translatedItems4= BreakfastType ::toArray();
                                                            echo Form::label('BreakFast_info', __('breakfast.BreakFast_info'));
                                                            foreach ($translatedItems4 as $translatedItems)
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
                                                            $translatedItems5= PetsType ::toArray();
                                                            echo Form::label('Pets_info', __('Pets.Pets_info'));
                                                            foreach ($translatedItems5 as $translatedItems)
                                                            {
                                                                echo "<div class='radio'><label>".Form::radio('sex', $translatedItems) .$translatedItems."<br></label></div>";  
                                                            }
							 ?>
<!--							<label>Do you allow pets of Guest?</label>
                                                           
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios2" value="option2"> No
								</label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios2" value="option2"> Yes, allow cats only
								</label>
							</div>
							<div class="radio">
								<label> <input type="radio" name="optionsRadios"
									id="optionsRadios2" value="option2"> Yes, any pets
								</label>
							</div>-->

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
							<select class="form-control select2">
								<option selected="selected">Please add more languages</option>
								<option>Vietnamese</option>
								<option>English</option>
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
				<div class="col-md-6">

					<!-- /.box-header -->
					<div class="box-body">
						<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
						<ul class="todo-list">
							<li>
								<!-- checkbox --> <input type="checkbox" value=""> <!-- todo text -->
								<span class="text">Design a nice theme</span> <!-- Emphasis label -->

							</li>
							<li><input type="checkbox" value=""> <span class="text">Make the
									theme responsive</span></li>
							<li><input type="checkbox" value=""> <span class="text">Let theme
									shine like a star</span></li>
							<li><input type="checkbox" value=""> <span class="text">Let theme
									shine like a star</span></li>
							<li><input type="checkbox" value=""> <span class="text">Check
									your messages and notifications</span></li>
							<li><input type="checkbox" value=""> <span class="text">Let theme
									shine like a star</span></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6">
					<!-- /.box-header -->
					<div class="box-body">
						<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
						<ul class="todo-list">
							<li>
								<!-- checkbox --> <input type="checkbox" value=""> <!-- todo text -->
								<span class="text">Design a nice theme</span>

							</li>
							<li><input type="checkbox" value=""> <span class="text">Make the
									theme responsive</span></li>
							<li><input type="checkbox" value=""> <span class="text">Let theme
									shine like a star</span></li>
							<li><input type="checkbox" value=""> <span class="text">Let theme
									shine like a star</span></li>
							<li><input type="checkbox" value=""> <span class="text">Check
									your messages and notifications</span></li>
							<li><input type="checkbox" value=""> <span class="text">Let theme
									shine like a star</span></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<a href="apartments" class="btn btn-block btn-primary btn-lg">Save and continue</a>
	</div>

</div>

</section>

<!-- /.box box box-default-->
@endsection