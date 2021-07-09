<div class="p-4" style="background-color: rgb(43, 32, 36);"> <!-- background color -->
  <div class="row justify-content-center">
    <div class="col-sm-8 d-inline-block p-0" style="width: 55%;"> <!-- carousel slide -->
      <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT;?>/img/shoe.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong><h1 class="font-weight-bold">Sneakers</h1></strong>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quidem officia, voluptate eos aliquid esse, molestias iste non, nisi deleniti voluptatem commodi incidunt corporis impedit?</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT;?>/img/game.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong><h1 class="font-weight-bold">Gaming Gear</h1></strong>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eligendi, eius vel aliquam corrupti laudantium, culpa quasi iusto maiores praesentium eos delectus at. Totam, doloremque.</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT;?>/img/shirt.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong><h1 class="font-weight-bold">Shirt</h1></strong>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eaque tempora dolor! Voluptas unde itaque soluta in corrupti. Perspiciatis eum fugiat alias officiis nemo ad!</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT;?>/img/electronic.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem">
            </div>
            <div class="carousel-caption text-start">
              <strong><h1 class="font-weight-bold">Electronic</h1></strong>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate commodi eligendi voluptatem? Voluptates expedita porro fugiat ex amet! Laboriosam nobis ex accusantium eos voluptas iste.</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="dark-overlay">
              <img src="<?= URLROOT;?>/img/beauty.jpg" class="d-block" style="object-fit: cover;" width="700rem" height="460rem"></div>
            <div class="carousel-caption text-start">
              <strong><h1 class="font-weight-bold">Beauty</h1></strong>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit suscipit quidem itaque quasi sequi alias est, debitis, accusantium molestiae perspiciatis consequuntur assumenda sunt.</p>
              <button class="button-secondary">Jelajahi Sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 d-inline-block" style="width:11%;"> <!-- sidebar -->
      <div class="row">
          <a type="button" class="p-0 text-decoration-none text-dark" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
            <div class="d-inline">
              <img src="<?= URLROOT;?>/img/shoe.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem">
              <div class="carousel-caption d-none d-block">
                <h6>Shoes</h6>
              </div>
            </div>
          </a>
      </div>
      <div class="row">
        <a class="px-0 text-decoration-none text-dark" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"><img src="<?= URLROOT;?>/img/game.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem"></button></a>
      </div>
      <div class="row">
        <a class="px-0 text-decoration-none text-dark" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"><img src="<?= URLROOT;?>/img/shirt.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem"></button></a>
      </div>
      <div class="row">
        <a class="px-0 text-decoration-none text-dark" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"><img src="<?= URLROOT;?>/img/electronic.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem"></button></a>
      </div>
      <div class="row">
        <a class="px-0 text-decoration-none text-dark" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 4"><img src="<?= URLROOT;?>/img/beauty.jpg" style="object-fit: cover;" class="d-block" width="139rem" height="92rem"></button></a>
      </div>
    </div>
  </div>
</div>

  <h3 class="fw-bold px-0 text-center my-3">Baru dan Trending!</h3>
  <div class="row align-items-start mx-lg-5">
    <div class="col px-0" style="background-color: rgb(239, 240, 255);"> <!-- produk terbaru -->
      <div class="list-group">
        <p class="text-start m-2">Produk Terbaru</p>
        <div class="card">
          <div class="row g-0">
            <div class="col-sm-4">
              <img src="<?= URLROOT;?>/img/banner.jpg" style="object-fit: cover;" width="118rem" height="152rem">
            </div>
            <div class="col-sm-8">
              <div class="card-body px-3 pt-3 pb-1">
                <h5 class="card-title m-0 p-0">Nama Produk</h5>
                <p class="m-0">Harga</p>
                <p class="m-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                <button class="button-secondary w-100 mt-2 m-0">Cek Detail</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col mx-5 px-0" style="background-color: rgb(239, 240, 255);"> <!-- produk top seller -->
      <div class="list-group">
        <p class="text-start m-2">Top Seller</p>
        <div class="card">
          <div class="row g-0">
            <div class="col-sm-4">
              <img src="<?= URLROOT;?>/img/banner.jpg" style="object-fit: cover;" width="118rem" height="152rem">
            </div>
            <div class="col-sm-8">
              <div class="card-body px-3 pt-3 pb-1">
                <h5 class="card-title m-0 p-0">Nama Produk</h5>
                <p class="m-0">Harga</p>
                <p class="m-0"><small class="text-muted">Dilihat x pengguna</small></p>
                <button class="button-secondary btn-sm w-100 mt-2">Cek Detail</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col px-0" style="background-color: rgb(239, 240, 255);"> <!-- produk terlaris -->
      <div class="list-group">
        <p class="text-start m-2">Produk Terlaris</p>
        <div class="card">
          <div class="row g-0">
            <div class="col-sm-4">
              <img src="<?= URLROOT;?>/img/banner.jpg" style="object-fit: cover;" width="118rem" height="152rem">
            </div>
            <div class="col-sm-8">
              <div class="card-body px-3 pt-3 pb-1">
                <h5 class="card-title m-0 p-0">Nama Produk</h5>
                <p class="m-0">Harga</p>
                <p class="m-0"><small class="text-muted">2900 produk terjual</small></p>
                <button class="button-secondary btn-sm w-100 mt-2">Cek Detail</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="background-color: rgb(239, 240, 255);"> <!-- feed toko <story ig> -->
    <h3 class="fw-bold px-0 pt-3 mx-lg-5 mb-3 mt-5">Feed Toko</h3>
    <section style="background-color:white;">
      <div class="story-container">
        <ul>
          <li class="has-story">
            <div class="story">
              <img style="object-fit: cover;" src="<?= URLROOT;?>/img/banner.jpg">
            </div>
            <span style="color:black;font-weight:normal;text-align: center;">Toko</span>
          </li>
        </ul>
      </div>
    </section>
  </div>

  <a href="" class="text-decoration-none text-dark"><h3 class="fw-bold px-0 ms-5 me-3 mb-3 mt-5 d-inline">Terakhir dilihat</h3></a> <!-- Last seen -->
  <div class="row gx-lg-5 align-items-start mx-lg-5 mt-3">
    <div class="col-3 ps-0"> <!--product 1-->
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
                    <rect id="Rectangle_160-5" data-name="Rectangle 160" width="24" height="24" fill="none"/>
                    <g id="ic-actions-star-5" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                      <path id="Path_38-5" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd"/>
                    </g>
                  </g>
                </g>
              </svg>4.6
              </span>
            </div>
            <div class="col text-end">
              <span style="font-size: 0.85rem;" ><a href="" class=" text-muted">100 reviews</a></span>
            </div>
          </div>
          <div class="row px-2 mt-3">
            <a href="" class="button-secondary m-1 form-control">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>