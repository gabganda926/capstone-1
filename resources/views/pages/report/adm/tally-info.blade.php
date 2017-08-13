@extends('master')

@section('title','Tally Report | i-Insure')

@section('reports','active')

@section('reportTally','active')

@section('body')

    <section class="content">
        <button type="button" class="btn bg-teal waves-effect left" style="float: left; margin-left: 15px;" onclick="window.document.location='../../transaction/adm/tally';">
        <i class="material-icons">backspace</i><span style="font-size: 15px;"> BACK</span>
    </button>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Tally Summary</h3>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <div class="col-md-2" style="margin-bottom: 0px;"></div>
                            <div class="col-md-4" style="margin-bottom: 0px;"><h4><button type="button" class="btn-xs bg-red waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/tally-cheques-history';" data-toggle="tooltip" data-placement="bottom" title="View History">
                                    <i class="material-icons">track_changes</i><span style="font-size: 15px;">
                                </button> Cheques Payable </h4></div>
                            <div class="col-md-2" style="margin-bottom: 0px;"></div>
                            <div class="col-md-4" style="margin-bottom: 0px;"><h4><button type="button" class="btn-xs bg-red waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/tally-payment-history';" data-toggle="tooltip" data-placement="bottom" title="View History">
                                    <i class="material-icons">track_changes</i><span style="font-size: 15px;">
                                </button> Payment </h4></div>
                        <div class="body table-responsive">
                            <table class="">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">Cheque #</th>
                                        <th>Bank</th>
                                        <th>Due Date</th>
                                        <th>Amount</th>
                                        <th class="col-md-1">Payment #</th>
                                        <th>Bank</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th class="col-md-1">Match?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0003795067</td>
                                        <td>BDO ANTIPOLO</td>
                                        <td>Nov-28-2016</td>
                                        <td>Php 5,919.63</td>
                                        <td>PAY-12937</td>
                                        <td>BDO ANTIPOLO</td>
                                        <td>Nov-27-2016</td>
                                        <td>Php 5,919.63</td>
                                        <td><input type="checkbox" id="1" class="filled-in chk-col-green checkCheckbox"/><label for="1"></label></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br/><br/><br/>
                            <label>Sent by: <b>Rola, Ma. Gabriella T.</b></label>
                            <label>Date: <b>Mar-09-2017 (Tuesday, 3:04:23PM)</b></label>
                            <br/><br/><br/><br/>
                                <button type="button" class="btn bg-teal waves-effect right" onclick="window.document.location='../../transaction/adm/tally';">
                                   <span style="font-size: 15px;"> FINISH</span>
                                </button> 
                            </div>
                        </div>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>

@endsection
