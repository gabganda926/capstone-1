@extends('master2')

@section('title','Quotation List - Transaction | i-Insure')

@section('transQuote', 'active')

@section('transQuoteList', 'active')

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
                        <li><a href=""><i class="material-icons">home</i> Home</a></li>
                    </ol>
                </div>
            </div>
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Quotation Proposals List</h3>
                        <ul class="header-dropdown m-r--5">
                                <li><button type="button" class="btn bg-blue-grey waves-effect" style="position: right;" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/quotation-online-auto-reply') }}';" data-toggle="tooltip" data-placement="bottom" title="View auto-reply settings">
                                            <i class="material-icons">update</i><span style="font-size: 15px;">
                                        </button></li>
                            </ul>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        
                        <div class="body">
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#individualtab" data-toggle="tab">INDIVIDUAL</a></li>
                                <li role="presentation"><a href="#company" data-toggle="tab">COMPANY</a></li>
                            </ul>

                            <div class="tab-content">
                                <!-- INDIVIDUAL -->
                                <div role="tabpanel" class="tab-pane fade in active" id="individualtab"> 
                                    <div class="body table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Date Submitted</th>
                                                    <th>Last Update</th>
                                                    <th>Name</th>
                                                    <th>Contact Details</th>
                                                    <th>Unit Details</th>
                                                    <th>Total Premium</th>
                                                    <th class="col-md-1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="label bg-green">approved - manager</td>
                                                    <td>August 09, 2017</td>
                                                    <td>August 12, 2017</td>
                                                    <td>Rola, Ma. Gabriella Tan </td>
                                                    <td><ul>
                                                        <li>123444</li>
                                                        <li>23221321</li>
                                                        <li>gbbaba@gmail.com</li>
                                                    </ul></td>
                                                    <td>2012 A6 QUATTRO V6 A/T 3.0</td>
                                                    <td>Php 40,000.00</td>
                                                    <td><button type="button" class="btn bg-light-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/quotation-individual-details') }}';" data-toggle="tooltip" data-placement="left" title="View details"><i class="material-icons">remove_red_eye</i>
                                                        </button>
                                                        <button type="button" class="btn bg-orange waves-effect" onclick="window.document.location='{{ URL::asset('') }}';" data-toggle="tooltip" data-placement="left" title="Ask for client's confirmartion"><i class="material-icons">question_answer</i>
                                                        </button>
                                                        <button type="button" class="btn bg-red waves-effect" onclick="window.document.location='{{ URL::asset('') }}';" data-toggle="tooltip" data-placement="left" title="Delete this quotation"><i class="material-icons">delete</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="label bg-blue">new</td>
                                                    <td>August 09, 2017</td>
                                                    <td>August 12, 2017</td>
                                                    <td>Rola, Ma. Gabriella Tan </td>
                                                    <td><ul>
                                                        <li>123444</li>
                                                        <li>23221321</li>
                                                        <li>gbbaba@gmail.com</li>
                                                    </ul></td>
                                                    <td>2012 A6 QUATTRO V6 A/T 3.0</td>
                                                    <td>Php 40,000.00</td>
                                                    <td><button type="button" class="btn bg-light-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/quotation-individual-details') }}';" data-toggle="tooltip" data-placement="left" title="View details"><i class="material-icons">remove_red_eye</i>
                                                        </button>
                                                        <button type="button" class="btn bg-green waves-effect" onclick="window.document.location='{{ URL::asset('') }}';" data-toggle="tooltip" data-placement="left" title="Forward to Manager"><i class="material-icons">forward</i>
                                                        </button>
                                                        <button type="button" class="btn bg-red waves-effect" onclick="window.document.location='{{ URL::asset('') }}';" data-toggle="tooltip" data-placement="left" title="Delete this quotation"><i class="material-icons">delete</i>
                                                        </button>
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="label bg-red">rejected - manager</td>
                                                    <td>August 09, 2017</td>
                                                    <td>August 12, 2017</td>
                                                    <td>Rola, Ma. Gabriella Tan </td>
                                                    <td><ul>
                                                        <li>123444</li>
                                                        <li>23221321</li>
                                                        <li>gbbaba@gmail.com</li>
                                                    </ul></td>
                                                    <td>2012 A6 QUATTRO V6 A/T 3.0</td>
                                                    <td>Php 40,000.00</td>
                                                    <td><button type="button" class="btn bg-light-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/quotation-individual-details') }}';" data-toggle="tooltip" data-placement="left" title="View details"><i class="material-icons">remove_red_eye</i>
                                                        </button>
                                                        <button type="button" class="btn bg-red waves-effect" onclick="window.document.location='{{ URL::asset('') }}';" data-toggle="tooltip" data-placement="left" title="Delete this quotation"><i class="material-icons">delete</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="label bg-orange">pending</td>
                                                    <td>August 09, 2017</td>
                                                    <td>August 12, 2017</td>
                                                    <td>Rola, Ma. Gabriella Tan </td>
                                                    <td><ul>
                                                        <li>123444</li>
                                                        <li>23221321</li>
                                                        <li>gbbaba@gmail.com</li>
                                                    </ul></td>
                                                    <td>2012 A6 QUATTRO V6 A/T 3.0</td>
                                                    <td>Php 40,000.00</td>
                                                    <td><button type="button" class="btn bg-light-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/quotation-individual-details') }}';" data-toggle="tooltip" data-placement="left" title="View details"><i class="material-icons">remove_red_eye</i>
                                                        </button>
                                                        </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- COMPANY -->
                                <div role="tabpanel" class="tab-pane fade" id="company"> 
                                    <div class="body table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Date Submitted</th>
                                                    <th>Last Update</th>
                                                    <th>Company Name</th>
                                                    <th>Contact Person</th>
                                                    <th>Contact Details</th>
                                                    <th>Unit Details</th>
                                                    <th>Total Premium</th>
                                                    <th class="col-md-1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="label bg-green">approved - client</td>
                                                    <td>August 09, 2017</td>
                                                    <td>August 12, 2017</td>
                                                    <td>ABC Corporation</td>
                                                    <td>Rola, Ma. Gabriella Tan </td>
                                                    <td><ul>
                                                        <li>123444</li>
                                                        <li>23221321</li>
                                                        <li>gbbaba@gmail.com</li>
                                                    </ul></td>
                                                    <td>2012 A6 QUATTRO V6 A/T 3.0</td>
                                                    <td>Php 40,000.00</td>
                                                    <td><button type="button" class="btn bg-light-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/quotation-company-details') }}';" data-toggle="tooltip" data-placement="left" title="View details"><i class="material-icons">remove_red_eye</i>
                                                        </button>
                                                        <button type="button" class="btn bg-green waves-effect" onclick="window.document.location='{{ URL::asset('') }}';" data-toggle="tooltip" data-placement="left" title="Insure client"><i class="material-icons">thumb_up</i>
                                                        </button>
                                                        <button type="button" class="btn bg-red waves-effect" onclick="window.document.location='{{ URL::asset('') }}';" data-toggle="tooltip" data-placement="left" title="Delete this quotation"><i class="material-icons">delete</i>
                                                        </button></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="label bg-red">cancelled</td>
                                                    <td>August 09, 2017</td>
                                                    <td>August 12, 2017</td>
                                                    <td>ABC Corporation</td>
                                                    <td>Rola, Ma. Gabriella Tan </td>
                                                    <td><ul>
                                                        <li>123444</li>
                                                        <li>23221321</li>
                                                        <li>gbbaba@gmail.com</li>
                                                    </ul></td>
                                                    <td>2012 A6 QUATTRO V6 A/T 3.0</td>
                                                    <td>Php 40,000.00</td>
                                                    <td><button type="button" class="btn bg-light-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/quotation-individual-details') }}';" data-toggle="tooltip" data-placement="left" title="View details"><i class="material-icons">remove_red_eye</i>
                                                        </button>
                                                        <button type="button" class="btn bg-red waves-effect" onclick="window.document.location='{{ URL::asset('') }}';" data-toggle="tooltip" data-placement="left" title="Delete this quotation"><i class="material-icons">delete</i>
                                                        </button>
                                                        </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- END OF TAB -->
                        </div>
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>

@endsection
