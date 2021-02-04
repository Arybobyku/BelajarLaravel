@extends('layouts.app')
@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Truck</h1>
            <form action="{{url('truck')}}" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Input Name" required>
               @error('name')
                <div class="invalid-feedback">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('plat') is-invalid @enderror" name="plat" placeholder="Input Plat" required>
                @error('plat')
                <div class="invalid-feedback">
                {{$message}}
                </div>
                @enderror
            </div>
            <Button class="btn btn-primary my-3" type="submit">Submit</Button>
            </form>

         </div>
    </div>
</div>
@endsection