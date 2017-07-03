@extends('master')

@section('title','Claims - Transaction| i-Insure')

@section('trans','active')

@section('transClaims','active')

@section('body')

    <section class="content">
    <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b></h2>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Claims </h3>
                            <ul class="header-dropdown m-r--5">
                                <li><button type="button" class="btn bg-green waves-effect right" style="position: right;" onclick="window.document.location='../../transaction/adm/claim-request';" data-toggle="tooltip" data-placement="left" title="View claim requests">
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
                                        <th>Claim #</th>
                                        <th>Client concerned</th>
                                        <th>Status</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr onclick="window.document.location='../../transaction/adm/claim-info-approved';" style="cursor: pointer;">
                                        <th>CLM-10273-AB</th>
                                        <td>Rola, Ma. Gabriella</td>
                                        <td><span class="label bg-orange">on payment</span></td>
                                        <td><button type="button" class="btn bg-teal waves-effect" style="position: right;" onclick="window.document.location='../../transaction/adm/claim-progress';" data-toggle="tooltip" data-placement="bottom" title="Update Progress">
                                    <i class="material-icons">track_changes</i><span style="font-size: 15px;">
                                </button></td>
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
