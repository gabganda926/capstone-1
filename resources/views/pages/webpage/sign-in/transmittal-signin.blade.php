@extends('webmaster2')

@section('title','Transmittal | i-Insure')

@section('transmittal','active')

@section('body')
<section>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
          <li><a href="/home">Home</a></li>
          <li class="active">Transmittal</li>
        </ol>
        
        <div class="row">
            <h1><b>REQUEST FOR TRANSMITTAL OF YOUR DOCUMENTS</b></h1><br/>
                <div style="float: left; width: 43%;" >
                    <div class="panel panel-default" style="background-color: #424242; width: 90%">
                        <div class="panel-heading" style="background-color: #424242; color: white">CONTACT US</div>
                        <div class="panel-body" style="background-color: #424242; color: #e0e0e0">  Askjshdkjahd. jhdkshdkjasedhsjhbdckjsdkshdkusahdkjasdahskjdcnmx shdbkjsahdkwqjd wqiudkqwjd.</div>
                        <div class="panel-footer" style="background-color: #424242; color: #e0e0e0">  
                            <i class="glyphicon glyphicon-phone-alt"></i><span>  (02) 212-0000</span><br/>
                            <i class="glyphicon glyphicon-briefcase"></i><span>  compreline@insurance.com</span>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.6420020230535!2d121.08669821407172!3d14.619458389790465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b8236cdbddf1%3A0x512e36886ed20edf!2sNutriix+%2F+Compreline+Insurance+Services!5e0!3m2!1sen!2sph!4v1501403179768" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br/><br/>
                </div>

                <div style="float: right; width: 57%">
                    <h3><b>Online Transmittal Request</b></h3><br/>
                    <label><small>Welcome to the Online Transmittal Request of Compreline Insurance! Please complete the form below to facilitate your request. Our Representative will immediately get in touch with you regarding this request. Thank you.</small></label><br/><br/>
                    
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label for="1"><small>Insurance Company: </small></label>
                                <select id="1" class="selectpicker" data-size="10" data-live-search="true" data-width="100%">
                                    <option value="1">Company1</option>
                                    <option value="2">Company2</option>
                                    <option value="3">Company3</option>
                                </select>
                            </div>
                            <div class="col-xs-12">
                                <br/><label for="1"><small>Policy Number: </small></label>
                                <input type="text" name="plate" style="width: 100%">
                            </div><br/>

                            <!-- AUTPMATIC NA DIDISPLAY TO -->
                            <div class="col-xs-12">
                                <br/><label><small>Name: </small></label>
                                <input type="text" name="" style="width: 100%">
                            </div>
                            <div class="col-xs-12">
                                <br/><label><small>Cellphone Number: </small></label>
                                <input type="text" name="" style="width: 100%">
                            </div>
                            <div class="col-xs-12">
                                <br/><label><small>Cellphone Number (Alternate): </small></label>
                                <input type="text" name="" style="width: 100%">
                            </div>
                            <div class="col-xs-12">
                                <br/><label><small>Telephone: </small></label>
                                <input type="text" name="" style="width: 100%">
                            </div>
                            <div class="col-xs-12">
                                <br/><label><small>Email: </small></label>
                                <input type="email" name="" style="width: 100%">
                            </div>
                            <div class="col-xs-12">
                                <br/><label for="1"><small>Address: </small></label>
                                <textarea style="resize: none;" rows="4" cols="74"></textarea>
                            </div>
                            <!-- HANGGANG DITO -->

                            <div class="col-xs-12">
                                <br/><label><small>Request Documents: </small></label>
                                <div style="margin-left: 8%">
                                    <br/><label class="checkbox"><input type="checkbox" name="checkbox" >Document1</label>
                                    <br/><label class="checkbox"><input type="checkbox" name="checkbox" >Document2</label>
                                    <br/><label class="checkbox"><input type="checkbox" name="checkbox" >Document3</label>
                                    <br/><label class="checkbox"><input type="checkbox" name="checkbox" >Lahat ng nasa Maintenance</label>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <br/><br/><button type="button" class="btn btn-block btn-success">Submit</button>
                            </div>

                            <div class="col-xs-12">
                                <br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</section>

<script type="text/javascript">
  $('.collapse').on('show.bs.collapse', function () {
    $('.collapse.in').each(function(){
        $(this).collapse('hide');
    });
  });
</script>


<script>
//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
    
    //Set The Accordion Content Width
    var contentwidth = $('.accordion-header').width();
    $('.accordion-content').css({});
    
    //Open The First Accordion Section When Page Loads
    $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
    $('.accordion-content').first().slideDown().toggleClass('open-content');
    
    // The Accordion Effect
    $('.accordion-header').click(function () {
        if($(this).is('.inactive-header')) {
            $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }
        
        else {
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }
    });
    
    return false;
});
</script>
@endsection