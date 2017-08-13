@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transComplaint','active')

@section('body')

    <section class="content">
    <h2 style="text-align: center"> Welcome to <b style="color: orange;"> i-Insure </b><br/>
    <small><label id="demonew"></small></label><br/>
    <small><label id="demo"></label></small>
    <label></label>
        <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10) {
          dd='0'+dd
        } 

        if(mm<10) {
          mm='0'+mm
        } 

        today = mm+'/'+dd+'/'+yyyy+' - <?php 
    $today = date("D M j Y"); 

    echo $today; 
    ?>';
        document.getElementById("demonew").innerHTML = today;
        var myVar=setInterval(function(){myTimer()},1000);

        function myTimer() {
            var d = new Date();
            document.getElementById("demo").innerHTML = d.toLocaleTimeString();
        }
        </script>
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
                        <h3> Complaint List </h3>
                            <ul class="header-dropdown m-r--5">
                                <li><button type="button" class="btn bg-gray waves-effect" style="position: right;" onclick="window.document.location='{{ URL::asset('admin/transaction/adm/complaint-ended') }}';" data-toggle="tooltip" data-placement="bottom" title="View Ended Complaints">
                                            <i class="material-icons">track_changes</i><span style="font-size: 15px;">
                                        </button></li>
                                <li><button type="button" class="btn bg-blue-grey waves-effect" style="position: right;" onclick="window.document.location='{{ URL::asset('admin/transaction/adm/complaint-auto-reply') }}';" data-toggle="tooltip" data-placement="bottom" title="View auto-reply settings">
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
                                        <th>Complaint #</th>
                                        <th>Complaint Type</th>
                                        <th class="col-md-12">Complaint Details</th>
                                        <th>Complainant</th>
                                        <th class="col-md-2">Date Sent</th>
                                        <th class="col-md-1">Status</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>COMP-10273-AB</td>
                                        <td>Service Issue</td>
                                        <td>yung ano kasi tapos inano ung ano ng ano tapos naano ung ano</td>
                                        <td>Rola, Ma. Gabriella</td>
                                        <td>March 05, 2017 (Saturday, 7:12:08PM)</td>
                                        <td><span class="label bg-blue">new</span></td>
                                        <td><button type="button" class="btn bg-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/adm/complaint-details') }}';" style="position: right;"  data-toggle="tooltip" data-placement="left" title="View Details">
                                            <i class="material-icons">security</i><span style="font-size: 15px;">
                                        </button>
                                        <button type="button" class="btn bg-green waves-effect" style="position: right;" data-toggle="tooltip" data-placement="left" title="Accept">
                                            <i class="material-icons">thumb_up</i><span style="font-size: 15px;">
                                        </button>
                                        <button type="button" class="btn bg-red waves-effect" style="position: right;" data-toggle="tooltip" data-placement="left" title="Reject">
                                            <i class="material-icons">thumb_down</i><span style="font-size: 15px;">
                                        </button> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>COMP-10273-AB</td>
                                        <td>Service Issue</td>
                                        <td>yung ano kasi tapos inano ung ano ng ano tapos naano ung ano</td>
                                        <td>Rola, Ma. Gabriella</td>
                                        <td>March 05, 2017 (Saturday, 7:12:08PM)</td>
                                        <td><span class="label bg-orange">action ongoing</span>
                                            <div id = "stats"><select id = "days" name = "days" class="form-control show-tick">
                                                <option selected value = "" style = "display: none;">-- Select Status --</option>
                                                <option value="hehe">lalabas lang to pag kinlick ung update</option>
                                                <option value = "bg-orange">action ongoing</option>
                                                <option value = "bg-red">rejected</option>
                                                <option value = "bg-green">settled</option>
                                            </select></div>
                                            <button id="statsave" type="button" class="btn bg-green btn-block waves-effect" onclick="
                                            $('#stats').hide(200);
                                            $('#statsave').hide(200);">SAVE
                                            </button>
                                        </td>
                                        <td><button type="button" class="btn bg-blue waves-effect" onclick="window.document.location='{{ URL::asset('admin/transaction/adm/complaint-details') }}';" style="position: right;"  data-toggle="tooltip" data-placement="left" title="View Details">
                                            <i class="material-icons">security</i><span style="font-size: 15px;">
                                        </button>
                                        <button type="button" class="btn bg-teal waves-effect" style="position: right;" data-toggle="tooltip" data-placement="left" title="Update Status" onclick="
                                        $('#stats').show(200);
                                        $('#statsave').show(200);">
                                            <i class="material-icons">settings</i><span style="font-size: 15px;">
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

    <script type="text/javascript">
        window.onload = function(){
            document.getElementById("stats").style.display = 'none';
            document.getElementById("statsave").style.display = 'none';
        };
    </script>
@endsection
