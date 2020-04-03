<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>
<body>
    <form action="" method="POST">
    @csrf
    <input name="name"/>
    <input name="email"/>
    <textarea name="msg" rows="4" col="30"></textarea>
    <input type="submit"/>
    </form>
</body>
</html>