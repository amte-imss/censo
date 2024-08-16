<div class="row">

    <!--div class="col-md-3">
        <div><a href="http://educacionensalud.imss.gob.mx/es/presentaci%C3%B3n"><?php //echo img("anuncio_cuadrado.gif",array("class"=>"img-responsive")); ?></a></div>
    </div-->

    <div class="col-md-12">
        <h1 style="font-weight:bold; font-size: 28px;">Sistema Bibliotecario del Instituto Mexicano del Seguro Social</h1>
        <div class="breadcrumbs6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" style="padding:0px;">
                        <h1 style="margin:0px; font-size: 26px;">Sesiones en línea</h1>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li>
                                <!--a href="http://innovacioneducativa.imss.gob.mx/imss_conricyt/index.html">
                                    Inicio
                                </a-->
                                Inicio
                            </li>
                            <li class="active">
                                Sesiones en línea
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="property gray2-bg">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12  wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;" data-wow-animation-name="fadeInLeft">
                    <h2 style="font-size: 20px;">Curso de Procedimientos para las Unidades de Información del Sistema Bibliotecario IMSS</h2>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h3>SEDE</h3><p>En línea</p><br>
                        <h3>Informes:</h3>
                        <p><em>Correo electrónico:</em> <a href="mailto:diana.sanchezt@imss.gob.mx ">diana.sanchezt@imss.gob.mx </a></p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 text-justify"><h3>Requisitos Técnicos:</h3>
                        <p>- Actualizar adobe connect<br>
                        - Tener diadema con audífonos<br><br>
                        * Nota. Las capacitaciones por medio de la plataforma Zoom (https://zoom.us/) requieren la instalación del software (<a href="https://zoom.us/download" target="_blank" style="color:#265c4f; font-weight:bold">descargable aquí https://zoom.us/download</a>) para poder ver la transmisión. 
                            Si tienes alguna duda, puedes consultar video tutoriales en la siguiente liga <a href="https://support.zoom.us/hc/es/articles/206618765-Tutoriales-de-Zoom-en-video" target="_blank" style="color:#265c4f; font-weight:bold">https://support.zoom.us/hc/es/articles/206618765-Tutoriales-de-Zoom-en-video</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ui-60">
                <?php
                $meses = array('01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre');
                ?>
                <div class="container">
                    <?php
                    $par = 1; // declaramos una variable para controlar el clearfix
                    foreach ($calendario as $fecha) {
                        $dia_actual = date("Y-m-d H:i:s");
                        $fecha_termino = strtotime($fecha['a_registro_fin']);
                        $mes = date("m", strtotime($fecha['a_inicio']));
                        $dia = date("d", strtotime($fecha['a_inicio']));
                        //pr($dia_actual);
                        $nombre = $fecha['a_nombre'];
                        $hinicio = date("H:i", strtotime($fecha['a_hr_inicio']));
                        $hfin = date("H:i", strtotime($fecha['a_hr_fin']));
                        $duracion = number_format($fecha['a_duracion']);
                        $liga = $fecha['a_liga'];
                        $status = $fecha['a_estado'];
                        $liga = site_url('registro/registrodistancia/' . $fecha['agenda_id']);
                        $circle = 'bg-grey';
                        $boton = '<a href="' . $liga . '" class="btn btn-black">Cerrado</a>';
                        if ($fecha_termino >= strtotime($dia_actual) && $fecha['a_estado'] == 1) {
                            $boton = '<a href="' . $liga . '" class="btn btn-info">Registrar</a>';
                            $circle = 'bg-green';
                        }
                        ?><div class="col-md-6" style="padding-left:0px">
                            <!-- Pricing item -->
                            <div class="ui-item clearfix">
                                <a class="ui-price <?php echo $circle; ?> circle"> <?php echo $dia; ?> </a>
                                <div class="ui-plan">
                                    <!-- Plan name -->
                                    <h3><?php echo $meses[$mes]; ?>
                                        <!-- Plan details -->
                                        <h3><?php echo $nombre; ?> </h3>
                                        <p>HORA: <?php echo $hinicio; ?> - <?php echo $hfin; ?>  hr</p>
                                        <!--<div class="col-lg-12 col-md-12 col-sm-12"><?php echo $fecha['a_desc']; ?></div>-->
                                        <p>DURACIÓN: <?php echo $duracion; ?> hr</p>
                                        <?php echo $boton; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($par % 2 == 0) {
                            echo '<div class="clearfix"></div>';
                        }
                        $par++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
