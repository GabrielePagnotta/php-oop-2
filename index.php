<?php

include_once __DIR__ ."/classes/food.php";
include_once __DIR__ ."/classes/category.php";
include_once __DIR__ ."/classes/accessories.php";
include_once __DIR__ ."/classes/toys.php";


$arraycategory=[
    "cane" => new category("<i class='fa-solid fa-dog'></i>","cane"),
    "gatto" => new category("<i class='fa-sharp fa-solid fa-cat'></i>","gatto"),
    "uccello" => new category("<i class='fa-solid fa-crow'></i>","uccello")
];

$arrayelements=[
    
    new food("https://cdn.dogsitter.it/it/images/shop/rc-dog-mini-adult-big.jpg","Royal Canin",$arraycategory["cane"],"20€","50kg","prosciutto,riso"),
    new food("https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/746_EXE_12KG_DOG-500x500.jpg","Almo Nature",$arraycategory["cane"],"20€","50kg","manzo,cereale"),
    new accessories ("https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/400/71860_pla_vogelvoliere_bellacasa_back_2.jpg","Voliera Ferplast Bella Casa",$arraycategory["uccello"],"184.99€","Legno","180x230cm"),
    new toys ("https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/800/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg","Topini di peluche",$arraycategory["gatto"],"4,99€","morbido con codina in corda","8,5 x 10cm"),
];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap header-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' 
    rel='stylesheet'integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Boolshop</title>
</head>
<body>
    <section class="container">
        <h3>Boolshop</h3>
        <h4>Inostri prodotti</h4>
        <div class="d-flex flex-wrap">
            <?php foreach ($arrayelements as $element) { ?>
                <div class="card" style="width: calc(100% / 3 - 20px);">
                <img src="<?php echo $element -> img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo "<br>" . $element -> nome ?></h5>
                  <span><?php echo $element->category->name . " " . $element->category->icon ?></span>
                  <p class="card-text"><?php echo "<strong>Peso netto:</strong> " . $element -> prezzo ?></p>

                  <?php if(get_class($element) == "food") { 
                     echo "<p>". "<strong>Peso netto:</strong> " . $element -> weight . "</p>";
                     echo "<p>". "<strong>ingredienti:</strong> " . $element -> ingredients . "</p>";

                   } else if (get_class($element) == "accessories"){
                    echo "<p>" . "<strong>Materiale:</strong> " . $element -> material . "</p>";
                    echo "<p>" . "<strong>Dimensioni:</strong> " . $element -> dimentions . "</p>";
                  }else if (get_class($element) == "toys"){
                    echo "<p>" . "<strong>caratteristiche:</strong> " . $element -> caratteristics . "</p>";
                    echo "<p>" . "<strong>dimensioni:</strong> " .$element -> dimentions . "</p>";
                  }?>
                  
                </div>
              </div>
           <?php } ?>
        </div>
    </section>
   <!--bootstrap body-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> 
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'></script>
 
   
   
   
</body>
</html>