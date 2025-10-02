<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PHP Testing Platform</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .dashboard-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
        }

        h1 {
            color: #4a5568;
            font-size: 2rem;
        }

        .logout-btn {
            padding: 10px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .welcome-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .welcome-card h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .user-info {
            background: #f7fafc;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #667eea;
        }

        .user-info h3 {
            color: #4a5568;
            margin-bottom: 15px;
        }

        .user-info p {
            color: #718096;
            margin: 8px 0;
        }

        .user-info strong {
            color: #4a5568;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="header">
            <h1>Dashboard</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

        <div class="welcome-card">
            <h2>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>! 👋</h2>
            <p>You have successfully logged into the testing platform.</p>
        </div>

        <div class="user-info">
            <h3>Your Account Information</h3>
            <p><strong>User ID:</strong> <?php echo htmlspecialchars($_SESSION['user_id']); ?></p>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
            <p><strong>Status:</strong> Active</p>
            <p><strong>Session Started:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
    </div>
</body>
</html>
