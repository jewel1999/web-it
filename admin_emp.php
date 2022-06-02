<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee information : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


    <!-- -------------------------- table section-------------------------- -->

    
    <div class="container mt-3">
    <div class="md-4  d-flex ">
                <a href="admin.php" type="button" class="btn btn-dark" > back</a >
            </div>
            <br>
        <div class="row">
            <div class="col-md-6">
                    <h1> Employee information </h1>
            </div>
            <div class="col-md-6  d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UserModal">Insert computer </button>
            </div>

        </div>
        <hr>
        <br>
        <?php if(isset($_SESSION['success'])) { ?>   <?php ?>
                <div class="alert alert-success" role="alert">  
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']); ?>
                </div>
            <?php } ?>

            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">  
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']); ?>
                    </div>
                <?php } ?>


    <!--  --------------User data---------------------- -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">employee-name</th>
            <th scope="col">nickname</th>
            <th scope="col">floor</th>
            <th scope="col">extn</th>
            <th scope="col">user-mail</th>
            <th scope="col">action</th>
         
            </tr>
        </thead>
        </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>