@extends('base')

@section('title')
	Area Of Training
@stop

@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li  class="active"><a href="/area_of_training" class=" waves-effect waves-light">Area Of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li  class="active"><a href="/area_of_training">Area Of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop
@section('content')
<br>
<div class="row">
    <div class="col s12">
            <ul class="collection with-header card">
                <center><li class="collection-header"><h4>Areas Of Training</h4>
                <h6 style="font-size:20px;line-height: 30px;">
					Training areas for this employability SEP are designed to meet the requirements of students, industry 
					and academic institutions. The broad area of coverage includes: 
                </h6>
                <br>
                </li></center>
                <div class="col m6">
                <li class="collection-item">Tips for Interview </li>
                <li class="collection-item">Tips to write winning Resume</li>
                <li class="collection-item">Tips to minimize Communication error</li>
                <li class="collection-item">Personality Identification</li>
                <li class="collection-item">Strength and Opportunity Identification</li>
                <li class="collection-item">Fine tuning of Soft Skills</li>
                <li class="collection-item">Art of Public speaking</li>
                </div>
                <div class="col m6">
                <li class="collection-item">Business Etiquette</li>
                <li class="collection-item">Concentration Techniques</li>
                <li class="collection-item">Sector wise employment opportunities</li>
                <li class="collection-item">Setting the road map for career selection</li>
                <li class="collection-item">Theory of multiple intelligence</li>
                <li class="collection-item">Tips to face competitive exams</li>
                <li class="collection-item">Creating entrepreneurial mindset</li>
                </div>
            </ul>
            </ul>
            </ul>
    </div>
</div>    
@stop