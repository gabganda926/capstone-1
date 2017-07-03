@extends('master')

@section('title','Vehicle Make - Maintenance | i-Insure')

@section('trans','active')

@section('transComplaint','active')

@section('body')

    <section class="content">
    <button type="button" class="btn bg-teal waves-effect left" style="float: left; margin-left: 15px;" onclick="window.document.location='../../transaction/adm/complaint';">
        <i class="material-icons">backspace</i><span style="font-size: 15px;"> BACK</span>
    </button>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> </h3>
                        <!--<ul class="header-dropdown m-r--5">
                                <li><button type="button" class="btn bg-green waves-effect right" style="position: right;" onclick="window.document.location='../../transaction/adm/claim-request';" data-toggle="tooltip" data-placement="left" title="View claim requests">
                                    <i class="material-icons">assignment</i><span style="font-size: 15px;">
                                </button></li>            
                        </ul>-->
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <div class="card">
                                <div class="header bg-teal">
                                    <h2>
                                        Complaint Details
                                    </h2>
                                    <ul class="header-dropdown m-r--5">
                                        <li>
                                            <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse" data-loading-color="lightGreen">
                                                <i class="material-icons">loop</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                                    <form class="form-horizontal">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="email_address_2">Name</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="email_address_2" class="form-control" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password_2">Complaint Details</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="password" id="password_2" class="form-control" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password_2">Insurance Company</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="password" id="password_2" class="form-control" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password_2">Policy Number</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="password" id="password_2" class="form-control" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password_2">Mobile Phone</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="password" id="password_2" class="form-control" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password_2">Address</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="password" id="password_2" class="form-control" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form> 
                                            </div>
                                        </div>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div> 
        </div>
    </section>
   
@endsection
