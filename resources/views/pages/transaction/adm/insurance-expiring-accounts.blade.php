@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transIns','active')

@section('body')

    <section class="content">
    <button type="button" class="btn bg-teal waves-effect left" style="float: left; margin-left: 15px;" onclick="window.document.location='../../transaction/adm/insurance';">
        <i class="material-icons">backspace</i><span style="font-size: 15px;"> BACK</span>
    </button>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3> Expiring Accounts </h3>
                            <ul class="header-dropdown m-r--5">
                                <li><button type="button" class="btn bg-green waves-effect right" style="position: right;" onclick="window.document.location='../../transaction/adm/insurance-notification-list';" data-toggle="tooltip" data-placement="bottom" title="View sent notifications">
                                    <i class="material-icons">assignment_turned_in</i><span style="font-size: 15px;"></span>
                                </button></li>
                                <li><button type="button" class="btn bg-red waves-effect right" style="position: right;" onclick="window.document.location='../../transaction/adm/insurance-notify-client';" data-toggle="tooltip" data-placement="bottom" title="Notify client">
                                    <i class="material-icons">access_alarm</i><span style="font-size: 15px;"></span>
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
                                        <th>SOI</th> <!-- START OF INSURANCE -->
                                        <th>EOI</th> <!-- END OF INSURANCE -->
                                        <th class="col-md-1">Days left</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr onclick="window.document.location='../../transaction/adm/insurance-client-info-fpg';" style="cursor: pointer;">
                                        <th><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></th>
                                        <td>Bukid</td>
                                        <td>Gerald</td>
                                        <td>-</td>
                                        <td>FPG Insurance</td>
                                        <td>Mar-15-2017</td>
                                        <td>Mar-15-2018</td>
                                        <td>5</td>
                                    </tr>
                                    <tr onclick="window.document.location='../../transaction/adm/insurance-client-info-fpg';" style="cursor: pointer;">
                                        <th><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></th>
                                        <td>Rola</td>
                                        <td>Ma. Gabriella</td>
                                        <td>Tan</td>
                                        <td>FPG Insurance</td>
                                        <td>Mar-10-2016</td>
                                        <td>Mar-10-2017</td>
                                        <td>10</td>
                                    </tr>
                                    <tr onclick="window.document.location='../../transaction/adm/insurance-client-info-fpg';" style="cursor: pointer;">
                                        <th><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></th>
                                        <td>Avellaneda</td>
                                        <td>Marynel</td>
                                        <td>-</td>
                                        <td>Commonwealth Insurance</td>
                                        <td>Mar-01-2016</td>
                                        <td>Mar-01-2017</td>
                                        <td>20</td>
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
