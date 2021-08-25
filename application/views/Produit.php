<div id="main_slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <h1 class="fashion_taital">Divers </h1>
                <div class="fashion_section_2">
                    <div class="row">
                        <?php for ($i=0; $i <count($Produit1); $i++) { ?>
                        <div class="col-lg-4 col-sm-4">
                            <div class="box_main">
                                <h4 class="shirt_text"><?php echo $Produit1[$i]['designation'];?></h4>
                                <p class="price_text">Prix <span style="color: #262626;"><?php echo $Produit1[$i]['prixUnitaire'];?></span></p>
                                <div class="tshirt_img"><img src="../../assets/images/<?php echo $Produit1[$i]['image'];?>"></div>
                                <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Acheter</a></div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
<div class="fashion_section">
<div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Boissons</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                            <?php for ($i=0; $i <count($Produit2); $i++) { ?>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text"><?php echo $Produit2[$i]['designation'];?></h4>
                                        <p class="price_text">Prix <span style="color: #262626;"><?php echo $Produit2[$i]['prixUnitaire'];?></span></p>
                                        <div class="electronic_img"><img src="../../assets/images/<?php echo $Produit2[$i]['image'];?>"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Acheter</a></div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
</div>
<div class="jewellery_section">
        <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Légumes</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                            <?php for ($i=0; $i <count($Produit3); $i++) { ?>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text"><?php echo $Produit3[$i]['designation'];?></h4>
                                        <p class="price_text">Prix <span style="color: #262626;"><?php echo $Produit3[$i]['prixUnitaire'];?></span></p>
                                        <div class="jewellery_img"><img src="../../assets/images/<?php echo $Produit3[$i]['image'];?>"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Acheter</a></div>
                                        </div>
                                    </div>
                                </div>
                                <?php}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
            <div class="loader_main">
                <div class="loader"></div>
            </div>
        </div>