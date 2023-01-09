@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>{{ __('Ohayo ') }}{{ Auth::user()->name }}{{ __('~sama !🙇') }}</h1>
                        {{-- <h1>{{ __('Nama       :') }}{{ Auth::user()->name }}</h1>
                        <h1>{{ __('Username   :') }}{{ Auth::user()->username }}</h1>
                        <h1>{{ __('E-mail     :') }}{{ Auth::user()->email }}</h1> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
