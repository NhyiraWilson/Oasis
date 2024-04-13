<?php
session_start();
include_once '../settings/connection.php';
include '../settings/core.php';

check();

$query = "SELECT * FROM users";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $users = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $users = [];
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
        .add-user-form input[type="text"],
        .add-user-form input[type="password"],
        .add-user-form input[type="submit"] {
            padding: 5px;
            margin-right: 10px;
        }
        .add-user-form {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #f9f9f9;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label, input, select, textarea {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            align-items: center;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>User Management</h1>

    <div class="add-user-form">
        <h2>Add New User</h2>
        <form id="userform" action="add_user.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="role" required>
                <option value="1">Super Admin</option>
                <option value="2">Admin</option>
                <option value="3">Standard User</option>
            </select>
            <input type="submit" name="add_user" value="Add User">
        </form>
    </div>

    <h2>User List</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['User_ID']; ?></td>
            <td><?php echo $user['Email']; ?></td>
            <td><?php echo $user['Role_ID']; ?></td>
            <td>
                <a href="edit_user.php?id=<?php echo $user['User_ID']; ?>">Edit</a> |
                <a href="delete_user.php?id=<?php echo $user['User_ID']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
