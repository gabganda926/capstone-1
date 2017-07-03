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
                        <h3> Transmit Documents </h3>
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
                   
                            <a class="btn bg-pink waves-effect m-b-15 right" role="button" data-toggle="collapse" href="#step2" aria-expanded="false"
                               aria-controls="collapseExample">
                                NEXT
                            </a><div class="divider" style="margin-bottom:5%;"></div>
                            <div class="collapse" id="step2">
                             
                            <br/><br/>
                                <div class="well">
                                    <div class="row clearfix">
                                    <h2>Document Selection</h2>
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="card">
                        <div class="header">
                            <h2>Client's Request</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1">#</th>
                                            <th>Document</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cheque Voucher (Client's Copy)</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Insurance Form</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cheque Voucher (Bank's copy)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <div class="card">
                        <div class="header">
                            <h2>Select documents</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1"></label></th>
                                            <th>Document</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="col-md-1"><input type="checkbox" id="2" class="filled-in chk-col-green checkCheckbox"><label for="2"></label></th>
                                            <td>Cheque Voucher (Client's Copy)</td>
                                        </tr>
                                        <tr>
                                            <th class="col-md-1"><input type="checkbox" id="3" class="filled-in chk-col-green checkCheckbox"><label for="3"></label></th>
                                            <td>Insurance Form</td>
                                        </tr>
                                        <tr>
                                            <th class="col-md-1"><input type="checkbox" id="4" class="filled-in chk-col-green checkCheckbox"><label for="4"></label></th>
                                            <td>Cheque Voucher (Bank's copy)</td>
                                        </tr>
                                        <tr>
                                            <th class="col-md-1"><input type="checkbox" id="5" class="filled-in chk-col-green checkCheckbox"><label for="5"></label></th>
                                            <td>Policy Receipt</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                                <br/>
                                </div><br/><br/>
                                <a class="btn bg-pink waves-effect m-b-15 right" role="button" data-toggle="collapse" href="#step3" aria-expanded="false"
                               aria-controls="collapseExample">
                                NEXT
                            </a><div class="divider" style="margin-bottom:5%;"></div>
                            </div>
                            <div class="collapse" id="step3">
                            <br/>
                            <br/><br/>
                                <div class="well">
                                    <h2><b>Assign Courier</b></h2>
                                <br/>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <label>Choose available courier: </label>
                                        <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true">
                                                <option value = "bdo">Dela Cruz, Lyndan Pol</option>
                                                <option value = "bdo">Pery, Roy Christian</option>
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                            </div>
                                </div><br/><br/>
                                <button type="button" class="btn bg-teal waves-effect right" onclick="window.document.location='../../transaction/adm/transmittal';">
                                   <span style="font-size: 15px;"> FINISH</span>
                                </button> 
                                <div class="divider" style="margin-bottom:5%;"></div>
                            </div>
                        </div> <!-- end of body -->
                    </div> <!-- end of card -->
                </div>
            </div>
        </div>
    </section>
    
@endsection
