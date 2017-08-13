@extends('master2')

@section('title','Insure Client - Transaction| i-Insure')

@section('transIns','active')

@section('transNew','active')

@section('body')

    <section class="content">
    <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b></h2>
    <br/>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Insure New Client </h3>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#individualtab" data-toggle="tab">INDIVIDUAL CLIENT</a></li>
                                <li role="presentation"><a href="#company" data-toggle="tab">COMPANY CLIENT</a></li>
                            </ul>

                             <div class="tab-content">
                            <!-- INDIVIDUAL -->
                                <div role="tabpanel" class="tab-pane fade in active" id="individualtab"> 
                                    <form id="asdsda" name = "asdsa" action = "individual/submit" method="POST" enctype="multipart/form-data">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="button" class="btn btn-xs bg-blue waves-effect" style="float: right;" onclick="window.document.location='{{ URL::asset('admin/maintenance/accounting-staff/client/individual') }}';">
                                            <i class="material-icons">add</i>
                                            <span>Add new Client</span> <!-- MAG OOPEN DAPAT SA NEW TAB UNG PDF NG CV HUHU -->
                                        </button><br/><br/>
                                      <h3> <small><b>CLIENT</b></small></h3>
                                        <div class="rowclearfix">
                                            <div class="col-md-6">
                                                <label><small>Assured Name :</small></label>
                                                    <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                      <option selected value = "" style = "display: none;">-- Select Company --</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label><small>Sales Agent :</small></label>
                                                    <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                      <option selected value = "" style = "display: none;">-- Select Sales Agent --</option>
                                                    </select><br/><br/><br/>
                                            </div>
                                        </div>

                                        <h3> <small><b>INSURANCE DETAILS</b></small></h3>
                                            <div class="row clearfix">
                                                <div class="col-md-12" align="center">
                                                    <button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#formImage">Click to attach form</button> <!-- PAG NAKA VIEW NA, Magiging "Hide attached form" yung nakalagay-->
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="collapse fade" role="dialog" id="formImage" align="center">
                                                        <div class="fallback">
                                                            <img src="#" alt="your image" style="height: 500px; width: 500px; border-style: solid; border-width: 2px;"><br/><br/>
                                                                <input id = "picture" name = "picture" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*">
                                                        </div>
                                                    </div> 
                                                </div>
                                                
                                            </div> <!-- END OF ROW CLEARFIX -->

                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <label><small>Policy Number :</small></label>
                                                <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Select Policy number --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                    <label><small>Insurance Company: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Select Policy number --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                                <div class="col-md-3">
                                                    <div class="form-line">
                                                    <label><small>Date Issued: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="DATE NGAYON">
                                                    </div>
                                                </div>  

                                                <div class="col-md-5">
                                                    <div class="form-line">
                                                    <label><small>Inception Date: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="JUNE 23, 2017 - JUNE 23, 2018">
                                                    </div>
                                                </div>             
                                        </div> <!-- end of rowclearfix -->
                                        <div class="row clearfix">
                                        <br/><br/>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Vehicle Type:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="SUV">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Vehicle Make:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="TOYOTA">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Vehicle Model:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="2017 FORTUNER 4X2 2.4L DSL A/T S4">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Market Value:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="Php 800,000.00">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Plate Number:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Serial Chassis:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Motor Engine:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>MV File Number:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Seating Capacity:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Color:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3> <small><b>PREMIUMS</b></small></h3>
                                        <div class="row clearfix">
                                            <br/><br/>
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Deductible: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Authorized Repair Limit: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Towing: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>                   
                                        </div> <!-- end of rowclearfix --> 

                                        <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label><small>Writing Code: </small></label>
                                                            <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Act of Nature: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end of rowclearfix -->

                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                    <label><small>Bodily Injury: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                    <label><small>Vehicle Type: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Premium: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                    <label><small>Property Damage: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                    <label><small>Vehicle Class: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Class --</option>
                                                  <option value="1">Private Car</option>
                                                  <option value="1">Commercial Vehicle (Light & Medium)</option>
                                                  <option value="1">Commercial Vehicle (Heavy)</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Premium: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                    <label><small>Personal Accident: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                    <label><small>Number of Person: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                  <option value="1">3</option>
                                                  <option value="1">7</option>
                                                  <option value="1">8</option>
                                                  <option value="1">9</option>
                                                  <option value="1">10</option>
                                                  <option value="1">12</option>
                                                  <option value="1">15</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Premium: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                            <div align="center">
                                                <p style="text-align: center; font-size: 3em;"><b>Total Net Premium: Php 36, 894.50</b></p><br/><br/>
                                            </div> 

                                            <button type="button" class="btn bg-orange btn-block waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/payment-details') }}';">
                                        PROCEED TO PAYMENT DETAILS
                                            </button>
                                </form>
                                </div>
                            <!-- COMPANY-->
                                <div role="tabpanel" class="tab-pane fade" id="company"> 
                                    <form id="emp_add" name = "emp_add" action = "company/submit" method="POST" enctype="multipart/form-data">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="button" class="btn btn-xs bg-blue waves-effect" style="float: right;" onclick="window.document.location='{{ URL::asset('admin/maintenance/accounting-staff/client/company') }}';">
                                            <i class="material-icons">add</i>
                                            <span>Add new Client</span> <!-- MAG OOPEN DAPAT SA NEW TAB UNG PDF NG CV HUHU -->
                                        </button><br/><br/>
                                      <h3> <small><b>CLIENT</b></small></h3>
                                        <div class="rowclearfix">
                                            <div class="col-md-4">
                                                <label><small>Company Name :</small></label>
                                                    <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                      <option selected value = "" style = "display: none;">-- Select Company --</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label><small>Contact Person :</small></label>
                                                    <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                      <option selected value = "" style = "display: none;">MATIC NA LALABAS UNG CONTACT PERSON</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label><small>Sales Agent :</small></label>
                                                    <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                      <option selected value = "" style = "display: none;">-- Select Sales Agent --</option>
                                                    </select><br/><br/><br/>
                                            </div>
                                        </div>

                                        <h3> <small><b>INSURANCE DETAILS</b></small></h3>
                                            <div class="row clearfix">
                                                <div class="col-md-12" align="center">
                                                    <button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#formImage">Click to attach form</button> <!-- PAG NAKA VIEW NA, Magiging "Hide attached form" yung nakalagay-->
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="collapse fade" role="dialog" id="formImage" align="center">
                                                        <div class="fallback">
                                                            <img src="#" alt="your image" style="height: 500px; width: 500px; border-style: solid; border-width: 2px;"><br/><br/>
                                                                <input id = "picture" name = "picture" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*">
                                                        </div>
                                                    </div> 
                                                </div>
                                                
                                            </div> <!-- END OF ROW CLEARFIX -->

                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <label><small>Policy Number :</small></label>
                                                <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Select Policy number --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                    <label><small>Insurance Company: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Select Policy number --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                                <div class="col-md-3">
                                                    <div class="form-line">
                                                    <label><small>Date Issued: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="DATE NGAYON">
                                                    </div>
                                                </div>  

                                                <div class="col-md-5">
                                                    <div class="form-line">
                                                    <label><small>Inception Date: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="JUNE 23, 2017 - JUNE 23, 2018">
                                                    </div>
                                                </div>             
                                        </div> <!-- end of rowclearfix -->
                                        <div class="row clearfix">
                                        <br/><br/>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Vehicle Type:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="SUV">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Vehicle Make:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="TOYOTA">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Vehicle Model:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="2017 FORTUNER 4X2 2.4L DSL A/T S4">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Market Value:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="Php 800,000.00">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Plate Number:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Serial Chassis:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Motor Engine:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>MV File Number:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Seating Capacity:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Color:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3> <small><b>PREMIUMS</b></small></h3>
                                        <div class="row clearfix">
                                            <br/><br/>
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Deductible: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Authorized Repair Limit: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Towing: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>                   
                                        </div> <!-- end of rowclearfix --> 

                                        <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label><small>Writing Code: </small></label>
                                                            <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Act of Nature: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end of rowclearfix -->

                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                    <label><small>Bodily Injury: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                    <label><small>Vehicle Type: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Premium: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                    <label><small>Property Damage: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                    <label><small>Vehicle Class: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Class --</option>
                                                  <option value="1">Private Car</option>
                                                  <option value="1">Commercial Vehicle (Light & Medium)</option>
                                                  <option value="1">Commercial Vehicle (Heavy)</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Premium: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                    <label><small>Personal Accident: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                    <label><small>Number of Person: </small></label>
                                                        <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                  <option selected value = "" style = "display: none;">-- Choose Coverage --</option>
                                                  <option value="1">3</option>
                                                  <option value="1">7</option>
                                                  <option value="1">8</option>
                                                  <option value="1">9</option>
                                                  <option value="1">10</option>
                                                  <option value="1">12</option>
                                                  <option value="1">15</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Premium: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                            <div align="center">
                                                <p style="text-align: center; font-size: 3em;"><b>Total Net Premium: Php 36, 894.50</b></p><br/><br/>
                                            </div> 

                                            <button type="button" class="btn bg-orange btn-block waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/payment-details') }}';">
                                        PROCEED TO PAYMENT DETAILS
                                            </button> 
                                    </div>
                                </form>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>

@endsection