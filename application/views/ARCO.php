
<html lang="en">
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link type="text/css" href="<?php base_url('assets/css/estilos.css') ?>" rel="stylesheet"/>

    <style>


.imagenes {
    width: 100%;
    max-width: 45%;


}

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 50px;
  height: auto; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

    </style>

<body>

 <div style="margin-left:7.5% ;margin-right:8.5%; font-size:25px ;font-family:Source Sans Pro">

        <div class="imagenes">
            <img src="<?php echo base_url('assets/img/arco.svg');?>"alt="La imagen no puede ser cargada" />
        </div>

        <p>
          Los derechos de Acceso, Rectificación, Cancelación y Oposición al tratamiento de datos personales son el conjunto de
          acciones a través de las cuales una persona física puede ejercer el control sobre sus datos personales.
        </p>

<div class="row">
  <div class="column">
    <div class="titulos">
    <b><h2>Derecho de Acceso</h2></b>
  </div>
          <p>Es el derecho que tiene cada persona de solicitar
            el acceso a sus datos personales que están
            en las bases de datos, sistemas, archivos,
            registros o expedientes del responsable que los
            posee, almacena o utiliza, así como de conocer
            información relacionada con el uso que se le da
            a su información personal.
          </p>
          <div>
              <img src="<?php echo base_url('assets/img/datos_personales_1.svg');?>"alt="La imagen no puede ser cargada" />
          </div>
  </div>
  <div class="column">
    <div class="titulos">
    <b><h2>Derecho de Rectificación</h2></b>
  </div>
            <p>Es el derecho que tiene cada persona de solicitar la
              rectificación o corrección de sus datos personales,
              cuando éstos sean inexactos o incompletos o no se
              encuentren actualizados. En otras palabras, se puede
              solicitar a quien posea o utilice sus datos personales,
              que los corrija cuando los mismos sean incorrectos,
              desactualizados o inexactos.
            </p>
          </p>
          <div>
              <img src="<?php echo base_url('assets/img/datos_personales_imagenes_11.svg');?>"alt="La imagen no puede ser cargada" />
          </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="titulos">
    <b><h2>Derecho de Cancelación</h2></b>
  </div>
          <p>Es el derecho que tiene cada persona de solicitar
              que sus datos personales se eliminen de los
              archivos, registros, expedientes, sistemas, bases
              de datos del responsable que los posee, almacena
              o utiliza. Aunque hay que tomar en cuenta que
              no en todos los casos se podrán eliminar sus
              datos personales, principalmente cuando sean
              necesarios por alguna cuestión legal o para el
              cumplimiento de obligaciones.
          </p>

          <div>
              <img src="<?php echo base_url('assets/img/datos_personales_2.svg');?>"alt="La imagen no puede ser cargada" />
          </div>
  </div>
  <div class="column">
    <div class="titulos">
    <b><h2>Derecho de Oposición</h2></b>
  </div>
            <p>Es el derecho que tiene cada persona de solicitar que
                sus datos personales no se utilicen para ciertos fines, o
                de requerir que se concluya el uso de los mismos a fin
                de evitar un daño a su persona. También en este caso,
                como en el anterior, no siempre se podrá impedir el
                uso de sus datos personales, cuando sean necesarios
                por alguna cuestión legal o para el cumplimiento de
                obligaciones.
            </p>

            <div>
                <img src="<?php echo base_url('assets/img/datos_personales_4.svg');?>"alt="La imagen no puede ser cargada" />
            </div>
  </div>
</div>

</div>
</body>
</html>
