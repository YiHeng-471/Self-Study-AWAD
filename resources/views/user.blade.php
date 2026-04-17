<x-header data="User" />

<h1>Below are the list of users:</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="/deleteUser/{{ $user->id }}">Delete</a>/<a href="/editUser/{{ $user->id }}">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $users->links() }}
<style>
    .w-5 {
        display: none;
    }
</style>
<br>
<a href="/addUser">Add More User</a>