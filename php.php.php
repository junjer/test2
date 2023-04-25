<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wireless XBee Motion Detector</title>
    <style>
      body {
        font-family: Arial;
        text-align: center;
        background-color: #f5f5f5;
      }
      
      h1 {
        margin-block-start: 50px;
        color: #333;
        text-shadow: 1px 1px 1px #ccc;
      }
      
      #status {
        margin-block-start: 20px;
        font-size: 20px;
        color: #333;
        text-shadow: 1px 1px 1px #ccc;
      }
    </style>
  </head>
  
  <body>
    <h1>Wireless XBee Motion Detector</h1>
    <p id="status">No motion detected</p>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      setInterval(function() {
        $.post("receiver.php", { state: <?php echo $state; ?> });
      }, 1000);
    </script>
  </body>
</html>
