<?php
  include('../app/config.php');
  include('../layout/sesion.php');
  include('../layout/parte1.php');
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Creación de productos</h1> 
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">   
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-5">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Diligencie los datos del nuevo producto</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
              </div>
            </div>

            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controladores/productos/creacion_producto.php" method="post">
                    <div class="form-group">
                      <label for="">Nombres de producto</label>
                      <input type="text" name="nombre_producto" class="form-control" placeholder="Escriba aquí el nombre del producto...">
                    </div> 
                    <div class="form-group">
                      <label for="">Existencias</label>
                      <input type="text" name="existencias" class="form-control" placeholder="Escriba aquí la cantidad...">
                    </div> 
                    <div class="form-group">
                      <label for="">Precio</label>
                      <input type="text" name="precio" class="form-control" placeholder="Escriba el precio...">
                    </div> 
                    <hr>
                    <div class="form-group">
                      <a href="" class="btn btn-secondary">Cancelar</a>
                      <button class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div> 
<?php include ('../layout/parte2.php'); ?>
