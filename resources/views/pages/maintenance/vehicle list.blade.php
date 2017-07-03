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
                                        <label><small>Vehicle Model :</small></label>
                                            <select id = "make_name" name = "make_name" class="form-control show-tick" data-live-search="true" >
                                              <option selected value = "" style = "display: none;">-- Select Vehicle Model --</option>
                                              @foreach($model as $mod)
                                               @if($mod->del_flag == 0)
                                                <option value = "{{ $mod->vehicle_model_ID }}">{{ $mod->vehicle_model_name }}</option>
                                               @endif
                                              @endforeach
                                            </select>
                                    </div><br/>
                                </div>
                                <div class="row clearfix">
                                  <div class="col-sm-12">
                                        <div class="form-group form-float">
                                                <div class="form-line"> <!-- AUTO GENERATED DPAT TO, MAY COMPUTATION NA DPENDE SA MARKET VALUE NUNG SASAKYAN --><br/>
                                                <label><small>Possible Total Premium (in PHP) :</small></label>
                                                    <input id = "vehicle_list_price" name = "vehicle_list_price" type="number" min="1" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                                    
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
                                        <th class="col-md-1">Delete</th>
                                        <th>Image</th>
                                        <th>Vehicle Model Year</th>
                                        <th>Vehicle Model Name</th>
                                        <th>Vehicle Make</th>
                                        <th>Vehicle Type</th>
                                        <th>Market Value (in PHP)</th>
                                        <th>Possible Total Premium</th>
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
