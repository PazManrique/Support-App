<?php $title="Inicio" ?>
<!DOCTYPE html>
<html lang="en">
<?php include("./src/Views/layouts/head.php"); ?>
<body>
<?php include("./src/Views/layouts/header.php"); ?>
<div class="btn-home">
<a href="?action=newRequestView"><button type="button" class="btn btn-primary ">Nueva Solicitud</button></a>
</div>

<img src="" alt="">

<?php
 foreach ($data as $user){
    echo "<li id= '{$user->getId()}'> Date: {$user->getCreateDate()} / Topic: {$user->getTopic()}
    <a href='?action=whatDoYouWantToDo&&id={$user->getId()}'><button type='button' class='btn btn-primary'>Ver</button></a>
    </li>";

} 
 
?>
<?php include("./src/Views/layouts/footer.php"); ?>

</body>
</html>














