@extends('layout')

@section('content')
    <div>
        <div>
            Edit Car Data
        </div>
        <div>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('cars.update', $car->id ) }}">
                <div>
                    @csrf
                    @method('PATCH')
                    <label>Car brand:</label>
                    <input type="text" name="name" value="{{ $car->name }}"/>
                </div>
                <div>
                    <label>Car model:</label>
                    <input type="text" name="model" value="{{ $car->model }}"/>
                </div>
                <button type="submit" class="button-30">Update Data</button>
            </form>
        </div>
    </div>
@endsection
