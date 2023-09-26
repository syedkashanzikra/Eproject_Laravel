@extends('admin.index')
@section('admin-body')

<div class="container no-cursor-change">
    <h1>Users Feedback List</h1>
    <table class="table ">
        <thead>
            <tr >
                <th>User Name</th>
                <th>Rating</th>
                <th>User feedback</th>
                <th>Email</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody class="no-cursor-change">
            @foreach ($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->name }}</td>
                <td>{{ $feedback->rating }}</td>
                <td>{{ $feedback->feedback }}</td>
                <td>{{ $feedback->user_email }}</td>
                <td>{{ $feedback->created_at }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
