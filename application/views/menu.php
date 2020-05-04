


<!-- //////////////////Primer Menú////////////////////////////////7
<section>
  <div class="container">

  <ul class="topnav">
    <li><a href="http://localhost:8080/OIP/">Inicio</a></li>
    <li><a href="<?php echo base_url('http://localhost:8080/OIP/') ?>">Marco Normativo</a></li>
    <li><a href="#contact">Derechos ARCO</a></li>
    <li><a href="#contact">RESDP</a></li>
    <li><a href="#contact">Glosario</a></li>
    <li><a href="#contact">Documentos de Consulta</a></li>
    <li><a href="#contact">Sistema de Datos Personales</a></li>

  </ul>
  </div>
</section> -->
<!DOCTYPE html>
<html>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos2.css') ?>">-->
<link type="text/css" href="<?php echo base_url('assets/css/estilos2.css') ?>" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.nav-enlace
{
  display: inline-block;
  background: #f5f5f6;
  color: #000;
  padding: 10px 30px;
  font-family: 'Source Sans Pro';
  font-size: 25px;
}

.nav-enlace:hover
{

background-color: #d9dadb;

}

nav
{
  background: #f5f5f6;
  padding: 10px;
  display: flex;
  justify-content: space-around;
}

.nav-boton{
          background: #f5f5f6;
          color: #000;
          padding: 10px 0;
          border: 2px solid #fff;
          display: none;
}

@media (max-width: 600px)
{
nav{
    flex-direction: column;
    }
.nav-enlace{
            margin: 10px 0px;
            }
.nav-boton{
            display: inline-block;
          }
.oculta{
        display: none;
        }

}

</style>


<body>
  <div style="margin-left:7.5% ;margin-right:8.5%; font-size:20px">
  <nav>
      <button class="nav-boton" onclick="accion()">Menú</button>
      <a href="<?php echo base_url('/index.php') ?>" class="nav-enlace oculta">Inicio</a>
      <a href="<?php echo base_url('/index.php/Marco_Normativo') ?>" class="nav-enlace oculta">Marco  Normatvo</a>
      <a href="<?php echo base_url('/index.php/ARCO') ?>" class="nav-enlace oculta">Derechos ARCO</a>
      <a href="<?php echo base_url('/index.php/RESDP') ?>" class="nav-enlace oculta">REDSP</a>
      <a href="<?php echo base_url('/index.php/Glosario') ?>" class="nav-enlace oculta">Glosario</a>
      <a href="<?php echo base_url('/index.php/Documentos_Consulta') ?>" class="nav-enlace oculta">Documento de Consulta</a>
      <a href="<?php echo base_url('/index.php/Datos_Personales') ?>" class="nav-enlace oculta">Sistema de Datos Personales</a>

  </nav>

<script>
  function accion(){
        console.log('está funcionando');
        var ancla = document.getElementsByClassName('nav-enlace');
        for(var i=0; i < ancla.length; i++){
            ancla[i].classList.toggle('oculta');
        }

  }



</script>


<div style="margin-left:3% ;margin-right:10%; font-size:20px">




</body>
</html>
