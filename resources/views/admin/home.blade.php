@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body text-center fs-4" style="color:blue">
                    @if (Auth::check())

                        Benvenuto/a {{Auth::user()['name']}}!

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
