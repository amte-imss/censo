<div class="row">
    <div class="col-md-12">
    <h1 style="font-weight:bold; font-size: 28px;">Sistema Bibliotecario del Instituto Mexicano del Seguro Social</h1>
        <div class="breadcrumbs6" style="background-size: 100% 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-4" style="padding:0px;">
                        <h1 style="margin:0px; font-size: 26px;">Talleres presenciales de actualización</h1>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li>
                                <!--a href="http://innovacioneducativa.imss.gob.mx/imss_conricyt/index.html">
                                    Inicio
                                </a-->
                                Inicio
                            </li>
                            <li class="active">
                                Talleres presenciales de actualización
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
                    <div class="col-lg-3"><h4>Informes:</h4>
                        <p><em>Correo electrónico:</em> <a href="mailto:recursoselectronicosimss@gmail.com ">recursoselectronicosimss@gmail.com </a></p>
                    </div>
                    <div class="row">
                        <div data-wow-animation-name="fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;" class="col-lg-9 col-md-9 col-sm-9  wow fadeInLeft animated"> <a href="<?php echo site_url('registro'); ?>" target="_blank" class="btn btn-perfil btn-lg btn-block">¡Regístrate!</a></div>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>



            <div class="ui-60">

                <?php
                //pr($calendario);
                $meses = array('01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre');

                //echo date("d-m-Y");
                //echo date("H:i", );
                ?>
                <div class="container">

                    <?php
                    $par = 1; // declaramos una variable para controlar el clearfix
//pr($calendario);
                    foreach ($calendario as $fecha) {
                        //pr($fecha);
                        //$dia_actual = date("Y-m-d h:i:s");
                        $fecha_inicio = date('Y-m-d h:i:s', strtotime($fecha['a_inicio'])); ///Regla establecida para el registro. Solo permite registros 24 horas antes del inicio de la sesión.
                        $mes = date("m", strtotime($fecha['a_inicio']));
                        $dia = date("d", strtotime($fecha['a_inicio']));
                        $fin = date("d", strtotime($fecha['a_fin']));
                        $hinicio = date("H:i", strtotime($fecha['a_inicio']));
                        $hfin = date("H:i", strtotime($fecha['a_fin']));
                        //pr($dia_actual);
                        $nombre = $fecha['a_nombre'];
                        $duracion = number_format($fecha['a_duracion']);
                        $status = $fecha['a_estado'];
                        $liga = site_url('registro/index/'.base64_encode($fecha['agenda_id']));
                        $circle = 'bg-grey';
                        $boton = '<a class="btn btn-black" disabled >Cerrado</a>';
                        //if ($fecha_inicio > $dia_actual && $fecha['a_estado'] == 1) {
                        if ($fecha['activo_registro'] == true && $fecha['a_estado'] == 1) {
                            $boton = '<a href="' . $liga . '" class="btn btn-info">Registrar</a>';
                            $circle = 'bg-green';
                        }
                        //<i class="fa fa-desktop orange"></i></h3>
                        ?><div class="col-md-4">
                            <!-- Pricing item -->
                            <div class="ui-item clearfix">
                                <a class="ui-price <?php echo $circle; ?> circle"> <?php echo $dia . '<b> al </b><br />' . $fin; ?> </a>
                                <div class="ui-plan">
                                    <!-- Plan name -->
                                    <h3><?php echo $meses[$mes]; ?>
                                        <!-- Plan details -->
                                        <h3><?php echo $fecha['a_nombre']; ?> <!--CONRICyT, Clinical Key, Summon, Up to Date, Ovid, Scopus, Access Medicine, Web of Science, EBSCO--></h3>
                                        <?php echo $boton; ?>
                                </div>
                            </div>
                            <!-- Pricing item -->
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
