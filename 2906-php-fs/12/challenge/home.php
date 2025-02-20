<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: lightblue;
        }

        .btn {
            display: inline-block;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            border-radius: 50px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }

        .btn:active {
            transform: translateY(2px);
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <a href="form.php" class="btn">Register</a>
</body>

</html>
