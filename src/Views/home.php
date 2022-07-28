<?php $title = "Inicio" ?>
<!DOCTYPE html>
<html lang="en">
<?php include("./src/Views/layouts/head.php"); ?>

<body>
    <?php include("./src/Views/layouts/header.php"); ?>
    <div class="btn-home">
        <a href="?action=newRequestView"><button type="button" class="btn btn-primary ">Nueva Solicitud</button></a>
    </div>

    
   
    

    <?php
    foreach ($data as $user) {
        echo "<li id= '{$user->getId()}'> Date: {$user->getCreateDate()} / Topic: {$user->getTopic()}
    <a href='?action=whatDoYouWantToDo&&id={$user->getId()}'><button type='button' class='btn btn-primary'>Ver</button></a>
    </li>";
    }

    ?>

    <h4>Si tu consulta es urgente por favor comunicate con Giaco Corso al email supergiaco@todo_es_sencillo.com</h4>
    <?php include("./src/Views/layouts/footer.php"); ?>

</body>

</html>