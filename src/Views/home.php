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


<?php include("./src/Views/layouts/footer.php"); ?>


<?php var_dump($data);
 foreach ($data as $user){
    echo "<li>{$user->getName()} / {$user->getCreateDate()} / {$user->getCreateQueryTopic()}</li>";

} 
 
?>

</body>
</html>














