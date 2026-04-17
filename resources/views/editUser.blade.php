<form action="/editUser" method="POST">
    @csrf
    <label for="name">Name</label>
    <br>
    <input type="text" id="name" name="name" value="{{ $user->name }}" required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>
    <br>
    <input type="hidden" name="id" id="id" value="{{ $user->id }}">
    <button type="submit">Make Change</button>
</form>