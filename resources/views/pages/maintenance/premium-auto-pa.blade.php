@extends('master')

@section('title','Auto PA Premiums - Maintenance | i-Insure')

@section('maintenance','active')

@section('premiums','active')

@section('ppam','active')

@section('body')
    <section class="content">
        <div class="container-fluid">
            <!-- ADD INST MODAL -->
            <div class="collapse fade" id="addCTypeModal" role="dialog">
                <div class="modal-dialog animated zoomInLeft active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-add">
                            <h4><br/>CREATE NEW AUTO PA PREMIUM RECORD</h4>
                        </div><br/><br/>
                            <div class="modal-body">
                                <form id="add" name = "add" action = "personal-accident/submit" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <label><small>Insurance Company:</small></label>
                                        <select id = "compdrop" name = "compdrop" class="form-control show-tick" data-live-search="true" required>
                                            <option value = "" style = "display:none;">-- Select Company --</option>
                                            @foreach($com as $company)
                                             @if($company->del_flag == 0)
                                              @if($company->company_type == 0)
                                                <option value = "{{ $company->comp_ID }}">{{ $company->comp_name }}</option>
                                              @endif
                                             @endif
                                            @endforeach
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "ins_limit" name = "ins_limit" type="number" min="1" class="form-control" required>
                                                    <label class="form-label">Insurance Cover Limit</label>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                            <div class="form-line">
                                                    <input id = "pass_no" name = "pass_no" type="number" min="1" class="form-control no-resize auto-growth" required>
                                                    <label class="form-label">Number of Passenger </label>
                                            </div>
                                            </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h3><small><b>PRICES:</b></small></h3><br/>
                                    </div>
                                    <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="last_update"><small>Insurance Cover:</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" min="1" id="ins_cover" name = "ins_cover" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row clearfix">
                                    <div class="col-md-12">

                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="last_update"><small>Passenger Cover:</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" min="1" id="pass_cover" name = "pass_cover" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="last_update"><small>M.R. (20%):</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" min="1" id="mr" name = "mr" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="total"><small>TOTAL:</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" min="1" id="total" class="form-control" disabled="disable">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                    <br/><br/>
                                    <div class="col-md-4" style = "display: none;">
                                       <input id = "time" name = "time" type="text" class="form-control" pattern="[A-Za-z'-]">
                                    </div>
                                <div class="modal-footer js-sweetalert">
                                <button class="btn btn-primary waves-effect" type="button" onclick = "
                                document.getElementById('time').value = formatDate(new Date());
                                if($('#add').valid())
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
                                      $('#add').submit();
                                      document.getElementById('pnumbah').value = '';
                                      $('#statdrop').val('').change();
                                      $('#compdrop').val('').change();
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
                                <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#addCTypeModal">CLOSE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# ADD INST MODAL -->
            <!-- View INST MODAL-->
            <div class="collapse fade" id="largeModal" role="dialog">
                <div class="modal-dialog animated zoomInRight active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-view">
                            <h4><br/>AUTO PA PREMIUM DETAILS
                            </h4>
                        </div><br/>
                        <button id = "Edit" style = "margin-left: 32em" type="button" class="btn btn-success btn-lg waves-effect"
                        onclick = "
                        document.getElementById('view').action = 'personal-accident/update';
                        $('#Edit').prop('disabled', true);
                        $('#Delete').prop('disabled', false);
                        $('#schange').show();
                        document.getElementById('acompdrop').disabled=false;
                        $('#ains_limit').prop('readonly', false);
                        $('#apass_no').prop('readonly', false);
                        $('#ains_cover').prop('readonly', false);
                        $('#apass_cover').prop('readonly', false);
                        $('#amr').prop('readonly', false);
                        $('#schange').html('SAVE CHANGES');
                        ">
                        <i class="material-icons">create</i>
                        <span>Edit</span>
                        </button>
                        <button id = "Delete" type="button" class="btn bg-red btn-lg waves-effect"
                        onclick = "
                        document.getElementById('view').action = 'personal-accident/delete';
                        $('#Edit').prop('disabled', false);
                        $('#Delete').prop('disabled', true);
                        $('#schange').show();
                        document.getElementById('acompdrop').disabled=true;
                        $('#ains_limit').prop('readonly', true);
                        $('#apass_no').prop('readonly', true);
                        $('#ains_cover').prop('readonly', true);
                        $('#apass_cover').prop('readonly', true;
                        $('#amr').prop('readonly', true);
                        $('#schange').html('DELETE RECORD');
                        ">
                        <i class="material-icons">delete_sweep</i>
                        <span>Delete</span>
                        </button>
                        <br/>
                            <div class="modal-body">
                              <form id = "view" name = "view" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row clearfix">
                                    <div class="col-md-1">
                                       <label for="date_created"><small><small>Date Created</small></small></label>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <small><input type="text" id="date_created" class="form-control" readonly="true"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="last_update"><small><small>Last Update</small></small></label>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <small><input type="text" id="last_update" class="form-control" readonly="true"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                    <label><small>Company :</small></label>
                                        <select id = "acompdrop" name = "acompdrop" class="form-control show-tick" data-live-search="true" required>
                                          <option value="" style = "display:none;">-- Select Company --</option>
                                          @foreach($com as $company)
                                          @if($company->del_flag == 0)
                                              <option value = "{{ $company->comp_ID }}">{{ $company->comp_name }}</option>
                                          @endif
                                          @endforeach
                                        </select>
                                        <br/>
                                        <br/>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Insurance Cover Limit:</small></label>
                                                    <input id = "ains_limit" name = "ains_limit" type="number" min="1" class="form-control" required>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group form-float">
                                            <div class="form-line">
                                            <label><small>Number of Passengers :</small></label>
                                                    <input id = "apass_no" name = "apass_no" type="number" min="1" class="form-control no-resize auto-growth" required>
                                            </div>
                                            </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="last_update">Prices:</label><br/>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="last_update"><small>Insurance Cover:</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" min="1" id="ains_cover" name="ains_cover" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="last_update"><small>Passenger Cover:</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" min="1" id="apass_cover" name="apass_cover" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="last_update"><small>M.R. (20%):</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" min="1" id="amr" name = "amr" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="view_total"><small>TOTAL:</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" min="1" id="atotal" class="form-control" readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                                    <br/>
                                    <div class="col-md-4" style = "display: none;">
                                       <input id = "id" name = "id" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4" style = "display: none;">
                                       <input id = "atime" name = "atime" type="text" class="form-control">
                                    </div>
                                <div class="modal-footer js-sweetalert">
                                    <button id = "schange" class="btn btn-primary waves-effect" style = "display: none;" type="button" onclick = "
                                    document.getElementById('atime').value = formatDate(new Date());
                                    if($('#view').valid())
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
                                          $('#view').submit();
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
            </div>
            <!-- #END# VIEW INST MODAL -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><b>
                                MAINTENANCE - AUTO PA PREMIUM
                            </b></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <li>
                                <button type="button" class="btn bg-blue waves-effect" data-toggle="collapse" data-target="#addCTypeModal">
                                    <i class="material-icons">add_to_photos</i>
                                    <span>Add New Premium Cover</span>
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
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example animated lightSpeedIn active">
                                <thead>
                                    <tr class="bg-blue-grey">
                                        <th class="col-md-1"></th>
                                        <th>Insurance Company</th>
                                        <th>Insurance Cover Limit</th>
                                        <th>No. of Pass.</th>
                                        <th>Cover Price</th>
                                        <th>Passenger Cover Price</th>
                                        <th>M.R.</th>
                                        <th>Total</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ppa as $pa)
                                     @if($pa->del_flag == 0)
                                      @foreach($com as $company)
                                        @if($pa->insurance_compID == $company->comp_ID)
                                        <tr>
                                        <td><input type="checkbox" id="{{ $pa->premiumPA_ID }}" name = "del_check" class="filled-in chk-col-red checkCheckbox" data-id = "{{ $pa->premiumPA_ID }}"/>
                                              <label for="{{ $pa->premiumPA_ID }}"></label></td>
                                        <td>{{ $company->comp_name }}</td>
                                        <td>{{ $pa->insuranceLimit }}</td>
                                        <td>{{ $pa->passengerNum }}</td>
                                        <td>{{ $pa->insuranceCover }}</td>
                                        <td>{{ $pa->passengerCover }}</td>
                                        <td>{{ $pa->mrCover }}</td>
                                        <td>{{ $pa->insuranceCover+$pa->passengerCover+$pa->mrCover }}</td>
                                        <td><button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#largeModal"
                                              data-id = "{{ $pa->premiumPA_ID }}"
                                              data-cmpid = "{{ $pa->insurance_compID }}"
                                              data-inslimit = "{{ $pa->insuranceLimit }}"
                                              data-passno = "{{ $pa->passengerNum }}"
                                              data-inscover = "{{ $pa->insuranceCover }}"
                                              data-passcover = "{{ $pa->passengerCover }}"
                                              data-mrcover = "{{ $pa->mrCover }}"
                                              data-tot = "{{ $pa->insuranceCover+$pa->passengerCover+$pa->mrCover }}"

                                              data-created = '{{ \Carbon\Carbon::parse($pa->created_at)->format("M-d-Y") }} {{ "(".\Carbon\Carbon::parse($pa->created_at)->format("l, h:i:s A").")" }}'

                                              data-updated = '{{ \Carbon\Carbon::parse($pa->updated_at)->format("M-d-Y") }} {{ "(".\Carbon\Carbon::parse($pa->updated_at)->format("l, h:i:s A").")" }}'

                                              onclick= "
                                              document.getElementById('acompdrop').disabled=true;

                                              document.getElementById('id').value = $(this).data('id');
                                              document.getElementById('ains_limit').value = $(this).data('inslimit');
                                              document.getElementById('apass_no').value = $(this).data('passno');
                                              document.getElementById('ains_cover').value = $(this).data('inscover');
                                              document.getElementById('apass_cover').value = $(this).data('passcover');
                                              document.getElementById('amr').value = $(this).data('mrcover');
                                              document.getElementById('atotal').value = $(this).data('tot');
                                              $('#acompdrop').val($(this).data('cmpid')).change();

                                              document.getElementById('date_created').value = $(this).data('created');
                                              document.getElementById('last_update').value = $(this).data('updated'); 
                                              ">

                                              <i class="material-icons">remove_red_eye</i>
                                              <span>View</span>
                                              </button></td>
                                              </tr>
                                    @endif
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
              $("form[name='add']").validate({
                // Specify validation rules
                rules: {
                  // The key name on the left side is the name attribute
                  // of an input field. Validation rules are defined
                  // on the right side
                  compdrop:{
                    required: true
                  },
                  ins_limit:{
                    required: true,
                    digits: true
                  },
                  pass_no:{
                    required: true,
                    digits: true
                  },
                  insuranceCover:{
                    required: true,
                    digits: true
                  },
                  pass_cover:{
                    required: true,
                    digits: true
                  },
                  mrCover:{
                    required: true,
                    digits: true
                  },
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                  form.submit();
                }
              });

              $("form[name='view']").validate({
                // Specify validation rules
                rules: {
                  // The key name on the left side is the name attribute
                  // of an input field. Validation rules are defined
                  // on the right side
                  viewcompdrop:{
                    required: true
                  },
                  ains_limit:{
                    required: true,
                    digits: true
                  },
                  apass_no:{
                    required: true,
                    digits: true
                  },
                  ainsuranceCover:{
                    required: true,
                    digits: true
                  },
                  apass_cover:{
                    required: true,
                    digits: true
                  },
                  amrCover:{
                    required: true,
                    digits: true
                  },
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
        $('#mr').on('change textInput input', function () {
            if(!isNaN(parseFloat(document.getElementById("ins_cover").value)) 
                && !isNaN(parseFloat(document.getElementById("pass_cover").value)) 
                && !isNaN(parseFloat(document.getElementById("mr").value)))
            {
                var inscov = parseFloat(document.getElementById("ins_cover").value);
                var passcov = parseFloat(document.getElementById("pass_cover").value);
                var mrcov = parseFloat(document.getElementById("mr").value);

                document.getElementById("total").value = inscov + passcov + mrcov;
            }
            else
            {
                document.getElementById("total").value = "Please fill out all of the prices above.";
            }
        });
        $('#ins_cover').on('change textInput input', function () {
            if(!isNaN(parseFloat(document.getElementById("ins_cover").value)) 
                && !isNaN(parseFloat(document.getElementById("pass_cover").value)) 
                && !isNaN(parseFloat(document.getElementById("mr").value)))
            {
                var inscov = parseFloat(document.getElementById("ins_cover").value);
                var passcov = parseFloat(document.getElementById("pass_cover").value);
                var mrcov = parseFloat(document.getElementById("mr").value);

                document.getElementById("total").value = inscov + passcov + mrcov;
            }
            else
            {
                document.getElementById("total").value = "Please fill out all of the prices above.";
            }
        });
        $('#pass_cover').on('change textInput input', function () {
            if(!isNaN(parseFloat(document.getElementById("ins_cover").value)) 
                && !isNaN(parseFloat(document.getElementById("pass_cover").value)) 
                && !isNaN(parseFloat(document.getElementById("mr").value)))
            {
                var inscov = parseFloat(document.getElementById("ins_cover").value);
                var passcov = parseFloat(document.getElementById("pass_cover").value);
                var mrcov = parseFloat(document.getElementById("mr").value);

                document.getElementById("total").value = inscov + passcov + mrcov;
            }
            else
            {
                document.getElementById("total").value = "Please fill out all of the prices above.";
            }
        });
        $(document).ready(function()
        {
          $('add').validate();
          $('view').validate();
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

        $('#addCTypeModal').on('hidden.bs.modal', function() {
            $('#add').trigger('reset');
        });

        $('#largeModal').on('hidden.bs.modal', function() {
            $('#view').trigger('reset');
            $('#Edit').prop('disabled', false);
            $('#Delete').prop('disabled', false);
            $('#schange').hide();
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
                  url: '/admin/maintenance/personal-accident/ardelete',
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
