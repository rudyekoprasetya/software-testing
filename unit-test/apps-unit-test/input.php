<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Aplikasi Sederhana Unit Test</title>
    
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Aplikasi Sederhana Unit Test</h2>
        <form action="result.php" method="POST">    
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Umur</label>
                <input type="text" class="form-control" name="umur">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender">
            </div>
             <button type="submit" class="btn btn-primary">Submit</button>
             <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>