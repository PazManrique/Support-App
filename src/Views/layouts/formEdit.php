<div class="form">
<form action="?action=store" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre del solicitante</label>
    <input type="text" name = "name" class="form-control" value="<?= $data[0]->getName()?>">
  </div>
  <div class="mb-3">
    <label for="topic" class="form-label">Tema de la consulta</label>
    <input type="text"  name ="topic" class="form-control" value="<?= $data[0]->getTopic()?>">
  </div>
  <div class="mb-3">
  <label for="description" class="form-label">Descripción de la consulta</label>
  <input class="form-control" name="description" value="<?= $data[0]->getDescription()?>">

  <br>
<div class= "d-flex justify-content-around buttons">
<div class="btn-home">
<a href="?action=whatDoYouWanttoDo"><button type="button" class="btn btn-primary ">Cancelar</button></a>
</div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  </div>

</div>