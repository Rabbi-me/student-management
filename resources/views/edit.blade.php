@extends('layout.app')

@section('content')
    <h2>Edit Student</h2>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $student->name) }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $student->email) }}">

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone', $student->phone) }}">

        <label>Address:</label>
        <textarea name="address">{{ old('address', $student->address) }}</textarea>

        <button type="submit">Update Student</button>
    </form>

    <a href="{{ route('students.index') }}">← Back to Student List</a>
@endsection
