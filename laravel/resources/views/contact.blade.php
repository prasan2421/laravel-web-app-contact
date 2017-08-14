@extends('layouts.main')

@section('body')
    <div class="container">
{!! Form::open(array('url' => '/contact/submit')) !!}

        {!! Form::label('name','Name') !!}
        {!! Form::text('name','',['placeholder'=>'Enter your name']) !!}<br><br>

{!! Form::label('email','Email') !!}
{!! Form::text('email','',['placeholder'=>'Enter your Email']) !!}<br><br>


{!! Form::label('os','Operating System') !!}
{!! Form::select('os',array('linux'=>'linux','mac'=>'mac os','windows'=>'windows os')) !!}
<br><br>


{!! Form::label('comment','Comments') !!}
{!! Form::textarea('comment','', array('class'=>'form-control','placeholder'=>'what are your interests?')) !!}
<br><br>


{!! Form::checkbox('agree','yes',false) !!}
{!! Form::label('agree','I agree') !!}
<br><br>


{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
    </div>
@stop