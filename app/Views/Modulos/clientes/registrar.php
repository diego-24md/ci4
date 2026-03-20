<?= $header ?>
<div class="row">
 <div class="col-md-12">
  <h5>Registro de nuevos clientes</h5>

  <form action="<?= base_url('/clientes/guardar') ?>" method="post" id="form-clientes" autocomplete="off">

   <div class="form_group">
    <label for="apellidos">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
   </div>

   <div class="form_group">
    <label for="Nombres">Nombres</label>
    <input type="text" class="form-control" id="Nombres" name="nombres" required>
   </div>
  
   <div class="form_group">
    <label for="DNI">DNI</label>
    <input type="text" class="form-control" id="DNI" name="dni" minlength="8" maxlength="8" required>
   </div>

   <div class="form_group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" id="Telefono" name="telefono" minlength="9" maxlength="9" required>
   </div>

   <div class="mt-3">
    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
   </div>

  </form>

 </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const formulario = document.querySelector("#form-clientes")

        formulario.addEventListener("submit", function (event){
            event.preventDefault() //STOP

            if (confirm("¿Registramos este cliente?")){
                formulario.submit()
            }
        })

    })
</script>

<?= $footer ?>