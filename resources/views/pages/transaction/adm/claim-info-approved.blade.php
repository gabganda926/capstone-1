@extends('master')

@section('title','Claims - Transaction| i-Insure')

@section('trans','active')

@section('transClaims','active')

@section('body')

    <section class="content">
    <button type="button" class="btn bg-teal waves-effect left" style="float: left; margin-left: 15px;" onclick="window.document.location='../../transaction/adm/claims';">
        <i class="material-icons">backspace</i><span style="font-size: 15px;"> BACK</span>
    </button>
    <br/><br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <div class="card">
                                <div class="header bg-teal">
                                    <h1>
                                        Claim Details
                                    </h1>
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
                                                                <label for="password_2">Unit Details</label>
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
                   
                </div>
            </div> 

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <div class="card">
                                <div class="header bg-teal">
                                    <h1>
                                        Claim Progress
                                    </h1>
                                    <ul class="header-dropdown m-r--5">
                                        <li>
                                            <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse" data-loading-color="lightGreen">
                                                <i class="material-icons">loop</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="progress">
                                        <div class="progress-bar bg-orange progress-bar-striped active" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 85%; height: 100%">
                                            95%
                                        </div>
                                    </div><br/><br/>
                                                    <form class="form-horizontal">
                                                        <h3 style="text-align: center;">CLAIM REQUIREMENTS</h3>

                                                        <div class="body table-responsive">
                                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="col-md-2">Requirement #</th>
                                                                        <th>Requirement Details</th>
                                                                        <th class="col-md-1"><input type="checkbox" id="1" class="filled-in chk-col-green checkCheckbox"><label for="1"></label></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Copy of Insurance Policy and Official Receipt</td>
                                                                        <td><input type="checkbox" id="2" class="filled-in chk-col-green checkCheckbox"/><label for="2"></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Copy of Car Certificate of Registration and Official Receipt</td>
                                                                        <td><input type="checkbox" id="3" class="filled-in chk-col-green checkCheckbox"/><label for="3"></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Copy of Driver’s License and Official Receipt</td>
                                                                        <td><input type="checkbox" id="4" class="filled-in chk-col-green checkCheckbox"/><label for="4"></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>Duly Notarized Original Owner’s/Driver’s Affidavit  of Accident</td>
                                                                        <td><input type="checkbox" id="5" class="filled-in chk-col-green checkCheckbox"/><label for="5"></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>Police Report</td>
                                                                        <td><input type="checkbox" id="6" class="filled-in chk-col-green checkCheckbox"/><label for="6"></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>Pictures of the damaged vehicle, picture/s taken at the accident site </td>
                                                                        <td><input type="checkbox" id="7" class="filled-in chk-col-green checkCheckbox"/><label for="7"></label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>Repair estimate</td>
                                                                        <td><input type="checkbox" id="8" class="filled-in chk-col-green checkCheckbox"/><label for="8"></label></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <br/><br/>
                                                         <button type="button" class="btn-lg bg-green waves-effect right">SAVE </button>
                                                    </form> 
                                                    <div class="divider" style="margin-bottom:6%;"></div>
                                            </div>
                                        </div>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div> 
        </div>
    </section>
   
@endsection