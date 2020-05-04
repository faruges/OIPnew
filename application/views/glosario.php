<!DOCTYPE html>
<html>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos2.css') ?>">
<link type="text/css" href="<?php echo base_url('assets/css/estilos2.css') ?>" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<style>


.whatsapp {
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  z-index:100;
}

.whatsapp-icon {
  margin-top:13px;
}

</style>


<body>


<div class="w3-container">

<div style="margin-left:7.5% ;margin-right:8.5%; font-size:20px ;font-family:Source Sans Pro">

<!--//////////////Botón whatsapp////////////////////////////7
<div class="whatsapp">
	<a href="https://wa.me/5211234567890?text=%20Me%20podrían%20ayudar%20contactdome%20por%20este%20medio" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</div>-->
            <br>
            <h2>Glosario</h2>
            <br>
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-black w3-left-align">Áreas:</button>
            <div id="Demo1" class="w3-hide w3-animate-zoom">
              <p>Instancias de los sujetos obligados previstas en los respectivos reglamentos interiores, estatutos orgánicos o instrumentos equivalentes,
                que cuentan o puedan contar, dar tratamiento, y ser responsables o encargadas de los datos personales.</p>
              </div>

            <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-black w3-left-align">Aviso de privacidad:</button>
            <div id="Demo2" class="w3-hide w3-animate-zoom">
              <p>Documento a disposición del titular de los datos personales, generado por el responsable, de forma física, electrónica o
                  en cualquier formato, previo a la recabación y tratamiento de sus datos, con el objeto de informarle sobre la finalidad del tratamiento, los datos
                  recabados, así como la posibilidad de acceder, rectificar, oponerse o cancelar el tratamiento de los mismos.</p>
              </div>

            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-black w3-left-align">Bases de datos:</button>
              <div id="Demo3" class="w3-hide w3-animate-zoom">
                <p>Conjunto ordenado de datos personales referentes a una persona física identificada o identificable, condicionados a criterios
                    determinados, con independencia
                    de la forma o modalidad de su creación, tipo de soporte, procesamiento, almacenamiento y organización.</p>
              </div>

            <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-black w3-left-align">Bloqueo:</button>
                <div id="Demo4" class="w3-hide w3-animate-zoom">
                  <p>La identificación y conservación de datos personales una vez cumplida la finalidad para la cual fueron recabados, con el único
                    propósito de determinar posibles responsabilidades en relación con su tratamiento, hasta el plazo de prescripción legal o contractual de éstas.
                    Durante dicho periodo, los datos personales no podrán ser objeto de tratamiento y transcurrido éste, se procederá a su cancelación o supresión
                    en la base de datos o sistema de datos personales que corresponda.</p>
                </div>

            <button onclick="myFunction('Demo5')" class="w3-button w3-block w3-black w3-left-align">Comité de Transparencia:</button>
                <div id="Demo5" class="w3-hide w3-animate-zoom">
                  <p>Órgano Colegiado de los sujetos obligados cuya función es determinar la naturaleza de la Información.</p>
                </div>

            <button onclick="myFunction('Demo6')" class="w3-button w3-block w3-black w3-left-align">Cómputo en la nube:</button>
                <div id="Demo6" class="w3-hide w3-animate-zoom">
                  <p>Modelo de provisión externa de servicios de cómputo bajo demanda, que implica el suministro de infraestructura, plataforma
                    o programa informático, distribuido de modo flexible, mediante procedimientos virtuales, en recursos compartidos dinámicamente.</p>
                </div>

            <button onclick="myFunction('Demo7')" class="w3-button w3-block w3-black w3-left-align">Consejo Nacional:</button>
                <div id="Demo7" class="w3-hide w3-animate-zoom">
                  <p>Consejo Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales, conformado por los
                      integrantes del Sistema Nacional y será presidido por el Presidente del Instituto Nacional de Transparencia, Acceso a la Información y Protección
                      de Datos Personales. Los Organismos garantes serán representados por sus titulares o a falta de éstos, por un Comisionado del organismo
                      garante designado por el Pleno del mismo. Los demás integrantes estarán representados por sus titulares o un suplente que deberá tener nivel
                      mínimo de Director General o similar, quienes tendrán las mismas facultades que los propietarios.</p>
                </div>

            <button onclick="myFunction('Demo8')" class="w3-button w3-block w3-black w3-left-align">Consentimiento:</button>
                <div id="Demo8" class="w3-hide w3-animate-zoom">
                  <p>Manifestación de la voluntad libre, específica, informada e inequívoca del titular de los datos a través de la cual autoriza
                    mediante declaración o acción afirmativa, que sus datos personales puedan ser tratados por el responsable.</p>
                </div>

            <button onclick="myFunction('Demo9')" class="w3-button w3-block w3-black w3-left-align">Datos personales:</button>
                <div id="Demo9" class="w3-hide w3-animate-zoom">
                  <p>Cualquier información concerniente a una persona física identificada o identificable. Se considera que una persona física
                      es identificable cuando su identidad pueda determinarse directa o indirectamente a través de cualquier información como puede ser nombre,
                      número de identificación, datos de localización, identificador en línea o uno o varios elementos de la identidad física, fisiológica, genética,
                      psíquica, patrimonial, económica, cultural o social de la persona.</p>
                </div>

            <button onclick="myFunction('Demo10')" class="w3-button w3-block w3-black w3-left-align">Datos personales sensibles:</button>
                <div id="Demo10" class="w3-hide w3-animate-zoom">
                  <p>Aquellos que se refieran a la esfera más íntima de su titular, o cuya utilización indebida pueda dar origen a discriminación
                    o conlleve un riesgo grave para éste. De manera enunciativa más no limitativa, se consideran sensibles los datos personales que
                    puedan revelar aspectos como origen racial o étnico, estado de salud presente o futuro, información genética, información biométrica, creencias
                    religiosas, filosóficas y morales, opiniones políticas y preferencia sexual.</p>
                </div>

            <button onclick="myFunction('Demo11')" class="w3-button w3-block w3-black w3-left-align">Derechos ARCO:</button>
                <div id="Demo11" class="w3-hide w3-animate-zoom">
                  <p>Los derechos de Acceso, Rectificación, Cancelación y Oposición al tratamiento de datos personales.</p>
                </div>

            <button onclick="myFunction('Demo12')" class="w3-button w3-block w3-black w3-left-align">Disociación:</button>
                <div id="Demo12" class="w3-hide w3-animate-zoom">
                  <p>El procedimiento mediante el cual los datos personales no pueden asociarse al titular ni permitir, por su estructura, contenido o
                      grado de desagregación, la identificación del mismo.</p>
                </div>

            <button onclick="myFunction('Demo13')" class="w3-button w3-block w3-black w3-left-align">Documento de seguridad:</button>
                <div id="Demo13" class="w3-hide w3-animate-zoom">
                  <p>Instrumento que describe y da cuenta de manera general sobre las medidas de seguridad técnicas, físicas y administrativas
                    adoptadas por el responsable para garantizar la confidencialidad, integridad y disponibilidad de los datos personales que posee.</p>
                </div>

            <button onclick="myFunction('Demo14')" class="w3-button w3-block w3-black w3-left-align">Encargado:</button>
                <div id="Demo14" class="w3-hide w3-animate-zoom">
                  <p>La persona física o jurídica, pública o privada, ajena a la organización del responsable, que sola o conjuntamente con otras trate
                    datos personales a nombre y por cuenta del responsable.</p>
                </div>

            <button onclick="myFunction('Demo15')" class="w3-button w3-block w3-black w3-left-align">Evaluación de impacto en la protección de datos personales:</button>
                <div id="Demo15" class="w3-hide w3-animate-zoom">
                  <p>Documento mediante el cual los sujetos obligados que pretendan poner en
                    operación o modificar políticas públicas, programas, sistemas o plataformas informáticas, aplicaciones electrónicas o cualquier otra tecnología
                    que implique el tratamiento intensivo o relevante de datos personales, valoran los impactos reales respecto de determinado tratamiento
                    de datos personales, a efecto de identificar y mitigar posibles riesgos que comprometan el cumplimiento de los principios, deberes y derechos
                    de los titulares, así como los deberes de los responsables y encargados, previstos en la normativa aplicable.</p>
                </div>

            <button onclick="myFunction('Demo16')" class="w3-button w3-block w3-black w3-left-align">Fuentes de acceso público:</button>
                <div id="Demo16" class="w3-hide w3-animate-zoom">
                  <p>Aquellas bases de datos, sistemas o archivos en poder de los sujetos obligados, que por disposición de ley
                    puedan ser consultadas públicamente.</p>
                </div>

            <button onclick="myFunction('Demo17')" class="w3-button w3-block w3-black w3-left-align">Instituto:</button>
                <div id="Demo17" class="w3-hide w3-animate-zoom">
                  <p>Instituto de Transparencia, Acceso a la Información Pública, Protección de Datos Personales y Rendición de Cuentas de la Ciudad de
                    México.</p>
                </div>

            <button onclick="myFunction('Demo18')" class="w3-button w3-block w3-black w3-left-align">Instituto Nacional:</button>
                <div id="Demo18" class="w3-hide w3-animate-zoom">
                  <p>Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales.</p>
                </div>

            <button onclick="myFunction('Demo19')" class="w3-button w3-block w3-black w3-left-align">Ley General:</button>
                <div id="Demo19" class="w3-hide w3-animate-zoom">
                  <p>Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados.</p>
                </div>

            <button onclick="myFunction('Demo20')" class="w3-button w3-block w3-black w3-left-align">Medidas compensatorias:</button>
                <div id="Demo20" class="w3-hide w3-animate-zoom">
                  <p>Mecanismos alternos para dar a conocer a los titulares el aviso de privacidad, a través de su difusión por medios masivos de comunicación u
                    otros de amplio alcance, cuando no se haya podido recabar el consentimiento previo al tratamiento de los datos personales de una persona física,
                    sea por emergencias de salud pública, seguridad o desastres naturales.</p>
                </div>

            <button onclick="myFunction('Demo21')" class="w3-button w3-block w3-black w3-left-align">Medidas de seguridad:</button>
                <div id="Demo21" class="w3-hide w3-animate-zoom">
                  <p>Conjunto de acciones, actividades, controles o mecanismos administrativos, técnicos y físicos que permitan proteger
                    los datos personales y los sistemas de datos personales.</p>
                </div>

            <button onclick="myFunction('Demo22')" class="w3-button w3-block w3-black w3-left-align">Medidas de seguridad administrativas:</button>
                <div id="Demo22" class="w3-hide w3-animate-zoom">
                  <p>Políticas y procedimientos para la gestión, soporte y revisión de la seguridad de la información a
                      nivel organizacional, la identificación, clasificación y borrado seguro de la información, así como la sensibilización y capacitación del personal,
                      en materia de protección de datos personales.</p>
                </div>

            <button onclick="myFunction('Demo23')" class="w3-button w3-block w3-black w3-left-align">Medidas de seguridad físicas:</button>
                <div id="Demo23" class="w3-hide w3-animate-zoom">
                  <p>Conjunto de acciones y mecanismos para proteger el entorno físico de los datos personales y de los recursos
                    involucrados en su tratamiento. De manera enunciativa más no limitativa, se consideran las siguientes actividades:
                      <ul>
                        <li>a) Prevenir el acceso no autorizado al perímetro de la organización, sus instalaciones físicas, áreas críticas, recursos e información;</li>
                        <li>b) Prevenir el daño o interferencia a las instalaciones físicas, áreas críticas de la organización, recursos e información;</li>
                        <li>c) Proteger los recursos móviles, portátiles y cualquier soporte físico o electrónico que pueda salir de la organización, y</li>
                        <li>d) Proveer a los equipos que contienen o almacenan datos personales de un mantenimiento eficaz, que asegure su disponibilidad e integridad.</li>
                      </ul>
                    </p>
                </div>

            <button onclick="myFunction('Demo24')" class="w3-button w3-block w3-black w3-left-align">Medidas de seguridad técnicas:</button>
                <div id="Demo24" class="w3-hide w3-animate-zoom">
                  <p>Conjunto de acciones y mecanismos que se valen de la tecnología relacionada con hardware y software para
                      proteger el entorno digital de los datos personales y los recursos involucrados en su tratamiento. De manera enunciativa más no limitativa, se
                      consideran las siguientes actividades:
                      <ul>
                        <li>a) Prevenir que el acceso a las bases de datos o a la información, así como a los recursos, sea por usuarios identificados y autorizados;</li>
                        <li>b) Generar un esquema de privilegios para que el usuario lleve a cabo las actividades que requiere con motivo de sus funciones;</li>
                        <li>c) Revisar la configuración de seguridad en la adquisición, operación, desarrollo y mantenimiento del software y hardware, y</li>
                        <li>d) Gestionar las comunicaciones, operaciones y medios de almacenamiento de los recursos informáticos en el tratamiento de datos personales.</li>
                      </ul>
                    </p>
                </div>

            <button onclick="myFunction('Demo25')" class="w3-button w3-block w3-black w3-left-align">Plataforma Nacional de Transparencia:</button>
                <div id="Demo25" class="w3-hide w3-animate-zoom">
                  <p>Los Organismos garantes desarrollarán, administrarán, implementarán y pondrán en funcionamiento
                      la plataforma electrónica que permita cumplir con los procedimientos, obligaciones y disposiciones señaladas en la Ley General de
                      Transparencia y Acceso a la Información Pública para los sujetos obligados y Organismos garantes, de conformidad con la normatividad que
                      establezca el Sistema Nacional, atendiendo a las necesidades de accesibilidad de los usuarios.</p>
                </div>

            <button onclick="myFunction('Demo26')" class="w3-button w3-block w3-black w3-left-align">Remisión:</button>
                <div id="Demo26" class="w3-hide w3-animate-zoom">
                  <p>Toda comunicación de datos personales realizada exclusivamente entre el responsable y encargado, dentro o fuera del territorio
                      mexicano.</p>
                </div>

            <button onclick="myFunction('Demo27')" class="w3-button w3-block w3-black w3-left-align">Responsable:</button>
                <div id="Demo27" class="w3-hide w3-animate-zoom">
                  <p>Cualquier autoridad, entidad, órgano y organismo de los Poderes Ejecutivo, Legislativo y Judicial, Órganos Autónomos, Partidos
                      Políticos, Fideicomisos y Fondos Públicos, que decida y determine finalidad, fines, medios, medidas de seguridad y demás cuestiones relacionadas
                      con el tratamiento de datos personales.</p>
                </div>

            <button onclick="myFunction('Demo28')" class="w3-button w3-block w3-black w3-left-align">Sistema de Datos Personales:</button>
                <div id="Demo28" class="w3-hide w3-animate-zoom">
                  <p>Conjunto de organizado de archivos, registros, ficheros, bases o banco de datos personales en posesión de los
                    sujetos obligados, cualquiera sea la forma o modalidad de su creación, almacenamiento, organización y acceso.</p>
                </div>

            <button onclick="myFunction('Demo29')" class="w3-button w3-block w3-black w3-left-align">Sistema Nacional:</button>
                <div id="Demo29" class="w3-hide w3-animate-zoom">
                  <p>El Sistema Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales.</p>
                </div>

            <button onclick="myFunction('Demo30')" class="w3-button w3-block w3-black w3-left-align">Supresión:</button>
                <div id="Demo30" class="w3-hide w3-animate-zoom">
                  <p>La eliminación, borrado o destrucción de los Sistemas de Datos Personales o de datos personales de una persona física bajo las
                      medidas de seguridad previamente establecidas por el responsable, una vez que se ha cumplido la finalidad y el dato personal ha cumplido su
                      ciclo de vida.</p>
                </div>

            <button onclick="myFunction('Demo31')" class="w3-button w3-block w3-black w3-left-align">Titular:</button>
                <div id="Demo31" class="w3-hide w3-animate-zoom">
                  <p>La persona física a quien corresponden los datos personales.</p>
                </div>

            <button onclick="myFunction('Demo32')" class="w3-button w3-block w3-black w3-left-align">Transferencia:</button>
                <div id="Demo32" class="w3-hide w3-animate-zoom">
                  <p>Toda comunicación de datos personales dentro o fuera del territorio mexicano, realizada a persona distinta del titular, del
                      responsable o del encargado.</p>
                </div>

            <button onclick="myFunction('Demo33')" class="w3-button w3-block w3-black w3-left-align">Tratamiento:</button>
                <div id="Demo33" class="w3-hide w3-animate-zoom">
                  <p>Cualquier operación o conjunto de operaciones efectuadas sobre datos personales o conjunto de datos personales, mediante
                      procedimientos manuales o automatizados relacionadas con la obtención, uso, registro, organización, estructuración, conservación, elaboración,
                      utilización, comunicación, difusión, almacenamiento, posesión o cualquier otra forma de habilitación de acceso, cotejo, interconexión,
                      manejo, aprovechamiento, divulgación, transferencia, supresión, destrucción o disposición de datos personales.</p>
                </div>

            <button onclick="myFunction('Demo34')" class="w3-button w3-block w3-black w3-left-align">Unidad de Transparencia:</button>
                    <div id="Demo34" class="w3-hide w3-animate-zoom">
                      <p>Unidad administrativa receptora de las solicitudes de información a cuya tutela estará el trámite de las mismas.</p>
                    </div>

            <button onclick="myFunction('Demo35')" class="w3-button w3-block w3-black w3-left-align">Usuario:</button>
                    <div id="Demo35" class="w3-hide w3-animate-zoom">
                      <p>Persona autorizada por el responsable, y parte de la organización del sujeto obligado, que dé tratamiento y/o tenga acceso a los
                        datos y/o a los sistemas de datos personales.</p>
                    </div>
                    <br>
                    <br>
                    <br>
            </div>
</div>

            <script>
            function myFunction(id) {
              var x = document.getElementById(id);
              if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
              } else {
                x.className = x.className.replace(" w3-show", "");
              }
            }
            </script>

</body>
</html>
