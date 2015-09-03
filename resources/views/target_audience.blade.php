@extends('base')

@section('title')
	Target Audience
@stop

@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Area Of Training</a></li>
    <li class="active"><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Area Of Training</a></li>
    <li class="active"><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop
@section('content')
<br>
<div class="row">
    <div class="col s12">
            <ul class="collection with-header card">
                <center><li class="collection-header"><h4>Target Audience</h4></li></center>
                <li class="collection-item">UG - Final year students of Engineering, Arts and Science disciplines.</li>
                <li class="collection-item">Second year PG students of M.Tech, MBA, M.Sc, and other P.G courses.</li>
                <li class="collection-item">Pre-final year engineering students are also encouraged to apply.</li>
            </ul>
    </div>
{{-- 
    <div class="col s12">
           <img class="responsive-img" src="">
    </div>
--}}
</div>    
@stop