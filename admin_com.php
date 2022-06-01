<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computers information : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Computer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">   <!-- form for insert data -->
            <form action="admin_com_insert.php" method="post" enctype="multiplepart/form-data">
            <div class="mb-3">
                <label for="com_sn" class="col-form-label">Compuster serial-number :</label>
                <input type="text" class="form-control" name="com_sn">
            </div>
            <div class="mb-3">
                <label for="com_name" class="col-form-label">Compuster name :</label>
                <input type="text" class="form-control" name="com_name">
            </div>
            <div class="mb-3">
                <label for="com_owner" class="col-form-label">Compuster owner :</label>
                <input type="text" class="form-control" name="com_owner">
            </div>
            <div class="mb-3">
                <label for="com_status" class="col-form-label">Status :</label>
                <input type="text" class="form-control" name="com_status">
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-success">submit</button>
        </div>
            </form>
        </div>
        
        </div>
    </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                    <h1> Computer information </h1>
            </div>
            <div class="col-md-6  d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UserModal">Insert computer </button>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>