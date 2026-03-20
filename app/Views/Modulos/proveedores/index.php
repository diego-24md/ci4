<?= $header ?>
<div class="row">
  <div class="col-md-12">
    <h5>Registro de Proveedores</h5>

    <a href="<?= base_url('proveedores/registrarProveedor') ?>" class="btn btn-sm btn-primary">Agregar</a>
    
      <table class="table mt-3">
      <thead>
        <tr>
        <th>#</th>
        <th>Razón Social</th>
        <th>Dirección</th>
        <th>RUC</th>
        <th>Telefono</th>
        <th>Representante</th>
        </tr>
      </thead>  
       <tbody>
        <?php foreach ($proveedores as $proveedor): ?>
           <tr>
             <td><?= $proveedor['id'] ?></td>
             <td><?= $proveedor['razonsocial'] ?></td>
             <td><?= $proveedor['direccion'] ?></td>
             <td><?= $proveedor['ruc'] ?></td>
             <td><?= $proveedor['telefono'] ?></td>
             <td><?= $proveedor['representante'] ?></td>
            </tr>     
            
        <?php endforeach; ?>
       </tbody>
      </table>
      
  </div>
</div>
<?= $footer ?>