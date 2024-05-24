<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap basic 101</title>
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container-fluid bg-black100">
<div class="row addShadow padTB10">
    <div class="col-sm-3  borderR-white100 centerContent-vh">
        <img src="./img/gambarFormal_2.jpg" class="profile_picture" alt=""> 
    </div>
    <div class="col-sm-9 bg-black100">
        <div class="row padL10">
            <div class="col">
                <h1 class="mainHeader_L ">My First Bootstrap Page</h1>
                <hr class="breakerW">
                <h2 class="mainHeader_L">
                    Fabian Harrison Anak Thomas Tarang 
                    <br>(2023622802)</h2>
                    <div class="col-sm-9 whiteCard padTLB10">
                        <h5 class="mainHeader_L ">Current Education</h5>
                        <p class="mainHeader_L ">
                            Bachelor in Computer Science (Hons.)<br>
                            Mobile Computing CDCS270 - Semester 4 <br>
                            Kampus Kuala Terengganu, Chendering, Terengganu</p>
                    </div>
            </div>
        </div>
    </div>
    <div class="row borderL-white100 borderT-white100 padTL10">

            <h3 class="textLeft">Previous Educations:</h3>
            <div class="col-sm-3 whiteCard">
                <h5 class="mainHeader_L">Primary School</h5>
            </div>
            <div class="col-sm-3 whiteCard">
                <h5 class="mainHeader_L">Secondary School</h5>
            </div>
            <div class="col-sm-3 whiteCard">
                <h5 class="mainHeader_L">Tertiary Education</h5>
            </div>
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