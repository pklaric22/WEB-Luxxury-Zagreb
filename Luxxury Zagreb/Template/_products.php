<?php


// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['product_submit'])){
        // call method addToCart
        $Cart->addToCart1($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<script>
    function ispis(){
        window.alert("Vaša narudžba je zaprimljena i poslana na adresu! \n Hvala Vam na povjerenju!");
    }
</script>


<!--   product  -->
<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
        ?>
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button onclick="ispis()" type="submit" class="btn btn-danger form-control">Kupi odmah!</button>
                            </div>
                            <div class="col">
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit"  disabled class="btn btn-success font-size-16 form-control">U košarici!</button>';
                                }else{
                                    echo '<button type="submit" name="product_submit" class="btn btn-warning font-size-16 form-control">Dodaj u košaricu!</button>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | Velika potražnja!</a>
                        </div>
                        <hr class="m-0">

                        <!---    product price       -->
                        <table class="my-3">

                            <tr class="font-rale font-size-14">
                                <td>Cijena:</td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Svi porezi uljučeni</small></td>
                        </table>
                        <!---    !product price       -->

                        <!--    #policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Moguća <br> Zamjena</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Besplatna <br>Dostava</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">2 Godine <br>Garancije</a>
                                </div>
                            </div>
                        </div>
                        <!--    !policy -->
                        <hr>

                        <!-- order-details -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Dostava u roku dva radna dana od datuma naručivanja</small><br>
                            <small>Trgovina: <a href="onama.php">Luxxury Zagreb </a></small><br>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Dostava na kućnu adresu!</small><br>
                        </div>
                        <!-- !order-details -->

                        <div class="row">
                            <div class="col-6">

                            </div>
                            <div class="col-6">
                            </div>
                        </div>

                        <!-- size -->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size :</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">40 mm </button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">36 mm</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">32 mm</button>
                                </div>
                            </div>
                        </div>
                        <!-- !size -->


                    </div>

                    
                </div>
            </div>
        </section>
        <!--   !product  -->
    <?php
    endif;
endforeach;
?>
