@if(Session::has('error'))
    <p class="alert">{{ Session::get('error') }}</p>
@endif
{{ Form::open(array('action'=>'RemindersController@postReset', 'class'=>'form-signin')) }}
    <h2 class="form-signin-heading">Reset Password</h2>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    {{ Form::hidden('token', $token) }}
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
    {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
    {{ Form::submit('Reset Password', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}