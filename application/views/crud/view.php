<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?> 

<div id="container">
    <div class="card-body">
        <div class="card-header"> 
            <h2>Edit Product</h2>
        </div>
 
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" disabled class="form-control" value="<?= $data->designation ?>">
                    </div>
                </div> 
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <!-- radio inputs -->
                    <div class="form-group">
                        <label>Type</label>
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" disabled type="radio" name="type" value="Liquid" <?= ($data->type === 'Liquid') ? 'checked' : '' ?>>
                                <label class="form-check-label">Liquid</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" disable type="radio" name="type" value="Solid" <?= ($data->type === 'Solid') ? 'checked' : '' ?>>
                                <label class="form-check-label">Solid</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" disabled type="radio" name="type" value="Gas" <?= ($data->type === 'Gas') ? 'checked' : '' ?>>
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
                        <textarea class="form-control" disabled name="label" rows="3"><?= $data->label ?></textarea>
                    </div>
                </div>
            </div>

            <a type="List view" href="<?= base_url('index.php/Product/') ?>" class="btn btn-primary">List</a>
 
        <!-- ... Other parts of your view ... -->

    </div>
</div>

<!-- Include necessary scripts -->
<script src="<?= base_url('assets/AdminLTE-3.2.0/dist/js/adminlte.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/dist/js/adminlte.js') ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.2.0/dist/js/pages/dashboard.js') ?>"></script>
<script>
   function resetForm() {
      document.getElementById("designation").reset();
      document.getElementById("label").reset();
   }
</script>
