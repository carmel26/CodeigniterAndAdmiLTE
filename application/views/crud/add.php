<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

<div id="container">
<div class="card-body">
<div class="card-header"> 
<h2>Add Product</h2>
</div>

        <form method="POST" action="<?= base_url('index.php/Product/addSave') ?>">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" id="designation" class="form-control" placeholder="Enter ...">
                      </div>
                    </div> 
                  </div>

				  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Type</label>
						<div class="row">
							<div class="form-check">
							<input class="form-check-input" type="radio" name="type" value="Liquid">
							<label class="form-check-label">Liquid</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="type" value="Solid" checked>
							<label class="form-check-label">Solid</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" type="radio" name="type" value="Gas">
							<label class="form-check-label">Gas</label>
							</div>
						</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Label</label>
                        <textarea class="form-control" id="label" name="label" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
  
				  <button type="submit" class="btn btn-primary" onclick="resetForm()">Submit</button>
                </form>
             
              <!-- /.card-body -->
            </div>
</div> 
    <!-- Include AdminLTE JS -->
    <script src="<?= base_url('assets/AdminLTE-3.2.0/dist/js/adminlte.min.js') ?>"></script>

<!-- jQuery -->
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --> 
<script src="<?= base_url('assets/AdminLTE-3.2.0/dist/js/adminlte.js') ?>"></script> 
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/AdminLTE-3.2.0/dist/js/pages/dashboard.js') ?>"></script>

<script>
   function resetForm() {
      document.getElementById("designation").reset();
      document.getElementById("label").reset();
   }
</script>
