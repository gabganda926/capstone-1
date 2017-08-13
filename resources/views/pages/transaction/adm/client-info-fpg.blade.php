@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transIns','active')

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
    <button type="button" class="btn bg-teal waves-effect left" style="float: left; margin-left: 15px;" onclick="window.document.location='/admin/transaction/insurance';">
        <i class="material-icons">backspace</i><span style="font-size: 15px;"> BACK</span>
    </button>
    <h3 style="text-align: center;"> Client's Insurance Profile </h3>
    <br/>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <div class="divider" style="margin-bottom:20px;"></div>
                        </div>
                        <div class="body">
                            <div class="body">
                                <form>
                                <img src="../../../image/insurance-company-logos/fpg.png"  alt="Compreline" style="position: absolute; top: 15px; right: 16px;" />

                                <h4 style="text-align: center;">MOTOR SCHEDULE</h4><br/>

                                <fieldset>
                                <div class="row clearfix">
                                    <div class="col-md-5">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>CLASS OF INSURANCE :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "CV">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>POLICY NUMBER :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "MCAR-052440">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>INSURED :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "Ma. Gabriella T. Rola">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>DATE :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "January 4, 2016">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>ADDRESS :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "Adress here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>PERIOD OF INSURANCE :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "FROM <time> <date> TO <time> <date>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>OCCUPATION :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </fieldset>

                                <fieldset>
                                <div class="row clearfix">
                                    <h5> SCHEDULED VEHICLE </h5>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Model :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Make :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Type of body :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Authorized Capacity :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Plate No. :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Serial/Chasis No. :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Motor number :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Seating Capacity :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Color :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>LTO File No. :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Unladen weight kgs :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Certificate of Cover No. :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Official Receipt No. :</small></label>
                                                <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "occupation here">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of row clearfix -->
                                </fieldset>

                                <fieldset>
                                    <h5> PREMIUMS </h5>
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <label><small>OWN DAMAGE</small></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "PHP 9, 023.36">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <label><small>THEFT</small></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "included">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <label><small>VTPL-BI</small></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <label><small>VTPL-PD</small></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "PHP 1, 245.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <label><small></small></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "PHP 420.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <label><small></small></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "classIns" name = "classIns" type="text" class="form-control"   disabled="disable" value = "PHP 156.87">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                </form>
                            </div>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>
@endsection
