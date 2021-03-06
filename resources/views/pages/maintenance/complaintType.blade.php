@extends('master')

@section('title','Complaint Type - Maintenance | i-Insure')

@section('maintenance','active')

@section('ctype','active')

@section('body')
    <section class="content">
        <div class="container-fluid">
            <!-- ADD INST MODAL -->
            <div class="collapse fade" id="addCTypeModal"role="dialog">
                <div class="modal-dialog animated zoomInLeft active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-add">
                            <h4><br/>CREATE NEW COMPLAINT TYPE RECORD</h4>
                        </div><br/><br/>
                            <div class="modal-body">
                                <form id="add" name = "add" action = "complaint/submit" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id = "clientType_type" name = "clientType_type" type="text" class="form-control" required>
                                                    <label class="form-label">Complaint Type Name </label>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="form-group form-float">
                                          
                                            <div class="form-group form-float">
                                            <div class="form-line">
                                                    <textarea id = "clientType_desc" name = "clientType_desc" rows="4" class="form-control no-resize auto-growth"></textarea>
                                                    <label class="form-label">Description </label>
                                            </div>
                                            </div>
                                          </div>
                                      
                                    </div>
                                </div>
                                    <br/><br/>
                                    <div class="col-md-4" style = "display: none;">
                                       <input id = "time" name = "time" type="text" class="form-control" pattern="[A-Za-z'-]">
                                    </div>
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

                                    document.getElementById('clientType_type').value = '';
                                    document.getElementById('clientType_desc').value = '';
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
                            <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#addCTypeModal" onclick="
                            $('#add')[0].reset();
                            $('#addbtn').show();">CLOSE</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- #END# ADD INST MODAL -->
            <!-- View INST MODAL-->
            <div class="collapse fade" id="largeModal" role="dialog">
                <div class="modal-dialog animated zoomInRight active" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-view">
                            <h4><br/>COMPLAINT TYPE DETAILS
                            </h4>
                        </div><br/>
                        <button id = "Edit" style = "margin-left: 32em" type="button" class="btn btn-success btn-lg waves-effect"
                        onclick = "
                        document.getElementById('view').action = 'complaint/update';
                        $('#Edit').prop('disabled', true);
                        $('#Delete').prop('disabled', false);
                        $('#schange').show();
                        $('#aclientType_type').prop('disabled', false);
                        $('#aclientType_desc').prop('disabled', false);
                        $('#schange').html('SAVE CHANGES');
                        $( '#aclientType_type' ).focus();
                        swal({
                        title: 'You can now edit the record.',
                        type: 'info',
                        timer: 1500,
                        showConfirmButton: false
                        });
                        ">
                        <i class="material-icons">create</i>
                        <span>Edit</span>
                        </button>
                        <button id = "Delete" type="button" class="btn bg-red btn-lg waves-effect"
                        onclick = "
                        document.getElementById('view').action = 'complaint/delete';
                        $('#Edit').prop('disabled', false);
                        $('#Delete').prop('disabled', true);
                        $('#schange').show();
                        $('#aclientType_type').prop('disabled', false);
                        $('#aclientType_desc').prop('disabled', false);
                        $('#schange').html('DELETE RECORD');
                        $( '#schange' ).focus();
                        swal({
                        title: 'You can now delete the record.',
                        type: 'info',
                        timer: 1500,
                        showConfirmButton: false
                        });
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
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <label><small>Complaint Type Name :</small></label>
                                                    <input id = "aclientType_type" name = "aclientType_type" type="text" class="form-control" name="name" disabled="disable" required>
                                                </div>
                                            </div>
                                    </div>
                                     <div class="col-md-12">
                                       <div class="form-group form-float">
                                           
                                             <div class="form-group form-float">
                                                 <div class="form-line">
                                                 <label><small>Description :</small></label>
                                                     <textarea id = "aclientType_desc" name = "aclientType_desc" rows="4" class="form-control no-resize auto-growth" disabled></textarea>
                                                 </div>
                                             </div>
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
                            <button type="button" class="btn btn-link waves-effect" data-toggle="collapse" data-target="#largeModal" onclick="
                        $('#Edit').prop('disabled', false);
                        $('#Delete').prop('disabled', false);
                        $('#schange').hide();
                        $('#aclientType_type').prop('disabled', false);
                        $('#aclientType_desc').prop('disabled', false);">CLOSE</button>
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
                                MAINTENANCE - COMPLAINT TYPE
                            </b></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <li>
                                <button id = "addbtn" form = "add" type="submit" class="btn bg-blue waves-effect" data-toggle="collapse" data-target="#addCTypeModal" onclick = "$(this).hide();">
                                    <i class="material-icons">contacts</i>
                                    <span>Add Complaint Type</span>
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
                                        <th class="col-md-2">Complaint Type</th>
                                        <th>Description</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($complainttype as $ctype)
                                    @if($ctype->del_flag == 0)
                                        <tr>
                                            <td><input type="checkbox" id="{{ $ctype->complaintType_ID }}" name = "del_check" class="filled-in chk-col-red checkCheckbox"
                                            data-id = "{{ $ctype->complaintType_ID }}"/>
                                            <label for="{{ $ctype->complaintType_ID }}"></label></td>
                                            <td>{{ $ctype->complaintType_name }}</td>
                                            <td>{{ $ctype->complaintType_desc }}</td>
                                            <td>
                                            <button type="button" class="btn bg-light-blue waves-effect" data-toggle="collapse" data-target="#largeModal"
                                            data-id = "{{ $ctype->complaintType_ID }}"
                                            data-name = "{{ $ctype->complaintType_name }}"
                                            data-desc = "{{ $ctype->complaintType_desc }}"

                                            data-created = '{{ \Carbon\Carbon::parse($ctype->created_at)->format("M-d-Y") }} {{ "(".\Carbon\Carbon::parse($ctype->created_at)->format("l, h:i:s A").")" }}'

                                            data-updated = '{{ \Carbon\Carbon::parse($ctype->updated_at)->format("M-d-Y") }} {{ "(".\Carbon\Carbon::parse($ctype->updated_at)->format("l, h:i:s A").")" }}'
                                            onclick= "

                                            document.getElementById('id').value = $(this).data('id');
                                            document.getElementById('aclientType_type').value = $(this).data('name');
                                            document.getElementById('aclientType_desc').value = $(this).data('desc');

                                            document.getElementById('date_created').value = $(this).data('created');
                                            document.getElementById('last_update').value = $(this).data('updated'); 
                                            ">
                                            <i class="material-icons">remove_red_eye</i>
                                            <span>View</span>
                                            </button>
                                            </td>
                                        </tr>
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
                  clientType_type:{
                    required: true,
                    alpha: true,
                    maxlength: 20
                  },
                  clientType_desc:{
                    maxlength: 50
                  }
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
                  aclientType_type:{
                    required: true,
                    alpha: true,
                    maxlength: 20
                  },
                  aclientType_desc:{
                    maxlength: 50
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
            $('#aclientType_type').prop('disabled', true);
            $('#aclientType_desc').prop('disabled', true);
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
                  url: '/admin/maintenance/complaint/ardelete',
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
