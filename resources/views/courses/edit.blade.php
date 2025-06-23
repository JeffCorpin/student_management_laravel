@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('courses/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
        <label>Course Code</label></br>
        <input type="text" name="course_code" id="course_code" value="{{$courses->course_code}}" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="course_name" id="course_name" value="{{$courses->course_name}}" class="form-control"></br>
        <label>Credits</label></br>
        <input type="text" name="credits" id="credits" value="{{$courses->credits}}" class="form-control"></br>
        <label>Semester</label></br>
        <input type="text" name="semester" id="semester" value="{{$courses->semester}}" class="form-control"></br>
        <label>Year</label></br>
        <input type="text" name="year" id="year" value="{{$courses->year}}" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" value="{{$courses->department}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop