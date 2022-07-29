<div class="form">
  <form action="?action=store" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre del solicitante</label>
      <input type="text" name="name" required class="form-control" id="name" placeholder="Escribe tu nombre">
    </div>
    <div class="mb-3">
      <label for="topic" class="form-label">Tema de la consulta</label>
      <input type="text" name="topic" required class="form-control" placeholder="Escriba el motivo de la consulta">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descripción de la consulta</label>
      <textarea class="form-control" name="description" required rows="3" placeholder="Describe brevemente el problema que necesitas que resolvamos"></textarea>
  </form>

  <br>
  <div class="d-flex justify-content-around buttons">
    <button type="reset" class="btn btn-primary btn-reset" value="reset">Resetear</button>
    <div class="btn-home">
      <a href="?action=home"><button type="button" class="btn btn-primary btn-cancel">Cancelar</button></a>
    </div>
    <button type="submit" class="btn btn-primary btn-save">Guardar</button>
  </div>

</div>