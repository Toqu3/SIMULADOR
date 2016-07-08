<?php $this->load->view('template/main-panel/main-head', $modulo); ?>
<body class="hold-transition bg-black sidebar-mini fix-padding-scrollbar">
<div class="wrapper">

    <?php
    $data["modulo"] = $modulo;
    $this->load->view('template/main-panel/header', $data); ?>

    <?php
    $data["menu"]     = 4;
    $data["submenu"]  = 0;
    $this->load->view('admin/v-panel-menu', $data); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                SIMULADOR DE EXAMEN COMPLETO
                <ol class="breadcrumb">
                    <li>HORA INICIO: 00:00:00 PM <span class="glyphicon glyphicon-time"></span>  <p class="text-red">00:50:00 minutos</p></li>
                </ol>
                <br>

            </h1>
            <ol class="breadcrumb">
                <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <h2>A QUE GENERACION CORRESPONDEN LOS DERECHOS ECONOMICOS, SOCIALES Y CULTURALES ?</h2>
                <div class="form-group">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="alt_a" checked="">
                            A LA PRIMERA GENERACION
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="alt_b">
                            A LA TERCERA GENERACION
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="alt_c">
                            A LA QUINTA GENERACION
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios4" value="alt_d">
                            A LA CUARTA GENERACION
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios5" value="alt_e">
                            A LA SEGUNDA GENERACION
                        </label>
                    </div>
                </div>

            </div>


            <!--</div><!-- /.row -->
            <!-- =========================================================== -->

        </section><!-- /.content -->

    </div><!-- /.content-wrapper -->

    <?php $this->load->view('template/main-panel/footer'); ?>

</div><!-- ./wrapper -->
<?php $this->load->view('template/main-panel/scripts-footer'); ?>
</body>
</html>