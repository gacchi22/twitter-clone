@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="row mb-3">
            <div class="col-sm-3">
                <img src="https://thumb.ac-illust.com/e2/e2cb85acf732de018702298367234d84_t.jpeg" width=100% height=auto><br>
            </div>
            <div class="col-sm-5">
                <strong>{{ $user->name }}</strong>
            </div>
            <div class="col-sm-4">
                <div class="mx-auto">
                    <a class="btn btn-primary" href="{{ route('edit') }}">プロフィールを編集する</a>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div>{{ $user->profile }}</div>    
        </div>
    </div>
@endsection