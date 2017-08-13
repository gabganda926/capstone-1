@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transIns','active')

@section('transInsInd','active')

@section('body')

    <section class="content">
    <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b><br/>
    <small><label id="demonew"></small></label><br/>
    <small><label id="demo"></label></small>
    <label></label>
        <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10) {
          dd='0'+dd
        } 

        if(mm<10) {
          mm='0'+mm
        } 

        today = mm+'/'+dd+'/'+yyyy+' - <?php 
    $today = date("D M j Y");  

    echo $today; 
    ?>';
        document.getElementById("demonew").innerHTML = today;
        var myVar=setInterval(function(){myTimer()},1000);

        function myTimer() {
            var d = new Date();
            document.getElementById("demo").innerHTML = d.toLocaleTimeString();
        }
        </script>
    </h2>
    <br/>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <button type="button" class="btn btn-block bg-deep-orange waves-effect left" onclick="window.document.location='{{ URL::asset('admin/transaction/adm/insurance-notification-list-individual') }}';" >
                        <i class="material-icons">backspace</i><span style="font-size: 15px;"> BACK</span>
                    </button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <ol class="breadcrumb breadcrumb-bg-pink align-right">
                        <li><a href="{{ URL::asset('admin/transaction/adm/insurance-individual') }}"><i class="material-icons">home</i> Home</a></li>
                        <li><a href="{{ URL::asset('admin/transaction/adm/insurance-expiring-accounts-individual') }}"><i class="material-icons">library_books</i> Expiring Accounts (Individual)</a></li>
                        <li><a href="{{ URL::asset('admin/transaction/adm/insurance-notification-list-individual') }}"><i class="material-icons">mail</i> Sent Notifications</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">account_circle</i> Insurance Account Details</a></li>
                    </ol>
                </div>
            </div>
        <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="body">
                        <div class="list-group">
                            <a href="javascript:void(0);" id="acce" class="list-group-item active">
                                1. Insurance Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="header">
                        <h3> Insurance Account Details </h3>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <form id="add" name = "add" action = "#" method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <h3><small><b>PERSONAL INFORMATION</b></small></h3>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div>
                                                <div class="body" align="center">
                                                    <div class="fallback">
                                                        <img id="editImg" src="#" alt="your image" style="height: 210px; width: 215px; border-style: solid; border-width: 2px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div> <!-- END OF ROW CLEARFIX -->
                                    <div class="row clearfix">
                                        <br/><br/>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label><small>Assured Name:</small></label>
                                                    <input id = "aclient_first_name" name = "aclient_first_name" type="text" class="form-control" readonly="true" value="Rola, Ma. Gabriella T.">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                            <label><small>Gender :</small></label>
                                                <select id = "apinfo_gender" name = "apinfo_gender" class="form-control show-tick">
                                              <option selected value = "" style = "display: none;">-- Gender --</option>
                                                    <option value = "0">Male</option>
                                                    <option value = "1">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Age :</small></label>
                                                    <input id = "aage" name = "aage" type="text" class="form-control" readonly="true"   readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                              <div class="form-group form-float">
                                                    <label><small>Birthdate:</small></label>
                                                    <div class="form-row show-inputbtns">
                                                    <div class="form-line">
                                                            <input id = "apinfo_bday" name = "apinfo_bday" type="date" data-date-inline-picker="false" data-date-open-on-focus="true" class="form-control" disabled />
                                                    </div>
                                                    </div>
                                              </div>
                                        </div>                  
                                    </div> <!-- end of rowclearfix -->
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Cellphone Number:</small></label>
                                                    <input id = "apinfo_cpnum_1" name = "apinfo_cpnum_1" type="text" class="form-control"  readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Cellphone Number(Alternate):</small></label>
                                                    <input id = "apinfo_cpnum_2" name = "apinfo_cpnum_2" type="text" class="form-control"  readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Tel. Num.:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>E-mail:</small></label>
                                                    <input id = "apinfo_mail" name = "apinfo_mail" type="email" class="form-control"  readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <h3> <small><b>RESIDENTIAL ADDRESS</b></small></h3>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Complete Address: </small></label>
                                                    <textarea id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true">B5 L18 Spiderlily St., Antipolo Hills Subdivision, Brgy. San Luis, Distrit II-B, Antipolo City, Rizal, Region IV-A Calabarzon, 1870</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <h3> <small><b>INSURANCE DETAILS</b></small></h3>
                                    <div class="row clearfix">
                                        <div class="col-md-12" align="center">
                                            <button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#formImage">View attached form</button> <!-- PAG NAKA VIEW NA, Magiging "Hide attached form" yung nakalagay-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="collapse fade" role="dialog" id="formImage" align="center">
                                                <div class="fallback">
                                                    <img src="#" alt="your image" style="height: 500px; width: 500px; border-style: solid; border-width: 2px;">
                                                </div>
                                            </div> 
                                        </div>
                                        
                                    </div> <!-- END OF ROW CLEARFIX -->
                                    <div class="row clearfix">
                                        <br/><br/>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Policy Number: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="MCAR 2013-9622-17">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Insurance Company: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="FPG Insurance">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Date Issued: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="March 17 2017, Wednesday, 9:07AM">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Inception Date: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="June 17 2017 - June 17 2018">
                                                </div>
                                            </div>
                                        </div>                
                                    </div> <!-- end of rowclearfix -->
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Vehicle Type:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="SUV">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Vehicle Make:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="TOYOTA">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Vehicle Model:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="2017 FORTUNER 4X2 2.4L DSL A/T S4">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Market Value:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="Php 800,000.00">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Plate Number:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Serial Chassis:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Motor Engine:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Seating Capacity:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Color:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="">
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

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Bodily Injury: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Property Damage: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Personal Accident: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>                     
                                    </div> <!-- end of rowclearfix --> 

                                    <div class="row clearfix">
                                        <br/><br/>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label><small>Writing Code: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Act of Nature: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-12" align="center">
                                            <p style="text-align: right"><b>Total Net Premium: Php 36, 894.50</b></p>
                                        </div>          
                                    </div> <!-- end of rowclearfix -->
                            </form>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>

@endsection