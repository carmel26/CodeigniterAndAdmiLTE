<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
  <link rel="stylesheet" href="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
<div id="container">
<div class="card-body">

<div class="card-header"> 
     <h2>List of Products</h2>
</div>
<div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Designation</th>
                    <th>Type</th>
                    <th>Label</th>
                    <th>Date Creation</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
            
				  <?php foreach ($data as $product): ?>
                  <tr>
                     <td><?= $product->designation ?></td>
                     <td><?= $product->type ?></td>
                     <td><?= $product->label ?></td>
                     <td><?= $product->dateCreation ?></td>
                     <td>
                        <a href="<?= base_url('index.php/Product/view/' . $product->id) ?>" class="btn btn-info"> <i class="fas fa-eye"></i></a>
                        <a href="<?= base_url('index.php/Product/edit/' . $product->id) ?>" class="btn btn-primary"> <i class="fas fa-pen"></i></a>
                        <a href="#" onclick="confirmDelete(<?= $product->id ?>)" class="btn btn-danger"> <i class="fas fa-trash"></i></a>
                     </td>
                  </tr>
               <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Designation</th>
                    <th>Type</th>
                    <th>Label</th>
                    <th>Date Creation</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
		</div>
</div>  

<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js') ?>"></script>


<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
 
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>

<!-- Include necessary scripts -->
<script src="<?= base_url('assets/AdminLTE-3.2.0/dist/js/adminlte.min.js') ?>"></script> 
 
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>

<script>
    function confirmDelete(productId) {
        if (confirm("Are you sure you want to delete this product?")) { 
            window.location.href = '<?= base_url("index.php/Product/delete/") ?>' + productId;
        }
    }
</script>
