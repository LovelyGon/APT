<?php
use App\Enumeration\StarRating;
?>
@extends('admin.admin_template') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Apartment details <small>You did a great job</small>
	</h1>
	
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="apartments" class="active">apartments</a></li>
		
	</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="box box-solid">
	<div class="box-header with-border">
		<h3 class="box-title">Apartments</h3>
		
		<div class="row ">
					<div class="col-md-10">
						<span style="color: green">Tram nghe khong bang mat thay, vi vay
							hay su dung hinh anh de cho khach hang biet ve can ho cua ban dep
							toi muc nao</span>
					</div>
					<div class="col-md-2">
					 <a href="apartments/create" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-plus"></i> Add apartment</a>
					
					</div>
				</div>
		
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="row">
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
								<button type="button" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit</button>
								<button type="button" class="btn btn-primary delete-a"  value="{{$apartments->id}}"><i class="fa fa-trash-o"></i> Delete</button>
								
							</div>
						<!-- /.widget-user-image -->
						<h3 class="widget-user-username">bedrom Aparment-{{ $stt }}</h3>
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
	<!-- /.box-body -->
</div>
<!-- /.box -->
</section>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).on("click",".delete-a",function(e){
        e.preventDefault();
         var id = $(this).val();
         var room_id=$(".room_id").val();
         var token=$("input[name='_token']").val();
         $bedroom= $(this).closest(".apartment");
         $bedroom.hide();
         $.ajax({
            url:'/admin/apartments/delete',
            type:"delete",
            datatType : 'JSON',
            data:{"_token":token,"id":id,"room_id":room_id},
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
</script>
