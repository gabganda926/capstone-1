@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transTrans','active')

@section('body')

    <section class="content">
        <button type="button" class="btn bg-teal waves-effect left" style="float: left; margin-left: 15px;" onclick="window.document.location='../../transaction/adm/transmittal';">
        <i class="material-icons">backspace</i><span style="font-size: 15px;"> BACK</span>
    </button>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Transmittal Requests </h3>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Request #</th>
                                        <th>Client</th>
                                        <th>Date Received</th>
                                        <th class="col-md-1">Status</th>
                                        <th char="col-md-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th onclick="window.document.location='../../transaction/adm/transmittal-info-request';" style="cursor: pointer;">REQ-10273-AB</th>
                                        <td onclick="window.document.location='../../transaction/adm/transmittal-info-request';" style="cursor: pointer;">Rola, Ma. Gabriella</td>
                                        <td onclick="window.document.location='../../transaction/adm/transmittal-info-request';" style="cursor: pointer;">March 20, 2017 (Monday, 3:05:10PM)</td>
                                        <td onclick="window.document.location='../../transaction/adm/transmittal-info-request';" style="cursor: pointer;"><span class="label bg-blue">new</span></td>
                                        <td><button type="button" class="btn bg-blue waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/transmittal-validate';" data-toggle="tooltip" data-placement="bottom" title="Validate">
                                    <i class="material-icons">security</i><span style="font-size: 15px;">
                                </button>
                                <button type="button" class="btn bg-green waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/transmittal-request';" data-toggle="tooltip" data-placement="bottom" title="Accept">
                                    <i class="material-icons">thumb_up</i><span style="font-size: 15px;">
                                </button>
                                <button type="button" class="btn bg-red waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/transmittal-request';" data-toggle="tooltip" data-placement="bottom" title="Reject">
                                    <i class="material-icons">thumb_down</i><span style="font-size: 15px;">
                                </button> 
                                </td>
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
