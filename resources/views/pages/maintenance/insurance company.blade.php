@extends('master')

@section('title','Insurance Company - Maintenance | i-Insure')

@section('maintenance','active')

@section('insurance','active')

@section('company','active')

@section('body')
    <section class="content">
        <div class="container-fluid">
            <!-- ADD INST MODAL -->
            <div class="collapse fade" id="addCompModal" role="dialog">
                <div class="modal-dialog modal-lg animated zoomInLeft active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-add">
                            <h4><br/>CREATE NEW INSURANCE COMPANY RECORD</h4>
                        </div><br/><br/>
                        <div class="modal-body">
                             <form id="bank_add" name="bank_add" action = "bank/submit" method="POST" >
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <h3> <small><b>INSURANCE COMPANY INFORMATION</b></small></h3><br/>
                                        <div class="row clearfix">
                                            <div class="col-md-4" style = "display: none;">
                                                <input id = "bnkid" name = "bnkid" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group form-float">
                                                    <div class="form-line">

                                                        <input id = "bank_name" name = "bank_name" type="text" class="form-control">
                                                        <label class="form-label">Insurance Company Name</label>
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
                                        </div>
                                        <br/><br/>
                                        <h3> <small><b>INSURANCE COMPANY ADDRESS</b></small></h3>
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
                            if($('#comp_add').valid())
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
                                  $('#comp_add').submit();
                                  document.getElementById('comp_name').value = '';

                                  document.getElementById('cPerson_first_name').value = '';
                                  document.getElementById('cPerson_middle_name').value = '';
                                  document.getElementById('cPerson_last_name').value = '';
                                  document.getElementById('cPerson_email').value = '';
                                  document.getElementById('cPerson_contact').value = '';

                                  document.getElementById('add_blcknum').value = '';
                                  document.getElementById('add_street').value = '';
                                  document.getElementById('add_subdivision').value = '';
                                  document.getElementById('add_brngy').value = '';
                                  document.getElementById('add_district').value = '';
                                  document.getElementById('add_city').value = '';
                                  document.getElementById('add_province').value = '';
                                  document.getElementById('add_region').value = '';
                                  $('#add_region').val('').change();
                                  document.getElementById('add_zipcode').value = '';
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
                            <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#addCompModal">CLOSE</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- #END# ADD INST MODAL -->

             <!-- View INST MODAL-->
              <div class="collapse fade" id="largeModal" role="dialog">
                <div class="modal-dialog modal-lg animated zoomInRight active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-view">
                            <h4><br/>INSURANCE COMPANY DETAILS</h4>
                        </div><br/>
                        <button id = "Edit" style = "margin-left: 55em" type="button" class="btn btn-success btn-lg waves-effect"
                        onclick = "
                        document.getElementById('comp_view').action = 'company/update';
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
                        $('#aadd_zipcode').prop('disabled', false);
                        $('#acPerson_first_name').prop('disabled', false);
                        $('#acPerson_middle_name').prop('disabled', false);
                        $('#acPerson_last_name').prop('disabled', false);
                        $('#acPerson_email').prop('disabled', false);
                        $('#acPerson_contact').prop('disabled', false);
                        $('#acomp_name').prop('disabled', false);
                        $('#schange').html('SAVE CHANGES');
                        ">
                        <i class="material-icons">create</i>
                        <span>Edit</span>
                        </button>
                        <button id = "Delete" type="button" class="btn bg-red btn-lg waves-effect"
                        onclick = "
                        document.getElementById('comp_view').action = 'company/delete';
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
                        $('#aadd_zipcode').prop('disabled', true);
                        $('#acPerson_first_name').prop('disabled', true);
                        $('#acPerson_middle_name').prop('disabled', true);
                        $('#acPerson_last_name').prop('disabled', true);
                        $('#acPerson_email').prop('disabled', true);
                        $('#acPerson_contact').prop('disabled', true);
                        $('#acomp_name').prop('disabled', true);
                        $('#schange').html('DELETE RECORD');
                        ">
                            <i class="material-icons">delete_sweep</i>
                            <span>Delete</span>
                        </button>
                        <br/>
                        <div class="modal-body">
                            <form id="comp_view" name = "comp_view" method="POST">
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
                              <h3> <small><b>INSURANCE COMPANY INFORMATION</b></small></h3><br/>
                                        <div class="row clearfix">
                                            <div class="col-md-4" style = "display: none;">
                                                <input id = "bnkid" name = "bnkid" type="text" class="form-control" readonly="true">
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <label><small>Insurance Company Name :</small></label>
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
                                        </div>
                                        <br/><br/>
                                        <h3> <small><b>INSURANCE COMPANY ADDRESS</b></small></h3>
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
                                <div class="col-md-4" style = "display: none;">
                                    <input id = "aadd_id" name = "aadd_id" type="text" class="form-control">
                                </div>
                                <br/><br/><br/>
                                <div class="col-md-4" style = "display: none;">
                                   <input id = "pinfo_ID" name = "pinfo_ID" type="text" class="form-control">
                                </div>
                                <div class="col-md-4" style = "display: none;">
                                   <input id = "atime" name = "atime" type="text" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer js-sweetalert">
                            <button id = "schange" class="btn btn-primary waves-effect" style = "display: none;" type="button" onclick = "
                            document.getElementById('atime').value = formatDate(new Date());
                            if($('#comp_view').valid())
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
                                  $('#comp_view').submit();
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
            <!-- #END# VIEW INST MODAL -->

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><b>
                                MAINTENANCE - INSURANCE COMPANY
                            </b></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <li>
                                <button type="button" class="btn bg-blue waves-effect" data-toggle="collapse" data-target="#addCompModal">
                                    <i class="material-icons">business</i>
                                    <span>Add Insurance Company</span>
                                </button>
                                </li>
                                <li>
                                <button type="button" id = "delete_many" style = "display:none;" class="btn bg-red waves-effect">
                                    <i class="material-icons">delete</i>
                                    <span>Delete</span>
                                </button>
                                </li>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example animated lightSpeedIn active">
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th class="col-md-1"></th>
                                        <th>Company Name</th>
                                        <th>Address</th>
                                        <th>Policy Numbers</th>
                                        <th>Contact Person</th>
                                        <th>Contact Details</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td><input type="checkbox" id="pppp" name = "del_check" class="filled-in chk-col-red checkCheckbox"
                                                data-id=""/>
                                                <label for="pppp"></label></td>
                                  <td>FPG Insurance</td>
                                  <td>B 5 L 18 Spiderlily St. Brgy San Luis, Antipolo City, Rizal</td>
                                  <td><button type="button" class="btn bg-light-green waves-effect" data-toggle="modal" data-target="#pnList">
                                                <i class="material-icons">list</i>
                                                <span>View List</span>
                                            </button></td>
                                  <td>Rola, Ma. Gabriella Tan</td>
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
                                <!-- COMMENT MUNA
                                  @foreach($cmp as $companydata)
                                  @if($companydata->del_flag == 0)
                                    @foreach($cpr as $cper)
                                      @if($cper->cPerson_ID == $companydata->comp_cperson_ID)
                                       @foreach($pInfo as $Info)
                                        @if($Info->pinfo_ID == $cper->personal_info_ID)
                                  <?php
                                      $index = 1;
                                  ?>
                                      <tr>
                                          <td><input type="checkbox" id="{{ $companydata->comp_ID  }}" class="filled-in chk-col-red checkCheckbox" data-id = "{{ $companydata->comp_ID  }}"/>
                                          <label for="{{ $companydata->comp_ID  }}"></label></td>
                                          <td>{{ $companydata->comp_name }}</td>
                                          <td>
                                          @if($Info->pinfo_middle_name == null)
                                          {{ $Info->pinfo_last_name.", ".$Info->pinfo_first_name}}
                                          @else
                                          {{ $Info->pinfo_last_name.", ".$Info->pinfo_first_name." ".$Info->pinfo_middle_name }}
                                          @endif
                                          </td>
                                          <td><div class="icon-button-demo">
                                            <button type="button" class="btn bg-light-green waves-effect" data-toggle="modal" data-target="#pnList"
                                            onclick = "
                                            var table = $('#view_list').DataTable();
                                            table.column(3).search({{ $companydata->comp_ID }}).draw();">
                                                <i class="material-icons">list</i>
                                                <span>View List</span>
                                            </button>
                                            </div></td>
                                          <td>{{ \Carbon\Carbon::parse($companydata->created_at)->format('M-d-Y') }} <br/> {{ "(".\Carbon\Carbon::parse($companydata->created_at)->format('l, h:i:s A').")" }}</td>
                                          <td>{{ \Carbon\Carbon::parse($companydata->updated_at)->format('M-d-Y') }} <br/> {{ "(".\Carbon\Carbon::parse($companydata->updated_at)->format('l, h:i:s A').")" }}</td>
                                          <td>
                                          <button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#largeModal"
                                          data-id = '{{ $companydata->comp_ID }}'
                                          data-cname='{{ $companydata->comp_name }}'
                                          data-cpr='{{ $companydata->comp_cperson_ID }}'
                                          data-add='{{ $companydata->comp_add_ID }}'
                                          data-pinfo = '{{ $cper->personal_info_ID }}'

                                          data-lnumb='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_blcknum }}
                                            @endif
                                          @endforeach'
                                          data-strt='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_street }}
                                            @endif
                                          @endforeach'
                                          data-sdiv='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_subdivision }}
                                            @endif
                                          @endforeach'
                                          data-brg='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_brngy }}
                                            @endif
                                          @endforeach'
                                          data-distr='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_district }}
                                            @endif
                                          @endforeach'
                                          data-city='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_city }}
                                            @endif
                                          @endforeach'
                                          data-prov='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_province }}
                                            @endif
                                          @endforeach'
                                          data-regn='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_region }}
                                            @endif
                                          @endforeach'
                                          data-zip='
                                          @foreach($add as $addata)
                                            @if($addata->add_ID == $companydata->comp_add_ID )
                                            {{ $addata->add_zipcode }}
                                            @endif
                                          @endforeach'

                                          data-cfname='
                                          @foreach($cpr as $cperson)
                                            @if($cperson->cPerson_ID == $companydata->comp_cperson_ID)
                                             @foreach($pInfo as $Info)
                                              @if($cperson->personal_info_ID == $Info->pinfo_ID )
                                                {{ $Info->pinfo_first_name }}
                                              @endif
                                             @endforeach
                                            @endif
                                          @endforeach'
                                          data-cmname='
                                          @foreach($cpr as $cperson)
                                            @if($cperson->cPerson_ID == $companydata->comp_cperson_ID)
                                             @foreach($pInfo as $Info)
                                              @if($cperson->personal_info_ID == $Info->pinfo_ID )
                                                {{ $Info->pinfo_middle_name }}
                                              @endif
                                             @endforeach
                                            @endif
                                          @endforeach'
                                          data-clname='
                                          @foreach($cpr as $cperson)
                                            @if($cperson->cPerson_ID == $companydata->comp_cperson_ID)
                                             @foreach($pInfo as $Info)
                                              @if($cperson->personal_info_ID == $Info->pinfo_ID )
                                                {{ $Info->pinfo_last_name }}
                                              @endif
                                             @endforeach
                                            @endif
                                          @endforeach'
                                          data-ccont='
                                          @foreach($cpr as $cperson)
                                            @if($cperson->cPerson_ID == $companydata->comp_cperson_ID)
                                             @foreach($pInfo as $Info)
                                              @if($cperson->personal_info_ID == $Info->pinfo_ID )
                                                {{ $Info->pinfo_contact }}
                                              @endif
                                             @endforeach
                                            @endif
                                          @endforeach'
                                          data-cmail='
                                          @foreach($cpr as $cperson)
                                            @if($cperson->cPerson_ID == $companydata->comp_cperson_ID)
                                             @foreach($pInfo as $Info)
                                              @if($cperson->personal_info_ID == $Info->pinfo_ID )
                                                {{ $Info->pinfo_mail }}
                                              @endif
                                             @endforeach
                                            @endif
                                          @endforeach'

                                          onclick = "

                                          var id = $(this).data('id');
                                          var cname = $(this).data('cname');

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

                                          var cfname = $(this).data('cfname').replace(/^\s+|\s+$/g, '');
                                          var cmname = $(this).data('cmname').replace(/^\s+|\s+$/g, '');
                                          var clname = $(this).data('clname').replace(/^\s+|\s+$/g, '');
                                          var cmail = $(this).data('cmail').replace(/^\s+|\s+$/g, '');
                                          var ccont = $(this).data('ccont').replace(/^\s+|\s+$/g, '');

                                          document.getElementById('acopid').value = id;
                                          document.getElementById('acomp_name').value = cname;

                                          document.getElementById('cpersonID').value = $(this).data('cpr');
                                          document.getElementById('acPerson_first_name').value = cfname;
                                          document.getElementById('acPerson_middle_name').value = cmname;
                                          document.getElementById('acPerson_last_name').value = clname;
                                          document.getElementById('acPerson_email').value = cmail;
                                          document.getElementById('acPerson_contact').value = ccont;

                                          document.getElementById('aadd_id').value = addid;
                                          document.getElementById('pinfo_ID').value = $(this).data('pinfo');
                                          document.getElementById('aadd_blcknum').value = lotnum;
                                          document.getElementById('aadd_street').value = strt;
                                          document.getElementById('aadd_subdivision').value = subdiv;
                                          document.getElementById('aadd_brngy').value = brngy;
                                          document.getElementById('aadd_district').value = dist;
                                          document.getElementById('aadd_city').value = city;
                                          document.getElementById('aadd_province').value = prov;
                                          document.getElementById('aadd_region').value = reg;
                                          $('#aadd_region').val(reg).change();
                                          document.getElementById('aadd_zipcode').value = zipcode;">
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
                                  @endforeach -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

            <!-- View INST MODAL-->
              <div class="modal fade" id="pnList" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg animated zoomInRight active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-view-list">
                            <h4><br/>Policy Number List
                            </h4>
                        </div><br/>
                        </button>
                        <div class="modal-body">
                            <form id="vmodel_view" method="POST">
                              <table id = "view_list" class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th>Policy Number</th>
                                        <th>Date Created</th>
                                        <th>Last Update</th>
                                        <th>ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($pnm as $pnumber)
                                    @if($pnumber->del_flag == 0)
                                  <tr>
                                  <td>{{ $pnumber->policy_number }}</td>
                                  <td>{{ \Carbon\Carbon::parse($pnumber->created_at)->format('M-d-Y') }} <br/> {{ "(".\Carbon\Carbon::parse($pnumber->created_at)->format('l, h:i:s A').")" }}</td>
                                  <td>{{ \Carbon\Carbon::parse($pnumber->updated_at)->format('M-d-Y') }} <br/> {{ "(".\Carbon\Carbon::parse($pnumber->updated_at)->format('l, h:i:s A').")" }}</td>
                                  <td>{{ $pnumber->insurance_compID }}</td>
                                  </tr>
                                  @endif
                                  @endforeach
                                </tbody>
                            </table>
                                <br/><br/><br/>
                            </form>
                        </div>
                        <div class="modal-footer js-sweetalert">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# VIEW INST MODAL -->
        </div>
    </section>

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
          $("form[name='comp_add']").validate({
            // Specify validation rules
            rules: {
              // The key name on the left side is the name attribute
              // of an input field. Validation rules are defined
              // on the right side
              comp_name: {
                required: true,
                alpha:true,
                maxlength: 30
              },
              cPerson_first_name:{
                required: true,
                alpha:true,
                maxlength: 30
              },
              cPerson_middle_name:{
                alpha:true,
                maxlength: 20
              },
              cPerson_last_name:{
                required: true,
                alpha:true,
                maxlength: 20
              },
              cPerson_contact:{
                required: true,
                digits: true,
                minlength: 7,
                maxlength: 11
              },
              cPerson_email:
              {
                required: true,
                email: true,
                maxlength: 50
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
                  maxlength: 11
              },
              add_zipcode:
              {
                  digits: true,
                  maxlength: 4
              }
            },
            // Specify validation error messages
            messages: {
                comp_name: {
                    required: "Empty Bank Name"
                },
                cPerson_first_name:{
                    required: "Empty First Name"
                },
                cPerson_last_name:{
                    required: "Empty Last Name"
                },
                cPerson_contact:{
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
          $("form[name='comp_view']").validate({
            // Specify validation rules
            rules: {
              // The key name on the left side is the name attribute
              // of an input field. Validation rules are defined
              // on the right side
              acomp_name: {
                required: true,
                alpha:true,
                maxlength: 30
              },
              acPerson_first_name:{
                required: true,
                alpha:true,
                maxlength: 30
              },
              acPerson_middle_name:{
                alpha:true,
                maxlength: 20
              },
              acPerson_last_name:{
                required: true,
                alpha:true,
                maxlength: 20
              },
              acPerson_contact:{
                required: true,
                digits: true,
                minlength: 7,
                maxlength: 11
              },
              acPerson_email:
              {
                required: true,
                email: true,
                maxlength: 50
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
                  maxlength: 11
              },
              aadd_zipcode:
              {
                  digits: true,
                  maxlength: 4
              }
            },
            // Specify validation error messages
            messages: {
                acomp_name: {
                    required: "Empty Bank Name"
                },
                acPerson_first_name:{
                    required: "Empty First Name"
                },
                acPerson_last_name:{
                    required: "Empty Last Name"
                },
                acPerson_contact:{
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
    $( document ).ready(function()
    {
      $('comp_add').validate();
      $('comp_view').validate();

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

      $('#addCompModal').on('hidden.bs.modal', function() {
        $('#comp_add').trigger('reset');
      });

      $('#largeModal').on('hidden.bs.modal', function() {
          $('#comp_view').trigger('reset');
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
          $('#aadd_zipcode').prop('disabled', true);
          $('#acPerson_first_name').prop('disabled', true);
          $('#acPerson_middle_name').prop('disabled', true);
          $('#acPerson_last_name').prop('disabled', true);
          $('#acPerson_email').prop('disabled', true);
          $('#acPerson_contact').prop('disabled', true);
          $('#acomp_name').prop('disabled', true);
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

    var table = $('#view_list').DataTable();
    table.column( 3 ).visible( false );
    $('#view_list').css('width', '100%');

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
              url: '/admin/maintenance/insurance/company/ardelete',
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
