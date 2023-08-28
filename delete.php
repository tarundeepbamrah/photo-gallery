<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" href="icon.png">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Abel" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    *{
        box-sizing: border-box;
        margin:0;
        padding:0;
        
    }
    

        .title-1{
    padding-left:15px; font-family: Abel; font-size: 30px; font-style: normal; font-variant: normal; font-weight: 700;
    position:absolute;
    left:50px;
    top:20px;
}
        .title-2{
            padding-left:15px; font-family: Abel; font-size: 30px; font-style: normal; font-variant: normal; font-weight: 700;
            display:none;
            position:absolute;top:20px;left:50px;
        }
        .Navbar{
            
            background:white;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            width:100%;
            height:85px;
        }
        
        .icon{
            height:40px;
            
        }
    
    
    
    @media all and (max-width:680px){
        
        .title-2{
            display:block;
        }
        .title-1{
            display:none;
        }
        
    }
   
  
    @media all and (max-width:510px){
        .title-1{
            display:none;
        }
        
        
    }
   
    
    
    </style>
</head>
<body style ="background-color: white;
  background-repeat: no-repeat;background-attachment: fixed;height: 100%;width:100%;
background-position: center center;
background-size: cover;">
    <div class="p-3 Navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    
    <a href="https://waxed-possession.000webhostapp.com/">
    <img class="icon" src="camera.png" alt="icon">
  <h2 class="text-light title-1">PHOTO GALLERY (ADMIN PANEL)</h2>
  <h2 class="text-light title-2" >ADMIN PANEL</h2>
  </a>
  <div class="menu">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
  </div>
  
 
</div>


<div style="margin:20px;width:auto;height:100%;font-family: Abel; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400;">

<?php
// Database details
$servername = "localhost";
$username = "id20234870_tarundb";
$password = "Tarun@2002";
$db = "id20234870_tarundatabase";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["delete"])) {
        $filename = $_POST["name"];
        
        $code = $_POST["delcode"];
        $query = "SELECT code from admincodes WHERE name='deletion'";
        $result = $conn->query($query);

        $row = $result->fetch_all(MYSQLI_ASSOC);
        
        if (mysqli_num_rows($result)>0&&$row[0]['code']==$code) {
        
        $query = "DELETE FROM imagedata WHERE name='$filename'";
        $result = $conn->query($query);

        if (file_exists($filename)) {
            if (unlink($filename) && $result==1) {
                echo "✅ File deleted successfully.";
                echo '<br><form action="admin.html">
        
        <input type="submit" value="Delete More" class="btn btn-outline-dark butt" style="margin-top:20px;">
    </form>';
            } else {
                echo "❌ Failed to Delete";
                echo '<br><form action="admin.html">
        
        <input type="submit" value="Try Again" class="btn btn-outline-dark butt" style="margin-top:20px;">
    </form>';
            }
        } else {
            echo "❌ File not found.";
            echo '<br><form action="admin.html">
        
        <input type="submit" value="Try Again" class="btn btn-outline-dark butt" style="margin-top:20px;">
    </form>';
        }
        }
        else {
	        echo "❌ Deletion code invalid.";
	        echo '<br><form action="admin.html">
        
        <input type="submit" value="Try Again" class="btn btn-outline-dark butt" style="margin-top:20px;">
    </form>';
        }
    }

$conn->close();
?>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>