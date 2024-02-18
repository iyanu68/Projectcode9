


<!DOCTYPE html>
<html lang= "en">
<head>
 <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> 
    
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- jQuery library -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
 <!-- Popper JS -->
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
  <script src="https://kit.fontawesome.com/965b829563.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <title>PROJECT 9 </title>
</head>

<body>
    
    <div class = "container">
        <h1>Welcome to IP Information</h1>
        <p1>Click below to get your IP details: </p1><br>
        <button id = "getInfoBtn"> Get IP Information</button>
    </div>
    
    <div id = "infoModal" class = "modal">
        <div class = "modal-content">
            <span class = "close">&times;</span>
            <h2> Your IP Information</h2>
            <p><strong> IP Address :</strong><span id = "ipAddress"></span></p>
            <p><strong> Country:</strong> <span id = "country"></span></p>
            <p><strong> Latitude:</strong><span id = "latitude"></span></p>
            <p><strong> Longitude:</strong> <span id = "longitude"></span></p>
        </div>
    </div>
    
    <script src = "script.js"></script>
   
</body>
</html>