@extends('master2')

@section('title','Payment - Transaction| i-Insure')

@section('transPayment','active')

@section('transNewPayment','active')

@section('body')

    <section class="content">
    <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b><br/>
    <label><small>July 20, 2017 - Thursday</small></label><br/>
    <label><small>09:23:21 AM</small></label>
    </h2>
    <br/>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-bg-pink align-right">
                        <li><a href="{{ URL::asset('admin/transaction/accounting-staff/payment') }}"><i class="material-icons">home</i> New Payment</a></li>
                    </ol>
                </div>
            </div>
            <div class="row clearfix">
                <!-- PAYMENT DETAILS -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>PAYMENT DETAILS</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <label><small>Date Submitted:</small></label>
                                            <input id = "aCLAIM_type_name" name = "aCLAIM_type_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label><small>Policy Number:</small></label>
                                            <select id = "aadd_region" name = "aadd_region" class="form-control show-tick" data-live-search="true" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Select Policy Number --</option>
                                                        <option value = "I">12345</option>
                                                        <option value = "II">67890</option>
                                                        <option value = "III">111111</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <label><small>Client:</small></label>
                                            <input id = "aCLAIM_type_name" name = "aCLAIM_type_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <label><small>Bank:</small></label>
                                            <input id = "aCLAIM_type_name" name = "aCLAIM_type_name" type="text" class="form-control" pattern="[A-Za-z'-]" disabled="disable" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <label><small>Payment for Check Number:</small></label>
                                            <select id = "aadd_region" name = "aadd_region" class="form-control show-tick" data-live-search="true" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Select Policy Number --</option>
                                                        <option value = "I">12345</option>
                                                        <option value = "II">67890</option>
                                                        <option value = "III">111111</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <label><small>Amount Paid:</small></label>
                                            <input id = "aCLAIM_type_name" name = "aCLAIM_type_name" type="number" min="1" class="form-control" pattern="[A-Za-z'-]" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="button" class="btn btn-block bg-green waves-effect left" >
                                        <span style="font-size: 15px;"> UPDATE CHECK VOUCHER</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAYMENT DETAILS -->
                <!-- BREAKDOWN -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>BREAKDOWN OF PAYMENT</h2>
                        </div>
                        <div class="body">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="date_created"><small>Check Voucher No: </small></label> <!-- AUTO GENERATED -->
                                    <small><input type="text" id="date_created" class="form-control" readonly="true"></small>
                                </div>
                            </div>
                            
                            <div class="body table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Check No.</th>
                                            <th>Bank</th>
                                            <th>Due Date</th>
                                            <th>Amount Due</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>003234543</td>
                                            <td>Banco De Oro - Antipolo City</td>
                                            <td>July 13, 2017</td>
                                            <td>5, 000.00</td>
                                            <td><span class="label bg-green">paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>003234543</td>
                                            <td>Banco De Oro - Antipolo City</td>
                                            <td>August 13, 2017</td>
                                            <td>5, 000.00</td>
                                            <td><span class="label bg-red">late</span></td>
                                        </tr>
                                        <tr>
                                            <td>003234543</td>
                                            <td>Banco De Oro - Antipolo City</td>
                                            <td>September 13, 2017</td>
                                            <td>5, 000.00</td>
                                            <td><span class="label bg-blue">to be paid</span></td>
                                        </tr>
                                        <tr></tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b style="color: red">15, 000.00</b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# BREAKDOWN -->
            </div>
        </div>
    </section>

@endsection