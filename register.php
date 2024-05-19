<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form action="handler_register.PHP" method="post">
        <div>
            <label for="id">id</label>
            <input type="text" name="id">
        </div>
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">register
        </button>
    </form>
    <a href="login.php">login</a>
</body>
</html>