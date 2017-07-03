@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transComplaint','active')

@section('body')

    <section class="content">
        <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b></h2>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Complaint List </h3>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Complaint #</th>
                                        <th>Complaint Type</th>
                                        <th>Complainant</th>
                                        <th class="col-md-2">Date Sent</th>
                                        <th class="col-md-1">Status</th>
                                        <th class="col-md-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th onclick="window.document.location='../../transaction/adm/complaint-info';" style="cursor: pointer;">COMP-10273-AB</th>
                                        <td onclick="window.document.location='../../transaction/adm/complaint-info';" style="cursor: pointer;">Service Issue</td>
                                        <td onclick="window.document.location='../../transaction/adm/complaint-info';" style="cursor: pointer;">Rola, Ma. Gabriella</td>
                                        <td onclick="window.document.location='../../transaction/adm/complaint-info';" style="cursor: pointer;">March 05, 2017 (Saturday, 7:12:08PM)</td>
                                        <td onclick="window.document.location='../../transaction/adm/complaint-info';" style="cursor: pointer;"><span class="label bg-orange">action ongoing</span></td>
                                        <td><button type="button" class="btn bg-blue waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/complaint-validate';" data-toggle="tooltip" data-placement="bottom" title="Validate">
                                    <i class="material-icons">security</i><span style="font-size: 15px;">
                                </button>
                                <button type="button" class="btn bg-green waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/complaint';" data-toggle="tooltip" data-placement="bottom" title="Accept">
                                    <i class="material-icons">thumb_up</i><span style="font-size: 15px;">
                                </button>
                                <button type="button" class="btn bg-red waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/complaint';" data-toggle="tooltip" data-placement="bottom" title="Reject">
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
