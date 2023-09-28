@extends('admin.index')
@section('admin-body')

<div class="container no-cursor-change">
    <h1>Users contact Message List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>User Name</th>
                <th>User contact</th>
                <th>User Email</th>
                <th>Submission Time </th>
                <th>Action</th> <!-- Add this column for the delete button -->
            </tr>
        </thead>
        <tbody class="no-cursor-change">
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->Username }}</td>
                <td>{{ $contact->Userphone }}</td>
                <td>{{ $contact->Useremail }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>
                    <form method="post" action="{{ route('admin.contact.destroy', $contact->id) }}">
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
