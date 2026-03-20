<?= $header ?>
<div class="row">
 <div class="col-md-12">
  <h5>Registro de nuevos proveedores</h5>

  <form action="<?= base_url('/proveedores/guardar') ?>" method="post" id="form-proveedores" autocomplete="off">

   <div class="form_group">
    <label for="razonsocial">Razón Social</label>
    <input type="text" class="form-control" id="razonsocial" name="razonsocial" required>
   </div>

   <div class="form_group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" required>
   </div>
  
   <div class="form_group">
    <label for="ruc">RUC</label>
    <input type="text" class="form-control" id="ruc" name="ruc" minlength="11" maxlength="11" required>
   </div>

   <div class="form_group">
    <label for="telefono">Teléfono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" minlength="9" maxlength="9" required>
   </div>

   <div class="form_group">
    <label for="representante">Representante</label>
    <input type="text" class="form-control" id="representante" name="representante" required>
   </div>

   <div class="mt-3">
    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
   </div>

  </form>

 </div>
</div>
<?= $footer ?>