<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['publisher']) &&
        isset($_POST['age']) && isset($_POST['date']) &&
        isset($_POST['page']) && isset($_POST['booktype'])) {
        $name = $_POST['name'];
        $publisher = $_POST['publisher'];
        $age = $_POST['age'];
        $date = date('Y-m-d', strtotime($_POST['date']));
        $page = $_POST['page'];
        $booktype = $_POST['booktype'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "books";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT name FROM bookinfo WHERE name = ? LIMIT 1";
            $Insert = "INSERT INTO bookinfo(name, publisher, age, date, page, booktype) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $publisher);
            $stmt->execute();
            $stmt->bind_result($resultpublisher);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssiiis",$name, $publisher, $age, $date, $page, $booktype);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>