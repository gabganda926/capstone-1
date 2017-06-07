@extends('master')

@section('title','Maintenance - Employee | CIMIS')

@section('maintenance','active')

@section('personnel','active')

@section('employee','active')

@section('body')
    <section class="content">
        <div class="container-fluid">
                        <!-- ADD EMPLOYEE MODAL -->
            <div class="collapse fade" id="addEmpModal" role="dialog">
                <div class="modal-dialog modal-lg animated zoomInLeft active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-add">
                            <h4><br/>CREATE NEW EMPLOYEE RECORD</h4>
                        </div>
                        <div class="modal-body">
                            <form id="emp_add" name = "emp_add" action = "employee/submit" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div><h3><small><b>PERSONAL INFORMATION</b></small></h3></div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div>
                                                <div class="body" align="center">
                                                    <div class="fallback">
                                                        <img id="addImg" src="#" alt="your image" style="height: 210px; width: 215px; border-style: solid; border-width: 2px;">
                                                    </div><br/>
                                                        <input id = "picture" name = "picture" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <br/><br/>
                                        <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label class="form-label">First Name</label>
                                                        <input id = "cPerson_first_name" name = "cPerson_first_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                     <label class="form-label">Middle Name</label>
                                                        <input id = "cPerson_middle_name" name = "cPerson_middle_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                     <label class="form-label">Last Name</label>
                                                        <input id = "cPerson_last_name" name = "cPerson_last_name" type="text" class="form-control">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                <label><small>Gender :</small></label>
                                                    <select id = "add_region" name = "add_region" class="form-control show-tick">
                                                  <option selected value = "" style = "display: none;">-- Gender --</option>
                                                        <option value = "I">Male</option>
                                                        <option value = "II">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Age :</small></label>
                                                        <input id = "aadd_district" name = "aadd_district" type="text" class="form-control" readonly="true"  >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                  <div class="form-group form-float">
                                                      <div class="form-line"> 
                                                              
                                                              <label><small>Birthmonth:</small></label>
                                                                  <select id = "add_region" name = "add_region" class="form-control show-tick" data-live-search="true">
                                                                <option selected value = "" style = "display: none;">-- Month --</option>
                                                                      <option value = "I">January</option>
                                                                      <option value = "II">February</option>
                                                                      <option value = "II">March</option>
                                                                      <option value = "II">April</option>
                                                                      <option value = "II">May</option>
                                                                      <option value = "II">June</option>
                                                                      <option value = "II">July</option>
                                                                      <option value = "II">August</option>
                                                                      <option value = "II">September</option>
                                                                      <option value = "II">October</option>
                                                                      <option value = "II">November</option>
                                                                      <option value = "II">December</option>
                                                                  </select>
                                                              
                                                      </div>
                                                  </div>
                                            </div> 
                                             <div class="col-md-2">
                                                  <div class="input-group spinner" data-trigger="spinner">
                                                      <div class="form-line">
                                                      <label><small>Birthdate: </small></label>
                                                          <input id="1" type="number" class="form-control text-center" min="1" max="31" data-rule="quantity">
                                                      </div>
                                                  </div>
                                              </div>  
                                              <div class="col-md-3">
                                                  <div class="input-group spinner" data-trigger="spinner">
                                                      <div class="form-line">
                                                      <label><small>Birthyear: </small></label>
                                                          <input id="2" type="number" class="form-control text-center" min="1800" max="2017" data-rule="quantity">
                                                      </div>
                                                  </div>
                                              </div>                            
                                        </div> <!-- end of rowclearfix -->
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Cellphone Number</label>
                                                        <input id = "cPerson_contact" name = "cPerson_contact" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Cellphone Number (Alternate)</label>
                                                        <input id = "cPerson_contact" name = "cPerson_contact" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Tel Num</label>
                                                        <input id = "cPerson_contact" name = "cPerson_contact" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">E-mail</label>
                                                        <input id = "cPerson_email" name = "cPerson_email" type="email" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                <label><small>Employee Role :</small></label>
                                                    <select id = "add_region" name = "add_region" class="form-control show-tick" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Employee Role --</option>
                                                        <option value = "I">Accounting Staff</option>
                                                        <option value = "II">Underwriter</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                            <div class="form-group form-float">
                                            <input type="checkbox" id="ppppp" name = "del_check" class="filled-in chk-col-green checkCheckbox"
                                                data-id=""/>
                                                <label for="ppppp">Sales Agent?</label>
                                            </div>
                                            </div>
                                        </div><br/>
                                <div><h3><small><b>SYSTEM ACCOUNT INFORMATION</b></small></h3></div>
                                    
                                        <div class="row clearfix">
                                                <div class="col-md-2 form-control-label">
                                                   <label for="date_created"><small>Username</small></label>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="date_created" class="form-control" value="auto generated dapat pero pwde iedit, combination ng pangalan at bday"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 form-control-label">
                                                    <label for="last_update"><small>Password</small></label>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="last_update" class="form-control" value="samesame"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br/>
                                    
                                <h3> <small><b>RESIDENTIAL ADDRESS</b></small></h3>
                                        <br/>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Blk&Lot/Bldg/Unit</label>
                                                        <input id = "add_blcknum" name = "add_blcknum" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Street</label>
                                                        <input id = "add_street" name = "add_street" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Subdivision</label>
                                                        <input id = "add_subdivision" name = "add_subdivision" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Barangay</label>
                                                        <input id = "add_brngy" name = "add_brngy" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">District</label>
                                                        <input id = "add_district" name = "add_district" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">City/Municipality</label>
                                                        <input id = "add_city" name = "add_city" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Province</label>
                                                        <input id = "add_province" name = "add_province" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <select id = "add_region" name = "add_region" class="form-control show-tick" data-live-search="true">
                                                  <option selected value = "" style = "display: none;">-- Select Region --</option>
                                                        <option value = "I">Region I</option>
                                                        <option value = "II">Region II</option>
                                                        <option value = "III">Region III</option>
                                                        <option value = "IV-A">Region IV-A</option>
                                                        <option value = "IV-B">Region IV-B</option>
                                                        <option value = "V">Region V</option>
                                                        <option value = "VI">Region VI</option>
                                                        <option value = "VII">Region VII</option>
                                                        <option value = "VIII">Region VIII</option>
                                                        <option value = "IX">Region IX</option>
                                                        <option value = "X">Region X</option>
                                                        <option value = "XI">Region XI</option>
                                                        <option value = "XII">Region XII</option>
                                                        <option value = "XIII">Region XIII</option>
                                                        <option value = "ARMM">Region ARMM</option>
                                                        <option value = "CAR">Region CAR</option>
                                                        <option value = "NCR">Region NCR</option>\
                                                </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Zip Code</label>
                                                        <input id = "add_zipcode" name = "add_zipcode" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <br/>
                                <br/><br/><br/>
                                <div class="col-md-4" style = "display: none;">
                                   <input id = "time" name = "time" type="text" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer js-sweetalert">
                            <button class="btn btn-primary waves-effect" type="button" onclick = "
                            document.getElementById('time').value = formatDate(new Date());
                            if($('#emp_add').valid())
                            {
                              swal({
                                title: 'Are you sure?',
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#DD6B55',
                                confirmButtonText: 'Continue',
                                cancelButtonText: 'Cancel',
                                closeOnConfirm: false,
                                closeOnCancel: false
                              },
                              function(isConfirm){
                                if (isConfirm) {
                                  $('#emp_add').submit();

                                    document.getElementById('emp_first_name').value = '';
                                    document.getElementById('emp_middle_name').value = '';
                                    document.getElementById('emp_last_name').value = '';
                                    document.getElementById('emp_contact').value = '';
                                    document.getElementById('emp_mail').value = '';

                                    document.getElementById('add_blcknum').value = '';
                                    document.getElementById('add_street').value = '';
                                    document.getElementById('add_subdivision').value = '';
                                    document.getElementById('add_brngy').value = '';
                                    document.getElementById('add_district').value = '';
                                    document.getElementById('add_city').value = '';
                                    document.getElementById('add_province').value = '';
                                    document.getElementById('add_region').value = '';
                                    $('#add_region').val('').change();
                                    document.getElementById('aadd_zipcode').value = '';
                                    $('#emp_type').val('').change();
                                } else {
                                    swal({
                                    title: 'Cancelled',
                                    type: 'warning',
                                    timer: 500,
                                    showConfirmButton: false
                                    });
                                }
                              });
                            }">SUBMIT</button>
                            <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#addEmpModal">CLOSE</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
          </div>
            <!-- #END OF MODAL -->

            <!-- VIEW EMP DETAILS MODAL -->
            <div class="collapse fade" id="largeModal" role="dialog">
                <div class="modal-dialog modal-lg animated zoomInRight active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-view">
                            <h4><br/>EMPLOYEE DETAILS
                            </h4>
                        </div><br/>
                        <button id = "Edit" style = "margin-left: 55em" type="button" class="btn btn-success btn-lg waves-effect"
                        onclick = "
                        document.getElementById('emp_view').action = 'employee/update';
                        $('#Edit').prop('disabled', true);
                        $('#Delete').prop('disabled', false);
                        $('#schange').show();
                        $('#aadd_blcknum').prop('disabled', false);
                        $('#aadd_street').prop('disabled', false);
                        $('#aadd_subdivision').prop('disabled', false);
                        $('#aadd_brngy').prop('disabled', false);
                        $('#aadd_district').prop('disabled', false);
                        $('#aadd_city').prop('disabled', false);
                        $('#aadd_province').prop('disabled', false);
                        $('#aadd_region').prop('disabled', false);
                        $('#aadd_zipcode').prop('disabled', false);
                        $('#aemp_first_name').prop('disabled', false);
                        $('#aemp_middle_name').prop('disabled', false);
                        $('#aemp_last_name').prop('disabled', false);
                        $('#aemp_mail').prop('disabled', false);
                        $('#aemp_contact').prop('disabled', false);
                        $('#apicture').prop('disabled', false);
                        $('#schange').html('Save Changes');
                        ">
                        <i class="material-icons">create</i>
                        <span>Edit</span>
                        </button>
                        <button id = "Delete" type="button" class="btn bg-red btn-lg waves-effect"
                        onclick = "
                        document.getElementById('emp_view').action = 'employee/delete';
                        $('#Edit').prop('disabled', false);
                        $('#Delete').prop('disabled', true);
                        $('#schange').show();
                        $('#aadd_blcknum').prop('disabled', true);
                        $('#aadd_street').prop('disabled', true);
                        $('#aadd_subdivision').prop('disabled', true);
                        $('#aadd_brngy').prop('disabled', true);
                        $('#aadd_district').prop('disabled', true);
                        $('#aadd_city').prop('disabled', true);
                        $('#aadd_province').prop('disabled', true);
                        $('#aadd_region').prop('disabled', true);
                        $('#aadd_zipcode').prop('disabled', true);
                        $('#aemp_first_name').prop('disabled', true);
                        $('#aemp_middle_name').prop('disabled', true);
                        $('#aemp_last_name').prop('disabled', true);
                        $('#aemp_mail').prop('disabled', true);
                        $('#aemp_contact').prop('disabled', true);
                        $('#apicture').prop('disabled', true);
                        $('#schange').html('Delete Record');
                        ">
                            <i class="material-icons">delete_sweep</i>
                            <span>Delete</span>
                        </button>  <br/>
                        <div class="modal-body">
                            <form id="emp_view" name = "emp_view" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                                <div class="col-md-1">
                                                   <label for="date_created"><small><small>Date Created</small></small></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="date_created" class="form-control" readonly="true"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="last_update"><small><small>Last Update</small></small></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="last_update" class="form-control" readonly="true"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="col-md-4" style = "display: none;">
                                 <input id = "aemp_id" name = "aemp_id" type="text" class="form-control">
                             </div>
                             <div class="col-md-4" style = "display: none;">
                                <input id = "pInfo_ID" name = "pInfo_ID" type="text" class="form-control">
                             </div>
                                <h3><small><b>PERSONAL INFORMATION</b></small></h3>
                                        <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div>
                                                <div class="body" align="center">
                                                    <div class="fallback">
                                                        <img id="addImg" src="#" alt="your image" style="height: 210px; width: 215px; border-style: solid; border-width: 2px;">
                                                    </div><br/>
                                                        <input id = "picture" name = "picture" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        </div> <!-- END OF ROW CLEARFIX -->
                                        <div class="row clearfix">
                                        <br/><br/>
                                        <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label><small>First Name:</small></label>
                                                        <input id = "cPerson_first_name" name = "cPerson_first_name" type="text" class="form-control" readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                     <label><small>Middle Name:</small></label>
                                                        <input id = "cPerson_middle_name" name = "cPerson_middle_name" type="text" class="form-control" readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                     <label><small>Last Name:</small></label>
                                                        <input id = "cPerson_last_name" name = "cPerson_last_name" type="text" class="form-control" readonly="true">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                <label><small>Gender :</small></label>
                                                    <select id = "add_region" name = "add_region" class="form-control show-tick" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Gender --</option>
                                                        <option value = "I">Male</option>
                                                        <option value = "II">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Age :</small></label>
                                                        <input id = "aadd_district" name = "aadd_district" type="text" class="form-control" readonly="true"   readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                  <div class="form-group form-float">
                                                      <div class="form-line"> 
                                                              
                                                              <label><small>Birthmonth:</small></label>
                                                                  <select id = "add_region" name = "add_region" class="form-control show-tick" data-live-search="true" readonly="true">
                                                                <option selected value = "" style = "display: none;">-- Month --</option>
                                                                      <option value = "I">January</option>
                                                                      <option value = "II">February</option>
                                                                      <option value = "II">March</option>
                                                                      <option value = "II">April</option>
                                                                      <option value = "II">May</option>
                                                                      <option value = "II">June</option>
                                                                      <option value = "II">July</option>
                                                                      <option value = "II">August</option>
                                                                      <option value = "II">September</option>
                                                                      <option value = "II">October</option>
                                                                      <option value = "II">November</option>
                                                                      <option value = "II">December</option>
                                                                  </select>
                                                              
                                                      </div>
                                                  </div>
                                            </div> 
                                             <div class="col-md-2">
                                                  <div class="input-group spinner" data-trigger="spinner">
                                                      <div class="form-line">
                                                      <label><small>Birthdate: </small></label>
                                                          <input id="1" type="number" class="form-control text-center" min="1" max="31" data-rule="quantity" readonly="true">
                                                      </div>
                                                  </div>
                                              </div>  
                                              <div class="col-md-3">
                                                  <div class="input-group spinner" data-trigger="spinner">
                                                      <div class="form-line">
                                                      <label><small>Birthyear: </small></label>
                                                          <input id="2" type="number" class="form-control text-center" min="1800" max="2017" data-rule="quantity" readonly="true">
                                                      </div>
                                                  </div>
                                              </div>                            
                                        </div> <!-- end of rowclearfix -->
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Cellphone Number:</small></label>
                                                        <input id = "cPerson_contact" name = "cPerson_contact" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Cellphone Number(Alternate):</small></label>
                                                        <input id = "cPerson_contact" name = "cPerson_contact" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Tel. Num.:</small></label>
                                                        <input id = "cPerson_contact" name = "cPerson_contact" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>E-mail:</small></label>
                                                        <input id = "cPerson_email" name = "cPerson_email" type="email" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                <label><small>Employee Role :</small></label>
                                                    <select id = "add_region" name = "add_region" class="form-control show-tick" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Employee Role --</option>
                                                        <option value = "I">Accounting Staff</option>
                                                        <option value = "II">Underwriter</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                            <div class="form-group form-float">
                                            <input type="checkbox" id="ppppp" name = "del_check" class="filled-in chk-col-green checkCheckbox"
                                                data-id=""/>
                                                <label for="ppppp">Sales Agent?</label>
                                            </div>
                                            </div>
                                        </div><br/>
                                        <div><h3><small><b>SYSTEM ACCOUNT INFORMATION</b></small></h3></div>
                                    
                                        <div class="row clearfix">
                                                <div class="col-md-2 form-control-label">
                                                   <label for="date_created"><small>Username</small></label>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="date_created" class="form-control" value="auto generated dapat pero pwde iedit, combination ng pangalan at bday"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 form-control-label">
                                                    <label for="last_update"><small>Password</small></label>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="last_update" class="form-control" value="samesame"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br/>
                                
                                        <h3> <small><b>RESIDENTIAL ADDRESS</b></small></h3>
                                        <br/>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Blk&Lot/Bldg/Unit: </small></label>
                                                        <input id = "add_blcknum" name = "add_blcknum" type="text" class="form-control" readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Street:</small></label>
                                                        <input id = "add_street" name = "add_street" type="text" class="form-control" readonly="true" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Subdivision:</small></label>
                                                        <input id = "add_subdivision" name = "add_subdivision" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Barangay:</small></label>
                                                        <input id = "add_brngy" name = "add_brngy" type="text" class="form-control" readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>District:</small></label>
                                                        <input id = "add_district" name = "add_district" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>City/Municipality:</small></label>
                                                        <input id = "add_city" name = "add_city" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Province:</small></label>
                                                        <input id = "add_province" name = "add_province" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                <label><small>Region:</small></label>
                                                    <select id = "add_region" name = "add_region" class="form-control show-tick" data-live-search="true" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Select Region --</option>
                                                        <option value = "I">Region I</option>
                                                        <option value = "II">Region II</option>
                                                        <option value = "III">Region III</option>
                                                        <option value = "IV-A">Region IV-A</option>
                                                        <option value = "IV-B">Region IV-B</option>
                                                        <option value = "V">Region V</option>
                                                        <option value = "VI">Region VI</option>
                                                        <option value = "VII">Region VII</option>
                                                        <option value = "VIII">Region VIII</option>
                                                        <option value = "IX">Region IX</option>
                                                        <option value = "X">Region X</option>
                                                        <option value = "XI">Region XI</option>
                                                        <option value = "XII">Region XII</option>
                                                        <option value = "XIII">Region XIII</option>
                                                        <option value = "ARMM">Region ARMM</option>
                                                        <option value = "CAR">Region CAR</option>
                                                        <option value = "NCR">Region NCR</option>\
                                                </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Zip Code:</small></label>
                                                        <input id = "add_zipcode" name = "add_zipcode" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <br/><br/><br/>
                                <div class="col-md-4" style = "display: none;">
                                   <input id = "atime" name = "atime" type="text" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer js-sweetalert">
                          <button id = "schange" class="btn btn-primary waves-effect" style = "display: none;" type="button" onclick = "
                          document.getElementById('atime').value = formatDate(new Date());
                          if($('#emp_view').valid())
                          {
                            swal({
                              title: 'Are you sure?',
                              type: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#DD6B55',
                              confirmButtonText: 'Continue',
                              cancelButtonText: 'Cancel',
                              closeOnConfirm: false,
                              closeOnCancel: false
                            },
                            function(isConfirm){
                              if (isConfirm) {
                                $('#emp_view').submit();
                              } else {
                                  swal({
                                  title: 'Cancelled',
                                  type: 'warning',
                                  timer: 500,
                                  showConfirmButton: false
                                  });
                              }
                            });
                          }">SAVE CHANGES</button>
                          <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#largeModal">CLOSE</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <!-- #END OF MODAL -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-7 col-sm-7 col-xs-7">
                    <div class="card">
                        <div class="header">
                            <h2><b>
                                MAINTENANCE - EMPLOYEE
                            </b></h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                <button type="button" class="btn bg-blue waves-effect" data-toggle="collapse" data-target="#addEmpModal">
                                    <i class="material-icons">group_add</i>
                                    <span>Add Employee</span>
                                </button>
                                </li>
                                <li>
                                  <button type="button" id = "delete_many" style = "display:none;" class="btn bg-red waves-effect">
                                      <i class="material-icons">delete</i>
                                      <span>Delete</span>
                                  </button>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable animated lightSpeedIn active">
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th class="col-md-1"></th>
                                        <th>Name</th>
                                        <th>Employee Role</th>
                                        <th>Address</th>
                                        <th>Contact Details</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                  <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-red checkCheckbox"
                                                data-id=""/>
                                                <label for="pppp"></label></td>
                                  
                                  <td>Rola, Ma. Gabriella Tan</td>
                                  <td>Accounting Staff</td>
                                  <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                  <td><ul>
                                      <li>09353084708</li>
                                      <li>09123453234</li>
                                      <li>212-8133</li>
                                      <li>gab@gmail.com</li>
                                      </ul></td>
                                  <td><button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#largeModal">
                                                    <i class="material-icons">remove_red_eye</i>
                                                    <span>View</span>
                                                </button></td>
                                </tr>
                                    <!-- COMMENT KO MUNA
                                    @foreach($emp as $empdata)
                                    @if($empdata->del_flag == 0)
                                      @foreach($pnf as $pInfo)
                                        @if($empdata->personal_info_ID == $pInfo->pinfo_ID)
                                         @foreach($emptype as $type)
                                          @if($empdata->emp_type == $type->emptype_ID)
                                            @foreach($job as $title)
                                            @if($empdata->job_title == $title->jobtitle_ID)
                                        <tr>
                                        <td><input type="checkbox" id="{{$empdata->emp_ID}}" name = "del_check" class="filled-in chk-col-red checkCheckbox" data-id = "{{$empdata->emp_ID}}"/>
                                        <label for="{{$empdata->emp_ID}}"></label></td>
                                        @if($pInfo->pinfo_picture == null)
                                        <td><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></td>
                                        @else
                                        <td><img src="{!! '/image/'.$pInfo->pinfo_picture !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></td>
                                        @endif
                                        <td>
                                          @if($pInfo->pinfo_middle_name == null)
                                          {{ $pInfo->pinfo_last_name.", ".$pInfo->pinfo_first_name}}
                                          @else
                                          {{ $pInfo->pinfo_last_name.", ".$pInfo->pinfo_first_name." ".$pInfo->pinfo_middle_name }}
                                          @endif
                                        </td>
                                        <td>{{ $title->jobtitle_Name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($empdata->created_at)->format('M-d-Y') }} <br/> {{ "(".\Carbon\Carbon::parse($empdata->created_at)->format('l, h:i:s A').")" }}</td>
                                        <td>{{ \Carbon\Carbon::parse($empdata->updated_at)->format('M-d-Y') }} <br/> {{ "(".\Carbon\Carbon::parse($empdata->updated_at)->format('l, h:i:s A').")" }}</td>
                                        <td>
                                        <button type="button" class="btn bg-light-blue waves-effect" data-toggle="modal" data-target="#largeModal"
                                        class="btn btn-success btn-xs waves-effect"
                                        data-empid='{{ $empdata->emp_ID }}'
                                        data-fname='{{ $pInfo->pinfo_first_name }}'
                                        data-mname='{{ $pInfo->pinfo_middle_name }}'
                                        data-lname='{{ $pInfo->pinfo_last_name }}'
                                        data-contact='{{ $pInfo->pinfo_contact }}'
                                        data-mail='{{ $pInfo->pinfo_mail }}'
                                        data-add='{{ $empdata->emp_add_ID }}'
                                        data-pinfo = '{{ $empdata->personal_info_ID }}'
                                        data-emptype = '{{ $empdata->emp_type }}'
                                        data-jobtitle = '{{ $empdata->job_title }}'
                                        if('{{ $pInfo->pinfo_picture }}' == null)
                                        {
                                          data-source = '{!! '/image/'.'default-image.png' !!}'
                                        }
                                        else{
                                          data-source = '{!! '/image/'.$pInfo->pinfo_picture !!}'
                                        }

                                        data-lnumb='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_blcknum }}
                                          @endif
                                        @endforeach'
                                        data-strt='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_street }}
                                          @endif
                                        @endforeach'
                                        data-sdiv='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_subdivision }}
                                          @endif
                                        @endforeach'
                                        data-brg='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_brngy }}
                                          @endif
                                        @endforeach'
                                        data-distr='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_district }}
                                          @endif
                                        @endforeach'
                                        data-city='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_city }}
                                          @endif
                                        @endforeach'
                                        data-prov='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_province }}
                                          @endif
                                        @endforeach'
                                        data-regn='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_region }}
                                          @endif
                                        @endforeach'
                                        data-zip='
                                        @foreach($add as $addata)
                                          @if($addata->add_ID == $empdata->emp_add_ID)
                                          {{ $addata->add_zipcode }}
                                          @endif
                                        @endforeach'

                                        onclick = "

                                        var id = $(this).data('empid');
                                        var addid = $(this).data('empid');
                                        var fname = $(this).data('fname');
                                        var mname = $(this).data('mname');
                                        var lname = $(this).data('lname');
                                        var contact = $(this).data('contact');
                                        var mail = $(this).data('mail');
                                        var src = $(this).data('source');

                                        var addid = $(this).data('add');
                                        var lotnum = $(this).data('lnumb').replace(/^\s+|\s+$/g, '');
                                        var strt = $(this).data('strt').replace(/^\s+|\s+$/g, '');
                                        var subdiv = $(this).data('sdiv').replace(/^\s+|\s+$/g, '');
                                        var brngy = $(this).data('brg').replace(/^\s+|\s+$/g, '');
                                        var dist = $(this).data('distr').replace(/^\s+|\s+$/g, '');
                                        var city = $(this).data('city').replace(/^\s+|\s+$/g, '');
                                        var prov = $(this).data('prov').replace(/^\s+|\s+$/g, '');
                                        var reg = $(this).data('regn').replace(/^\s+|\s+$/g, '');
                                        var zipcode = $(this).data('zip').replace(/^\s+|\s+$/g, '');

                                        document.getElementById('aemp_id').value = id;
                                        document.getElementById('aemp_first_name').value = fname;
                                        document.getElementById('aemp_middle_name').value = mname;
                                        document.getElementById('aemp_last_name').value = lname;
                                        document.getElementById('aemp_contact').value = contact;
                                        document.getElementById('aemp_mail').value = mail;

                                        document.getElementById('aadd_id').value = addid;
                                        document.getElementById('pInfo_ID').value = $(this).data('pinfo');
                                        document.getElementById('aadd_blcknum').value = lotnum;
                                        document.getElementById('aadd_street').value = strt;
                                        document.getElementById('aadd_subdivision').value = subdiv;
                                        document.getElementById('aadd_brngy').value = brngy;
                                        document.getElementById('aadd_district').value = dist;
                                        document.getElementById('aadd_city').value = city;
                                        document.getElementById('aadd_province').value = prov;
                                        document.getElementById('aadd_region').value = reg;
                                        $('#aadd_region').val(reg).change();
                                        document.getElementById('aadd_zipcode').value = zipcode;
                                        $('#aemp_type').val($(this).data('emptype')).change();
                                        $('#ajobtitle').val($(this).data('jobtitle')).change();
                                        $('#editImg').attr('src', src);
                                        ">
                                            <i class="material-icons">remove_red_eye</i>
                                            <span>View</span>
                                        </button>
                                        </td>
                                    </tr>
                                        @endif
                                       @endforeach
                                        @endif
                                       @endforeach
                                      @endif
                                    @endforeach
                                    @endif
                                    @endforeach -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- #END# Exportable Table -->
    <script>
            $.validator.addMethod("alphanumeric", function(value, element) {
                return this.optional(element) || /^[A-Za-z][A-Za-z0-9 '-.]*$/i.test(value);
             }, "This field must contain only letters, numbers, dashes, space, apostrophe or dot.");
            $.validator.addMethod("alpha", function(value, element) {
                return this.optional(element) || /^[A-Za-z][A-Za-z '-.]*$/i.test(value);
             }, "This field must contain only letters, space, dash, apostrophe or dot.");
            $.validator.addMethod("blcknumber", function(value, element) {
                return this.optional(element) || /^[A-Za-z0-9][A-Za-z0-9 '-.]*$/i.test(value);
             }, "This field must contain only letters, numbers, space, dash, apostrophe or dot.");


        // Wait for the DOM to be ready
            $(function() {
              // Initialize form validation on the registration form.
              // It has the name attribute "registration"
              $("form[name='emp_add']").validate({
                // Specify validation rules
                rules: {
                  // The key name on the left side is the name attribute
                  // of an input field. Validation rules are defined
                  // on the right side
                  emp_first_name:{
                    required: true,
                    alpha:true,
                    maxlength: 30
                  },
                  emp_middle_name:{
                    alpha:true,
                    maxlength: 20
                  },
                  emp_last_name:{
                    required: true,
                    alpha:true,
                    maxlength: 20
                  },
                  emp_contact:{
                    required: true,
                    digits: true,
                    minlength: 7,
                    maxlength: 11
                  },
                  emp_type:{
                    required: true
                  },
                  emp_mail:{
                    required: true,
                    email: true,
                    maxlength: 50
                  },
                  jobtitle:{
                    required: true
                  },
                  add_blcknum:{
                      blcknumber: true,
                      maxlength: 10
                  },
                  add_street:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  add_subdivision:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  add_brngy:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  add_district:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  add_city:
                  {
                      required: true,
                      alphanumeric: true,
                      maxlength: 20
                  },
                  add_province:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  add_region:
                  {
                      required: true,
                      alphanumeric: true,
                  },
                  add_zipcode:
                  {
                      digits: true,
                      maxlength: 4
                  }
                },
                // Specify validation error messages
                messages: {
                    emp_first_name:{
                        required: "Empty First Name"
                    },
                    emp_last_name:{
                        required: "Empty Last Name"
                    },
                    emp_contact:{
                        required: "Empty Contact Number",
                        digits: "This field is Digits only",
                        minlength: "This field requires minimum length of 7",
                        maxlength: "This field requires max length of 11"
                    },
                    add_blcknum:{
                        digits: "This field is Digits only"
                    },
                    add_zipcode:
                    {
                       digits: "This field is Digits only"
                    }

                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                  form.submit();
                }
              });

              $("form[name='emp_view']").validate({
                // Specify validation rules
                rules: {
                  // The key name on the left side is the name attribute
                  // of an input field. Validation rules are defined
                  // on the right side
                  aemp_first_name:{
                    required: true,
                    alpha:true,
                    maxlength: 30
                  },
                  aemp_middle_name:{
                    alpha:true,
                    maxlength: 20
                  },
                  aemp_last_name:{
                    required: true,
                    alpha:true,
                    maxlength: 20
                  },
                  aemp_contact:{
                    required: true,
                    digits: true,
                    minlength: 7,
                    maxlength: 11
                  },
                  aemp_type:{
                    required: true
                  },
                  aemp_mail:{
                    required: true,
                    email: true,
                    maxlength: 50
                  },
                  ajobtitle:{
                    required: true
                  },
                  aadd_blcknum:{
                      blcknumber: true,
                      maxlength: 10
                  },
                  aadd_street:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  aadd_subdivision:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  aadd_brngy:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  aadd_district:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  aadd_city:
                  {
                      required: true,
                      alphanumeric: true,
                      maxlength: 20
                  },
                  aadd_province:
                  {
                      alphanumeric: true,
                      maxlength: 20
                  },
                  aadd_region:
                  {
                      required: true,
                      alphanumeric: true,
                  },
                  aadd_zipcode:
                  {
                      digits: true,
                      maxlength: 4
                  }
                },
                // Specify validation error messages
                messages: {
                    aemp_first_name:{
                        required: "Empty First Name"
                    },
                    aemp_last_name:{
                        required: "Empty Last Name"
                    },
                    aemp_contact:{
                        required: "Empty Contact Number",
                        digits: "This field is Digits only",
                        minlength: "This field requires minimum length of 7",
                        maxlength: "This field requires max length of 11"
                    },
                    aadd_zipcode:
                    {
                       digits: "This field is Digits only"
                    }
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                  form.submit();
                }
              });
            });

    </script>

    <script>
        $(document).ready(function()
        {
          $('emp_add').validate();
          $('emp_view').validate();
          if ($('.checkCheckbox:checked').length > 0)
          {
               $("#delete_many").show();
          }
          else
          {
              $("#delete_many").hide();
          }

          $(".checkCheckbox").change(
            function()
            {
              if ($('.checkCheckbox:checked').length > 0)
              {
                   $("#delete_many").show();
              }
              else
              {
                  $("#delete_many").hide();
              }
             }
          );
          function areadURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#addImg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            }
        }

        $("#picture").change(function(){
            areadURL(this);
        });

        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#editImg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            }
        }

        $("#apicture").change(function(){
            readURL(this);
        });
        });

        $(".checkCheckbox").change(
            function()
            {
              if ($('.checkCheckbox:checked').length > 0)
              {
                   $("#delete_many").show();
              }
              else
              {
                   $("#delete_many").hide();
              }
             }
          );

          $('#addEmpModal').on('hidden.bs.modal', function() {
            $('#emp_add').trigger('reset');
          });

          $('#largeModal').on('hidden.bs.modal', function() {
              $('#emp_view').trigger('reset');
              $('#Edit').prop('disabled', false);
              $('#Delete').prop('disabled', false);
              $('#schange').hide();
              $('#aadd_blcknum').prop('disabled', true);
              $('#aadd_street').prop('disabled', true);
              $('#aadd_subdivision').prop('disabled', true);
              $('#aadd_brngy').prop('disabled', true);
              $('#aadd_district').prop('disabled', true);
              $('#aadd_city').prop('disabled', true);
              $('#aadd_province').prop('disabled', true);
              $('#aadd_region').prop('disabled', true);
              $('#aadd_zipcode').prop('disabled', true);
              $('#aemp_first_name').prop('disabled', true);
              $('#aemp_middle_name').prop('disabled', true);
              $('#aemp_last_name').prop('disabled', true);
              $('#aemp_mail').prop('disabled', true);
              $('#aemp_contact').prop('disabled', true);
          });

        function addZero(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        function formatDate(date)
        {
          var monthNames = [
            "January", "February", "March",
            "April", "May", "June", "July",
            "August", "September", "October",
            "November", "December"
          ];

          var day = date.getDate();
          var monthIndex = date.getMonth() + 1;
          var year = date.getFullYear();
          var h = addZero(date.getHours());
          var m = addZero(date.getMinutes());
          var s = addZero(date.getSeconds());

          return year + '-' + monthIndex + '-' + day + ' ' + h + ':' + m + ':' + s;
        }

        var IDS;
        var timenow = formatDate(new Date());
        $('#delete_many').click(function(event){
          IDS = $(".checkCheckbox:checked").map(function ()
          {
              return $(this).data('id')
          }).get();
        });

        $('#delete_many').click(function(event){
          event.preventDefault();
              $.ajax({

                  type: 'POST',
                  url: '/admin/maintenance/employee/ardelete',
                  data: {asd:IDS, time:timenow},
                  success:function(xhr){
                      console.log('success');
                      console.log(xhr.responseText);
                      window.location.reload();
                  },
                    error:function(xhr, ajaxOptions, thrownError,data){
                      console.log(xhr.status);
                      console.log(xhr.responseText);
                  }
              });
          });
    </script>

@endsection
