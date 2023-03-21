<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>


<!-- 
<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>delicious pizza</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/home-img-1.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>chezzy hamburger</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/home-img-2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>rosted chicken</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/home-img-3.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section> -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="foto-tampilan/cupcakes-removebg-preview.png" alt="">
      </div>

      <div class="content">
         <h3>Welcome To KueKoe Bakery</h3>
         <p>KueKoe Bakery adalah toko kue yang mengutamakan cita rasa yang dapat membuat anda kecanduan.Selain itu, cara pembuatan yang masih tradisional dengan menggunakan tangan atau handmade, semakin memberi nilai jual yang unik dan otentik pada produk kami.</p>
         <a href="menu.php" class="btn">Order Menu</a>
      </div>

   </div>

</section>

    <!-- awal speciality   -->

    <section class="speciality" id="speciality">
    <h1 class="title">Our speciality</h1>

      <div class="box-container">
        <div class="box">
          <img class="image" src="gambarkuebasah/sarang semut.jpg" alt="" />
          <div class="content">
            <img src="images/s-5.png" alt="" />
            <h3>Kue Sarang Semut</h3>
            <p>Kue sarang semut memilik rasa yang manis, berpadu dengan tekstur yang lembut dan empuk. Cocok untuk dijadikan santapan menemani minum kopi, teh, atau pengganjal perut.</p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="gambarkuebasah/zebra.webp" alt="" />
          <div class="content">
            <img src="images/s-5.png" alt="" />
            <h3>Kue Zebra</h3>
            <p> Kue zebra merupakan salah satu kue basah yang mempunyai cita rasa yang manis dan lembut. Selain mempunyai cita rasa yang manis, kue zebra juga memiliki tekstur yang lembut. </p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="gambarkuebasah/putu ayu.jpg" alt="" />
          <div class="content">
            <img src="images/s-5.png" alt="" />
            <h3>Kue Putu Ayu</h3>
            <p>Kue putu ini memiliki rasa yang sangat enak dan lembut Ketika disantap. Kue putu ayupun memiliki aroma yang sangat harum, karena terdapat campuran daun pandan dan kelapa parut di dalamnya.</p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="gambarkuekering/nastar.jpg" alt="" />
          <div class="content">
            <img src="images/s-5.png" alt="" />
            <h3>Kue Nastar</h3>
            <p> Kue nastar memiliki tekstur yang gurih serta renyah yang dapat dinikmati dengan segelas kopi, susu atau teh.</p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="gambarkuekering/choco chips.png" alt="" />
          <div class="content">
            <img src="images/s-5.png" alt="" />
            <h3>Kue Choco Chips</h3>
            <p>Choco chips memiliki tekstur yang gurih serta renyah yang dapat dinikmati dengan segelas kopi, susu atau teh.</p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="gambarkuekering/putri salju.jpg" alt="" />
          <div class="content">
            <img src="images/s-5.png" alt="" />
            <h3>Kue Putri Salju</h3>
            <p> Kue putri salju ini memiliki tekstur yang renyah dan juga garing serta kue ini  juga dapat dinikmati dengan segelas kopi, susu atau teh.</p>
            
          </div>
        </div>
      </div>
    </section>

    <!-- akhir speciality  -->

     <!-- awal popular  -->

     <section class="popular" id="popular">
     <h1 class="title">Most Popular Cake</h1>

      <div class="box-container">
        <div class="box">
          <span class="price"> Rp 50.000 ( 40 pcs )</span>
          <img src="gambarkuebasah/putu ayu.jpg" alt="" />
          <h3>Kue Putu Ayu</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="menu.php" class="btn">order now</a>
        </div>
        <div class="box">
          <span class="price"> Rp 50.000 ( 40 pcs ) </span>
          <img src="gambarkuebasah/bendera.JPG" alt="" />
          <h3>Kue Bendera</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="menu.php" class="btn">order now</a>
        </div>
        <div class="box">
          <span class="price"> Rp 50.000 ( 40 pcs ) </span>
          <img src="gambarkuebasah/dadar gulung.jpg" alt="" />
          <h3>Kue Dadar Gulung </h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <a href="menu.php" class="btn">order now</a>
        </div>
       
    </section>

    <!-- akhir popular  -->

    
<section class="steps">

<h1 class="title">simple steps</h1>

<div class="box-container">

   <div class="box">
      <img src="images/step-1.png" alt="">
      <h3>Choose Order</h3>
      <p>PILIH KUE KESUKAAN KAMU.</p>
   </div>

   <div class="box">
      <img src="images/step-2.png" alt="">
      <h3>Fast Delivery</h3>
      <p>PENGANTARAN SECARA CEPAT BY MAS FACHRY.</p>
   </div>

   <div class="box">
      <img src="images/step-3.png" alt="">
      <h3>Enjoy Food</h3>
      <p>DAN TERAKHIR, NIKMATILAH KUE ANDA.</p>
   </div>

</div>

</section>

 <!-- awal gallery -->

 <section class="gallery" id="gallery">
    <h1 class="title">Cake Gallery</h1>
      <div class="box-container">
        <div class="box">
          <img src="gambarkuebasah/sarang semut.jpg" alt=""/>
          <div class="content">
            <h3>Kue Sarang Semut</h3>
            <p>Kue sarang semut memilik rasa yang manis, berpadu dengan tekstur yang lembut dan empuk.</p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
        <div class="box">
          <img src="gambarkuebasah/zebra.webp" alt="" />
          <div class="content">
            <h3>Kue Zebra</h3>
            <p>Kue ini merupakan salah satu kue basah yang mempunyai cita rasa yang manis dan lembut.</p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
        <div class="box">
          <img src="gambarkuebasah/putu ayu.jpg" alt="" />
          <div class="content">
            <h3>Kue Putu Ayu</h3>
            <p>Kue ini memiliki rasa yang sangat enak dan lembut Ketika disantap. </p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
        <div class="box">
          <img src="gambarkuebasah/sakura.jpg" alt="" />
          <div class="content">
            <h3>Kue Sakura</h3>
            <p>Kue Sakura atau Bolu Sakura adalah salah satu bolu kukus yang terbuat dari gula karamel, rasanya legit dan gurih.</p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
        <div class="box">
          <img src="gambarkuebasah/bendera.JPG" alt="" />
          <div class="content">
            <h3>Kue Bendera</h3>
            <p>Kue ini memiliki rasa yang manis serta teksturnya kenyal dan lembut yang akan membuat anda ketagihan.</p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
        <div class="box">
          <img src="gambarkuebasah/roti bakar isi coklat.jpg" alt="" />
          <div class="content">
            <h3>Roti Bakar Manis Isi Cokelat</h3>
            <p>Tekstur rotinya diijamin renyah, bebas pengawet, serta terjaga kualitasnya.</p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
        <div class="box">
          <img src="gambarkuekering/nastar.jpg" alt="" />
          <div class="content">
            <h3>Kue Nastar</h3>
            <p>Kue nastar memiliki tekstur yang gurih serta renyah yang dapat dinikmati dengan segelas kopi, susu atau teh.</p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
        <div class="box">
          <img src="gambarkuekering/choco chips.png" alt="" />
          <div class="content">
            <h3>Kue Choco Chips</h3>
            <p>Choco chips memiliki tekstur yang gurih serta renyah yang dapat dinikmati dengan segelas kopi, susu atau teh.</p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
        <div class="box">
          <img src="gambarkuekering/putri salju.jpg" alt="" />
          <div class="content">
            <h3>Kue Putri Salju</h3>
            <p>Kue ini memiliki tekstur yang renyah dan juga garing yang membuat anda ketagihan.</p>
            <a href="menu.php" class="btn">order now</a>
          </div>
        </div>
      </div>
    </section>

<section class="category">

   <h1 class="title">Cake Category</h1>

   <div class="box-container">

      <a href="category.php?category=kue kering" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>KUE KERING</h3>
      </a>

      <a href="category.php?category=kue basah" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>KUE BASAH</h3>
      </a>
<!-- 
      <a href="category.php?category=drinks" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>drinks</h3>
      </a>

      <a href="category.php?category=desserts" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>desserts</h3>
      </a> -->

   </div>

</section>







<section class="products">

   <h1 class="title">latest dishes</h1>

   <div class="box-container">

      <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
            <div class="price"><span>Rp.</span><?= $fetch_products['price']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
         </div>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">no products added yet!</p>';
         }
      ?>

   </div>

   <div class="more-btn">
      <a href="menu.php" class="btn">Order Menu</a>
   </div>

</section>



<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="foto-review/WhatsApp Image 2022-11-28 at 11.19.21 (1).jpeg" alt="">
            <p>Kue yang saya makan tadi rasanya gurih, asin dan manisnya pas sehingga membuat saya kecanduan seperti senyumnya.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Ricky Manafe</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="foto-review/WhatsApp Image 2022-11-28 at 11.19.21.jpeg" alt="">
            <p>Kuenya enak, manis ( kek dia punya senyum), rasanya pas sekali  (tapi pas dekat saðŸ«‚), murah, dan tidak mengecewakan (hanya dia yang mengecewakanðŸ¥²) 
            #Kueenakdanmurah, jangan lupa beli lagi e.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Ila Motu</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="foto-review/WhatsApp Image 2022-11-28 at 11.22.51.jpeg" alt="">
            <p>Kuenya enak manis seperti saya dan rasanya gurih ðŸ˜‡
            warna hijaunya membuat mata saya tidak bisa berpaling serta 
            harganya terjangkau bagi kami kaum-kaum miskin.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Tasya Bhia</h3>
         </div>

        
      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>



















<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- <script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script> -->

</body>
</html>


<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>