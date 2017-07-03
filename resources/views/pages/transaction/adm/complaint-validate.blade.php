@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

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
                                        Validate Client's Complaint
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
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card">
                                            <div class="body">
                                                <h3> Complaint Form </h3>
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
                                                                <label for="email_address_2">Complaint Type</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" rows="3" id="email_address_2" class="form-control" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="email_address_2">Complaint Details</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" rows="3" id="email_address_2" class="form-control" disabled="disable">
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
                                    </div><!-- end of col-md-10 -->
                                    <div class="col-md-1"></div>
                                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="body">
                                                <h3> Validate </h3><br/>
                                                    <form class="form-horizontal">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password_2">Policy Number</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="password_2" class="form-control">
                                                                        <button type="button" class="btn waves-effect right">
                                                                            <i class="material-icons">search</i><span style="font-size: 15px;">
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br/>

                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label for="password_2">Found?</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="password_2" class="form-control" value="Yes" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2 form-control-label">
                                                                <label for="password_2">Active?</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="password_2" class="form-control" value="Yes" disabled="disable">
                                                                    </div>
                                                                </div>
                                                            </div><br/><br/><br/><br/>

                                                            <button type="button" class="btn bg-green waves-effect right">SAVE </button>
                                                            <button type="button" class="btn waves-effect right" data-toggle="modal" data-target="#largeModal">VIEW DETAILS</button>
                                                        </div>
                                                    </form> 
                                            </div>
                                        </div>
                                    </div><!-- end of col-md-10 -->
                                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                </div><!-- end of body inside body -->
                            </div><!-- end of card -->
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div> 
        </div>
    </section>


    <!-- View INST MODAL-->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog animated zoomInRight active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-view">
                            <h4><br/>Insurance Details
                            </h4>
                        </div><br/>
                        <br/>
                            <div class="modal-body">
                                <form id="ins_details_view" name = "ins_details_view" method="POST">
                                    <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Client Name :</small></label>
                                                <input id = "avehicle_make_name" name = "avehicle_make_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Policy Number :</small></label>
                                                <input id = "avehicle_make_name" name = "avehicle_make_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Insurance Company :</small></label>
                                                <input id = "avehicle_make_name" name = "avehicle_make_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Unit Details :</small></label>
                                                <input id = "avehicle_make_name" name = "avehicle_make_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Start of Insurance:</small></label>
                                                <input id = "avehicle_make_name" name = "avehicle_make_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>End of Insurance :</small></label>
                                                <input id = "avehicle_make_name" name = "avehicle_make_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                <br/><br/>
                                    <button type="button" class="btn btn-link waves-effect right" data-dismiss="modal">CLOSE</button><br/><br/>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            <!-- #END# VIEW INST MODAL -->
   
@endsection
