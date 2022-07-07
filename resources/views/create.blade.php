<!-- create.blade.php -->

@extends('layout')

@section('content')
     <div class="card uper">
        <div class="card-header">
            Add Cars Data
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('cars.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="country_name">Car Name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="cases">Model :</label>
                    <input type="text" class="form-control" name="model"/>
                </div>
                <button type="submit" class="btn btn-primary">Add Car</button>
            </form>
        </div>
    </div>
@endsection
