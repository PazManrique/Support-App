<?php $title = "Inicio" ?>
<!DOCTYPE html>
<html lang="en">
<?php include("./src/Views/layouts/head.php"); ?>

<body>
    <?php include("./src/Views/layouts/header.php"); ?>
    <div class="btn-home">
        <a href="?action=newRequestView"><button type="button" class="btn btn-primary btn-add">Nueva Solicitud</button></a>
    </div>

    <div class="list">
    <?php
    foreach ($data as $user) {
        echo "<div class='list-info'><span class='info' id= '{$user->getId()}'>{$user->getCreateDate()}</span><span class='info' id= '{$user->getId()}'>{$user->getTopic()}</span>
        <span class='info' id= '{$user->getId()}'><a href='?action=whatDoYouWantToDo&&id={$user->getId()}'><button type='button' class='btn btn-primary btn-see'>Ver</button></a>
    </span></div><hr>";
    }

    ?>
<<<<<<< HEAD
 
    <h4>Si tu consulta es urgente por favor comunicate con Giaco Corso al email supergiaco@todo_es_sencillo.com</h4>
    </div>
    <img src="src/assets/images/calavera-removebg-preview.png" alt="">
   
=======
    </div>

    <div class="more-info">
    <h4>Si tu consulta es urgente por favor comunicate con Giaco Corso al email supergiaco@todo_es_sencillo.com</h4>
    </div>
>>>>>>> Nerea
    <?php include("./src/Views/layouts/footer.php"); ?>

</body>

</html>