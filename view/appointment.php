<?php 
include '../function/select_service_fxn.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            background-color: #f9f9f9;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
    <div class="container">
        <h1>Book an Appointment</h1>
        <form action="../action/appointment_action.php" method="POST">

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
            <input type="date" id="Appointment_date" name="Appointment_date" required>

            <label for="time">Preferred Time:</label>
            <input type="time" id="Start_time" name="Start_time" required>

            <label for="message">Additional Message:</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <input type="submit" name="submit" value="Book Appointment">
        </form>
    </div>
</body>
</html>
