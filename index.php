<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap basic 101</title>
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css" />
    <style>
        .col-sm-1 {}
        .col-sm-2 {}
        .col-sm-3 {}
        .col-sm-4 {}
        .col-sm-5 {}
        .col-sm-6 {}
        .col-sm-7 {}
        .col-sm-8 {}
        .col-sm-9 {}
        .col-sm-10 {}
        .col-sm-11 {}
        .col-sm-12 {}
        .row{}
        .container-fluid {}

        .centerContent-byHeight{
            display: flex;
            justify-content: center;}
        .centerContent-byWidth{
            display: flex;
            align-items: center;}
        .centerContent-byBoth{
            display: flex;
            justify-content: center;
            align-items: center;}
        .profile_picture {
            max-width: 90%;
            max-height: 90%;
            border-radius: 50%;
            border-width: 5px;
            border-style: solid;
            border-color: white;}
        .mainHeader_L, .mainParagraph_L {
            padding: 3px;
            text-align:Left;}
        .breaker1 {
            border: 5px solid white;
            width: 79.2%;} 
        .addShadow{
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);}
        .size3_card {
            padding: 4px 0px 0px 10px;
            background-color: white;
            color: black;
            border-radius: 10px;
            margin: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);}
        .bg-black100{
            background-color: black;
            color: white;}
        .pad10{
            padding: 10px 10px 10px 10px;}
        
    </style>

</head>
<body>
<div class="container-fluid" style="background-color:black;">
<div class="row centerContent-byBoth">
    <div class="col-sm-3 centerContent-byBoth">
        <img src="./img/gambarFormal_2.jpg" class="profile_picture" alt=""> 
    </div>
    <div class="col-sm-9 bg-black100 pad10">
        <div class="row">
            <div class="col">
                <h1 class="mainHeader_L">My First Bootstrap Page</h1>
                <hr class="breaker1">
                <h2 class="mainHeader_L">
                    Fabian Harrison Anak Thomas Tarang 
                    <br>(2023622802)</h2>
                <p class="mainHeader_L">
                    Bachelor in Mobile Computing, CDCS270 <br>
                    Kampus Kuala Terengganu, Cendering</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 size3_card">
                <h3 class="mainHeader_L"> Test1</h3>
            </div>
            <div class="col-sm-3 size3_card">
                <h3 class="mainHeader_L"> Test2</h3>
            </div>
            <div class="col-sm-3 size3_card">
                <h3 class="mainHeader_L"> Test3</h3>
            </div>
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