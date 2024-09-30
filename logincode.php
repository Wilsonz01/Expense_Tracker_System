<?php
    include ('db_conn.php');

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND user_status = 'Active' LIMIT 1";
        $query_stmt = mysqli_query($conn, $stmt);

        if (mysqli_num_rows($query_stmt) > 0) {
            foreach($query_stmt as $data) {
                $user_id = $data['id'];
                $full_name = $data['fname'] .''. $data['lname'];
                $user_role = $data['role'];
            }

            $_SESSION['auth'] = true;
            $_SESSION['auth_role'] = "$user_role";
            $_SESSION['auth_user'] = [
                'user_id' =>$user_id,
            ];

            header("Location: dashboard/");
        } else {
            $_SESSION['status'] = "Invalid Email or Password";
            $_SESSION['status_code'] = "warning";
            header("Location: ". base_url ."Log_in.php");
            exit(0);
        }
    }

    if(isset($_POST['btn_logout'])){
        session_destroy();
        header("location: log_in.php");

    }

    

?>