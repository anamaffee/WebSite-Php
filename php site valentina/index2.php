<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Portal de Tecnologia</title>

    <style>
    
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background-color: #555555;
    color: #ffffff;
    padding: 20px 0;
}

a {
    color: inherit;
    text-decoration: none;
}

ul {
    list-style: none;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    background-color: #666666;
    padding: 15px;
    box-shadow: 0 0 15px rgba(0,0,0,0.3);
}


.main-header {
    background-color: #444444;
    padding: 10px;
    margin-bottom: 20px;
}

.logo-area {
    height: 70px;
    background-color: #555555;
    margin-bottom: 10px;
}

.nav-menu ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    background-color: #222222;
    padding: 10px 15px;
}

.nav-menu li {
    color: #555555;
    font-size: 13px;
}

.nav-menu a {
    color: #ffffff;
    font-weight: bold;
    font-size: 13px;
}

.nav-menu a:hover {
    color: #cccccc;
}


.layout-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 20px;
}


.content-area {
    background-color: #444444;
    padding: 25px;
}

.artigo h2 {
    font-size: 24px;
    font-weight: bold;
    color: #ffffff;
    border-bottom: 2px solid #555;
    padding-bottom: 8px;
    margin-bottom: 15px;
}

.meta-info {
    margin-bottom: 15px;
}

.categoria {
    background-color: #222222;
    font-size: 11px;
    font-weight: bold;
    color: #ffffff;
    padding: 5px 10px;
    display: inline-block;
    letter-spacing: 1px;
}

.artigo h1 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 10px;
    line-height: 1.2;
}

.subtitulo {
    color: #cccccc;
    font-size: 16px;
    margin-bottom: 25px;
}

.featured-image {
    width: 100%;
    margin-bottom: 25px;
    border: 3px solid #ffffff;
    background-color: #888888;
}

.featured-image img {
    width: 100%;
    height: auto;
    display: block;
}

.corpo-artigo p {
    line-height: 1.7;
    margin-bottom: 18px;
    color: #eeeeee;
    font-size: 15px;
}


.sidebar {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.search-box input {
    width: 100%;
    padding: 12px 15px;
    border: none;
    font-style: italic;
    background-color: #ffffff;
    color: #333333;
    font-size: 14px;
}

.mais-lidos {
    background-color: #ffffff;
    color: #333333;
}

.mais-lidos h3 {
    background-color: #222222;
    color: #ffffff;
    padding: 10px 15px;
    font-size: 16px;
    font-weight: bold;
}

.mais-lidos ul {
    padding: 20px;
    list-style-type: disc;
    padding-left: 35px;
}

.mais-lidos li {
    margin-bottom: 10px;
    color: #333333;
}

.mais-lidos a {
    color: #555555;
    text-decoration: underline;
    font-size: 14px;
}

.banner-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.banner-box {
    background-color: #ffffff;
    height: 120px;
}
.banner.imagem{
  margin-top: 45px; 
  display: block;  
  width: 100%;      
  max-width: 750px; 
  height: auto;     
}

main.img{
 width: 75%;
 height:300px;
}

main{
    width: 75%;
    height: 400px;
    display: block;
    float: left;
    background: yellow;
}
.main-footer {
    background-color: #444444;
    padding: 15px;
    margin-top: 20px;
    text-align: left;
}

.main-footer p {
    font-size: 12px;
    color: #ffffff;
}
/* Estilização CSS */
.banner-container {
  width: 100%;
  max-width: 800px; /* Ajuste para a largura do container */
  height: 400px;    /* Ajuste para a altura do container */
  overflow: hidden;
}

.banner-image {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Mantém a proporção sem distorcer o layout */
  object-position: center;
}

    </style>

</head>

<body>
<!-- Estrutura HTML -->
<div class="banner-container">
    
</div>
<?php
include 'header2.php';
?>
<main>
     <img src="home-office-scaled-1.jpg" alt="computador" class="banner-image">
</main>
<?php
include 'barraLateral2.php';
include 'footer.php';
?>

</div>

</body>
</html>