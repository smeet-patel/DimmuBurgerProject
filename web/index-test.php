<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TESTING</title>
    <link rel="stylesheet" href="phpTest.css">
</head>
<body>

    <form action="submit.php" method="post">
        <label>Title :</label>
        <input type="text" name="title" id="title" required="required" placeholder="Please Enter Name"/><br /><br />
        <label>Body :</label>
        <input type="text" name="body" id="body" required="required" placeholder="Please enter a Body"/><br/><br />
        <label>Author :</label>
        <input type="text" name="author" id="author" required="required" placeholder="Please Enter your name"/><br/><br />
        <input type="submit" value=" Submit " name="submit"/><br />
    </form>


</body>
</html>