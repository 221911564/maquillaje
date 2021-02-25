<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">Logo de la empresa</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Carrito(0)</a>
            </li>
        </ul>
       </div>
   </nav>
   <br/>   
   <br/>
   <div class="container">
   <br> 
   <div class="alert alert-success">
          Pantalla de mensaje...
          <a href="#" class="badge badge-success">Ver carrito</a>
     </div>
     <div class="row">
     <?php
        $sentencia=$pdo->prepare("SELECT * FROM `productos`");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos);
    ?>
    ?php foreach($listaProductos as $producto){ ?>
        <div class="col-3">
          <div class="card">
            <img 
        title="<?php echo $producto['Nombre'];?>"
        alt="<?php echo $producto['Nombre'];?>"
        class="card-img-top" 
        src="<?php echo $producto['Imagen'];?>"
        data.toggle="popover"
        data-content="<?php echo $producto['Descripcion'];?>"


              >
              <div class="card-body">
               <span><?php echo $producto['Nombre'];?></span>
               <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
               <p class="card-text">Descripción</p>

               <form action="" method="post">

               <input type="text" name="id" id="id" value="<?php echo $producto['ID'];?>">
               <input type="text" name="nombre" id="nombre" value="<?php echo $producto['Nombre'];?>>
               <input type="text" name="precio" id="precio" value="<?php echo $producto['Precio'];?>>
               <input type="text" name="cantidad" id="cantidad" value="<?php echo 1;?>>
                

               <button class="btn btn-primary" 
                name="btnAccion" 
                value="Agregar" 
                type="submit"
                >
                Agregar al carrito 
                </button>
               
               </form>

               </div>
                </div>
</div>


</div>
<script>

$(function () {
    $('[data-toggle="popover"]').popover()
});

</script>


</body>
</html>