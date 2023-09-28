@extends('admin.index')
@section('admin-body')

<div class="container no-cursor-change">
    <h1>Users Feedback List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>User Name</th>
                <th>User Feedback</th>
                <th>User Rating</th>
                <th>Email</th>
                <th>Submission Time </th>
                <th>Action</th> <!-- Add this column for the delete button -->
            </tr>
        </thead>
        <tbody class="no-cursor-change">
            @foreach ($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->name }}</td>
                <td>{{ $feedback->feedback }}</td>
                <td>{{ $feedback->rating }}</td>
                <td>{{ $feedback->user_email }}</td>
                <td>{{ $feedback->created_at }}</td>
                <td>
                    <form method="post" action="{{ route('admin.feedback.destroy', $feedback->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
