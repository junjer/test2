<?php
  if (isset($_POST['state'])) { // Check if the sensor state has been received
    $state = $_POST['state'];
    if ($state == 1) {
      $status = 'Motion detected';
    } else {
      $status = 'No motion detected';
    }
    // Update the web interface with the new sensor state
    echo '<script>document.getElementById("status").innerHTML = "'.$status.'";</script>';
  }
?>
