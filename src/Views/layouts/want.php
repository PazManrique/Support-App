
</div>
    <div>
        <a href="?action=editionView"><button>Editar</button></a>
        <a href="?action=Home"><button type="button" class="btn btn-primary ">Volver</button></a>
        <button>Borrar</button>
    </div>
    <div>
    </div>
</div>

<div>
    <div>
        <img>
    </div>
    <div class="form">
<form action="?action=store" method="post">
  <div class="mb-3">
 <label for="name" class="form-label">Nombre del solicitante</label>
    <p class="form-control"><?= $data[0]->getName()?></p>
  </div>
  <div class="mb-3">
    <label for="topic" class="form-label">Tema de la consulta</label>
    <p class="form-control"><?= $data[0]->getTopic()?></p>
  </div>
  <div class="mb-3">
  <label for="description" class="form-label">Descripción de la consulta</label>
  <p class="form-control"><?= $data[0]->getDescription()?></p>
  </form>
</div>
