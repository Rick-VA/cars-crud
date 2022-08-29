@extends('layout')

@section('content')
     <div>
        <div>
            Add Cars Data
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
            <form method="post" action="{{ route('cars.store') }}">
                <div>
                    @csrf
                    <label>Car Name:</label>
                    <input type="text" name="name"/>
                </div>
                <div>
                    <label>Model :</label>
                    <input type="text" name="model"/>
                </div>
                <button type="submit" class="button-30">Add Car</button>
            </form>
        </div>
    </div>
@endsection
