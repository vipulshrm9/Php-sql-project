<?php
  // Make sure an ID was passed
    if(isset($_GET['id'])) {
        // Get the ID$id
        $file_name= ($_GET['id']);
        // Make sure the ID is in fact a valid ID
    if($file_name == NULL) {
        die('The name is invalid!');
    }
    else {
        // Connect to the database
        $dbLink = new mysqli('localhost', 'root', "", 'dbtuts');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ".mysqli_connect_error());
        }
         // Fetch the file information
        $query = "
            SELECT `type`, `file`, `size`, `id`
            FROM `dbtuts`
            WHERE `id` = {$file_name}";
        $result = $dbLink->query($query);

        if($result) {
            // Make sure the result is valid
            if($result->num_rows == 1) {
            // Get the row
                $row = mysqli_fetch_assoc($result);

                header("Content-Type: ".$row['type']);
                header("Content-Length: ".$row['size']);
                header("Content-Disposition: attachment"); 
                // disopsition = attachment to force download request
                // Print data
                echo $row['data'];
            }
            else {
                echo 'Error! No file exists with that ID.';
            }
            // Free the mysqli resources
            @mysqli_free_result($result);
        }
        else {
            // if there is an error excuting the query
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        // close database connection
        @mysqli_close($dbLink);
    }
}
else {
    // if no ID passed
    echo 'Error! No ID was passed.';
}
?>