@extends('master')

@section('title','Maintenance - Client - Company | CIMIS')

@section('maintenance','active')

@section('client','active')

@section('clientcompany','active')

@section('body')
    <section class="content">
        <div class="container-fluid">
                        <!-- ADD EMPLOYEE MODAL -->
            <div class="collapse fade" id="addEmpModal" role="dialog">
                <div class="modal-dialog modal-lg animated zoomInLeft active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-add">
                            <h4><br/>CREATE NEW CLIENT (COMPANY) RECORD</h4>
                        </div>
                        <div class="modal-body">
                            <form id="emp_add" name = "emp_add" action = "employee/submit" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <h3> <small><b>COMPANY INFORMATION</b></small></h3><br/>
                                        <div class="row clearfix">
                                            <div class="col-md-4" style = "display: none;">
                                                <input id = "bnkid" name = "bnkid" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group form-float">
                                                    <div class="form-line">

                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control">
                                                        <label class="form-label">Company Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group form-float">
                                                    <div class="form-line">

                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control">
                                                        <label class="form-label">E-mail</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">

                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control">
                                                        <label class="form-label">Telephone Number</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">

                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control">
                                                        <label class="form-label">Fax Number</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <select id = "add_region" name = "add_region" class="form-control show-tick" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Select Sales Agent --</option>
                                                        <option value = "I">Jeon, Jung Kook</option>
                                                        <option value = "II">Ha, Eun Woo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br/><br/>
                                        <h3> <small><b>COMPANY ADDRESS</b></small></h3>
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
                                        <div class="col-md-4" style = "display: none;">
                                           <input id = "time" name = "time" type="text" class="form-control" pattern="[A-Za-z'-]">
                                        </div>
                                        <h3> <small><b>CONTACT PERSON</b></small></h3><br/>
                                        <div align="center"><h4><small><b>Personal Information</b></small></h4></div>
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
                                        
                                        </div> <!-- END OF ROW CLEARFIX -->
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
                                        </div>
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
                            <h4><br/>CLIENT (COMPANY) DETAILS
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
                              <h3> <small><b>COMPANY INFORMATION</b></small></h3><br/>
                                        <div class="row clearfix">
                                            <div class="col-md-4" style = "display: none;">
                                                <input id = "bnkid" name = "bnkid" type="text" class="form-control" readonly="true">
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label><small>Company Name :</small></label>
                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control" readonly="true">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label><small>E-mail:</small></label>
                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control" readonly="true">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label><small>Telephone Number:</small></label>
                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control" readonly="true">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label><small>Fax Number:</small></label>
                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control" readonly="true">
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                <label><small>Sales Agent :</small></label>
                                                    <select id = "add_region" name = "add_region" class="form-control show-tick" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Select Sales Agent --</option>
                                                        <option value = "I">Jeon, Jung Kook</option>
                                                        <option value = "II">Ha, Eun Woo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br/><br/>
                                        <h3> <small><b>COMPANY ADDRESS</b></small></h3>
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
                                        </div> <br/>
                                        <div class="col-md-4" style = "display: none;">
                                           <input id = "time" name = "time" type="text" class="form-control" pattern="[A-Za-z'-]">
                                        </div>
                                        <h3> <small><b>CONTACT PERSON</b></small></h3><br/>
                                        <div align="center"><h4><small><b>Personal Information</b></small></h4></div>
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
                                MAINTENANCE - CLIENT (COMPANY)
                            </b></h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                <button type="button" class="btn bg-blue waves-effect" data-toggle="collapse" data-target="#addEmpModal">
                                    <i class="material-icons">group_add</i>
                                    <span>Add Client</span>
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
                                        <th>Company Name</th>
                                        <th>Company Address</th>
                                        <th>Contact Person</th>
                                        <th>Contact Details</th>
                                        <th>Image</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                  <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-red checkCheckbox"
                                                data-id=""/>
                                                <label for="pppp"></label></td>
                                  <td>Mc Donald's</td>
                                  <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                  <td>Rola, Ma. Gabriella T.</td>
                                  <td><ul>
                                      <li>09353084708</li>
                                      <li>09123453234</li>
                                      <li>212-8133</li>
                                      <li>gab@gmail.com</li>
                                      </ul></td>
                                  <td><img src="{!! '/image/'.'default-image.png' !!}" onerror="this.onerror=null;this.src='/image/default-image.png';" style="border:1px solid black;width:150px;height:150px;"></td>
                                  <td><button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#largeModal">
                                                    <i class="material-icons">remove_red_eye</i>
                                                    <span>View</span>
                                                </button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- #END# Exportable Table -->
@endsection
