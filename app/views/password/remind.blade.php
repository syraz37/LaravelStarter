@if(Session::has('error'))
    <p class="alert">{{ Session::get('error') }}</p>
@endif
{{ Form::open(array('action'=>'RemindersController@postRemind', 'class'=>'form-signin')) }}
    <h2 class="form-signin-heading">Forgot Password?</h2>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
    {{ Form::submit('Send', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}