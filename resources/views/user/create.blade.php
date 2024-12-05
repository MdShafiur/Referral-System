<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h1>Add New User</h1>
    <form method="POST" action="/users">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>
        <br>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
