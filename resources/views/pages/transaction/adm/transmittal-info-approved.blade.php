@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transTrans','active')

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
        <button type="button" class="btn bg-teal waves-effect left" style="float: left; margin-left: 9%;" onclick="window.document.location='../../transaction/adm/transmittal';">
        <i class="material-icons">backspace</i><span style="font-size: 15px;"> BACK</span>
    </button>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin-left: 8%">
                    <div class="card">
                        <div class="header">
                        <h3> Transmittal Information </h3>
                        </div>
                        <div class="body">
                            <form id="" name = "" action = "" method="POST">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <label>Client: </label>
                                        <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true">
                                                <option value = "bdo">Avellaneda, Marynel</option>
                                                <option value = "bdo">Bukid, Gerald</option>
                                                <option value = "bdo">Rola, Ma. Gabriella</option>
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-2">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label><small>Contact Details:</small></label>
                                                <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" placeholder="Telephone" readonly="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label><small>-</small></label>
                                                <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" placeholder="Cellphone Number" readonly="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>-</small></label>
                                                <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" placeholder="Cellphone Number (Alternate)" readonly="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>-</small></label>
                                                <input id = "aadd_blcknum" name = "aadd_blcknum" type="email" class="form-control" placeholder="Email" readonly="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label><small>Address:</small></label>
                                                <input id = "emp_middle_name" name = "emp_middle_name" type="text" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label><small>Policy Number:</small></label>
                                                <select id = "vehicle_type" name = "vehicle_type" class="form-control show-tick" data-live-search="true" >
                                                          <option selected value = "" style = "display: none;">---</option>
                                                        </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label>Insurance Company: </label>
                                                <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true">
                                                        <option value = "bdo">Commonwealth Insurance</option>
                                                        <option value = "bdo">FPG Insurance</option>
                                                        <option value = "bdo">People's General Insurance</option>
                                                        <option value = "bdo">Standard Insurance</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="demo-masked-input">
                                        <div class="col-md-6">
                                            <b>Date Created: </b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <b>Time: </b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">access_time</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control time12" placeholder="Ex: 11:59 pm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix"> 
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label><small>Documents to transmit:</small></label>
                                                <ul>
                                                    <li>DOCU 1</li>
                                                    <li>DOCU 2</li>
                                                    <li>DOCU 3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label><small>Courier:</small></label>
                                                <input id = "emp_middle_name" name = "emp_middle_name" type="text" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a type="button" class="btn bg-orange waves-effect right" onclick="">
                                    <span style="font-size: 15px;"> PRINT</span> <!-- MAG OOPEN SA NEW TAB UNG PDF VERSION -->
                                </a> 
                        </form>
                                <div class="divider" style="margin-bottom:5%;"></div>
                            </div>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>

@endsection
