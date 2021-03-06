@extends('master2')

@section('title','Payment - Transaction| i-Insure')

@section('transPayment','active')

@section('transOnlinePayment','active')

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
                        <li><a href="javascript:void(0);"><i class="material-icons">home</i> Payment</a></li>
                    </ol>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Online Payments </h3>
                        <ul class="header-dropdown m-r--5">
                                <li><button type="button" class="btn bg-blue-grey waves-effect" style="position: right;" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/payment-online-auto-reply') }}';" data-toggle="tooltip" data-placement="bottom" title="View auto-reply settings">
                                            <i class="material-icons">update</i><span style="font-size: 15px;">
                                        </button></li>
                            </ul>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th class="col-md-2">Date</th>
                                        <th class="col-md-2">Policy Number</th>
                                        <th class="col-md-2">Client</th>
                                        <th>Check Number</th>
                                        <th>Amount</th>
                                        <th class="col-md-1">Attached File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>January 18, 2017</td>
                                        <td>2014-MCAR-00</td>
                                        <td>Rola, Ma. Gabriella Tan</td>
                                        <td>23894938274</td>
                                        <td>Php 9,876.12</td>
                                        <td><button type="button" class="btn bg-blue waves-effect" data-toggle="modal" data-target="#attachedImage">View
                                        </button></td>
                                        <td><button type="button" class="btn bg-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/accounting-staff/payment-view') }}';" style="position: right;"  data-toggle="tooltip" data-placement="bottom" title="View Details">
                                            <i class="material-icons">security</i><span style="font-size: 15px;"></span>
                                        </button></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View INST MODAL-->
              <div class="modal fade" id="attachedImage" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg animated zoomInRight active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-view">
                            <h4><br/>DEPOSIT SLIP
                            </h4>
                        </div><br/>
                        <div class="modal-body">
                            <img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:780px;height:450px;">
                        </div>
                        <div class="modal-footer js-sweetalert">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# VIEW INST MODAL -->
    </section>

@endsection