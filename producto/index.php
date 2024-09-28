
<?php

include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controladores/productos/listado_producto.php');


?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de productos</h1>  <!-- modifico el nombre para que aparezca el portal de ventas online -->

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">   
      <div class="container-fluid">
        Listado de productos
        <div class="row">
        <div class="col-md-8">
        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Productos Registrados</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>

        </div>
        <div class="card-body" style="display: block;">
        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Nombre de producto</th>
                    <th>Existencias</th>
                    <th>precio</th>
                    <th>imagen</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
              // me sirve para desplegar toda la información que existe en la base de datos
                foreach($datos_productos as $datos_productos){
                 // echo "hola";
                ?>
              <!--escribimos en lenguaje html-->
              <tr>
                <td><?php echo $datos_productos['codigo']?></td>
                <td><?php echo $datos_productos['nombre_producto']?></td>
                <td><?php echo $datos_productos['existencias']?></td>
                <td><?php echo $datos_productos['precio']?></td>
                <td>
                  <img src= "<?php echo $datos_productos['imagen']?> "width=80psx" alt=""> </td>
              </tr>
              <?php }?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nro</th>
                    <th>Nombre de producto</th>
                    <th>existencias</th>
                    <th>precio</th>
                  </tr>
                  </tfoot>
                </table>
          </div>
                </div>
                </div>
                </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div> 
  <!-- /.content-wrapper -->

<?php include ('../layout/parte2.php');?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>