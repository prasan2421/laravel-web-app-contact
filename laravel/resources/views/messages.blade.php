@extends('layouts.main')

@section('body')
    <h1 class="container">Messages</h1>
    @if(count($messages) > 0)
    @foreach($messages as $message)
    <ul class="list-group container">
        <li class="list-group-item">Name: {{$message->name}}</li>
        <li class="list-group-item">Email: {{$message->email}}</li>
        <li class="list-group-item">Message: {{$message->comment}}</li>
    </ul>
    @endforeach
    @endif
    @stop