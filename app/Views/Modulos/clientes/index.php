<?= $header ?>
<div class="row">
  <div class="col-md-12">
    <h5>Lista de Clientes</h5>

    <a href="<?= base_url('clientes/registrar') ?>" class="btn btn-sm btn-primary">Agregar</a>
    
      <table class="table mt-3">
        <thead>
          <tr>
          <th>#</th>
          <th>APELLIDOS</th>
          <th>nombres</th>
          <th>DNI</th>
          <th>Telefono</th>
          </tr>
        </thead>  
        <tbody>
          <?php foreach ($clientes as $cliente): ?>
            <tr>
              <td><?= $cliente['id'] ?></td>
              <td><?= $cliente['apellidos'] ?></td>
              <td><?= $cliente['nombres'] ?></td>
              <td><?= $cliente['dni'] ?></td>
              <td><?= $cliente['telefono'] ?></td>
              <td>
                <a href="<?= base_url('/clientes/eliminar/') ?><?= $cliente['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a>
                <a href="#" class="btn btn-sm btn-info">Editar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

  </div>
</div>
<?= $footer ?>