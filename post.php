
    <?php
   
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "datapost";

     
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
       }

      $sql = "SELECT name, message FROM data ";
      $result = $conn->query($sql);


     
      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Message</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["name"] . "</td><td>" . $row["message"] . "</td></tr>";
        }
        echo "</table>";
     
      $conn->close();
    }
    ?>
 