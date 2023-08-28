<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="icon" type="image/png" href="icon.png">
    
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Abel" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    *{
        box-sizing: border-box;
        margin:0;
        padding:0;
        
    }
    .popup{
        position:fixed;
        top:0;left:0;
        background:rgba(0,0,0,.9);
        height:100%;
        width:100%;
        z-index:100;
        display:none;
    }
    .popup span{
        position:absolute;
        top:0;right:10px;
        font-size:40px;
        font-weight:bolder;
        color: white;
        cursor:pointer;
        z-index:100;
    }
    
    .popup img{
        position:absolute;
        height:80%;
        top:50%;left:50%;
        transform: translate(-50%,-50%);
        border:5px solid #fff;
        border-radius:5px;
        object-fit:cover;
    }
    
    .thumbnail{
        transform:.2s linear;
    }
    .thumbnail:hover{
        transform:scale(1.1);
        transform:translate(-7px,-7px);
    }
    
    .item{
        padding:20px;background:white; height:50px;width:100%;border-bottom:1px solid black;
    }
    .menu-item.active {
        display:block;
        
    }
    .menu-item{
        font-family: Abel; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400;
        display:none;
        
    }
    
        .menu{
            display:flex; position:absolute;right:30px;
            top:20px;
            display:none;
            cursor:pointer;
        }
        .bar{
            width:30px;
            height:4px;
            background-color:white;
            margin:6px 0;
            transition:0.4s;
            border-radius:3px;
        }
        .menu.active .bar:nth-child(1){
            transform:rotate(-47deg) translate(-7px,7px);

        }
        .menu.active .bar:nth-child(2){
            opacity:0;
        }
        .menu.active .bar:nth-child(3){
            transform:rotate(47deg) translate(-7px,-7px);

        }
        .form{
            width:60%;
        }
        .Navbar{
            
            background:white;
            position: static;
            position: -webkit-sticky;
            top: 0;
            width:100%;
            height:85px;
        }
        
        .icon{
            height:40px;
            
        }
        .link {
            padding-left:10px;padding-right:10px;
            text-decoration: none;
            color: white;
            position: relative; /* Create a relative positioning context for the pseudo-element */
        }

    .link::after {
  content: '';
  position: absolute;
  right:6px;
  width: 80%;
  height: 2px; /* Set the initial height of the underline */
  bottom: -3px; /* Adjust this value to control the space between text and underline */
  background-color: white; /* Set the color of the underline */
  transform: scaleX(0); /* Initial state: no width, so it's hidden */
  transform-origin: center; /* Anchor point for scaling */
  transition: transform 0.3s ease; /* Transition for the scaling effect */
}

.link:hover::after {
  transform: scaleX(1); /* Scale the underline to full width on hover */
}

        .title-1{
    padding-left:15px; font-family: Abel; font-size: 30px; font-style: normal; font-variant: normal; font-weight: 700;
    position:absolute;
    left:50px;
    top:20px;
}
    .container{
        display:flex;
        justify-content:center;
        align-items:center;
        padding-top:20px;
        padding-bottom:20px;
    }
    
    @media all and (max-width:991px){
        
        .form{
            width:70%;
        }
    }
    @media all and (max-width:767px){
        
        .form{
            width:70%;
        }
    }
    
    
    @media all and (max-width:550px){
        .link{
            display:none;
        }
        .form{
            width:90%;
        }
        .menu{
            right:30px;
            display: block;
        }
        
    }
    @media all and (min-width: 551px) {
  .menu-item.active {
    display: none;
  }
}

    @media all and (max-width:470px){
        .form{
            width:100%;
        }
        .menu{
            right:10px;
        }
    }
    @media all and (max-width:370px){
        .butt,.title-1{
            display:none;
        }
        .tf{
            width:100%;
        }
        .menu{
            right:20px;
        }
        
    }
    @media all and (max-width:253px){
        .butt{
            display:none;
        }
        .tf{
            margin-top:50px;
            width:100%;
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
  <h2 class="text-light title-1">PHOTO GALLERY</h2>
  </a>
  <div class="menu">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
  </div>
  
  <div style="display:flex; position:absolute;font-family: Abel; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400;right:30px;
    top:25px;">
  <a class="link" href='https://waxed-possession.000webhostapp.com/'>HOME</a>
  <a class="link" href=''>ABOUT</a>
  <a class="link" href=''>CONTACT</a>
    </div>
</div>

<div class="menu-item">
    <a href="https://waxed-possession.000webhostapp.com/" style="text-decoration:none;color: #333;">
    <div class="item" style="border-top:1px solid black;">Home</div>
    </a>
    <a href="" style="text-decoration:none;color: #333;">
    <div class="item">About</div>
    </a>
    <a href="" style="text-decoration:none;color: #333;">
    <div class="item">Contact</div>
    </a>
    
</div>

<div class="container">
    

<form class="d-flex form" action="" method="get" role="search">
  <input id="fname" name="fname" class="form-control me-2 tf" type="search" placeholder="Search" aria-label="Search" autocomplete="on" >
  <input class="btn btn-outline-dark butt" type="submit" value="Search">
</form>

</div>



<div style="width: 90%; margin:30px auto 50px ; display:grid; grid-template-columns:1fr 1fr 1fr 1fr 1fr; grid-gap:8px;" >


<?php

$servername = "localhost";
$username = "id20234870_tarundb";
$password = "Tarun@2002";
$db = "id20234870_tarundatabase";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error) {
	die("connection failed: ".$conn->connect_error);
}
//else{echo "Connection Successful <br>";}


if(!empty($_GET['fname'])){
    //echo "tags- " . $_GET['fname'];

$tag=$_GET['fname'];
$query = "SELECT name FROM imagedata WHERE tags LIKE '%$tag%'";

$result = $conn->query($query);

$row = $result->fetch_all(MYSQLI_ASSOC);

//echo $row['Name'];
//echo "<hr>";

$num= mysqli_num_rows($result);

$i=0;
    while($i<$num){
        $name=$row[$i]['name'];
        
        if(file_exists($name)){
            
            // Path to the original image
            $originalImagePath = $name;
            
            $ext = strtolower(pathinfo($originalImagePath, PATHINFO_EXTENSION)); // Get the lowercase extension

            // Load the original image based on the extension
            switch ($ext) {
                case 'jpg':
                case 'jpeg':
                    $originalImage = imagecreatefromjpeg($originalImagePath);
                    break;
                case 'png':
                    $originalImage = imagecreatefrompng($originalImagePath);
                    break;
                // Add more cases for other image formats if needed
                default:
                    // Handle unsupported image format
                    
                    break;
                }
                
                if ($originalImage) {
            
            // Load the original image
            //$originalImage = imagecreatefromjpeg($originalImagePath);
            
            // Get the dimensions of the original image
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);
            
            // Calculate the dimensions for the thumbnail
            $thumbnailWidth = 100; // Adjust this as needed
            $thumbnailHeight = ($originalHeight / $originalWidth) * $thumbnailWidth;
            
            // Create a new image for the thumbnail
            $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
            
            // Resize and compress the original image to the thumbnail size
            imagecopyresampled($thumbnailImage, $originalImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight);
            // Display the compressed thumbnail in an image tag
            ob_start();
            imagejpeg($thumbnailImage, null, 100); // You can adjust the compression quality (80 in this case)
            $compressedThumbnailData = ob_get_clean();

            echo "<div style='overflow:hidden;'>
                <a href='#' class='anchor' data-src='$name'>
                <img class='thumbnail' style='width:100%; height:100%; object-fit:cover; border-radius:2px;' src='data:image/jpeg;base64," . base64_encode($compressedThumbnailData) . "' alt='Thumbnail'>
                </a>
                </div>";
            // Clean up
            imagedestroy($originalImage);
            imagedestroy($thumbnailImage);
                }

            }
            
        
        $i++;
    }

}

else{//echo "Search Field Empty!";
    $query = "SELECT name FROM imagedata";

    $result = $conn->query($query);
    
    $row = $result->fetch_all(MYSQLI_ASSOC);

    //echo $row['Name'];
    //echo "<hr>";
    
    $num= mysqli_num_rows($result);
    
    $j=0;
    while($j<$num){
        $name=$row[$j]['name'];
        
        if(file_exists($name)){
            
            
            // Path to the original image
            $originalImagePath = $name;
            
            $ext = strtolower(pathinfo($originalImagePath, PATHINFO_EXTENSION)); // Get the lowercase extension

            // Load the original image based on the extension
            switch ($ext) {
                case 'jpg':
                case 'jpeg':
                    $originalImage = imagecreatefromjpeg($originalImagePath);
                    break;
                case 'png':
                    $originalImage = imagecreatefrompng($originalImagePath);
                    break;
                // Add more cases for other image formats if needed
                default:
                    // Handle unsupported image format
                    break;
                }
                
                if ($originalImage) {
            
            // Load the original image
            //$originalImage = imagecreatefromjpeg($originalImagePath);
            
            // Get the dimensions of the original image
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);
            
            // Calculate the dimensions for the thumbnail
            $thumbnailWidth = 100; // Adjust this as needed
            $thumbnailHeight = ($originalHeight / $originalWidth) * $thumbnailWidth;
            
            // Create a new image for the thumbnail
            $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
            
            // Resize and compress the original image to the thumbnail size
            imagecopyresampled($thumbnailImage, $originalImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight);
            // Display the compressed thumbnail in an image tag
            ob_start();
            imagejpeg($thumbnailImage, null, 100); // You can adjust the compression quality (80 in this case)
            $compressedThumbnailData = ob_get_clean();

            echo "<div style='overflow:hidden;'>
                <a href='#' class='anchor' data-src='$name'>
                <img class='thumbnail' style='width:100%; height:100%; object-fit:cover; border-radius:2px;' src='data:image/jpeg;base64," . base64_encode($compressedThumbnailData) . "' alt='Thumbnail'>
                </a>
                </div>";
            // Clean up
            imagedestroy($originalImage);
            imagedestroy($thumbnailImage);
                }
            
            
            }
            
    
        
        $j++;
    }
}


$conn->close();

?>
</div>

<div class="popup">
    <span class="span">&times;</span>
        <img class="popperimage"src="" alt="Image not Loaded">
        <button class="btn btn-outline-light downloadButton" style="position:absolute;top:0px;right:60px;top:15px;">Download</button>
    
</div>

<div class="bg-dark border-bottom border-body text-center footer" style="padding:10px;height:40px;width:100%;background:white;font-family: Abel; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 400;position:fixed;bottom:0;text-align:center; ">
    <p class="text-light">Designed and Developed by tarundeepsingh (ⓣ)</p>
    
</div>


<script>
    const hamburgerMenu = document.querySelector('.menu');
    const popup =document.querySelector('.menu-item');

    hamburgerMenu.addEventListener('click', () => {
    hamburgerMenu.classList.toggle('active');
    popup.classList.toggle('active');
    
    });
    
    document.addEventListener('DOMContentLoaded', function() {
    const popper = document.querySelector('.popup');
    const popperImage = document.querySelector('.popperimage');
    const popperClose = document.querySelector('.span');
    const popperTriggers = document.querySelectorAll('.anchor');
    var src;

    popperTriggers.forEach(trigger => {
        trigger.addEventListener('click', e => {
            e.preventDefault();
            src = trigger.getAttribute('data-src');
            popperImage.src = src;
            popper.style.display = 'block';
            
        });
    });
    document.querySelector(".downloadButton").addEventListener("click", function() {
            var imageUrl = 'https://waxed-possession.000webhostapp.com/' + src;
            var link = document.createElement("a");
            link.href = imageUrl;
            link.download = src; // Specify the default file name

            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            });

    popperClose.addEventListener('click', () => {
        popper.style.display = 'none';
    });
    });
    
    

</script>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>    
</body>
</html>