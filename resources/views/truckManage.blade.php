@extends('layouts.app')
@section('content')

<div class="container">
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

@endif
<h1>Data Truck</h1>
<a type="button" class="btn btn-warning mb-3" href="{{url('truck/create')}}" >(+) Truck</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Plat</th>
        <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dataTruck as $T)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$T->name}}</td>
        <td>{{$T->plat}}</td>
        <td>
            <a type="button" class="btn btn-primary" href="/truck/{{$T->id}}" >Detail</a>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection