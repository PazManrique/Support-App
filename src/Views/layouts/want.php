
</div>
    <div>
        <a href="?action=editionView"><button>Editar</button></a>
        <a href="?action=Home"><button type="button" class="btn btn-primary ">Volver</button></a>
        <button>Borrar</button>
    </div>
    <div>
    <?php
?>
    </div>
</div>

<div>
    <div>
        <img>
    </div>
    <div class="form">
<form action="?action=store" method="get">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre del solicitante</label>
    <input type="text" name = "name" class="form-control" id="name"  value=<?= $user[0]->getName()?>>
  </div>
  <div class="mb-3">
    <label for="topic" class="form-label">Tema de la consulta</label>
    <input type="text"  name ="topic" class="form-control">
  </div>
  <div class="mb-3">
  <label for="description" class="form-label">Descripción de la consulta</label>
  <textarea class="form-control" name="description" rows="3"></textarea>
  </form>
</div>
