@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                      <th scope="col">Image</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Collectors N° of Cars</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collectors as $collector)
                        <tr>
                            <th scope="row"><img src="{{ $collector->path_img }}" alt="{{ $collector->first_name }}"></th>
                            <td >{{ $collector->first_name }}</td>
                            <td>{{ $collector->cars_num}}</td>
                        </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
@endsection