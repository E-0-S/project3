<?php require "header.php"; ?>

<html>

<body>

  
    <div class="main-info">
        <form action="#" method="post">

        <label for="heading">Heading:</label>
        <input type="text" name="heading" id="heading" required><br>

        <label for="tripdate">Trip Date:</label>
        <input type="date" name="tripdate" id="tripdate" required><br>

        <label for="duration">Duration:</label>
        <input type="text" name="duration" id="duration" required><br>

        <label for="summary">Summary:</label>
        <textarea name="summary" id="summary" required></textarea><br>

        <input type="submit" value="Add Adventure" />

        </form>
    </div>

</body>

</html>


<?php
    if (isset($_POST["heading"]) && isset($_POST["tripdate"]) && isset($_POST["duration"]) && isset($_POST["summary"])) {
        // Assuming $conn is your database connection object
        
        // prepare and bind the INSERT query - protects against SQL injection attacks
        $stmt = $conn->prepare("INSERT INTO trips (heading, tripdate, duration, summary) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $heading, $tripdate, $duration, $summary);

        // set parameters and execute
        $heading = $_POST["heading"];
        $tripdate = $_POST["tripdate"];
        $duration = $_POST["duration"];
        $summary = $_POST["summary"];

        $stmt->execute();

        $stmt->close(); // Close the statement

        // Redirect to admin-confirm.php
        header("Location.href: admin-confirm.php");
        exit;
    }

    require "footer.php";
?>