@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Manage Announcements</h1>
    <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary">Add New Announcement</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Published At</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($announcements as $announcement)
            <tr>
                <td>{{ $announcement->title }}</td>
                <td>{{ $announcement->published_at->format('Y-m-d') }}</td>
                <td>{{ $announcement->is_active ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('admin.announcements.edit', $announcement) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.announcements.destroy', $announcement) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
