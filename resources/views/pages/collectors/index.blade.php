@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="off-set-3 col-6">
                <div class="row">
                    @foreach ($collectors as $collector)
                    <div class="col-4 mt-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ $collector->first_name }}</h4>
                            </div>
                            <div class="card-body text-center">
                                <img class="card-img-top" src="{{ $collector->path_img }}">
                                <p class="card-text">Collectors N° of Cars: {{ $collector->cars_num }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection