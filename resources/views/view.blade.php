@extends('base')

@section('title')
View Registration
@stop
<link type="text/css" rel="stylesheet" href="{{asset('css/pagination.css')}}"  media="screen,projection"/>
@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Area Of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
    <li><a href="/logout" class=" waves-effect waves-light">Logout</a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Area Of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
    <li><a href="/logout">Logout</a></li>
@stop
@section('content')
<table id="registration_list">
        <thead>
          <tr>
              <th data-field="id">Reg_id</th>
              <th data-field="name">Name</th>
              <th data-field="degree">Degree</th>
          </tr>
        </thead>

        <tbody>
         	@foreach($registrations as $registration)
         	<tr id="{{$registration->id}}">
            <td>{{$registration->reg_id}}</td>
            <td>{{$registration->name}}</td>
            <td>{{$registration->degree}}</td>
            </tr>
		 	@endforeach
        </tbody>
      </table>
{!! $registrations->render() !!}
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Registration details</h4>
      <p id="reg_id"></p>
      <p id="name"></p>
      <p id="gender"></p>
      <p id="degree"></p>
      <p id="course"></p>
      <p id="year"></p>
      <p id="dept"></p>
      <p id="college"></p>
      <p id="email"></p>
      <p id="mobile"></p>
      <p id="guardian_mobile"></p>
      <p id="amount"></p>
      <p id="dd_no"></p>
      <p id="dd_date"></p>
      <p id="bank_name"></p>
      <p id="reason"></p>

    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>
@stop
@section('javascript')
$(document).ready(function(){
  $('#registration_list > tbody > tr').css('cursor','pointer');
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });

  $('#registration_list > tbody > tr').click(function(){
    var id = this.id;
    $.ajax({
        method: "POST",
        url: base_url+"/show_registration",
        data: { id :id }
    }).done(function( msg ) {
          modalInject($.parseJSON(msg));
    });
 
  });

  });
 function modalInject(json)
{
    $('#reg_id').html("<strong>REGISTRATION ID</strong> : "+json.reg_id);
    $('#name').html("<strong>NAME : </strong>"+json.name);
    $('#gender').html("<strong>Gender : </strong>"+json.gender);
    $('#degree').html("<strong>Degree : </strong>"+json.degree);
    $('#course').html("<strong>Course : </strong>"+json.course);
    $('#year').html("<strong>Year : </strong>"+json.year);
    $('#College').html("<strong>College : </strong>"+json.college_address);
    $('#email').html("<strong>Email : </strong>"+json.email);
    $('#mobile').html("<strong>Mobile no : </strong>"+json.mobile_no);
    $('#guardian_mobile').html("<strong>Guardian Mobile No : </strong>"+json.guardian_mobile_no);
    $('#amount').html("<strong>Amount : </strong>"+json.amount);
    $('#dd_no').html("<strong>DD No : </strong>"+json.dd_no);
    $('#dd_date').html("<strong>DD Date : </strong>"+json.dd_date);
    $('#bank_name').html("<strong>Bank Name : </strong>"+json.bank_name);
    $('#reason').html("<strong>Reason : </strong>"+json.reason);
    $('#modal1').openModal();
}

@stop