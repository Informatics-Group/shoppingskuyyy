<!-- start landing page -->
<div class="p-4" style="background-color: rgb(43, 32, 36);">
  <!-- background color -->
  <div class="row justify-content-center">
    <!-- carousel slide -->
    <div class="col-sm-8 d-inline-block p-0" style="width: 55%;">
      <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT; ?>/img/shoe.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong>
                <h1 class="font-weight-bold">Sneakers</h1>
              </strong>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quidem officia, voluptate eos aliquid
                esse, molestias iste non, nisi deleniti voluptatem commodi incidunt corporis impedit?</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT; ?>/img/game.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong>
                <h1 class="font-weight-bold">Gaming Gear</h1>
              </strong>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eligendi, eius vel aliquam corrupti
                laudantium, culpa quasi iusto maiores praesentium eos delectus at. Totam, doloremque.</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT; ?>/img/shirt.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong>
                <h1 class="font-weight-bold">Shirt</h1>
              </strong>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eaque tempora dolor! Voluptas unde
                itaque soluta in corrupti. Perspiciatis eum fugiat alias officiis nemo ad!</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT; ?>/img/electronic.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong>
                <h1 class="font-weight-bold">Electronic</h1>
              </strong>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate commodi eligendi voluptatem?
                Voluptates expedita porro fugiat ex amet! Laboriosam nobis ex accusantium eos voluptas iste.</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT; ?>/img/beauty.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong>
                <h1 class="font-weight-bold">Beauty</h1>
              </strong>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit suscipit quidem itaque quasi sequi
                alias est, debitis, accusantium molestiae perspiciatis consequuntur assumenda sunt.</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- sidebar -->
    <div class="col-sm-4 d-inline-block" style="width:11%;">
      <div class="row">
        <a type="button" class="p-0 text-decoration-none text-dark" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
          <div class="d-inline">
            <img src="<?= URLROOT; ?>/img/shoe.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem">
            <div class="carousel-caption d-none d-block">
              <h6>Shoes</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="row">
        <a class="px-0 text-decoration-none text-dark" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"><img src="<?= URLROOT; ?>/img/game.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem"></button></a>
      </div>
      <div class="row">
        <a class="px-0 text-decoration-none text-dark" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"><img src="<?= URLROOT; ?>/img/shirt.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem"></button></a>
      </div>
      <div class="row">
        <a class="px-0 text-decoration-none text-dark" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"><img src="<?= URLROOT; ?>/img/electronic.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem"></button></a>
      </div>
      <div class="row">
        <a class="px-0 text-decoration-none text-dark" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 4"><img src="<?= URLROOT; ?>/img/beauty.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem"></button></a>
      </div>
    </div>
  </div>
</div>
<!-- end of landing page> -->

<!-- start news and trending -->
<h3 class="fw-bold px-0 text-center my-3">Baru dan Trending!</h3>
<div class="row align-items-start mx-lg-5">
  <!-- produk terbaru -->
  <div class="col px-0" style="background-color: rgb(239, 240, 255);">
    <div class="list-group">
      <label class="text-start my-2 ms-0">Produk Terbaru</label>
      <?php
      //Columns must be a factor of 12 (1,2,3,4,6,12)
      $numOfCols = 4;
      $rowCount = 0;
      $bootstrapColWidth = 12 / $numOfCols;
      $no = 1;
      ?>
      <?php foreach ($data['getProductByLatestUpload'] as $product) : ?>
        <div class="card pe-2" style="padding: 0 0 0 0.8rem;">
          <div class="row no-gutters">
            <div class="col-sm-5 p-0">
              <img class="card-img" src="<?= URLROOT; ?>/img/banner.jpg" style="object-fit: cover;" height="145rem">
            </div>
            <div class="col-sm-7 p-0">
              <div class="card-body">
                <h5 class="card-title m-0" style="font-size:1rem;font-weight:bold;inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 20ch;"><?= $product['product_name']; ?></h5>
                <p class="card-text mx-0 mt-0 mb-1">Rp. <?= $product['prd_prc']; ?></p>
                <p class="m-0"><small class="text-muted"><?= $product['prd_date']; ?></small></p>
                <button class="button-secondary w-100">Cek Detail</button>
              </div>
            </div>
          </div>
        </div>
      <?php
        $rowCount++;
        if ($rowCount % $numOfCols == 0);
        if (++$no == 5) break;
      endforeach;
      ?>
    </div>
  </div>
  <!-- produk top seller -->
  <div class="col mx-5 px-0" style="background-color: rgb(239, 240, 255);">
    <div class="list-group">
      <p class="text-start my-2 ms-0">Produk Populer</p>
      <?php
      //Columns must be a factor of 12 (1,2,3,4,6,12)
      $numOfCols = 4;
      $rowCount = 0;
      $bootstrapColWidth = 12 / $numOfCols;
      $no = 1;
      ?>
      <?php foreach ($data['getProductByHighestView'] as $product) : ?>
        <div class="card pe-2" style="padding: 0 0 0 0.8rem;">
          <div class="row no-gutters">
            <div class="col-sm-5 p-0">
              <img class="card-img" src="<?= URLROOT; ?>/img/banner.jpg" style="object-fit: cover;" height="145rem">
            </div>
            <div class="col-sm-7 p-0">
              <div class="card-body">
                <h5 class="card-title m-0" style="font-size:1rem;font-weight:bold;inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 20ch;"><?= $product['product_name']; ?></h5>
                <p class="card-text mx-0 mt-0 mb-1">Rp. <?= $product['prd_prc']; ?></p>
                <p class="m-0"><small class="text-muted">Dilihat <?= $product['prd_open_count']; ?> kali</small></p>
                <button class="button-secondary w-100">Cek Detail</button>
              </div>
            </div>
          </div>
        </div>
      <?php
        $rowCount++;
        if ($rowCount % $numOfCols == 0);
        if (++$no == 5) break;
      endforeach;
      ?>
    </div>
  </div>
  <!-- produk terlaris -->
  <div class="col px-0" style="background-color: rgb(239, 240, 255);">
    <div class="list-group">
      <p class="text-start my-2 ms-0">Produk Terlaris</p>
      <?php
      //Columns must be a factor of 12 (1,2,3,4,6,12)
      $numOfCols = 4;
      $rowCount = 0;
      $bootstrapColWidth = 12 / $numOfCols;
      $no = 1;
      ?>
      <?php foreach ($data['getProductByHighestBuy'] as $product) : ?>
        <div class="card pe-2" style="padding: 0 0 0 0.8rem;">
          <div class="row no-gutters">
            <div class="col-sm-5 p-0">
              <img class="card-img" src="<?= URLROOT; ?>/img/banner.jpg" style="object-fit: cover;" height="145rem">
            </div>
            <div class="col-sm-7 p-0">
              <div class="card-body">
                <h5 class="card-title m-0" style="font-size:1rem;font-weight:bold;inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 20ch;"><?= $product['product_name']; ?></h5>
                <p class="card-text mx-0 mt-0 mb-1">Rp. <?= $product['prd_prc']; ?></p>
                <p class="m-0"><small class="text-muted"><?= $product['prd_buy_count']; ?> terjual</small></p>
                <button class="button-secondary w-100">Cek Detail</button>
              </div>
            </div>
          </div>
        </div>
      <?php
        $rowCount++;
        if ($rowCount % $numOfCols == 0);
        if (++$no == 5) break;
      endforeach;
      ?>
    </div>
  </div>
</div>
<!-- end of News and trending> -->

<!-- start feed toko <story ig> -->
<div style="background-color: rgb(239, 240, 255);">
  <h3 class="fw-bold px-0 pt-3 mx-lg-5 mb-3 mt-5">Feed Toko</h3>
  <section style="background-color:white;">
    <div class="story-container">
      <ul>
        <li class="has-story">
          <div class="story">
            <img style="object-fit: cover;" src="<?= URLROOT; ?>/img/banner.jpg">
          </div>
          <span style="color:black;font-weight:normal;text-align: center;">Toko</span>
        </li>
      </ul>
    </div>
  </section>
</div>
<!-- end of feed toko <story ig> -->

<!-- start Last seen -->
<a href="" class="text-decoration-none text-dark">
  <h3 class="fw-bold px-0 ms-5 me-3 mb-3 mt-5 d-inline">Terakhir dilihat</h3>
</a>

<div class="row gx-lg-5 align-items-start mx-lg-5 mt-3">
  <div class="col-3 ps-0">
    <!--product 1-->
    <div class="card">
      <a class="text-center" href=""><img class="card-img-center pb-3" style="width:100%;height:13rem;object-fit:cover;" src="<?= URLROOT; ?>/img/banner.jpg"></a>
      <div class="card-body pt-0">
        <div class="row">
          <span class="">Space for product name belong here</span>
        </div>
        <div class="row">
          <span class=" text-primary fw-bold" style="font-size: 1.2rem;">Rp.20.000</span>
        </div>
        <div class="row mt-3">
          <div class="col">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="pe-1">
                <g id="Group_503" data-name="Group 503" transform="translate(-413)">
                  <g id="Icons_Actions_ic-actions-star-5" data-name="Icons / Actions / ic-actions-star" transform="translate(413)">
                    <rect id="Rectangle_160-5" data-name="Rectangle 160" width="24" height="24" fill="none" />
                    <g id="ic-actions-star-5" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                      <path id="Path_38-5" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                    </g>
                  </g>
                </g>
              </svg>4.6
            </span>
          </div>
          <div class="col text-end">
            <span style="font-size: 0.85rem;"><a href="" class=" text-muted">100 reviews</a></span>
          </div>
        </div>
        <div class="row px-2 mt-3">
          <a href="" class="button-secondary m-1 form-control">Detail</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end ofLast seen -->