<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap basic 101</title>
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css" />
    <style>
        .profile_picture {
            max-width: 90%;
            max-height: 90%;
            border-radius: 50%;
            border-width: 5px;
            border-style: solid;
            border-color: black;
        }
        .mainHeader_L, .mainParagraph_L {
            padding: 3px;
            text-align:Left;
        }
    </style>

</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
<div class="row">
    <div class="col-sm-4" >
        <img src="./img/gambarFormal_2.jpg" class="profile_picture" alt=""> 
    </div>
    <div class="col-sm-8">
        <h1 class="mainHeader_L">My First Bootstrap Page</h1>
        <hr style="color:red; stroke: 2px;">
        <h2 class="mainHeader_L">
            Fabian Harrison Anak Thomas Tarang
            2023622802
        </h2>
        <p class="mainHeader_L">
            Contact: 011-2516 9289 <br>
            Email: 2023622802@uitm.edu.my
        </p>
    </div>
</div>
    
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
<script src="./dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>