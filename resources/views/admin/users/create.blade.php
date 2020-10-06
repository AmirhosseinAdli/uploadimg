<h1>admin create user</h1>

<form action="{{route('admin.users.store')}}" method="post">

    name: <input type="text" name="name"> <br> <br>
    email: <input type="email" name="email"> <br> <br>
    password <input type="password">

</form>
