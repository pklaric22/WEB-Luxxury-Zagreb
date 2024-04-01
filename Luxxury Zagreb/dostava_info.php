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

<h1 style="text-align: center; padding: 25px;">INFORMACIJE O DOSTAVI! - LUXXURY ZAGREB</h1>

<p>
Božićne narudžbe <br>
Zadnji zajamčeni datumi dostave u vrijeme Božića su sljedeći:
<br>
DPD - Naručite do srijede 22. prosinca za zajamčenu dostavu do petka 24. prosinca.
<br>
Royal Mail Tracked 48 - Naručite do utorka 21. prosinca za dostavu do petka 24. prosinca.
<br>
DHL International - Narudžbe za kontinentalnu Europu, naručite do ponedjeljka, 13. prosinca. Narudžbe za ostatak svijeta, naručite do ponedjeljka 6. prosinca.
<br>
Ažuriranje o COVID-19 <br>
Trenutno šaljemo proizvode kao i obično, no možda ćete doživjeti neznatno kašnjenje u nekim rokovima isporuke zbog epidemije COVID-19 i dodatnih mjera koje zahtijevaju kuriri. Šaljemo iz Ujedinjenog Kraljevstva, tako da trenutačno može doći do dodatnih kašnjenja za međunarodne isporuke.
<br>
Ažuriranje o Brexitu<br>
Na narudžbe u Ujedinjenom Kraljevstvu to ne utječe jer se narudžbe obrađuju iz našeg sjedišta u Južnom Devonu. I dalje smo u mogućnosti osigurati dostavu sljedeći radni dan za narudžbu do 14 sati.
<br>
Za narudžbe iz zemalja članica EU ako naplatu vršite u svojoj lokalnoj valuti i na lokaciji (iz birača zemlje) tada ćete moći platiti carine i poreze u trenutku narudžbe putem našeg međunarodnog rješenja za plaćanje. Koristimo DHL Express za isporuku vaših narudžbi i nismo vidjeli kašnjenja u tome s promjenama Brexita, tako da su rokovi isporuke kako je navedeno u rasporedu ispod.
<br>
Ako koristite VPN ili drugu uslugu maskiranja IP-a za kupnju s web-mjesta u Ujedinjenom Kraljevstvu, te će narudžbe biti otkazane kako bi se osiguralo plaćanje ispravnih poreza u trenutku narudžbe.
<br>
Otpremanje<br>
Cilj nam je poslati sve narudžbe istog radnog dana za narudžbe primljene prije 14:00 GMT od ponedjeljka do petka.
<br>
Za narudžbe primljene nakon 14:00 GMT od ponedjeljka do četvrtka, narudžbe će biti poslane sljedećeg radnog dana.
<br>
Za narudžbe primljene nakon 14:00 GMT u petak ili državni praznik, narudžbe će biti poslane sljedećeg radnog dana.
<br>
Udaljene lokacije - nažalost zbog složenosti dostave u udaljena područja Ujedinjenog Kraljevstva nismo u mogućnosti osigurati dostavu sljedeći dan, ali narudžbe će obično biti kod vas u roku od 2-3 dana, ovisno o kurirskim službama.
<br>
Potičemo vas da navedete svoj broj mobitela prilikom odjave, kako biste mogli primati obavijesti od DPD-a ili Royal Mail-a i pratiti ili mijenjati svoju isporuku, vaš broj se neće koristiti ni za što drugo.
<br>
Za međunarodne isporuke
Dostavljamo globalno.
<br>
Za međunarodne isporuke koristimo DHL Express jer smatramo da oni pružaju najbolju korisničku uslugu na globalnoj razini i najbrže vrijeme isporuke.
<br>
Trošak vaše dostave ovisit će o vašoj lokaciji i onome što naručite, a izračunat će se kao dio procesa odjave. Otpremanje istog dana ovisit će o veličini vaše narudžbe i carinskim zahtjevima za vašu zemlju.
<br>
Ako je primjenjivo, možete odabrati plaćanje uvoznih carina i poreza na odlasku po zajamčenoj cijeni.
<br>
Potičemo vas da navedete svoj broj mobitela prilikom odjave kako biste mogli primati obavijesti od DHL-a i mijenjati svoju isporuku, vaš broj se neće koristiti ni za što drugo.
<br>
</p>