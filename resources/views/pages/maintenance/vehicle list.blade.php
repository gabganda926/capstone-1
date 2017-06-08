@extends('master')

@section('title','Vehicle Type - Maintenance | i-Insure')

@section('maintenance','active')

@section('vehicle','active')

@section('vlist','active')

@section('body')
    <section class="content">
        <div class="container-fluid">
            <!-- ADD INST MODAL -->
            <div class="collapse fade" id="addVTypeModal" role="dialog">
                <div class="modal-dialog animated zoomInLeft active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-add">
                            <h4><br/>CREATE NEW VEHICLE LIST (FOR INSURANCE)</h4>
                        </div><br/><br/>
                        <div class="modal-body">
                            <form id="add" name = "add" action = "types/submit" method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <label><small>Vehicle Type :</small></label>
                                            <select id = "make_name" name = "make_name" class="form-control show-tick" data-live-search="true" >
                                              <option selected value = "" style = "display: none;">-- Select Vehicle Model --</option>
                                              <option value="hehe">1989 Wigo</option>
                                            </select>
                                    </div><br/>
                                </div>
                                <div class="row clearfix">
                                  <div class="col-sm-12">
                                        <div class="form-group form-float">
                                                <div class="form-line"> <!-- AUTO GENERATED DPAT TO, MAY COMPUTATION NA DPENDE SA MARKET VALUE NUNG SASAKYAN --><br/>
                                                <label><small>Possible Total Premium (in PHP) :</small></label>
                                                    <input id = "vehicle_model_name" name = "vehicle_model_name" type="number" min="1" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                                    
                                                </div>
                                            </div>
                                    </div>
                                </div>
                         
                                <br/><br/><br/>
                                <div class="col-md-4" style = "display: none;">
                                   <input id = "time" name = "time" type="text" class="form-control" pattern="[A-Za-z'-]">
                                </div>
                      </div>
                        <div class="modal-footer js-sweetalert">
                            <button class="btn btn-primary waves-effect" type="button">SUBMIT</button>
                            <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#addVTypeModal">CLOSE</button>
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
                            <h4><br/>VEHICLE LIST DETAILS
                            </h4>
                        </div><br/>
                        <button id = "Edit" style = "margin-left: 32em" type="button" class="btn btn-success btn-lg waves-effect"
                        onclick = "
                        document.getElementById('view').action = 'types/update';
                        $('#Edit').prop('disabled', true);
                        $('#Delete').prop('disabled', false);
                        $('#schange').show();
                        $('#avehicle_type_name').prop('disabled', false);
                        $('#avehicle_type_desc').prop('disabled', false);
                        $('#schange').html('SAVE CHANGES');
                        ">
                        <i class="material-icons">create</i>
                        <span>Edit</span>
                        </button>
                        <button id = "Delete" type="button" class="btn bg-red btn-lg waves-effect"
                        onclick = "
                        document.getElementById('view').action = 'types/delete';
                        $('#Edit').prop('disabled', false);
                        $('#Delete').prop('disabled', true);
                        $('#schange').show();
                        $('#avehicle_type_name').prop('disabled', false);
                        $('#avehicle_type_desc').prop('disabled', false);
                        $('#schange').html('DELETE RECORD');
                        ">
                        <i class="material-icons">delete_sweep</i>
                        <span>Delete</span>
                        </button>
                        <div class="modal-body">
                            <form id="view" name = "view" method="POST">
                              <div class="row clearfix">
                                                <div class="col-md-1">
                                                   <label for="date_created"><small><small>Date Created</small></small></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="date_created" class="form-control" readonly="true"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="last_update"><small><small>Last Update</small></small></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="last_update" class="form-control" readonly="true"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-4" style = "display: none;">
                                  <input id = "id" type="text" class="form-control" name="id" pattern="[A-Za-z'-]">
                                </div>
                                <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div>
                                                <div class="body" align="center">
                                                    <div class="fallback">
                                                        <img id="addImg" src="#" alt="your image" style="height: 210px; width: 215px; border-style: solid; border-width: 2px;">
                                                    </div><br/>
                                                        <input id = "picture" name = "picture" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div><br/>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label><small>Vehicle Type :</small></label>
                                            <select id = "make_name" name = "make_name" class="form-control show-tick" data-live-search="true" >
                                              <option selected value = "" style = "display: none;">-- Select Vehicle Type --</option>
                                              <option>HAHAHA</option>
                                            </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label><small>Vehicle Make :</small></label>
                                            <select id = "make_name" name = "make_name" class="form-control show-tick" data-live-search="true" >
                                              <option selected value = "" style = "display: none;">-- Select Vehicle Make --</option>
                                              <option>HAHAHA</option>
                                            </select>
                                    </div>
                                </div><br/>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Vehicle Model Year :</small></label>
                                                <input id = "avehicle_model_name" name = "avehicle_model_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Vehicle Model Name :</small></label>
                                                <input id = "avehicle_model_name" name = "avehicle_model_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Market Value (in PHP) :</small></label>
                                                <input id = "avehicle_model_name" name = "avehicle_model_name" type="number" min="1" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                                <div class="form-line"> <!-- AUTO GENERATED DPAT TO, MAY COMPUTATION NA DPENDE SA MARKET VALUE NUNG SASAKYAN -->
                                                    <input id = "vehicle_model_name" name = "vehicle_model_name" type="number" min="1" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                                    <label class="form-label">Possible Total Premium (in PHP)</label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <br/><br/><br/>
                                <div class="col-md-4" style = "display: none;">
                                   <input id = "atime" name = "atime" type="text" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer js-sweetalert">
                          <button id = "schange" class="btn btn-primary waves-effect" style = "display: none;" type="button" onclick = "
                          document.getElementById('atime').value = formatDate(new Date());
                          if($('#view').valid())
                          {
                            swal({
                              title: 'Are you sure?',
                              type: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#DD6B55',
                              confirmButtonText: 'Continue',
                              cancelButtonText: 'Cancel',
                              closeOnConfirm: false,
                              closeOnCancel: false
                            },
                            function(isConfirm){
                              if (isConfirm) {
                                $('#view').submit();
                              } else {
                                  swal({
                                  title: 'Cancelled',
                                  type: 'warning',
                                  timer: 500,
                                  showConfirmButton: false
                                  });
                              }
                            });
                          }">SAVE CHANGES</button>
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
                                MAINTENANCE - VEHICLE LIST
                            </b></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <li>
                                <button type="button" class="btn bg-blue waves-effect" data-toggle="collapse" data-target="#addVTypeModal">
                                    <i class="material-icons">add_circle_outline</i>
                                    <span>Add Vehicle List</span>
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
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example animated lightSpeedIn active">
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th class="col-md-1"> </th>
                                        <th>Image</th>
                                        <th>Vehicle Model Year</th>
                                        <th>Vehicle Model Name</th>
                                        <th>Vehicle Make</th>
                                        <th>Vehicle Type</th>
                                        <th>Market Value (in PHP)</th>
                                        <th>Possible Total Premium</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-red checkCheckbox"
                                                data-id=""/>
                                                <label for="pppp"></label></td>
                                  <td><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></td>
                                  <td>2007</td>
                                  <td>MODELMODEL</td>
                                  <td>MAKEMAKE</td>
                                  <td>SUV</td>
                                  <td>PHP 100,000.00</td>
                                  <td>PHP 36,700.00</td>
                                  <td><button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#largeModal">
                                                    <i class="material-icons">remove_red_eye</i>
                                                    <span>View</span>
                                                </button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
@endsection
