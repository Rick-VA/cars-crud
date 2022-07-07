@extends('layout')

@section('content')
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Car brand</td>
                <td>Car model</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{$car->name}}</td>
                    <td>{{$car->model}}</td>
                    <td><a href="{{ route('cars.edit', $car->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
