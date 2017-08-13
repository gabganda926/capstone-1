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
                        <h3> Payment Details </h3>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3> Review Coverage </h3>
                                <fieldset>
                                    <div class="body table-responsive">
                                    <button type="button" class="btn btn-lg btn-block bg-orange waves-effect" onclick="window.document.location='{{ URL::asset('/admin/transaction/accounting-staff/insure-client') }}';">
                                                    <span>CHANGE COVERAGE</span> <!-- MAG OOPEN DAPAT SA NEW TAB UNG PDF NG POLICY RECEIPT HUHU -->
                                                    </button><br/><br/>
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-6">Comprehensive Coverage</th>
                                                    <th class="col-md-3">Coverage</th>
                                                    <th class="col-md-3">Premium</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Loss and Damage (Including Theft)</td>
                                                    <td>1,133,000.00</td>
                                                    <td>28,342.16</td>
                                                </tr>

                                                <tr>
                                                    <td>Third Party Property Damage</td>
                                                    <td>100,000.00</td>
                                                    <td>465.00</td>
                                                </tr>

                                                <tr>
                                                    <td>Personal Accident (3 persons - 10,000)</td>
                                                    <td>1,133,000.00</td>
                                                    <td>28,342.16</td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td>Documentary Stamps</td>
                                                    <td></td>
                                                    <td>3,772.45</td>
                                                </tr>

                                                <tr>
                                                    <td>VAT</td>
                                                    <td></td>
                                                    <td>3,621.56</td>
                                                </tr>

                                                <tr>
                                                    <td>Local Government Tax</td>
                                                    <td></td>
                                                    <td>60.36</td>
                                                </tr>

                                                <tr>
                                                    <td><b>Total Net Premium</b></td>
                                                    <td></td>
                                                    <td><b style="color: red">37, 634.00</b></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br/><br/>

                                    <br/>
                                </fieldset>

                                <h3>Mode of Payment</h3>
                                <fieldset>                                               
                                        <div class="demo-radio-button" style="text-align: center">
                                            <div class="btn-group btn-group-justified" role="group">
                                                <a class="btn btn-lg bg-green waves-effect" data-toggle="collapse" data-target="#cash">
                                                <i class="material-icons">attach_money</i>
                                                <span>CASH</span>
                                                </a> <!-- PAG PUMILI DITO, MAHA-HIDE UNG BUTTON. PAG KINLOSE UNG PINILI, LALABAS ULIT TONG CHOICES -->
                                            
                                                <a class="btn btn-lg bg-deep-orange waves-effect" data-toggle="collapse" data-target="#installment">
                                                <i class="material-icons">credit_card</i>
                                                <span>INSTALLMENT</span>
                                                </a>
                                            </div>
                                        </div><br/>

                                        <div class="collapse fade" id="installment" role="dialog">
                                            <div class="card">
                                                <a class="btn waves-effect" data-toggle="collapse" data-target="#installment" style="float: right;">
                                                <i class="material-icons">close</i>
                                                </a>

                                                <h1 style="text-align: center">INSTALLMENT</h1>
                                                <div class="body">
                                                    <div class="body table-responsive">
                                                    <div class="row clearfix">
                                                        <div class="col-md-6">
                                                            <label><small>Bank :</small></label>
                                                                <select id = "vehicle_type" name = "vehicle_type" class="selectpicker" data-live-search="true" >
                                                                  <option val="111">Banco De Oro - Antipolo City</option>
                                                                  <option val="12">Banco De Oro - Mandaluyong City</option>
                                                                  <option val="1asa">Landbank - Pasay City</option>
                                                                </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label><small>Installment Type :</small></label>
                                                                <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                                  <option selected value = "" style = "display: none;">-- Select Installment Type --</option>
                                                                  <option val="111">Banco De Oro - Antipolo City</option>
                                                                  <option val="12">Banco De Oro - Mandaluyong City</option>
                                                                  <option val="1asa">Landbank - Pasay City</option>
                                                                </select><br/><br/>
                                                        </div>
                                                    </div>
                                                        
                                                        <h4 style="text-align: center">Breakdown of Payment<br/><br/></h4>
                                                        <div class="row clearfix">
                                                            <div class="col-md-2">
                                                               <label for="date_created"><small>Check Voucher No: </small></label> <!-- AUTO GENERATED -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <small><input type="text" id="date_created" class="form-control" readonly="true"></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-md-4">Check No.</th>
                                                                    <th class="col-md-3">Bank</th>
                                                                    <th class="col-md-3">Due Date</th>
                                                                    <th class="col-md-2">Amount Due</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>003234543</td>
                                                                    <td>Banco De Oro - Antipolo City</td>
                                                                    <td>July 13, 2017</td>
                                                                    <td>5, 000.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>003234543</td>
                                                                    <td>Banco De Oro - Antipolo City</td>
                                                                    <td>August 13, 2017</td>
                                                                    <td>5, 000.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>003234543</td>
                                                                    <td>Banco De Oro - Antipolo City</td>
                                                                    <td>September 13, 2017</td>
                                                                    <td>5, 000.00</td>
                                                                </tr>
                                                                <tr></tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><b style="color: red">15, 000.00</b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <button type="button" class="btn btn-lg btn-block bg-blue waves-effect" onclick=" window.open('{{ URL::asset ('/admin/pdf/breakdown-payment') }}')">
                                                    <span>GENERATE PDF</span> <!-- MAG OOPEN DAPAT SA NEW TAB UNG PDF NG CV HUHU -->
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="collapse fade" id="cash" role="dialog">
                                            <div class="card">
                                                <a class="btn waves-effect" data-toggle="collapse" data-target="#cash" style="float: right;">
                                                <i class="material-icons">close</i>
                                                </a>
                                                <h1 style="text-align: center">CASH</h1>
                                                <div class="body">
                                                    <div class="body table-responsive">
                                                        <div class="row clearfix">
                                                            <div class="col-md-3">
                                                               <label for="date_created">Check Voucher No: </label> <!-- AUTO GENERATED -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <small><input type="text" id="date_created" class="form-control" readonly="true"></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-md-3">Check No.</th>
                                                                    <th class="col-md-2">Date</th>
                                                                    <th class="col-md-2">Amount Due</th>
                                                                    <th>Amount Paid</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>003234543</td>
                                                                    <td>July 13, 2017</td>
                                                                    <td>28,342.16</td>
                                                                    <td><input type="text" id="date_created" class="form-control"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <button type="button" class="btn btn-lg btn-block bg-blue waves-effect">
                                                    <span>GENERATE POLICY RECEIPT</span> <!-- MAG OOPEN DAPAT SA NEW TAB UNG PDF NG POLICY RECEIPT HUHU -->
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </fieldset>

                                <h3>Summary</h3>
                                <fieldset>
                                <h3> <small><b>INSURANCE DETAILS</b></small></h3>
                                <div class="row clearfix" style="text-align: center;">
                                        <br/><br/>
                                        <div class="col-md-5">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                    <label><small>Client Name:</small></label>
                                                    <input id = "aclient_first_name" name = "aclient_first_name" type="text" class="form-control" readonly="true" value="Rola, Ma. Gabriella T.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                <label><small>Policy Number: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="MCAR 2013-9622-17">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                <label><small>Insurance Company: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="FPG Insurance">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="row clearfix" style="text-align: center;">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                <label><small>Date Issued: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="March 17 2017, Wednesday, 9:07AM">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                <label><small>Inception Date: </small></label>
                                                    <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="June 17 2017 - June 17 2018">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="row clearfix" style="text-align: center;">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                <label><small>Vehicle Type:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="SUV">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                <label><small>Vehicle Make:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="TOYOTA">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                <label><small>Vehicle Model:</small></label>
                                                    <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true" value="2017 FORTUNER 4X2 2.4L DSL A/T S4">
                                                </div><br/><br/><br/>
                                            </div>
                                        </div>
                                </div>

                                <h3> <small><b>PAYMENT DETAILS</b></small></h3>
                                <div class="form-group">
                                    <input type="radio" name="gender" id="male" class="with-gap">
                                    <label for="male">Cash</label>

                                    <input type="radio" name="gender" id="female" class="with-gap">
                                    <label for="female" class="m-l-20">Installment</label>
                                </div>
                                
                                <div class="row clearfix" style="text-align: center;">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                    <label><small>Bank: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                    <label><small>Installment Type: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group form-float">
                                                <div class="form-line focused success">
                                                    <label><small>Total Net Premium: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true" value="">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </fieldset>
                                </form>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>

@endsection