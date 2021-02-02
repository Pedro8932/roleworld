<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home - Rolê World</title>
</head>
<style>
    body{
          background-image:url('IMG/funndo.png');
          background-size: cover;
            
        }
     header{
        margin-top: -2px;
        background-image: linear-gradient(#b3ffe6, #4AC7FF);
     }
    footer{
        margin-top: 73px;
        height:35px;
        background-image: linear-gradient(#b3ffe6, #4AC7FF);
    }
    #cabecario{
        border: 2px solid  #00CED1;
        height: 60px;
    }
    #titulo{
        font-family: Georgia;
        font-style: italic;
        font-size: 25px;
        margin-top: 10px;
        margin-left: 55px;

    }
    #D{
        background-color: white;
        opacity: 0.8;
        border-radius: 10px;
        width: 1050px;
        height: 510px;
        margin-top: -523px;
        margin-left: 280px;
    }
    #f{
        background-image: url("https://tse4.mm.bing.net/th?id=OIP.9oDUj7gmmVgoJKYDEzzZ-wHaDt&pid=Api&P=0&w=356&h=179");
        background-size: cover;
        width: 192px;
        height: 100px;
        margin-left: 70px;
    }
    #p{
        background-image: url("https://tse4.mm.bing.net/th?id=OIP.fS-b98mfscPB3ymJ_ukK9AHaLI&pid0=Api&P=0&w=300&h=30");
        background-size: cover;
        width: 100px;
        height: 160px;
        margin-left: 50px;
    }
    #r{
        background-image: url("https://tse4.mm.bing.net/th?id=OIP.xEemDE0q7S7m7Wi-WR6WCgHaNm&pid=Api&P=0&w=300&h=300");
        background-size: cover;
        width: 100px;
        height: 160px;
        margin-top: -200px;
        margin-left: 220px; 
    }
    #m{
        background-image: url("https://tse4.mm.bing.net/th?id=OIP.zccV-DcU1Qz8RtrSCRgm0AHaD6&pid=Api&P=0&w=319&h=169");
        background-size: cover;
        width: 200px;
        height: 90px;
        margin-left: 70px; 
    }
    #menu{
        background-color: white;
        opacity: 0.8;
        border: 1px solid black;
        border-radius: 10px;
        width: 200px;
        height: 450px;
        margin-top: 20px;
        margin-left: 25px;
    }
    #tete{
        opacity: 0.8;
        width:200;
        margin-left: 25px;
        margin-top:20px;
        margin-bottom:5px;

        border-radius: 10px;
        width: 200px;
    }
    .card{

        border: 1px solid grey;
        margin-top: 45px;
        margin-left: 17px;
    }
    #int{
        margin-top: -100px;
        margin-left: 1100px;
    }
    .card-text{
        font-family:Georgia ;
        font-style: oblique;

    }
</style>
<body>
    <header >
        <div id="cabecario">
            <p id="titulo">Rolê World</p>
            <img src="https://cdn4.iconfinder.com/data/icons/world-travel-guide/512/travel-13-512.png" style="width: 50px;height: 50px;background-size:couver;margin-left: 3px;margin-top:-100px;">
        </div>  
    </header>

    <div id="menu">
        <img src="http://cdn.onlinewebfonts.com/svg/img_18442.png"  style="height: 50px;width: 50px;margin-left:70px ;margin-top: 10px;">
        <p style="font-family:Georgia;font-size:10px;margin-left: 65px;margin-top: 5px;">Nome usuario</p>
        <hr style="width: 150px;">
        <p style="font-family: courie;margin-left: 75px;margin-top:-10px;color: gray;">Menu</p>
        <button type="button" class="btn btn-outline-secondary" style="width:180px; font-size: 13px;margin-left: 8px;">Informação para sua viagem</button>
        <button type="button" class="btn btn-outline-secondary" style="width:180px;margin-left: 8px;margin-top: 5px;">Atrações</button>
        <button type="button" class="btn btn-outline-secondary" style="width:180px;margin-left: 8px;margin-top: 5px;">Alugues de carros</button>
        <button type="button" class="btn btn-outline-secondary" style="width:180px;margin-left: 8px;margin-top: 5px;">Meus pagamentos</button>
        <button type="button" class="btn btn-outline-secondary" style="width:180px;margin-left: 8px;margin-top: 5px;">Meus pacotes</button>
        <a href="index.php "><button type="button" class="btn btn-outline-danger" style="width:180px;margin-left: 8px;margin-top: 32px;">Log Out</button></a>
    </div>

    <a href="quest.php?id=1"><button id="tete" type="button" class="btn btn-dark" style="">! Fazer Teste !</button></a>

    <div id="D" style="">
        <div style="margin-top: 10px;text-align: center;">
            <br>
            <p style="font-family:Georgia;font-size:25px;text-align: center; color: grey;font-style: italic;font-style: oblique;">Locais mais viajados!</p>
        </div>
        <hr style="width: 600px;">
        <div class="card" style="width: 15rem;float: left;height:300px;">
            <img src="https://tse4.mm.bing.net/th?id=OIP.9oDUj7gmmVgoJKYDEzzZ-wHaDt&pid=Api&P=0&w=356&h=179" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Pão de Açúcar, Rio de Janeiro</p>
              <p class="card-text">Brasil</p>
            </div>
        </div>
        <div class="card" style="width: 15rem; float: left;height:300px;">
            <img src="https://tse2.mm.bing.net/th?id=OIP.swr5hP6vrsGaBMk9iGqq8QHaFj&pid=Api&P=0&w=236&h=178" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"> Coliseu, Roma</p>
              <p class="card-text">Itália</p>
            </div>
        </div>
        <div class="card" style="width: 15rem;float: left;height:300px;">
            <img src="https://tse1.mm.bing.net/th?id=OIP.wzUeXZBrRbKetywj9edW2gHaE7&pid=Api&P=0&w=243&h=163" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Torre Eiffel, Paris</p>
              <p class="card-text">França</p>
            </div>
        </div>
        
        <div class="card" style="width: 15rem;float: left;height:300px;">
            <img src="https://tse4.mm.bing.net/th?id=OIP.zccV-DcU1Qz8RtrSCRgm0AHaD6&pid=Api&P=0&w=319&h=169" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Ilhas Maldivas</p>
            </div>
        </div>
    </div>
    <footer></footer>
    <?php

        session_start();

        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
          unset($_SESSION['email']);
          unset($_SESSION['senha']);
          header('location:login.php');
          }

        $logado = $_SESSION['email'];

    ?>
    
</body>
</html>