@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="off-set-3 col-6">
                <ul>
                    @foreach ($collectors as $collector)
                        <li>{{ $collector->first_name }} <img src="{{ $collector->path_img }}" alt="{{ $collector->first_name }}"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection