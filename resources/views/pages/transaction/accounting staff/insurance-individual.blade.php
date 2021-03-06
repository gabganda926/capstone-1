@extends('master2')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('transIns','active')

@section('transInsInd', 'active')

@section('body')

    <section class="content">
    <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b></h2>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Insurance Accounts - Individual Client</h3>
                            <ul class="header-dropdown m-r--5">
                                <li><button type="button" class="btn bg-red waves-effect right" style="position: right;" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/insurance-expiring-accounts-individual') }}';" data-toggle="tooltip" data-placement="bottom" title="View expiring accounts">
                                    <i class="material-icons">feedback</i><span style="font-size: 15px;"></span>
                                </button></li>
                            </ul>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Insurance Company</th>
                                        <th>Sales Agent</th>
                                        <th>SOI</th> <!-- START OF INSURANCE -->
                                        <th>EOI</th> <!-- END OF INSURANCE -->
                                        <th class="col-md-1">Insurance Status</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></th>
                                        <td>Rola</td>
                                        <td>Ma. Gabriella</td>
                                        <td>Tan</td>
                                        <td>FPG Insurance</td>
                                        <td>AGENT</td>
                                        <td>Mar-11-2017</td>
                                        <td>Mar-11-2018</td>
                                        <td><span class="label bg-orange">on payment</span></td>
                                        <td><button type="button" class="btn bg-light-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/insurance-details-individual') }}';" data-toggle="tooltip" data-placement="left" title="View account details."><i class="material-icons">remove_red_eye</i>
                                                </button></td>
                                        <!-- <span class="label bg-red">expiring</span> -->
                                        <!-- <span class="label bg-green">active</span> -->
                                    </tr>

                                    <tr>
                                        <th><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></th>
                                        <td>Rola</td>
                                        <td>Ma. Gabriella</td>
                                        <td>Tan</td>
                                        <td>FPG Insurance</td>
                                        <td>AGENT</td>
                                        <td>Mar-11-2017</td>
                                        <td>Mar-11-2018</td>
                                        <td><span class="label bg-green">active</span><br/><span class="label bg-red">expiring</span></td>
                                        <td><button type="button" class="btn bg-light-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/insurance-details-individual') }}';" data-toggle="tooltip" data-placement="left" title="View account details."><i class="material-icons">remove_red_eye</i>
                                                </button></td>
                                        <!-- <span class="label bg-red">expiring</span> -->
                                        <!-- <span class="label bg-green">active</span> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>

@endsection
