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
p,h6 {

  margin-left: 400px;
  margin-right: 400px;
  padding: 50px;
  border: 5px solid black;

}

 </style>

<h1 style="text-align: center; padding: 25px;">KONTAKT - LUXXURY ZAGREB</h1>

<h6>
Korisnička podrška: <br>

E-mail: luxxuryzagreb@gmail.com <br>
Korisnička infolinija: +385 1 3535 991 <br>
Adresa Tvrtke: Zagrebačka cesta 102, Zagreb, 10360 <br> 
<br><br><br>
Sjedište tvrtke: <br>
LUXXURY ZAGREB <br>

Zagrebačka cesta 102 <br>

10360, Sesvete <br>

Hrvatska <br>
</h6>
<script>
    function ispisi(){
        window.alert("Vaša poruka je uspješno poslana. Odgovor šaljemo u najkraćem mogućem roku. \nHvala Vam na ukazanom povjerenju.");
    }
</script>

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

button[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">Ime</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Vaše ime..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Prezime</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Vaše prezime..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">E-mail</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Vaš e-mail..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Poruka</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Napišite svoju poruku.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  </form>
  <button type="submit" onclick="ispisi()" >Pošalji!</button>
</div>
<br><br><br><br><br><br><br>









