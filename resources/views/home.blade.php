@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
=======
    <div class="row ustify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
                        </div>
                    @endif

                    <task-component></task-component>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
