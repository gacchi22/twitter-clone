@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EditUser') }}</div>
                    @if (count ($errors))
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    @endif
                <div class="card-body">
                {!! Form::open(['route' => 'editcomplete', 'method' => 'POST']) !!}
                    {{ Form::label('name', '氏名') }}
                    {{ Form::text('name', $user->name, ['id' => 'name', 'class' => 'form-control mr-auto']) }}
                    {{ Form::label('email', 'Eメール') }}
                    {{ Form::text('email', $user->email, ['id' => 'email', 'class' => 'form-control mr-auto']) }}
                    {{ Form::label('tel_number', '電話番号') }}
                    {{ Form::text('tel_number', $user->tel_number, ['id' => 'email', 'class' => 'form-control mr-auto']) }}
                    {{ Form::label('image_url', 'アイコン画像') }}
                    </br>
                    @if (isset ($user->image_url))
                        <img src={{ $user->image_url }} width=30% height=auto><br>
                        @else
                            <img src="https://thumb.ac-illust.com/e2/e2cb85acf732de018702298367234d84_t.jpeg" width=30% height=auto><br>
                    @endif
                    {{ Form::file('image_url', ['id' => 'image_url', 'class' => 'form-control mr-auto']) }}
                    {{ Form::label('profile', 'プロフィール') }}
                    {{ Form::text('profile', $user->profile, ['id' => 'profile', 'class' => 'form-control mr-auto']) }}
                    {{ Form::submit('EditUser', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection