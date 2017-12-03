@extends('admin.admin_template')

@section('content')
<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">General</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Property name</label>
                    <input type="text" class="form-control" id="propertyName" placeholder="Enter property name">
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Property type</label>
                    <select class="form-control select2">
                        <option selected="selected">Apartment</option>              
                        <option>Hotel</option>
                        <option>Shared house</option>                  
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Star rating</label>
                    <select class="form-control select2">
                        <option style="fa-star" selected="selected">N/A</option> 
                        <option style="fa-star" selected="selected">1 ✯</option>              
                        <option class="fa-star">2 ✯ ✯</option>
                        <option class="fa-star">3 ✯ ✯ ✯</option>
                        <option class="fa-star">4 ✯ ✯ ✯ ✯</option>
                        <option class="fa-star">5 ✯ ✯ ✯ ✯ ✯</option>
                    </select>            
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>How many apartments do you have?</label>
                    <input type="number" class="form-control" id="numberApartment" placeholder="Number of apartment">
                </div>
            </div>

        </div>
        <!-- /.row -->

        <div class="row">   
            <div class="col-md-6">
                <div class="form-group">
                    <label>Property website</label>
                    <input type="text" class="form-control" id="website" placeholder="Enter property website">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.box box box-default-->
@endsection