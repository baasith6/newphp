<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-item {
            padding: 14px 20px;
        }

        .navbar-item a {
            color: white;
            text-decoration: none;
            display: block;
            text-align: right;
        }

        .navbar-item a:hover {
            background-color: #575757;
        }

    </style>
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item"><a href="index.php">Home</a></li>
            <li class="navbar-item"><a href="about.php">About</a></li>
            <li class="navbar-item"><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</body>
</html>