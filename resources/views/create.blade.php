@extends('layout.app')

@section('content')
    <h2>Add New Student</h2>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}">

        <label>Address:</label>
        <textarea name="address">{{ old('address') }}</textarea>

        <button type="submit">Save Student</button>
    </form>

    <a href="{{ route('students.index') }}">← Back to Student List</a>
@endsection
