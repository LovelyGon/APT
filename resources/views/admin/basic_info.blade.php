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
                    <label>Property name<span style="color:red"> *</span></label>
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
                        <option>Monthly Rental Hotel</option>
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
                    <label>How many apartments do you have?<span style="color:red"> *</span></label>
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
<!--Apartment address-->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Apartment address</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">              
                <div class="callout callout-info">
                    <h4>Get a load of this</h4>
                    <p>Please make sure you enter exactly address of your property including building name, number, etc. We might send you a letter to
                        verify this address base what you provide</p>
                </div>

                <!-- /.form-group -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Owner of department or who is responsible for apartment <span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="contactName" placeholder="Enter contact name">
                </div>
            </div>           

        </div>
        <!-- /.row -->

        <div class="row">   
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address<span style="color:red"> *</span></label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address line 2</label>
                    <input type="text" class="form-control" id="addresssLine2" placeholder="(optional)">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">

                    <label>Country</label>
                    <input type="text" class="form-control" id="country">

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">

                    <label>City</label>
                    <input type="text" class="form-control" id="city">

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">

                    <label>Zipcode</label>
                    <input type="text" class="form-control" id="zipcode">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">

                    <div class="input-group margin">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li class=""><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control" id="phoneNumber">
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <button title="Save and Continue"  > </button>
            </div>
    </div>
        </div>
    </div>
</div>


<!-- /.box box box-default-->
@endsection