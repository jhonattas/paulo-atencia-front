<?php
if(isset($_GET['status']) && $_GET['status'] == 'enviou') {
?>
<body>
   <DIV style="position:absolute; top:10px; left:200px;text-align:center;">
      <span style="font: bold 20px Arial; color: rgb(150,150,150);">Mensagem enviada com sucesso!</span><br/>
      <a href="index.php">Clique Aqui para Voltar!</a>
   </DIV>
</body>
 
<?php
}elseif(isset($_GET['status']) && $_GET['status'] == 'falhou'){
?>
<body>
   <DIV style="position:absolute; top:10px; left:200px;text-align:center;">
     <span style="font: bold 20px Arial; color: rgb(255,0,0);">Falha no envio!</span><br/>
     <a href="index.php">Clique Aqui para Voltar!</a>
   </DIV>
</body>
<?php
}
else{
?>
<body>
<center>
<form method="post" action="send.php">
 
   <h2>Envio de e-mail autenticado</h2>
   <span style="font: bold 12px Arial;">E-mail: </span><br><input type="text" name="emailremetente" size="45"></input></br>
   <span style="font: bold 12px Arial;">Nome: </span><br><input type="text" name="nome" size="45"></input></br>
   <span style="font: bold 12px Arial;">Assunto: </span><br><input type="text" name="assunto" id="assunto" size="45"></input></br>
   <span style="font: bold 12px Arial;">Mensagem: </span><br><textarea name="mensagem" cols="45" rows="5" id="textarea"></textarea></br>
 
   <input type="submit" value="Enviar Email AGORA!" />
</form>
</center>
</body>
<?php
}
?>