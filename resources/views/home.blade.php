@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

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
                        @foreach($truck as $T)
                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$T->name}}</td>
                            <td>{{$T->plat}}</td>
                            <td>
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-warning">Update</button>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
