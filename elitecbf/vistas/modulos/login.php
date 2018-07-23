
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Cabify</p>
    </div>
</div>
    
<section id="wrapper">
    <div class="login-register" style="background-image:url(vistas/assets/images/background/login-register.png);">
        <div class="login-box card">

            <div class="card-body">
                <form class="form-horizontal form-material"  method="post">
                    <h3 class="box-title m-b-20" align="center">Cabify - Disfruta del viaje</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Usuario" name="ingUsuario"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Contraseña" name="ingPassword"> </div>
                    </div>
                   
                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Ingresar</button>
                        </div>
                    </div>
                    <?php
                        $login = new ControladorUsuarios();
                        $login -> ctrIngresoUsuario();
                    ?>
                </form>
            </div>
        </div>
    </div>
</section>