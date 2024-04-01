<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuXXury.com</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>
    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:black">
        <a class="navbar-brand" href="index.php" style="font-style: italic;">LuXXury Zagreb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="proizvodi.php">Proizvodi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dostava_info.php">Dostava</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="onama.php">O nama </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php">Kontakt </a>
                </li>
   
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</body>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">
<style>
p,h4 {

  margin-left: 400px;
  margin-right: 400px;
  padding: 50px;
  border: 5px solid black;

}

 </style>
<center>

<h1 style="text-align: center; padding: 25px;">BLOG - LUXXURY ZAGREB</h1>

<h4>
<img src="assets/blog/blog1.jpg" alt="BLOG 1" style="border: 5px solid black;width:600px;height:327px;">
<br>
Patek Phillipe – satovi prema kojima je Rolex igračka. (Zašto su skupi?)
<br>
<a href="https://moj-nakit.com.hr/zasto-su-patek-philippe-satovi-tako-skupi/" class="color-second text-left">Više...</a>

<br><br>
<img src="assets/blog/blog2.jpg" alt="BLOG 2" style="border: 5px solid black;width:600px;height:400px;">
<br>
Pokaži mi kakav sat nosiš i reći ću ti tko si.
<br>
<a href="https://www.muskimagazin.rs/trend/satovi/pokazi-mi-kakav-sat-nosis-i-reci-cu-ti-ko-si" class="color-second text-left">Više...</a>
<br><br>
<img src="assets/blog/blog3.jpg" alt="BLOG 3" style="border: 5px solid black;width:600px;height:327px;">
<br>
Jednostavan vodič za muške satove - kako odabrati pravi ručni sat?
<br>
<a href="https://body.ba/lifestyle/njega-njega/jednostavan-vodic-za-muske-satove-kako-odabrati-pravi-rucni-sat/8523" class="color-second text-left">Više...</a>
</h4>

</center>