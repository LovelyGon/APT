@extends('admin.admin_template')

@section('content')
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
                            <label>Do you have wifi available for your Guest?</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Yes, it's free wifi
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Yes, but it's not free
                                </label>
                            </div> 
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    No
                                </label>
                            </div>           
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
                            <label>Do you have parking lots for cars?</label>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Yes, it's free parking
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Yes, but it's not free
                                </label>
                            </div> 
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    No
                                </label>
                            </div>                            
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
                            <label>Could you accommodate children?</label>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    No
                                </label>
                            </div>                                                           
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
                            <label>Is breakfast available for your Guest?</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Yes, already incuded in the price
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Yes, but it's optional
                                </label>
                            </div> 
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    No
                                </label>
                            </div>               
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
                            <label>Do you allow pets of Guest?</label>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    No
                                </label>
                            </div>   
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Yes, allow cats only
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Yes, any pets
                                </label>
                            </div> 

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
                                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>English</label>
                                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Vietnamese</label>
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
            
             <div class="box-body">

                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                           
                        </div>
                    </div>

                </div>

            </div>
            
        </div>  
    </div>  
</div>

<!-- /.box box box-default-->
@endsection