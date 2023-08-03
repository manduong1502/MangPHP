<!DOCTYPE html>
<html lang="en">
<?php
$data = include '/xampp/htdocs/MảngPHP/dât.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="lg:container mx-auto h-screen ">
      
      <div class="  w-full h-auto  mb-5">
          <h1 class="td-pro flex w-full h-12 justify-center items-center text-3xl bg-red-800 text-white  rounded-xl">
              Sản Phẩm Nổi Bật
              
          </h1>
          <ul class=" flex gird  grid-cols-5 grid-row-1 gap-1 pt-1   w-full h-2/5">
              <?php foreach ($data['product'] as $product ) { ?>
                  <li class="w-1/5  h-full bg-zinc-200 rounded">
                      <img src="<?php echo $product['img'] ?>" alt="" >
                      <p class="w-full h-auto"> <?php echo $product['name']; ?></p>
                      <p class="w-full h-auto"> <?php echo $product['price']; ?></p>
                      <div class="flex w-full h-auto">
                          <?php for ($i = 0; $i < 5; $i++) { ?>
                              <i <?php echo $product['star']; ?>></i>
                          <?php } ?>
                          <p> <?php echo $product['evaluate']; ?></p>
                      </div>
                  </li>
              <?php } ?>

          </ul>
      </div>
      <div class="  w-full h-auto  mb-5">
          <h1 class="td-pro flex w-full h-12 justify-center items-center text-3xl bg-red-800 text-white  rounded-xl">
              Sản Phẩm Mới
          </h1>
          <ul class=" flex gird  grid-cols-5 grid-row-1 gap-1 pt-1   w-full h-2/5">
              <?php foreach ($data['productnew'] as $productnew ) { ?>
                  <li class="w-1/5  h-full bg-zinc-200 rounded">
                      <img src="<?php echo $productnew['img'] ?>" alt="" >
                      <p class="w-full h-auto"> <?php echo $productnew['name']; ?></p>
                      <p class="w-full h-auto"> <?php echo $productnew['price']; ?></p>
                      <div class="flex w-full h-auto">
                          <?php for ($i = 0; $i < 5; $i++) { ?>
                              <i <?php echo $productnew['star']; ?>></i>
                          <?php } ?>
                          <p> <?php echo $productnew['evaluate']; ?></p>
                      </div>
                  </li>
              <?php } ?>
          </ul>
      </div>
      <?php if (in_array("Iphone 12 ProMax", $product)){echo " tim thay";} else { echo "khong tim thay";} ?>                      
</div>
</body>
</html>