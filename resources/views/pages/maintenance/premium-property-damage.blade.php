@extends('master')

@section('title','Property Damage Premiums - Maintenance | i-Insure')

@section('maintenance','active')

@section('premiums','active')

@section('pd','active')

@section('body')
    <section class="content">
        <div class="container-fluid">
            <!-- ADD INST MODAL -->
            <div class="collapse fade" id="addCTypeModal"role="dialog">
                <div class="modal-dialog animated zoomInLeft active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-add">
                            <h4><br/>CREATE NEW PROPERTY DAMAGE PREMIUM RECORD</h4>
                        </div><br/><br/>
                            <div class="modal-body">
                                <form id="add" name = "add" action = "complaint/submit" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label><small>Insurance Company:</small></label>
                                        <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true">
                                            <option value = "" style = "display:none;">-- Select Insurance Company --</option>
                                                <option value = "HEHE"></option>
                                        </select>
                                        <br/>
                                        <br/>
                                    </div><br/>
                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "clientType_type" name = "clientType_type" type="text" class="form-control" required>
                                                    <label class="form-label">Insurance Cover Limit</label>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h3><small><b>PRICES:</b></small></h3><br/>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "clientType_type" name = "clientType_type" type="text" class="form-control" required>
                                                    <label class="form-label">For Private Car (PC):</label>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "clientType_type" name = "clientType_type" type="text" class="form-control" required>
                                                    <label class="form-label">For Commercial Vehicle (CV - Light & Medium):</label>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "clientType_type" name = "clientType_type" type="text" class="form-control" required>
                                                    <label class="form-label">For Commercial Vehicle (CV - Heavy):</label>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "clientType_type" name = "clientType_type" type="text" class="form-control">
                                                    <label class="form-label">MCY'S (Optional):</label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                    <br/><br/>
                                    <div class="col-md-4" style = "display: none;">
                                       <input id = "time" name = "time" type="text" class="form-control" pattern="[A-Za-z'-]">
                                    </div>
                            </div>
                        <div class="modal-footer js-sweetalert">
                            <button class="btn btn-primary waves-effect" type="button">SUBMIT</button>
                            <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#addCTypeModal">CLOSE</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- #END# ADD INST MODAL -->
            <!-- View INST MODAL-->
            <div class="collapse fade" id="largeModal" role="dialog">
                <div class="modal-dialog animated zoomInRight active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-view">
                            <h4><br/>PROPERTY DAMAGE PREMIUM DETAILS
                            </h4>
                        </div><br/>
                        <button id = "Edit" style = "margin-left: 32em" type="button" class="btn btn-success btn-lg waves-effect">
                        <i class="material-icons">create</i>
                        <span>Edit</span>
                        </button>
                        <button id = "Delete" type="button" class="btn bg-red btn-lg waves-effect">
                        <i class="material-icons">delete_sweep</i>
                        <span>Delete</span>
                        </button>
                        <br/>
                            <div class="modal-body">
                              <form id = "view" name = "view" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row clearfix">
                                    <div class="col-md-1">
                                       <label for="date_created"><small><small>Date Created</small></small></label>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <small><input type="text" id="date_created" class="form-control" readonly="true"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="last_update"><small><small>Last Update</small></small></label>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <small><input type="text" id="last_update" class="form-control" readonly="true"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                        <div class="col-sm-6">
                                        <label><small>Insurance Company:</small></label>
                                        <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true">
                                            <option value = "" style = "display:none;">-- Select Insurance Company --</option>
                                                <option value = "HEHE"></option>
                                        </select>
                                        <br/>
                                        <br/>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Insurance Cover Limit :</small></label>
                                                        <input id = "aemp_role_Name" name = "aemp_role_Name" type="text" class="form-control" disabled="disable" required>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-12">
                                        <h3><small><b>PRICES:</b></small></h3><br/>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <label><small>For Private Car (PC):</small></label>
                                                                <input id = "aemp_role_desc" name = "aemp_role_desc" type="text" rows="1" class="form-control" disabled="disable">
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <label><small>For Commercial Vehicle (CV - Light & Medium):</small></label>
                                                                <input id = "aemp_role_desc" name = "aemp_role_desc" type="text" rows="1" class="form-control" disabled="disable">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <label><small>For Commercial Vehicle (CV - Heavy):</small></label>
                                                                <input id = "aemp_role_desc" name = "aemp_role_desc" type="text" rows="1" class="form-control" disabled="disable">
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <label><small>MCY'S (Optional):</small></label>
                                                                <input id = "aemp_role_desc" name = "aemp_role_desc" type="text" rows="1" class="form-control" disabled="disable">
                                                            </div>
                                                        </div>
                                            </div>
                                            </div>
                                        </div>
                                </div>
                            </div><br/><br/>
                        <div class="modal-footer js-sweetalert">
                            <button id = "schange" class="btn btn-primary waves-effect" style = "display: none;" type="button">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#largeModal">CLOSE</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- #END# VIEW INST MODAL -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><b>
                                MAINTENANCE - PROPERTY DAMAGE PREMIUM
                            </b></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <li>
                                <button type="button" class="btn bg-blue waves-effect" data-toggle="collapse" data-target="#addCTypeModal">
                                    <i class="material-icons">contacts</i>
                                    <span>Add New Premium Cover</span>
                                </button>
                                </li>
                                <li>
                                <button type="button" id = "delete_many" style = "display:none;" class="btn bg-red waves-effect">
                                    <i class="material-icons">delete</i>
                                    <span>Delete</span>
                                </button>
                                </li>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example animated lightSpeedIn active">
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th class="col-md-1"></th>
                                        <th> Insurance Company </th>
                                        <th>Insurance Cover Limit</th>
                                        <th>PC</th>
                                        <th>CV (Light & Medium)</th>
                                        <th>CV (Heavy)</th>
                                        <th>MCY'S</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <td><input type="checkbox" id="1" name = "del_check" class="filled-in chk-col-red checkCheckbox"/>
                                          <label for="1"></td>
                                        <td>FPG Insurance</td>
                                        <td>Php 50,000.00</td>
                                        <td>975.00</td>
                                        <td>1,050.00</td>
                                        <td>1,200.00</td>
                                        <td>450</td>
                                        <td><button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#largeModal">
                                              <i class="material-icons">remove_red_eye</i>
                                              <span>View</span>
                                          </button></td>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            
        </div>
    </section>

@push('scripts')
    <!-- SCRIPT HERE -->
@endpush
@endsection
