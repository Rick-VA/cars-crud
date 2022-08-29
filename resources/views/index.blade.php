@extends('layout')

@section('content')
    <div class="uper">
        @if(session()->get('success'))
            <div>
                {{ session()->get('success') }}
            </div><br />
        @endif
        <div class="table">Cars list</div>
        <div class="textadd">
            <a href="/cars/create">
                <button class="button-30" role="button">add a car</button>
            </a>
        </div>

        <table class="table">
            <thead>
            <tr class="tablerow">
                <td>Car brand</td>
                <td>Car model</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr >
                    <td class="cars">{{$car->name}}</td>
                    <td class="cars">{{$car->model}}</td>
                    <td><a href="{{ route('cars.edit', $car->id)}}" class="button-30">Edit</a></td>
                    <td>
                        <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="button-30" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
