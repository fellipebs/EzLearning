<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" src="./assets/css/styles.css">
    <style>
        .service-area {
    position: relative;
    margin-top: 0px;
    background-color: transparent;
}

.service-single {
    padding: 40px 0px;
    background: #fff;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
}

.service-single img {
    max-width: 150px;
    margin-bottom: 33px;
}

.service-single h2 {
    font-size: 30px;
    font-weight: 500;
    color: #232323;
    letter-spacing: 0;
    margin-bottom: 10px;
}

.service-single p {
    font-weight: 500;
    color: #666666;
    font-size: 15px;
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Easy Learning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <ul class="nav navbar-nav navbar-right">
      <li><span style='color: white;'>
<?php
// session_start();
// echo $_SESSION['usuario']->Usuario;
// $foto = $_SESSION['usuario']->foto;
?>
      </span></li>
      <li>
      <?php
    //  echo" <img src='img/$foto' class='rounded-circle' width='50px' height='50px'>";
      ?>
      </li>
     
    </ul>
</nav>
    <h1>Easy Learning</h1>
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-single">
                        <img src="../assets/images/algorithm.png" alt="service image">
                        <h2>Blocos</h2>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                            <p>Com nossos blocos os alunos podem aprender a progamar brincando, estes permitem a integração com as mais novas tecnologias usadas na progamação</p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-6">
                    <div class="service-single">
                        <img src="../assets/images/coding.png" alt="service image">
                        <h2>Atividades</h2>
                        <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-10">
                            <p>As atividades tem como foco aprender conceitos de progamação e melhorar a capacidade de resolução de problemas de nossos alunos.</p>
                            </div>
                            <div class="col-md-1"></div>
                            
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-6">
                    <div class="service-single">
                        <img src="../assets/images/education.png" alt="service image">
                        <h2>Sandbox</h2>
                        <div class="row">
                            <div class="col-md-1"></div>
                                <div class="col-md-10">
                                <p>O sandbox é uma área livre para os alunos testarem seus conhecimentos e praticarem de forma livre, fazendo tudo que sua criatividade permitir.</p>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-single">
                        <img src="../assets/images/earnings.png" alt="service image">
                        <h2>Blocos</h2>
                        <p>Com nossos blocos os alunos podem aprender a progamar brincando.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-6">
                    <div class="service-single">
                        <img src="../assets/images/ebook.png" alt="service image">
                        <h2>Atividades</h2>
                        <p>Com atividades como foco aprender conceitos de progamação e melhorar a capacidade de resolução de problemas de nossos alunos.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-6">
                    <div class="service-single">
                        <img src="../assets/images/education.png" alt="service image">
                        <h2>Sandbox</h2>
                        <p>O sandbox é uma área livre para os alunos testarem seus conhecimentos e praticarem de forma livre, fazendo tudo que sua criatividade permitir.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>