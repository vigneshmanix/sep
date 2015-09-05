@extends('base')

@section('title')
	Register
@stop

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
label[data-error]:after {
  white-space: nowrap;
}
</style>
@section('nav-bar')
    <li><a href="/" class="waves-effect waves-light">Home</a></li>
    <li><a href="/area_of_training" class=" waves-effect waves-light">Area Of Training</a></li>
    <li><a href="/target_audience" class=" waves-effect waves-light">Target Audience</a></li>
    <li><a href="/resource_person" class=" waves-effect waves-light">Resource Person</a></li>
    <li class="active"><a href="/registration" class=" waves-effect waves-light">Registration</a></li>
    <li><a href="/sponsorship_opportunity" class=" waves-effect waves-light">Sponsorship Opportunity </a></li>
@stop
@section('side-nav')
    <li><a href="/">Home</a></li>
    <li><a href="/area_of_training">Area Of Training</a></li>
    <li><a href="/target_audience">Target_Audience</a></li>
    <li><a href="/resource_person">Resource Person</a></li>
    <li class="active"><a href="/registration">Registration</a></li>
    <li><a href="/sponsorship_opportunity">Sponsorship Opportunity </a></li>
@stop
@section('content')
    <div class="row card">
    @if (count($errors) > 0)
           <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li class="red-text">{{ $error }}</li>
                @endforeach
              </ul>
            </div>
 @endif 
        <center><h5>Register for the Programme</h5></center>
        <form class="col s12" method="post">
        {!! csrf_field() !!}
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">account_circle</i>
                <input id="name" type="text" name="name" class="validate" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                <label for="name" data-error="Alphabets Only">Name</label>
            </div>
        </div>
        <div class="row" style="margin-top:-20px">
            <div class="input-field col s12 m6 offset-m3">
                <div class="row">
                <div class="col s4 m2" style ="margin-top:12px">
                    Gender : 
                </div>
                <div class="col s4 m2">
                    <input name="gender" type="radio" value="male" id="male"/ required>
                    <label for="male">Male</label>
                </div>
                <div class="col s4 m2 offset-m1">
                    <input name="gender" type="radio" value="female" id="female"/>
                    <label for="female">Female</label>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="col s1"><i class="material-icons prefix">school</i></div>
                <div class="input-field col s11">
                <select required name="degree">
                    <option value="" disabled selected>Choose your Degree</option>
                    <option value="UG">UG -- Amount to be paid is Rs.960</option>
                    <option value="PG">PG -- Amount to be paid is Rs.1560</option>
                </select>
                <label>Degree</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="col s1"><i class="material-icons prefix">book</i></div>
                <div class="input-field col s11">
                <select id="course" required name="course" style="overflow:scroll">
                    <option value="" disabled selected>Choose your Course</option>
                    <option value="B.E">B.E</option>
                    <option value="B.Tech">B.tech</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="B.A">B.A</option>
                    <option value="B.Com">B.com</option>
                    <option value="M.Tech">M.tech</option>
                    <option value="M.Sc">M.Sc</option>
                    <option value="M.B.A">M.B.A</option>
                    <option value="other">Others</option>
                </select>
                <label>Course</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s11 m4 offset-m4">
                <input id="other_course" type="hidden" name="other_course" placeholder="Please specify your Course">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="col s1"><i class="material-icons prefix">today</i></div>
                <div class="input-field col s11">
                <select id="year" required name="year">
                    <option value="" disabled selected>Year of Pursuing course</option>
                    <option value="Final year U.G.">Final year U.G.</option>
                    <option value="Final year P.G.">Final year P.G.</option>
                    <option value="Pre-final year of Engineering">Pre-final year of Engineering</option>
                </select>
                <label>Year of pursuing Course</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">description</i>
                <input id="branch" type="text" name="branch" class="validate" required>
                <label for="branch" >Branch/Dept./Specialization</label>
        </div>
        <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">account_balance</i>
                <textarea id="college" name="college" class="materialize-textarea" length="150"></textarea>
                <label for="college">College Name With Address</label>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">mail</i>
                <input id="email" type="email" name="email" class="validate" required>
                <label for="email" data-error="not a vaild Email ID">Email Id</label>
            </div>
        <div>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">phone</i>
                <input id="phone" type="text" name="phone" class="validate" pattern="[0-9]{10}" required>
                <label for="phone" data-error="not a vaild Mobile Number">Phone Number</label>
            </div>
        <div>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">contact_phone</i>
                <input id="guardian_phone" type="text" name="guardian_phone" class="validate" pattern="[0-9]{10}" required>
                <label for="guardian_phone" data-error="not a vaild Mobile Number">Guardian Phone Number</label>
            </div>
        <div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">credit_card</i>
                <input id="dd_no" type="text" name="dd_no" class="validate" required>
                <label for="dd_no">DD NO</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">today</i>
                <input id="dd_date" type="date" name="dd_date" class="validate datepicker" required>
                <label for="dd_date" class="active">DD Date</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">credit_card</i>
                <input id="bank_name" type="text" name="bank_name" class="validate" required>
                <label for="bank_name">Bank Name</label>
            </div>
        <div>
        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">speaker_notes</i>
                <textarea id="reason" name="reason" class="materialize-textarea" length="200"></textarea>
                <label for="reason">Reason for attending SEP</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m6 offset-m3">
                <button class="btn waves-effect waves-light blue" type="submit" name="action">
                Submit    <i class="material-icons">send</i>
                </button>
            </div>
        </div>
        

        </form>
    </div>
@stop

@section('javascript')
 $(document).ready(function(){
            $('select').material_select();
            
            });
$('.select-dropdown').find('span').on('click',function(){
            $newSelect.trigger('close');
});
$( "#course" ).change(function() {
  var course = $("#course").val();
  if(course.localeCompare("other")==0)
  {
    $("#other_course").attr("type","text");
  }
  else
  {
    $("#other_course").attr("type","hidden");
  }
});
$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 15 // Creates a dropdown of 15 years to control year
});
@stop