@extends('master')

@section('title','Tally Report | i-Insure')

@section('reports','active')

@section('reportTally','active')

@section('body')

    <section class="content">
        <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b></h2>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Tally</h3>
                        <small>Click a specific record to view more details.</small>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Tally #</th>
                                        <th>Accounting Staff</th>
                                        <th>Date Sent</th>
                                        <th class="col-md-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th onclick="window.document.location='../../reports/adm/tally-info';" style="cursor: pointer;">TL-10273-AB</th>
                                        <td onclick="window.document.location='../../reports/adm/tally-info';" style="cursor: pointer;">Rola, Ma. Gabriella</td>
                                        <td onclick="window.document.location='../../reports/adm/tally-info';" style="cursor: pointer;">March 05, 2017 (Saturday, 7:12:08PM)</td>
                                        <td> <button type="button" class="btn bg-green waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/transmittal-request';" data-toggle="tooltip" data-placement="bottom" title="Accept">
                                    <i class="material-icons">thumb_up</i><span style="font-size: 15px;">
                                </button>
                                <button type="button" class="btn bg-red waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/transmittal-request';" data-toggle="tooltip" data-placement="bottom" title="Reject">
                                    <i class="material-icons">thumb_down</i><span style="font-size: 15px;">
                                </button> </td>
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
