@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('patterns.includes.links')
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ $name }}</div>
                    <div class="card-body">
                        <div class="row mb-0">
                            <label for="email" class="col-auto col-form-label text-md-left">{{ $description }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

