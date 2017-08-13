@extends('webmaster2')

@section('title','Payment | i-Insure')

@section('payment','active')

@section('body')
<section>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
          <li><a href="/home">Home</a></li>
          <li class="active">Payment</li>
        </ol>
        <div class="row">
            <div class="col-xs-12">
                <button type="button" class="btn btn-block btn-success" onclick="window.document.location='{{ URL::asset('/user/payment/new') }}';">Add New Payment</button>
            </div>
        </div><br/>
        <div class="panel panel-default">
            <div class="panel-body">
            <h3><b>Breakdown of Payment</b></h3><br/>
            <label>Check Voucher No.: VOUCHER-12823u23</label><br/>
                <table class="table">
                    <thead>
                      <tr>
                        <th>Check No.</th>
                        <th>Bank</th>
                        <th>Due Date</th>
                        <th>Amount Due</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>      
                      <tr class="success">
                        <td>12232</td>
                        <td>Banco De Oro - Antipolo City</td>
                        <td>July 4, 2017</td>
                        <td>Php 7,000.50</td>
                        <td>Paid</td>
                      </tr>
                      <tr class="danger">
                        <td>12233</td>
                        <td>Banco De Oro - Antipolo City</td>
                        <td>August 4, 2017</td>
                        <td>Php 7,000.50</td>
                        <td>Delayed (1 day/s)</td>
                      </tr>
                      <tr class="info">
                        <td>12234</td>
                        <td>Banco De Oro - Antipolo City</td>
                        <td>September 4, 2017</td>
                        <td>Php 7,000.50</td>
                        <td>to be paid</td>
                      </tr>
                      <tr class="info">
                        <td>12234</td>
                        <td>Banco De Oro - Antipolo City</td>
                        <td>October 4, 2017</td>
                        <td>Php 7,000.50</td>
                        <td>to be paid</td>
                      </tr>
                    </tbody>
                  </table>
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
