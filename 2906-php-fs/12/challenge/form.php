<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Form</title>

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
            min-height: 100vh; 
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 20px;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container h2 {
            color: white;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .amr_form {
            margin-bottom: 15px;
            text-align: left;
        }

        .amr_form label {
            display: block;
            color: white;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .amr_form input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        .amr_form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .amr_form input:focus {
            background: rgba(255, 255, 255, 0.3);
            border-left: 3px solid #ff4b2b;
            padding-left: 10px;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            flex: 1;
            padding: 12px;
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin: 5px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }

        .btn:active {
            transform: translateY(2px);
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 420px) {
            .btn-container {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Register Here</h2>
        <form action="store.php" method="post">
            <div class="amr_form">
                <label>First Name:</label>
                <input type="text" name="first_name" placeholder="Enter First Name" required>
            </div>
            <div class="amr_form">
                <label>Last Name:</label>
                <input type="text" name="last_name" placeholder="Enter Last Name" required>
            </div>
            <div class="amr_form">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="amr_form">
                <label>Mobile:</label>
                <input type="number" name="mobile" placeholder="Enter Mobile Number" required>
            </div>
            <div class="amr_form">
                <label>Date of Birth:</label>
                <input type="date" name="date_of_birth" required>
            </div>
            <div class="amr_form">
                <label>National ID:</label>
                <input type="number" name="id" placeholder="Enter National ID" required>
            </div>
            <div class="amr_form">
                <label>Yearly Salary:</label>
                <input type="number" name="salary" placeholder="Enter Salary" required>
            </div>
            <div class="amr_form">
                <label>Username:</label>
                <input type="text" name="username" placeholder="Choose a Username" required>
            </div>
            <div class="amr_form">
                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <div class="amr_form">
                <label>Confirm Password:</label>
                <input type="password" name="password-confirm" placeholder="Confirm Password" required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn">Submit</button>
                <button type="reset" class="btn" style="background: linear-gradient(45deg, #36D1DC, #5B86E5);">Reset</button>
            </div>
        </form>
    </div>

</body>

</html>
