@extends('master')

@section('title','Insurance Accounts - Transaction| i-Insure')

@section('trans','active')

@section('transTrans','active')

@section('body')

    <section class="content">
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
                                <h3><br/> <small><b>Transmittal Form</b></small></h3>
                                <br/>
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
                                    
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input id = "emp_middle_name" name = "emp_middle_name" type="text" class="form-control" >
                                                <label class="form-label">Address</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row clearfix">
                                    <div class="col-md-6">
                                        <label>Unit Details: </label>
                                        <select class="form-control show-tick" multiple="multiple" data-live-search="true">
                                            <optgroup label="Vehicle Make" data-max-options="1">
                                            <option>Mitsubishi</option>
                                            <option>Toyota</option>
                                            <option>Honda</option>
                                            </optgroup>
                                            <optgroup label="Vehicle Model" data-max-options="1">
                                            <option>Wigo</option>
                                            <option>Lancer</option>
                                            </optgroup>
                                            </optgroup>
                                        </select> <br/><br/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Policy Number: </label>
                                        <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true">
                                                <option value = "bdo">MCAR-1234-0</option>
                                                <option value = "bdo">MCAR-5678-0</option>
                                                <option value = "bdo">MCAR-1272-0</option>
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                            </div>
                            <div class="row clearfix">
                                
                                    <div class="col-md-12">
                                        <label>Insurance Company: </label>
                                        <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true">
                                                <option value = "bdo">Commonwealth Insurance</option>
                                                <option value = "bdo">FPG Insurance</option>
                                                <option value = "bdo">People's General Insurance</option>
                                                <option value = "bdo">Standard Insurance</option>
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                            
                            </div>
                            <div class="row clearfix">
                                <div class="demo-masked-input">
                                    <div class="col-md-6">
                                        <b>Inception Date</b>
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
                                        <b>Time</b>
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
                                        <label>Bank: </label>
                                        <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true">
                                                <option value = "bdo">Banco De Oro</option>
                                                <option value = "bdo">Bank of the Philippines Islands</option>
                                                <option value = "bdo">Landbank</option>
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                            </div>
                                <div class="divider" style="margin-bottom:5%;"></div>
                            </div>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>

@endsection
