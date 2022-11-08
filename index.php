<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">CRUD con PHP </a>
        </div>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <?php if(isset($_SESSION['mensaje'])) {?>
                    <div class="alert alert -<?= $_SESSION['tipo_mensaje'];?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje'];?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
                    </div>
                <?php session_unset();}?>    

                <div class="card card-body">
                <form action="guardar.php" method="POST">
                <div class="mb-3">
                        <label for="iden" class="form-label"> Identificación: </label>
                        <input type="text" id="iden" name="iden" class="form-control" required>
                </div>

                <div class="mb-3">
                        <label for="nom" class="form-label"> Nombre completo: </label>
                        <input type="text" id="nom" name="nom" class="form-control" required>
                </div>

                <div class="mb-3">
                        <label for="fechaNaci" class="form-label"> Fecha Nacimiento: </label>
                        <input type="date" id="fechaNaci" name="fechaNaci" class="form-control" required>
                </div>

                <div class="mb-3">
                        <label for="papa" class="form-label"> P.A.P.A. : </label>
                        <input type="number" id="papa" name="papa" step="any" class="form-control" onchange="verificar()" required>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                </form>

        
            
        
        </div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> Identificación </th>
                    <th>Nombre</th>
                    <th>FechaNacimiento</th>
                    <th>PAPA</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM estudiante";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['FechaNacimiento']?></td>
                    <td><?php echo $row['PAPA']?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                            <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                    <i class="bi bi-trash-fill"></i>
                    </a>
                    </td>
                    </tr>    
                <?php } ?>
                </tbody>
                    </table>
        <div>

        </div>
        <script> src="verficar.js"</script>
    </div>
</body>
</html>