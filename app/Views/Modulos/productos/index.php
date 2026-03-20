<?= $header ?>
<div class="row">
  <div class="col-md-12">
    <h5>Registro de Productos</h5>

    <a href="<?= base_url('productos/registrarProducto') ?>" class="btn btn-sm btn-primary">Agregar</a>
    
      <table class="table mt-3">
        <thead>
          <tr>
          <th>#</th>
          <th>tipo</th>
          <th>descripcion</th>
          <th>precio</th>
          <th>stock</th>
          </tr>
        </thead>  
        <tbody>
          <?php foreach ($productos as $producto): ?>
            <tr>
              <td><?= $producto['id'] ?></td>
              <td><?= $producto['tipo'] ?></td>
              <td><?= $producto['descripcion'] ?></td>
              <td><?= $producto['precio'] ?></td>
              <td><?= $producto['stock'] ?></td>
              <td>
                <a href="<?= base_url('/productos/eliminar/') ?><?= $producto['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a>
                <a href="#" class="btn btn-sm btn-info">Editar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

  </div>
</div>
<?= $footer ?>