<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('<?php echo base_url('assets/images/background.jpg'); ?>') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .logo {
            width: 100px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
            font-size: 1em;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <img src="<?php echo base_url('assets/images/guardianmoney-logo.png'); ?>" alt="Logo" class="logo">
        <h1>Register User</h1>
        <?php echo form_open('welcome/register'); ?>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <?php echo form_close(); ?>

        <p class="mt-3">
            Already have an account? <a href="<?php echo site_url('welcome/index'); ?>">Log in here</a>.
        </p>
    </div>
</body>
</html>






