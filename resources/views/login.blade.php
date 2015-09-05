@extends('base')

@section('title')
Login
@stop
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Area Of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Area Of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop


@section('content')
<div class="row">
<div class=" card col m6 offset-m3">
 <form method="post">
	  {!! csrf_field() !!}
	   <div class="row">
	    <div class="input-field col s12">
        <i class="material-icons prefix  blue-text text-darken-4">account_circle</i>
        <input id="username" type="text" class="validate" name="username" required>
        <label for="username">Username</label>
      </div>
	   </div>
	  <div class="row">
        <div class="input-field col s8">
          <i class="material-icons prefix  blue-text text-darken-4">lock</i>
          <input id="pass" type="password" class="validate" name="password" required >
		      <label for="pass">Password</label>
        </div>
		    <div class="input-field col s4">
	        <button class="btn waves-effect waves-light blue darken-4" type="submit" >login
          </button>
	      </div>
    </div>
    @if(Session::has('message'))
      <div class="red-text">{{Session('message')}}</div>
    @endif
</form>
</div>
</div>
@stop