<?php require "header.php"; ?>

<html>

<div id ="main-image">
  <h1> 
    Come Experience 
      <br> Canada
  </h1>
</div>

<head>

    <?php
    $sql = "SELECT heading, tripdate, duration, summary FROM Person";
    $result = $conn->query($sql);
    ?>
</head>

<body>
<div class="main-top">
      <h2>Upcoming Adventures!</h2>
    </div>
<div class="main-info">

      <!-- Halifax -->
      <h1>
        Halifax
      </h1>
      <p>
        Date 2023-07-28
      </p>
      <p>
        Duration 6 days
      </p>
      <br>
      <h2>
        Summary
      </h2> 
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ratione, at delectus earum sapiente corrupti assumenda pariatur ipsa dolorum laborum ut minus voluptas rem. Odit ducimus consequatur et esse ipsa!
      here is the text section
    </p>

    <!-- Sydney -->
    <h1>
      Sydney
    </h1>
    <p>
      Date 2023-07-08
    </p>
    <p>
      Duration 6 days
    </p>
    <br>
    <h2>
      Summary
    </h2> 
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ratione, at delectus earum sapiente corrupti assumenda pariatur ipsa dolorum laborum ut minus voluptas rem. Odit ducimus consequatur et esse ipsa!
      here is the text section
    </p>
  </div>
    <?php
    if ($result->num_rows > 0) {
        ?>
<table class="main-info">

<div class="main-top">
      <h2>Recently Added Adventures!</h2>
    </div>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td>
            <h1>
                <?php print $row["heading"] ?>
            </h1>
            </td>
        </tr>
        
        <tr>
            <td>
                <p>Date
                    <?php print $row["tripdate"] ?>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Duration
                   <?php print $row["duration"] ?>
                </p>
            </td>
        </tr>
        <tr>
            <td><br /></td>
        </tr>
        <tr>
            <td>
                <h2>Summary</h2>
                <?php print $row["summary"] ?>
            </td>
        </tr>
        <tr>
            <td><br /><br /></td>
        </tr>
    <?php } ?>
</table>
        <?php
    }
    $conn->close();
    ?>
</body>

</html>

<?php require "footer.php"; ?>