@extends('admin.index')
@section('admin-body')

<div class="container">
    <h1>Users List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form method="post" action="{{ route('admin.user.update', ['id' => $user->id]) }}">
                        @csrf
                        @method('put')
                        <input type="number" name="role" value="{{ $user->role }}">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="{{ route('admin.user.delete', ['id' => $user->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
