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
p {

  margin-left: 400px;
  margin-right: 400px;
  padding: 50px;
  border: 5px solid black;

}

 </style>

<h1 style="text-align: center; padding: 25px;">PROIZVODI - LUXXURY ZAGREB</h1>


<center>
<p> 
<img src="assets/products/1.png" alt="Patek Philippe" style="border: 5px solid black;width:275px;height:275px;" >
<br>
Marka: Patek Philippe <br>
Model: Twenty~4 <br>
Referentni broj sata: 7300/1450R-001 <br>
Navijac: Automatika <br>
Material kucista: Bijelo zlato <br>
Materijal narukvice: Bijelo zlato <br>
Godina proizvodnje:	2019 <br>
Stanje: Novo (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke:	S originalnom kutijom i originalnom dokumentacijom <br>

<br>
<br>
<img src="assets/products/2.png" alt="Rolex Air King" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: Rolex <br>
Model: Air King <br>
Referentni broj sata: 116900 <br>
Navijac: Automatika <br>
Material kucista: Željezo <br>
Materijal narukvice: Željezo <br>
Godina proizvodnje: 2018 <br>
Stanje: Novo (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/3.png" alt="Rolex Datejust" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: Rolex <br>
Model: Datejust 36 <br>
Referentni broj sata: 126233 <br>
Navijac: Automatika <br>
Material kucista: Zlato/Željezo <br>
Materijal narukvice: Zlato/Željezo <br> 
Godina proizvodnje: 2022 <br>
Stanje: Novo (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/4.png" alt="Rolex Explorer" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: Rolex <br>
Model: Explorer <br>
Referentni broj sata: 214270 <br>
Navijac: Automatika <br>
Material kucista: Željezo <br>
Materijal narukvice: Željezo <br>
Godina proizvodnje: 2014 <br>
Stanje: Novo (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/5.png" alt="Rolex Milgauss" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: Rolex <br>
Model: Milgauss <br>
Referentni broj sata: 116400 <br>
Kôd trgovca: 6068 <br>
Navijac: Automatika <br>
Material kucista: Željezo <br>
Materijal narukvice: Željezo <br>
Godina proizvodnje: 2008 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom, bez originalne dokumentacije <br>
<br>
<br>
<img src="assets/products/6.png" alt="Rolex Sea- Dweller" style="border: 5px solid black;width:275px;height:275px;">
<br> 
Marka: Rolex <br>
Model: Sea-Dweller Deepsea <br>
Referentni broj sata: 126600 <br>
Kôd trgovca: 45307 <br>
Navijac: Automatika <br>
Material kucista: Željezo <br>
Materijal narukvice: Željezo <br>
Godina proizvodnje: 2019 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/8.png" alt="Rolex Submariner" style="border: 5px solid black;width:275px;height:275px;">
<br> 
Marka: Rolex <br>
Model: Submariner <br>
Referentni broj sata: 16618 <br>
Navijac: Automatika <br>
Material kucista: Zlato <br>
Materijal narukvice: Zlato <br>
Godina proizvodnje: 2000 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/10.png" alt="Rolex Yacht-Master" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: Rolex <br>
Model: Yacht Master <br>
Referentni broj sata: 12415 <br>
Navijac: Automatika <br>
Material kucista: Zlato <br>
Materijal narukvice: Zlato <br>
Godina proizvodnje: 2019 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/11.png" alt="Patek Nautilus" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: Patek <br>
Model: Patek Nautilus<br>
Referentni broj sata: 12434 <br>
Navijac: Automatika <br>
Material kucista: Zlato <br>
Materijal narukvice: Zlato <br>
Godina proizvodnje: 2022 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/12.png" alt="Patek Aquanaut" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: Patek <br>
Model: Aquanaut <br>
Referentni broj sata: 12398 <br>
Navijac: Automatika <br>
Material kucista: Zlato <br>
Materijal narukvice: Zlato <br>
Godina proizvodnje: 2010 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/13.png" alt="Ap Royal Oak Tourbillion" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: AP <br>
Model: Royal Oak Tourbillion <br>
Referentni broj sata: 16209 <br>
Navijac: Automatika <br>
Material kucista: Željezo <br>
Materijal narukvice: Željezo <br>
Godina proizvodnje: 2013 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/14.png" alt="Girl in a jacket" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: AP <br>
Model: Offshore Chronograph <br>
Referentni broj sata: 134618 <br>
Navijac: Automatika <br>
Material kucista: Željezo <br>
Materijal narukvice: Koža <br>
Godina proizvodnje: 2005 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>
<img src="assets/products/15.png" alt="Girl in a jacket" style="border: 5px solid black;width:275px;height:275px;">
<br>
Marka: AP <br>
Model: Code 11.59 <br>
Referentni broj sata: 11611 <br>
Navijac: Automatika <br>
Material kucista: Zlato <br>
Materijal narukvice: Koža <br>
Godina proizvodnje: 2011 <br>
Stanje: Odlično (Tvornički novi bez tragova upotrebe) <br>
Opseg isporuke: S originalnom kutijom i originalnom dokumentacijom <br>
<br>
<br>

</p>
</center>