</div>
<div>
  <?php
  foreach ($data as $user) {
  }
  ?>
  <div class="d-flex justify-content-around buttons">
  <a href='?action=editionView&&id=<?= $user->getId() ?>'><button class="btn btn-primary btn-edit">Editar</button></a>
  <a href="?action=Home"><button type="button" class="btn btn-primary btn-back">Volver</button></a>
  <a href='?action=delete&&id=<?= $user->getId() ?>'><button class="btn btn-primary btn-cancel" type="button">Borrar</button></a>
</div>
</div>
<div>
</div>
</div>

<div>
  <div>
    <img>
  </div>
  <div class="form">
    <form class="form-read" action="?action=store" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">De:</label><span class="form-control form-want"><?= $data[0]->getName() ?></span>
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Realizada el:</label><span class="form-control form-want"><?= $data[0]->getCreateDate() ?></span>
      </div>
      <div class="mb-3">
        <label for="topic" class="form-label">Tema:</label><span class="form-control form-want"><?= $data[0]->getTopic() ?></span>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Consulta:</label><span class="form-control form-want"><?= $data[0]->getDescription() ?></span>
    </form>
  </div>