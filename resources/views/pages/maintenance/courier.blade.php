@extends('master')

@section('title','Courier - Maintenance | i-Insure')

@section('maintenance','active')

@section('personnel','active')

@section('courier','active')

@section('body')

    <section class="content">
        <div class="container-fluid">
            <!-- ADD EMPLOYEE MODAL -->
            <div class="collapse fade" id="addEmpModal" role="dialog">
                <div class="modal-dialog modal-lg animated zoomInLeft active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-add">
                            <h4><br/>CREATE NEW COURIER RECORD</h4>
                        </div>
                        <div class="modal-body">
                            <form id="emp_add" name = "emp_add" action = "courier/submit" method="POST">
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
                                                    <select id = "pinfo_gender" name = "pinfo_gender" class="form-control show-tick">
                                                  <option selected value = "" style = "display: none;">-- Gender --</option>
                                                        <option value = "0">Male</option>
                                                        <option value = "1">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Age :</small></label>
                                                        <input id = "age" name = "age" type="text" class="form-control" readonly="true"  >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                  <div class="form-group form-float">
                                                        <label><small>Birthdate:</small></label>
                                                        <div class="form-row show-inputbtns">
                                                                <input id = "pinfo_bday" name = "pinfo_bday" type="date" data-date-inline-picker="false" data-date-open-on-focus="true" />
                                                        </div>
                                                  </div>
                                            </div>                      
                                        </div> <!-- end of rowclearfix -->
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Cellphone Number</label>
                                                        <input id = "pinfo_cpnum_1" name = "pinfo_cpnum_1" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Cellphone Number (Alternate)</label>
                                                        <input id = "pinfo_cpnum_2" name = "pinfo_cpnum_2" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">Tel Num</label>
                                                        <input id = "pinfo_tpnum" name = "pinfo_tpnum" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label class="form-label">E-mail</label>
                                                        <input id = "pinfo_mail" name = "pinfo_mail" type="email" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                <div class="col-md-4" style = "display: none;">
                                   <input id = "time" name = "time" type="text" class="form-control" pattern="[A-Za-z'-]">
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
                            <h4><br/>COURIER DETAILS
                            </h4>
                        </div><br/>
                        <button id = "Edit" style = "margin-left: 55em" type="button" class="btn btn-success btn-lg waves-effect"
                        onclick = "
                        document.getElementById('emp_view').action = 'courier/update';
                        $('#Edit').prop('disabled', true);
                        $('#Delete').prop('disabled', false);
                        $('#schange').show();
                        $('#aemp_first_name').prop('disabled', false);
                        $('#aemp_middle_name').prop('disabled', false);
                        $('#aemp_last_name').prop('disabled', false);
                        $('#aemp_mail').prop('disabled', false);
                        $('#aemp_contact').prop('disabled', false);
                        $('#schange').html('SAVE CHANGES');
                        ">
                        <i class="material-icons">create</i>
                        <span>Edit</span>
                        </button>
                        <button id = "Delete" type="button" class="btn bg-red btn-lg waves-effect"
                        onclick = "
                        document.getElementById('emp_view').action = 'courier/delete';
                        $('#Edit').prop('disabled', false);
                        $('#Delete').prop('disabled', true);
                        $('#schange').show();
                        $('#aemp_first_name').prop('disabled', true);
                        $('#aemp_middle_name').prop('disabled', true);
                        $('#aemp_last_name').prop('disabled', true);
                        $('#aemp_mail').prop('disabled', true);
                        $('#aemp_contact').prop('disabled', true);
                        $('#schange').html('DELETE RECORD');
                        ">
                            <i class="material-icons">delete_sweep</i>
                            <span>Delete</span>
                        </button>
                        <br/>
                        <div class="modal-body">
                            <form id="emp_view" name = "emp_view" method="POST">
                            <div class="row clearfix">
                                                <div class="col-md-1">
                                                   <label for="date_created"><small><small>Date Created</small></small></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="date_created" class="form-control" readonly="true"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="last_update"><small><small>Last Update</small></small></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <small><input type="text" id="last_update" class="form-control" readonly="true"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="col-md-4" style = "display: none;">
                                 <input id = "aemp_id" name = "aemp_id" type="text" class="form-control" pattern="[A-Za-z'-]">
                              </div>
                              <div class="col-md-4" style = "display: none;">
                                <input id = "pInfo_ID" name = "pInfo_ID" type="text" class="form-control" pattern="[A-Za-z'-]">
                              </div>
                              <div class="col-md-4" style = "display: none;">
                                <input id = "aaddid" name = "aaddid" type="text" class="form-control" pattern="[A-Za-z'-]">
                              </div>
                                <h3><small><b>PERSONAL INFORMATION</b></small></h3>
                                        <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div>
                                                <div class="body" align="center">
                                                    <div class="fallback">
                                                        <img id="editImg" src="#" alt="your image" style="height: 210px; width: 215px; border-style: solid; border-width: 2px;">
                                                    </div><br/>
                                                        <input id = "apicture" name = "apicture" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" readonly="true">
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
                                                        <input id = "acPerson_first_name" name = "acPerson_first_name" type="text" class="form-control" readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                     <label><small>Middle Name:</small></label>
                                                        <input id = "acPerson_middle_name" name = "acPerson_middle_name" type="text" class="form-control" readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                     <label><small>Last Name:</small></label>
                                                        <input id = "acPerson_last_name" name = "acPerson_last_name" type="text" class="form-control" readonly="true">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                <label><small>Gender :</small></label>
                                                    <select id = "apinfo_gender" name = "apinfo_gender" class="form-control show-tick" readonly="true">
                                                  <option selected value = "" style = "display: none;">-- Gender --</option>
                                                        <option value = "0">Male</option>
                                                        <option value = "1">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Age :</small></label>
                                                        <input id = "aage" name = "aage" type="text" class="form-control" readonly="true"   readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                  <div class="form-group form-float">
                                                        <label><small>Birthdate:</small></label>
                                                        <div class="form-row show-inputbtns">
                                                                <input id = "apinfo_bday" name = "apinfo_bday" type="date" data-date-inline-picker="false" data-date-open-on-focus="true" />
                                                        </div>
                                                  </div>
                                            </div>                           
                                        </div> <!-- end of rowclearfix -->
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Cellphone Number:</small></label>
                                                        <input id = "apinfo_cpnum_1" name = "apinfo_cpnum_1" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Cellphone Number(Alternate):</small></label>
                                                        <input id = "apinfo_cpnum_2" name = "apinfo_cpnum_2" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Tel. Num.:</small></label>
                                                        <input id = "apinfo_tpnum" name = "apinfo_tpnum" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>E-mail:</small></label>
                                                        <input id = "apinfo_mail" name = "apinfo_mail" type="email" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br/><br/>
                                        <h3> <small><b>RESIDENTIAL ADDRESS</b></small></h3>
                                        <br/>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Blk&Lot/Bldg/Unit: </small></label>
                                                        <input id = "aadd_blcknum" name = "aadd_blcknum" type="text" class="form-control" readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Street:</small></label>
                                                        <input id = "aadd_street" name = "aadd_street" type="text" class="form-control" readonly="true" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Subdivision:</small></label>
                                                        <input id = "aadd_subdivision" name = "aadd_subdivision" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Barangay:</small></label>
                                                        <input id = "aadd_brngy" name = "aadd_brngy" type="text" class="form-control" readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>District:</small></label>
                                                        <input id = "aadd_district" name = "aadd_district" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>City/Municipality:</small></label>
                                                        <input id = "aadd_city" name = "aadd_city" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                    <label><small>Province:</small></label>
                                                        <input id = "aadd_province" name = "aadd_province" type="text" class="form-control"  readonly="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-float">
                                                <label><small>Region:</small></label>
                                                    <select id = "aadd_region" name = "aadd_region" class="form-control show-tick" data-live-search="true" readonly="true">
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
                                                        <input id = "aadd_zipcode" name = "aadd_zipcode" type="text" class="form-control"  readonly="true">
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
                                MAINTENANCE - COURIER
                            </b></h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                <button type="button" class="btn bg-blue waves-effect" data-toggle="collapse" data-target="#addEmpModal">
                                    <i class="material-icons">group_add</i>
                                    <span>Add Courier</span>
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
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable animated lightSpeedIn active">
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th class="col-md-1"></th>
                                        <th>Courier Number</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact Details</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cor as $cdata)
                                      @if($cdata->del_flag == 0)
                                        @foreach($pnf as $Info)
                                         @foreach($address as $add)
                                          @if($add->add_ID == $cdata->courier_add_ID)
                                          @if($Info->pinfo_ID == $cdata->personal_info_ID)
                                            <tr>
                                                <td><input type="checkbox" id="{{ $cdata->courier_ID }}" name = "del_check" class="filled-in chk-col-red checkCheckbox" data-id = "{{ $cdata->courier_ID }}"/>
                                                <label for="{{ $cdata->courier_ID }}"></label></td>
                                                <td>
                                                    {{$cdata->courier_ID}}
                                                </td>
                                                <td>
                                                  @if($Info->pinfo_middle_name == null)
                                                  {{ $Info->pinfo_last_name.", ".$Info->pinfo_first_name}}
                                                  @else
                                                  {{ $Info->pinfo_last_name.", ".$Info->pinfo_first_name." ".$Info->pinfo_middle_name }}
                                                  @endif
                                                </td>
                                                <td>
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_blcknum }}
                                                  @endif
                                                @endforeach

                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_street }}
                                                  @endif
                                                @endforeach

                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_subdivision }}
                                                  @endif
                                                @endforeach

                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_brngy }}
                                                  @endif
                                                @endforeach

                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_district }}
                                                  @endif
                                                @endforeach

                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_city }}
                                                  @endif
                                                @endforeach

                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_province }}
                                                  @endif
                                                @endforeach

                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_region }}
                                                  @endif
                                                @endforeach
                                                </td>
                                                <td>
                                                   @foreach($pnf as $Info)
                                                    @if($cdata->personal_info_ID == $Info->pinfo_ID )
                                                      <li>{{ $Info->pinfo_cpnum_1 }}</li>
                                                    @endif
                                                   @endforeach
                                                   @foreach($pnf as $Info)
                                                    @if($cdata->personal_info_ID == $Info->pinfo_ID )
                                                      <li>{{ $Info->pinfo_cpnum_2 }}</li>
                                                    @endif
                                                   @endforeach
                                                   @foreach($pnf as $Info)
                                                    @if($cdata->personal_info_ID == $Info->pinfo_ID )
                                                      <li>{{ $Info->pinfo_tpnum }}</li>
                                                    @endif
                                                   @endforeach
                                                   @foreach($pnf as $Info)
                                                    @if($cdata->personal_info_ID == $Info->pinfo_ID )
                                                      <li>{{ $Info->pinfo_mail }}</li>
                                                    @endif
                                                   @endforeach
                                                </td>
                                                <td>
                                                <button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#largeModal"
                                                
                                                data-agentid='{{ $cdata->agent_ID }}'
                                                data-fname='{{ $Info->pinfo_first_name }}'
                                                data-mname='{{ $Info->pinfo_middle_name }}'
                                                data-lname='{{ $Info->pinfo_last_name }}'
                                                data-contact1='{{ $Info->pinfo_cpnum_1 }}'
                                                data-contact2='{{ $Info->pinfo_cpnum_2 }}'
                                                data-bday='{{ $Info->pinfo_age }}'
                                                data-telnum='{{ $Info->pinfo_tpnum }}'
                                                data-mail='{{ $Info->pinfo_mail }}'
                                                data-gender='{{ $Info->pinfo_gender }}'
                                                data-add='{{ $cdata->courier_add_ID }}'
                                                data-pinfo='{{ $cdata->personal_info_ID }}'
                                                data-source = '{!! "/image/".$Info->pinfo_picture !!}'

                                                data-created = '{{ \Carbon\Carbon::parse($cdata->created_at)->format("M-d-Y") }} {{ "(".\Carbon\Carbon::parse($cdata->created_at)->format("l, h:i:s A").")" }}'

                                                data-updated = '{{ \Carbon\Carbon::parse($cdata->updated_at)->format("M-d-Y") }} {{ "(".\Carbon\Carbon::parse($cdata->updated_at)->format("l, h:i:s A").")" }}'

                                                data-lnumb='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_blcknum }}
                                                  @endif
                                                @endforeach'
                                                data-strt='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_street }}
                                                  @endif
                                                @endforeach'
                                                data-sdiv='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_subdivision }}
                                                  @endif
                                                @endforeach'
                                                data-brg='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_brngy }}
                                                  @endif
                                                @endforeach'
                                                data-distr='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_district }}
                                                  @endif
                                                @endforeach'
                                                data-city='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_city }}
                                                  @endif
                                                @endforeach'
                                                data-prov='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_province }}
                                                  @endif
                                                @endforeach'
                                                data-regn='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_region }}
                                                  @endif
                                                @endforeach'
                                                data-zip='
                                                @foreach($address as $addata)
                                                  @if($addata->add_ID == $cdata->courier_add_ID)
                                                  {{ $addata->add_zipcode }}
                                                  @endif
                                                @endforeach'

                                                onclick = "
                                                

                                                var id = $(this).data('agentid');
                                                var fname = $(this).data('fname');
                                                var mname = $(this).data('mname');
                                                var lname = $(this).data('lname');
                                                var contact1 = $(this).data('contact1');
                                                var contact2 = $(this).data('contact2');
                                                var telnum = $(this).data('telnum');
                                                var gender = $(this).data('gender');
                                                var bday = $(this).data('bday');
                                                var mail = $(this).data('mail');
                                                var pinfo = $(this).data('pinfo');
                                                var src = $(this).data('source');
                                                var created = $(this).data('created');
                                                var updated = $(this).data('updated');


                                                var add = $(this).data('add');
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
                                                document.getElementById('acPerson_first_name').value = fname;
                                                document.getElementById('acPerson_middle_name').value = mname;
                                                document.getElementById('acPerson_last_name').value = lname;
                                                document.getElementById('apinfo_cpnum_1').value = contact1;
                                                document.getElementById('apinfo_cpnum_2').value = contact2;
                                                document.getElementById('apinfo_mail').value = mail;
                                                document.getElementById('apinfo_bday').value = bday;
                                                $('#apinfo_gender').val(gender).change();
                                                document.getElementById('aaddid').value = add;
                                                document.getElementById('pInfo_ID').value = pinfo;
                                                document.getElementById('aadd_blcknum').value = lotnum;
                                                document.getElementById('aadd_street').value = strt;
                                                document.getElementById('aadd_subdivision').value = subdiv;
                                                document.getElementById('aadd_brngy').value = brngy;
                                                document.getElementById('aadd_district').value = dist;
                                                document.getElementById('aadd_city').value = city;
                                                document.getElementById('date_created').value = created;
                                                document.getElementById('last_update').value = updated; 
                                                $('#aadd_region').val(reg).change();
                                                document.getElementById('add_zipcode').value = zipcode;
                                                $('#editImg').attr('src', src);
                                                var bday = document.getElementById('apinfo_bday').value.split('-');
                                                var today = new Date();
                                                if(bday[0] != 0)
                                                {
                                                    if((today.getMonth() + 1) < bday[1])
                                                    {
                                                      document.getElementById('aage').value = today.getFullYear() - bday[0] - 1;
                                                    }
                                                    else
                                                    {
                                                      document.getElementById('aage').value = today.getFullYear() - bday[0];
                                                    }
                                                }
                                                else
                                                {
                                                    document.getElementById('aage').value = 'Invalid Input';
                                                }

                                                ">
                                                    <i class="material-icons">remove_red_eye</i>
                                                    <span>View</span>
                                                </button>
                                                </td>
                                            </tr>
                                          @endif
                                          @endif
                                         @endforeach
                                        @endforeach
                                      @endif
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

            
    </section>

@push('scripts')
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
                  emp_mail:{
                    required: true,
                    email: true,
                    maxlength: 50
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
                    alpha: true,
                    maxlength: 30
                  },
                  aemp_middle_name:{
                    alpha: true,
                    maxlength: 20
                  },
                  aemp_last_name:{
                    required: true,
                    alpha: true,
                    maxlength: 20
                  },
                  aemp_contact:{
                    required: true,
                    digits: true,
                    minlength: 7,
                    maxlength: 11
                  },
                  aemp_mail:{
                    required: true,
                    email: true,
                    maxlength: 50
                  }
                },
                // Specify validation error messages
                messages: {
                    aemp_first_name:{
                        required: "Empty First Name"
                    },
                    aemp_last_name:{
                        required: "Empty Last Name"
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
        $('#pinfo_bday').on('change textInput input', function () {
            var bday = document.getElementById("pinfo_bday").value.split('-');
            var today = new Date();
            if(bday[0] != 0)
            {
                if((today.getMonth() + 1) <= bday[1])
                {
                  if((today.getDate()) < bday[2])
                    {
                        document.getElementById("age").value = today.getFullYear() - bday[0] - 1;
                    }
                  else
                    {
                        document.getElementById("age").value = today.getFullYear() - bday[0];
                    }
                }
                else
                {
                  document.getElementById("age").value = today.getFullYear() - bday[0];
                }
            }
            else
            {
                document.getElementById("age").value = "Invalid Input";
            }
        });

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
                  url: '/admin/maintenance/courier/ardelete',
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
@endpush
@endsection
