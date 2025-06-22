@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Courses Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Course Code : {{ $courses->course_code }}</h5>
        <p class="card-text">Course Name : {{ $courses->course_name }}</p>
        <p class="card-text">Credits : {{ $courses->credits }}</p>
        <p class="card-text">Semester : {{ $courses->semester }}</p>
        <p class="card-text">Year : {{ $courses->year }}</p>
        <p class="card-text">Department : {{ $courses->department }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection