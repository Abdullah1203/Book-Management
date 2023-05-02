<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Book List</title>
</head>
<body>
    <table>
        <tr>
            <th>SL</th>
            <th>Book Name</th>
            <th>Publisher</th>
            <th>Action</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'books');
            if($conn-> connect_error){
                die("Connection Failed:". $conn-> connect_error);
            }

        $sql = "SELECT name, publisher from bookinfo";
        $result = $conn-> query($sql);
         $count= 1;   
        if($result-> num_rows >0){
            while($row = $result-> fetch_assoc()){

                echo "<tr><td>".$count."</td><td>". $row["name"]. "</td><td>". $row["publisher"]. "</td><td>". "<button>Edit</button><button>Delete</button>". "</td></tr>";
                $count++;
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }

            $conn-> close();
        ?>
    </table>
    <button class="button" onclick="location.href = 'index.html'">
  Homepage
  </button>
</body>
</html>