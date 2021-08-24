<?php
  include('config.php');

?>


<!DOCTYPE html>
<html>
<head>
  <title>PROG_DEV</title>
  <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>https://fontawesome.com/v5.15/icons?d=gallery&p=2">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="palavras-chave,do,meu,site">
  <meta name="description" content="Descriçao do meu website">
   <meta charset="utf-8" />
</head>
<body>
<?php
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
  switch ($url){
    case 'depoimentos':
      echo '<target target="depoimentos"/>';
      break;

    case 'servicos':
       echo '<target target="servicos"/>';
      break;

    
  }


?>

<?php 
  /*new Email();*/



?>

  <header>
    <div class="center">
      <div class="logo esquerda">
        <h2>[PROG_DEV]</h2>
      </div><!--logo-->
      <nav class="desktop direita">
        <ul>
          <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
          <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
          <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
          <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
        </ul>
      </nav>
       <nav class="mobile direita">
        <div class="botao-menu">
          <i class="fas fa-bars"></i>
        </div>
        <ul>
          <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
          <li><a href="<?php echo INCLUDE_PATH;?>">Depoimentos</a></li>
          <li><a href="<?php echo INCLUDE_PATH;?>">Serviços</a></li>
          <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div><!--center-->
  </header>

<?php
  
   if (file_exists('pages/'.$url.'.php')) {
    include('pages/'.$url.'.php');

   }else{
      if ($url != 'depoimentos' && $url != 'servicos') {
        
       $pagina404 = true;
       include('pages/404.php');
       }
       else{
        include('pages/home.php');
       }
   }

?>
  
  <footer>
    <div class="center">
      <h2>Todos os direitos reservados!</h2>
      <p>Entre em contato com a gente!</p>
    </div>
  </footer>
<script type="text/javascript" src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
<script type="text/javascript" src="<?php echo INCLUDE_PATH;?>js/slider.js"></script>
<?php
  if ($url == 'contato') {
    # code...

}
?>  
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7DYADuWnk5-9Tcn_4Gr4oQljxONraXgU"
    ></script>-->
<script type="text/javascript" src="<?php echo INCLUDE_PATH;?>js/map.js"></script>

</body>
</html>