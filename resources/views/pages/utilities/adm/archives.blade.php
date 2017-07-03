@extends('master')

@section('title','Archives - Utilities | i-Insure')

@section('utilities','active')

@section('archives','active')

@section('body')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <h2><b>
                        UTILITIES - ARCHIVES
                    </b></h2>
                </div>
                <div class="body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation" class="active"><a href="#client" data-toggle="tab">CLIENT</a></li>
                        <li role="presentation"><a href="#personnel" data-toggle="tab">COMPANY PERSONNEL</a></li>
                        <li role="presentation"><a href="#vehicle" data-toggle="tab">VEHICLE</a></li>
                        <li role="presentation"><a href="#insurance" data-toggle="tab">INSURANCE</a></li>
                        <li role="presentation"><a href="#bank" data-toggle="tab">BANK</a></li>
                        <li role="presentation"><a href="#complaint" data-toggle="tab">COMPLAINT</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- BANK ARCHIVE -->
                        <div role="tabpanel" class="tab-pane fade" id="bank"> 
                            <p>
                                <div class="header">
                                    <h2><b>
                                        BANK
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Bank Name</th>
                                                <th>Company Address</th>
                                                <th>Contact Person</th>
                                                <th>Contact Details</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Banco De Oro</td>
                                                <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                                <td>Rola, Ma. Gabriella Tan</td>
                                                <td><ul>
                                                    <li>09353084708</li>
                                                    <li>09123453234</li>
                                                    <li>212-8133</li>
                                                    <li>gab@gmail.com</li>
                                                    </ul>
                                                </td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <!-- END OF BANK ARCHIVE -->

                        <!-- CLIENT ARCHIVE -->
                        <div role="tabpanel" class="tab-pane fade in active" id="client"> 
                            <p>
                                <div class="header">
                                    <h2><b>
                                        CLIENT - INDIVIDUAL
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Details</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></td>
                                                <td>Rola, Ma. Gabriella Tan</td>
                                                <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                                <td><ul>
                                                  <li>09353084708</li>
                                                  <li>09123453234</li>
                                                  <li>212-8133</li>
                                                  <li>gab@gmail.com</li>
                                                  </ul>
                                                </td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        CLIENT - COMPANY
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Company Name</th>
                                                <th>Company Address</th>
                                                <th>Contact Person</th>
                                                <th>Contact Details</th>
                                                <th>Image</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Mc Donald's</td>
                                                  <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                                  <td>Rola, Ma. Gabriella T.</td>
                                                  <td><ul>
                                                      <li>09353084708</li>
                                                      <li>09123453234</li>
                                                      <li>212-8133</li>
                                                      <li>gab@gmail.com</li>
                                                      </ul></td>
                                                  <td><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;">
                                                  </td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <!-- END OF CLIENT ARCHIVE -->

                        <!-- PERSONNEL ARCHIVE -->
                        <div role="tabpanel" class="tab-pane fade" id="personnel"> 
                            <p>
                                <div class="header">
                                    <h2><b>
                                        EMPLOYEE ROLE
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Employee Role</th>
                                                <th>Desctiption</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Accounting Staff</td>
                                                <td>The one who chuchu the churva</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        EMPLOYEE PROFILE
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Employee Role</th>
                                                <th>Address</th>
                                                <th>Contact Details</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;">
                                                  </td>
                                                <td>Rola, Ma. Gabriella Tan</td>
                                                <td>Accounting Staff</td>
                                                <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                                <td><ul>
                                                  <li>09353084708</li>
                                                  <li>09123453234</li>
                                                  <li>212-8133</li>
                                                  <li>gab@gmail.com</li>
                                                  </ul>
                                                </td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        SALES AGENT PROFILE
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Details</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Rola, Ma. Gabriella Tan</td>
                                                <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                                <td><ul>
                                                  <li>09353084708</li>
                                                  <li>09123453234</li>
                                                  <li>212-8133</li>
                                                  <li>gab@gmail.com</li>
                                                  </ul>
                                                </td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        COURIER PROFILE
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Courier Number</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact Details</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>COUR120383</td>
                                                <td>Rola, Ma. Gabriella Tan</td>
                                                <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                                <td><ul>
                                                  <li>09353084708</li>
                                                  <li>09123453234</li>
                                                  <li>212-8133</li>
                                                  <li>gab@gmail.com</li>
                                                  </ul>
                                                </td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <!-- END OF PERSONNEL ARCHIVE -->

                        <!-- VEHICLE ARCHIVE -->
                        <div role="tabpanel" class="tab-pane fade" id="vehicle"> 
                            <p>
                                <div class="header">
                                    <h2><b>
                                        VEHICLE TYPE
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th class="col-md-2">Vehicle Type</th>
                                                <th>Description</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Huehue</td>
                                                <td>huehuehueheuheuehue</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        VEHICLE MAKE
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th class="col-md-2">Vehicle Make</th>
                                                <th>Description</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Huehue</td>
                                                <td>huehuehueheuheuehue</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        VEHICLE MODEL
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Image</th>
                                                <th>Vehicle Model Year</th>
                                                <th>Vehicle Model Name</th>
                                                <th>Vehicle Make</th>
                                                <th>Vehicle Type</th>
                                                <th>Market Value (in PHP)</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></td>
                                                <td>2007</td>
                                                <td>MODELMODEL</td>
                                                <td>MAKEMAKE</td>
                                                <td>SUV</td>
                                                <td>PHP 100,000.00</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        VEHICLE LIST
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Image</th>
                                                <th>Vehicle Model Year</th>
                                                <th>Vehicle Model Name</th>
                                                <th>Vehicle Make</th>
                                                <th>Vehicle Type</th>
                                                <th>Market Value (in PHP)</th>
                                                <th>Possible Total Premium</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></td>
                                                <td>2007</td>
                                                <td>MODELMODEL</td>
                                                <td>MAKEMAKE</td>
                                                <td>SUV</td>
                                                <td>PHP 100,000.00</td>
                                                <td>PHP 40,000.00</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <!-- END OF VEHICLE ARCHIVE -->

                        <!-- INSURANCE ARCHIVE -->
                        <div role="tabpanel" class="tab-pane fade" id="insurance"> 
                            <p>
                                <div class="header">
                                    <h2><b>
                                        INSURANCE COMPANY
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Company Name</th>
                                                <th>Address</th>
                                                <th>Contact Person</th>
                                                <th>Contact Details</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>FPG Insurance</td>
                                                <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                                <td>Rola, Ma. Gabriella Tan</td>
                                                <td><ul>
                                                      <li>09353084708</li>
                                                      <li>09123453234</li>
                                                      <li>212-8133</li>
                                                      <li>gab@gmail.com</li>
                                                      </ul>
                                                </td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        INSURANCE FORMS
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Bank Name</th>
                                                <th>Company Address</th>
                                                <th>Contact Person</th>
                                                <th>Contact Details</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Huehue</td>
                                                <td>huehuehueheuheuehue</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        INSURANCE - POLICY NUMBER
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Policy Number</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Huehue</td>
                                                <td>huehuehueheuheuehue</td>
                                                <td>uhwuhwuewqhe</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2><b>
                                        INSURANCE - INSTALLMENT TYPES
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th>Installment Type</th>
                                                <th>Description</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Huehue</td>
                                                <td>huehuehueheuheuehue</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <!-- END OF INSURANCE ARCHIVE -->

                        <!-- COMPLAINT ARCHIVE -->
                        <div role="tabpanel" class="tab-pane fade" id="complaint"> 
                            <p>
                                <div class="header">
                                    <h2><b>
                                        COMPLAINT TYPE
                                    </b></h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <li>
                                            <button id = "reactivate" type="button" class="btn btn-lg bg-green waves-effect" data-toggle="modal" data-target="#Reactivate">
                                                <span>Reactivate</span>
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
                                                <th class="col-md-2">Complaint Type</th>
                                                <th>Description</th>
                                                <th class="col-md-2">Date Created</th>
                                                <th class="col-md-2">Date Deactivated</th>
                                                <th class="col-md-1">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-green checkCheckbox" data-id=""/><label for="pppp"></label></td>
                                                <td>Huehue</td>
                                                <td>huehuehueheuheuehue</td>
                                                <td>DATE HERE</td>
                                                <td>DATE HERE</td>
                                                <td>
                                                    <button type="button" class="rbutton btn bg-green waves-effect" data-toggle="tooltip" data-placement="left" title="Reactivate this sales agent" class="btn btn-success btn-xs waves-effect" data-id = "">
                                                        <i class="material-icons">autorenew</i>
                                                    </button>
                                                    <button id = "Delete" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Delete this sales agent permanently">
                                                        <i class="material-icons">delete_sweep</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <!-- END OF COMPLAINT ARCHIVE -->


                        <!-- View INST MODAL-->
                        <div class="modal fade" id="Reactivate" tabindex="-1" role="dialog">
                            <div class="modal-dialog animated zoomInRight active" role="document">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-add">
                                        <h4>Reactivate
                                        </h4>
                                    </div><br/>
                                        <div class="modal-body">
                                            <form id="ctype_view" method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="col-md-4" style = "display: none;">
                                              <input id = "id" type="text" class="form-control" name="id" pattern="[A-Za-z'-]">
                                            </div>
                                                <h5>Are you sure you want to reactivate the selected records?</h5>
                                            </form>
                                        </div>
                                    <div class="modal-footer js-sweetalert">
                                        <button id = "reactivate_all" class="btn btn-primary waves-effect" type="button">YES</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">NO</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# VIEW INST MODAL -->

                    </div> <!-- tab content -->
                </div> <!-- body-->
            </div> <!-- card -->
        </div> <!-- container -->
    </section> 

    <script>
        $( document ).ready(function()
        {
          if ($('.checkCheckbox:checked').length > 0)
          {
               $("#reactivate").show();
          }
          else
          {
              $("#reactivate").hide();
          }

          $(".checkCheckbox").change(
            function()
            {
              if ($('.checkCheckbox:checked').length > 0)
              {
                   $("#reactivate").show();
              }
              else
              {
                  $("#reactivate").hide();
              }
             }
          );
        });

        function addZero(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        function formatDate(date)
        {
          var monthNames = [
            "January", "February", "March",
            "April", "May", "June", "July",
            "August", "September", "October",
            "November", "December"
          ];

          var day = date.getDate();
          var monthIndex = date.getMonth() + 1;
          var year = date.getFullYear();
          var h = addZero(date.getHours());
          var m = addZero(date.getMinutes());
          var s = addZero(date.getSeconds());

          return year + '-' + monthIndex + '-' + day + ' ' + h + ':' + m + ':' + s;
        }

        var IDS = [0];
        var timenow = formatDate(new Date());
        $('#reactivate_all').click(function(event){
          IDS = $(".checkCheckbox:checked").map(function ()
          {
              return $(this).data('id')
          }).get();
        });

        $('.rbutton').click(function(event){
              $.ajax({

                  type: 'POST',
                  url: '/admin/archives/client/type/reactive',
                  data: {asd:$(this).data('id'), time:timenow},
                  success:function(xhr){
                      console.log('success');
                      console.log(xhr.responseText);
                      window.location.reload();
                  },
                    error:function(xhr, ajaxOptions, thrownError,data){
                      console.log(xhr.status);
                      console.log(xhr.responseText);
                  }
              });
        });

        $('#reactivate_all').click(function(event){
          event.preventDefault();
              $.ajax({

                  type: 'POST',
                  url: '/admin/archives/client/type/areactive',
                  data: {asd:IDS, time:timenow},
                  success:function(xhr){
                      console.log('success');
                      console.log(xhr.responseText);
                      window.location.reload();
                  },
                    error:function(xhr, ajaxOptions, thrownError,data){
                      console.log(xhr.status);
                      console.log(xhr.responseText);
                  }
              });
          });
    </script>
@endsection