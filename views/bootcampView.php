<?php require('templates\header.php');?>
    <h1 class="text-center">Welcome to kodigo app</h1>
    <h2 class="text-center">All bootcamps</h2>

    <div class="container">
        <div class="row">
            <?php foreach ($bootcamps as $bootcamp):?>
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://diarioelsalvador.com/wp-content/uploads/2022/05/software-2020_01_27_221018@2x.jpg" class="card-img-top" alt="JS logo">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $bootcamp['title']; ?></h5>
                        <p class="card-text"><?php echo $bootcamp['description']; ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
<?php require('templates\footer.php');?>