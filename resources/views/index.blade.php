@extends('layouts.app')

@section('content')

  @foreach($courses as $course)
    <p> {{$course->name}} - {{$course->code}}</p>
    <form action="{{action('CourseController@destroy', $course->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
  @endforeach

@endsection