<?= $header ?>
<div class="row">
 <div class="col-md-12">
  <h5>Registro de nuevos productos</h5>

  <form action="<?= base_url('/productos/guardar') ?>" method="post" id="form-productos" autocomplete="off">

   <div class="form_group">
    <label for="tipo">Tipo</label>
    <input type="text" class="form-control" id="tipo" name="tipo" required>
   </div>

   <div class="form_group">
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
   </div>

   <div class="form_group">
    <label for="precio">Precio</label>
    <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
   </div>

   <div class="form_group">
    <label for="stock">Stock</label>
    <input type="number" class="form-control" id="stock" name="stock" required>
   </div>

   <div class="mt-3">
    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
   </div>

  </form>

 </div>
</div>
<?= $footer ?>