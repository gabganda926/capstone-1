@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transTrans','active')

@section('body')

    <section class="content">
        <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b></h2>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Transmittal of Documents </h3>
                        <small>Click a specific record in the table to view more details.</small>
                            <ul class="header-dropdown m-r--5">
                                <li><button type="button" class="btn bg-teal waves-effect right" style="position: right;" onclick="window.document.location='../../transaction/adm/transmittal-documents';" data-toggle="tooltip" data-placement="top" title="Transmit documents">
                                    <i class="material-icons">local_shipping</i><span style="font-size: 15px;">
                                </button></li>
                                <li><button type="button" class="btn bg-green waves-effect right" style="position: right;" onclick="window.document.location='../../transaction/adm/transmittal-request';" data-toggle="tooltip" data-placement="top" title="View transmittal requests">
                                    <i class="material-icons">assignment</i><span style="font-size: 15px;">
                                </button></li>
                            </ul>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Transmittal #</th>
                                        <th>Client</th>
                                        <th>Courier</th>
                                        <th class="col-md-2">Date Started</th>
                                        <th class="col-md-2">Last Update</th>
                                        <th class="col-md-1">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr onclick="window.document.location='../../transaction/adm/transmittal-info-approved';" style="cursor: pointer;">
                                        <th>TR-10273-AB</th>
                                        <td>Rola, Ma. Gabriella</td>
                                        <td>Avellaneda, Marynel</td>
                                        <td>March 03, 2017 (Thursday, 3:05:10PM)</td>
                                        <td>March 05, 2017 (Saturday, 7:12:08PM)</td>
                                        <td><span class="label bg-green">processing</span></td>
                                    </tr>
                                    <tr onclick="window.document.location='../../transaction/adm/transmittal-info-approved';" style="cursor: pointer;">
                                        <th>TR-10283-AB</th>
                                        <td>Bukid, Gerald</td>
                                        <td>Franco, Edgardo</td>
                                        <td>March 03, 2017 (Thursday, 3:05:10PM)</td>
                                        <td>March 05, 2017 (Saturday, 7:12:08PM)</td>
                                        <td><span class="label bg-red">cancelled</span></td>
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
