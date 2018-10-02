<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Galeria</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">

<!-----------CSS&LESS------------->
<link rel="stylesheet/less" type="text/css" href="less/principal.less" />
<link rel="stylesheet/less" type="text/css" href="less/cabeca.less" />
<link rel="stylesheet/less" type="text/css" href="less/diretorios.less" />
<link rel="stylesheet/less" type="text/css" href="less/itens.less" />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Dosis|Roboto|Titillium+Web' />

<!-----------JavaScript----------->
<script type="text/javascript" src="js/less.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<script type="text/javascript" src="js/cabeca.js"></script>
<script type="text/javascript" src="js/inserirConteudo.js"></script>


</head>

<body>

<?php include 'cabeca.php';  ?>

<div class="contLogin" style="position: fixed; width: 100%; height:100%; left:0; top:0; background: #FFF; -webkit-perspective: 150px;  perspective: 150px;">
<table border="0" cellspacing="0" cellpadding="10" class="login" align="center" style="margin-top: 30%; -webkit-transform: rotateX(0deg);    transform: rotateX(0deg);">
  <tr>
    <td colspan="2" bgcolor="#0e3d69">
    	<img src="img/fundo2.png" style="width:30%; margin: 10px">
    </td>
  </tr>
  <tr>
    <td bgcolor="#F5F1E2">
    	<input type="text" placeholder="Senha" class="campoSenha" style="font-family: 'Dosis', sans-serif; width: 98%; background: none; border:none; font-size: 45px; outline: none; padding-left: 15px;">
    </td>
    <td bgcolor="#9cc430">
    	<div class="ok" style="cursor:pointer; width: 100%; padding: 15px 0; text-align:center; color:#FFF; font-size: 45px;">OK</div>
    </td>
  </tr>
</table>

</div>

<div id="corpo" class="load">


</div>

</body>
</html>