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
        .col{}
        .container-fluid {}

        .centerContent-v{
            display: flex;
            justify-content: center;}
        .centerContent-h{
            display: flex;
            align-items: center;}
        .centerContent-vh{
            display: flex;
            justify-content: center;
            align-items: center;}
        .centerContent-vht{
            display: flex;
            justify-content: center;
            align-items: flex-start;}
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
        .textLeft{
            text-align: left;}
        .breakerW {
            border: 5px solid white;} 
        .borderR-black100 {
            border-right: 1px solid black;}
        .borderR-white100 {
            border-right: 1px solid white;}
        .borderL-black100 {
            border-left: 1px solid black;}
        .borderL-white100 {
            border-left: 1px solid white;}
        .borderT-black100 {
            border-top: 1px solid black;}
        .borderT-white100 {
            border-top: 1px solid white;}
        .borderB-black100 {
            border-bottom: 1px solid black;}
        .borderB-white100 {
            border-bottom: 1px solid white;}
        
        .addShadow{
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.5);}
        .whiteCard {
            padding: px 0px 0px 10px;
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
        .padL10{
            padding-left: 10px;}
        .padR10{
            padding-right: 10px;}
        .padT10{
            padding-top: 10px;}
        .padB10{
            padding-bottom: 10px;}
        .padTL10{ 
            padding: 10px 0px 0px 10px;}
        .padTR10{
            padding: 0px 10px 10px 0px;}
        .padLR10{
            padding: 0px 10px 0px 10px;}
        .padTB10{
            padding: 10px 0px 10px 0px;}
        .padTLB10{
            padding: 10px 0px 10px 10px;}

    </style>

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