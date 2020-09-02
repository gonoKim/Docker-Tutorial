<?php
        $conn = mysqli_connect(
            'db-kim.ctsk8yfunbfb.ap-northeast-2.rds.amazonaws.com',
            'admin',
            'database-kim',
            'docker_test',
            '3306'
        );
        if(mysqli_connect_errno()){
            echo "Failed to connect to Mysql:".mysqli_connect_error();
        }
        $sql = "SELECT VERSION()";
        $result = mysql_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        print_r($row["VERSION()"]);
?>