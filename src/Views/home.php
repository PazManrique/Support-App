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
    echo "<li id= '{$user->getId()}'>{$user->getName()} / {$user->getCreateDate()} / {$user->getTopic()} / {$user->getDescription()}
    <a href='?action=whatDoYouWantToDo&&id={$user->getId()}'><button type='button' class='btn btn-primary'>Ver</button></a>
    <a href='?action=delete&&id={$user->getId()}'>x</a>
    <a href='?action=edit&&id={$user->getId()}'>edit</a></li>";

} 
 
?>
<?php include("./src/Views/layouts/footer.php"); ?>

</body>
</html>














