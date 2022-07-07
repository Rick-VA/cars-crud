@extends('layout')

@section('content')
    <div class="card uper">
        <div class="card-header">
            Edit Car Data
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
            <form method="post" action="{{ route('cars.update', $car->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Car brand:</label>
                    <input type="text" class="form-control" name="name" value="{{ $car->name }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Car model:</label>
                    <input type="text" class="form-control" name="model" value="{{ $car->model }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection
