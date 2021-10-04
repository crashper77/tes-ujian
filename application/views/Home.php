<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tes Ujian Soal</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/book.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url()?>iniaset/css/styles.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" href="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Tes Ujian Soal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Signup</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-8 col-md-8 mb-30">
                    <div class="card-box pd-20 height-100-p mb-30 bg-danger">
						<div class="card text-white bg-danger my-5 py-4 text-center">
                            <div class="card-body">
                                <h3 class="text-white m-0">Soal Huruf Hilang 1</h3>
                            </div>
                        </div>
					</div>
                </div>
                <div class="col-6 col-md-4 mb-30">
					<div class="card-box pd-20 height-100-p mb-30 bg-danger">
						<div class="card text-white bg-danger my-5 py-4 text-center">
                            <div class="card-body">
                                <h3 class="text-white m-0"><i class="far fa-clock"></i> 00:00:59</h3> <!-- waktu belum ada logic -->
                            </div>
                        </div>
					</div>
				</div>
            </div>

            <div class="card text-center">
                <div class="card-header bg-danger">
                    <h4 class="text-white m-0">Soal 1</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-danger"><?= $datanya['a']." ".$datanya['b']." ".$datanya['c']." ".$datanya['d']." ".$datanya['e']?></h5>
                    <h5 class="card-title text-dark">A B C D E</h5>
                </div>
            </div>
        </div>
        <div class="container px-4 px-lg-5">
            <div class="card text-white bg-white my-5 py-4 text-center">
                <div class="card-body">
                    <h5 class="text-danger m-0"><?php 
                        if($datanya['benar']!=$datanya['a']){ echo $datanya['a']." "; }
                        if($datanya['benar']!=$datanya['b']){ echo $datanya['b']." "; }
                        if($datanya['benar']!=$datanya['c']){ echo $datanya['c']." "; }
                        if($datanya['benar']!=$datanya['d']){ echo $datanya['d']." "; }
                        if($datanya['benar']!=$datanya['e']){ echo $datanya['e']." "; }
                    ?></h5>

                    <input type="text" hidden name="benar" value="<?= $datanya['benar'];?>">
                    <div class="btn-group btn-group-toggle mt-lg-3" data-toggle="buttons">
                        <label class="btn btn-outline-dark">
                            <input type="radio" value="<?= $datanya['a']?>" name="options" id="option1" autocomplete="off"> A
                        </label>
                        <label class="btn btn-outline-dark">
                            <input type="radio" name="options" value="<?= $datanya['b']?>" id="option2" autocomplete="off"> B
                        </label>
                        <label class="btn btn-outline-dark">
                            <input type="radio" name="options" value="<?= $datanya['c']?>" id="option3" autocomplete="off"> C
                        </label>
                        <label class="btn btn-outline-dark">
                            <input type="radio" name="options" id="option3" value="<?= $datanya['d']?>" autocomplete="off"> D
                        </label>
                        <label class="btn btn-outline-dark">
                            <input type="radio" name="options" id="option3" value="<?= $datanya['e']?>" autocomplete="off"> E
                        </label>
                    </div>
                    <button class="btn btn-success" onclick="displayRadioValue()">Next</button>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="<?= base_url()?>iniaset/js/scripts.js"></script>

        <script>
            function displayRadioValue() {
            var jawaban = document.getElementsByName('options');
              
            for(i = 0; i < jawaban.length; i++) {
                if(jawaban[i].checked){
                    var answer = jawaban[i].value;
                }
            }

            var benar = "<?= $datanya['benar']?>";
            if(answer==benar){
                alert('Jawaban Benar');
                window.location.href = "<?= base_url()?>";
            } else {
                alert('Jawaban Salah');
            }
        }
        </script>
    </body>
</html>
