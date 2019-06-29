@extends('layouts.app')
@section('content')
<form action="{{action('CourseController@join')}}" method="post">
  <input type="hidden" value="{{csrf_token()}}" name="_token" />
  @foreach($courses as $course)
    <p> {{$course->name}} - {{$course->code}}</p>
    <label for="courses">check this course</label>
    <input type="checkbox" style="width:15px; height:15px " id="courses" name="courses[]" value={{$course->id}}>
  @endforeach
  <br>
  <br>
  <button style="width:80px;" class="btn btn-success" type="submit" >Join </button>
</form>
@endsection