<?php
include_once '../settings/connection.php';

function get_assignment() {
    global $mysqli;

    $query = "SELECT s.*, a.Appointment_ID, salon.Salon_name, massage.Massage_name, faceandbody.body_name, st.Staff_name, u.f_name, u.l_name, a.Appointment_date, a.Start_time, a.End_time, t.Status_name
    FROM appointment a
    LEFT JOIN assignment s ON s.Appointment_ID = a.Appointment_ID
    LEFT JOIN status t ON a.Appointment_status = t.Status_ID
    LEFT JOIN staff st ON s.Staff_ID = st.Staff_ID
    LEFT JOIN users u ON a.User_ID = u.User_ID
    LEFT JOIN salon ON a.Salon_name = salon.Salon_ID
    LEFT JOIN massage ON a.Massage_name = massage.massage_ID
    LEFT JOIN faceandbody ON a.body_name = faceandbody.body_ID
    ";

    $result = $mysqli->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            $appointment = $result->fetch_all(MYSQLI_ASSOC);
            return $appointment;
        } else {
            return array();
        }
    } else {
        return "Error: " . $mysqli->error;
    }
}