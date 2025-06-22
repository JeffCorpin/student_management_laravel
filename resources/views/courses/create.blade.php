@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Courses Page</div>
  <div class="card-body">
      
      <form action="{{ url('courses') }}" method="post">
        {!! csrf_field() !!}
        <label>Course Code</label></br>
        <input type="text" name="course_code" id="course_code" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="course_name" id="course_name" class="form-control"></br>
        <label>Credits</label></br>
        <input type="text" name="credits" id="credits" class="form-control"></br>
        <label>Semester</label></br>
        <input type="text" name="semester" id="semester" class="form-control"></br>
        <label>Year</label></br>
        <input type="text" name="year" id="year" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop