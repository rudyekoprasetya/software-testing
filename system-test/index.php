<?php
//load config.php
include("config/config.php");
 
//untuk api_key newsapi.org
$api_key="INVALID_KEY";
 
//url api untuk ambil berita headline di Indonesia
$url="https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=".$api_key;
 
//menyimpan hasil dalam variabel
$data=http_request_get($url);
 
//konversi data json ke array
$hasil=json_decode($data,true);

// var_dump($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Rest Client dengan PHP</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar bg-danger navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NewsAPI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Technology</a>
                    <a class="nav-link" href="#">About</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar  -->
    <div class="container mt-4">
        <h1>Rest API dengan PHP</h1>

        <div class="row">
            <!-- looping hasil data di array article -->
            <?php foreach ($hasil['articles'] as $row) { ?>
            
            <div class="col mt-4">
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $row['urlToImage']; ?>" class="card-img-top" height="180px">
                <div class="card-body">
                    <p class="card-text"><i>Oleh <?php echo $row['author']; ?></i> ~ <?php echo $row['title']; ?></p>
                    <p class="text-right"><a href="<?php echo $row['urlToImage']; ?>" target="_blank" class="btn btn-primary">Selengkapnya..</a></p>
                </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
    
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>