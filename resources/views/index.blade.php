@extends('layout.app')

@section('content')
    <h2>Student List</h2>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="{{ route('students.index') }}">
        <input type="text" name="search" placeholder="Search by name..." value="{{ request('search') }}">
        <button type="submit">Search</button>
        <a href="{{ route('students.index') }}">Clear</a>
    </form>

    <a class="btn" href="{{ route('students.create') }}">+ Add Student</a>

    <table>
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No students found.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
