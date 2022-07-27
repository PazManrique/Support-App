<div class="form">
<form action="?action=store" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre del solicitante</label>
    <input type="text" name = "name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="topic" class="form-label">Tema de la consulta</label>
    <input type="text"  name ="topic" class="form-control" >
  </div>
  <div class="mb-3">
  <label for="description" class="form-label">Descripción de la consulta</label>
  <textarea class="form-control" name="description" rows="3"></textarea>
  </form>

  <br>
<div class= "d-flex justify-content-around buttons">
<button type="reset" class="btn btn-primary" value="reset">Resetear</button>
<div class="btn-home">
<a href="?action=home"><button type="button" class="btn btn-primary ">Cancelar</button></a>
</div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  </div>

</div>


  