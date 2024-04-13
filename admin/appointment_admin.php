<?php 
include '../function/select_service_fxn.php';
include '../function/appointment_fxn.php';
include '../action/assign_appointment_action.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form label {
            display: block;
            margin-bottom: 5px;
        }
        form input[type="text"],
        form input[type="date"],
        form input[type="time"],
        form select,
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../login/logout.php">Logout?</a></li>
            <li><a href="../admin/admin_homepage.php">Home page</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Appointment Management</h1>
        <h2>Upcoming Appointments</h2>
        <table>
            <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th>Assignment ID</th>
                    <th>Salon Service</th>
                    <th>Massage Service</th>
                    <th>Body Service</th>
                    <th>Staff Name</th>
                    <th>Customer Name</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach(get_assignment() as $do_appointment):?>
                    <tr>
                        <td><?php echo $do_appointment['Appointment_ID'];?></td>
                        <td><?php echo $do_appointment['assignment_id'];?></td>
                        <td><?php echo $do_appointment['Salon_name'];?></td>
                        <td><?php echo $do_appointment['Massage_name'];?></td>
                        <td><?php echo $do_appointment['body_name'];?></td>
                        <td><?php echo $do_appointment['Staff_name'];?></td>
                        <td><?php echo $do_appointment['f_name'] . " " . $do_appointment['l_name']; ?></td>
                        <td><?php echo $do_appointment['Appointment_date'];?></td>
                        <td><?php echo $do_appointment['Start_time'];?></td>
                        <td><?php echo $do_appointment['End_time'];?></td>
                        <td><?php echo $do_appointment['Status_name'];?></td>
                        <td><a href="../admin/edit_appointment_view.php?EditID=<?php echo $do_appointment['Appointment_ID']; ?>">Edit</a>
                        <a href="../action/cancel_appointment_action.php?delid=1<?php echo $do_appointment['Appointment_ID']; ?>">Cancel</a></td>

                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>

        <!-- <h2>Create New Appointment</h2> -->
        <!-- <form action="../action/create_appointment_action.php" method="POST">
            <label for="customer_name">Customer Name:</label>
            <input type="text" id="customer_name" name="customer_name" required>

            <label for="service">Select Service:</label>

            <select id="Salonname" name="Salonname" >
                <option value="0">Select Salon service</option>
            <?php
            foreach (get_salon() as $result) {
                echo '<option value='.$result['Salon_ID'].'>'.$result['Salon_name'].'</option>';
                }
            ?>
            </select>

            <select id="Massagename" name="Massagename" >
                <option value="0">Select Massage service</option>
            <?php
            foreach (get_massage() as $result) {
                echo '<option value='.$result['massage_ID'].'>'.$result['Massage_name'].'</option>';
                }
            ?>
            </select>

            <select id="bodyname" name="bodyname" >
                <option value="0">Select Face and Body service</option>
            <?php
            foreach (get_facenbody() as $result) {
                echo '<option value='.$result['body_ID'].'>'.$result['body_name'].'</option>';
                }
            ?>
            </select>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="time">End Time:</label>
            <input type="time" id="End_time" name="End_time" required>

            <select id="status" name="status" >
                <option value="0">Status</option>
            <?php
            foreach (get_status() as $result) {
                echo '<option value='.$result['Status_ID'].'>'.$result['Status_name'].'</option>';
                }
            ?>
            </select>

            <input type="submit" name="submit" value="Create Appointment">
        </form> -->
    </div>
</body>
</html>
