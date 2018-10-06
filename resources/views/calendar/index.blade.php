@extends('layout')
@section('title', 'カレンダー')
@section('content')
    <h1>{{$year}}年{{$month}}月</h1>
    {!!$cal_tag!!}
<a href="{{ url('/holiday') }}">休日設定</a>

@endsection
