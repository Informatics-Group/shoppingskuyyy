<div class="container mt-5 mb-5" style="background-color: rgb(239, 240, 255);">
  <div class="row mt-1">
    <!--Detail barang-->
    <div class="card">
      <div class="card-body row m-0 my-4">
        <div class="col-sm-5 col-md-6">
          <!--bagian kiri-->
          <div class="row">
            <!--gambar utama-->
            <img src="<?= URLROOT; ?>/img/banner.jpg" alt="" style="width: 100%; height:100%; object-fit: cover">
          </div>
          <div class="row mt-2">
            <!--gambar kecil-->
            <img src="<?= URLROOT; ?>/img/banner.jpg" alt="" style="width: 20%; object-fit: cover">
          </div>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 pe-2">
          <!--bagian kanan-->
          <div class="row mt-2">
            <h2 class="fw-bold" style="overflow: hidden;text-overflow: ellipsis;max-width: 66ch;"><?= $data['getProdutDetailById']['product_name']; ?></h2>
          </div>
          <div class="d-flex justify-content-start">
            <div class="col">
              <span class="m-0"><u>4.6</u><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="pe-1">
                  <g id="Group_503" data-name="Group 503" transform="translate(-413)">
                    <g id="Icons_Actions_ic-actions-star-5" data-name="Icons / Actions / ic-actions-star" transform="translate(413)">
                      <rect id="Rectangle_160-5" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-5" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-5" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                  </g>
              </span>
              <span class="mx-3"><u><?= $data['getProdutDetailById']['prd_buy_count']; ?></u> terjual</span>
              <span class="m-0"><?= $data['getProdutDetailById']['prd_open_count']; ?> views</span>
            </div>
          </div>
          <div class="row mt-3 pt-2" style="background-color: rgb(239, 240, 255);">
            <h3 class="fw-bold">Rp. <?php $nilai = $data['getProdutDetailById']['prd_prc'];
                                    $subtotal =  number_format($nilai, 0, ',', '.');
                                    echo $subtotal; ?>
            </h3>
          </div>
          <div class="row mt-3">
            <p><?= $data['getProdutDetailById']['prd_desc']; ?></p>
          </div>
          <div class="row">
            <div class="col-4">
              Quantity
            </div>
          </div>
          <div class="row">
            <form action="<?= URLROOT; ?>/home/addtocart/<?= $data['getProdutDetailById']['id']; ?>" method="POST">
              <div class="col-4">
                <input type="number" class="form-control" name="quantity">
              </div>
          </div>
          <div class="row mt-4 px-3">
            <button class="btn btn-primary" type="submit" name="buy">ADD TO CART</button>
          </div>
          <div class="row mt-1 px-3">
            <button class="btn btn-danger">ADD TO WISHLIST</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <!--Product description-->
    <h3 class="ms-0 ps-0">Product Description</h3>
    <div class="card mt-2">
      <div class="card-body row">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="row">Table Value Title</th>
              <td>Table Value Space Description</td>
            </tr>
            <tr>
              <th scope="row">Table Value Title</th>
              <td>Table Value Space Description</td>
            </tr>
            <tr>
              <th scope="row">Table Value Title</th>
              <td>Table Value Space Description</td>
            </tr>
            <tr>
              <th scope="row">Table Value Title</th>
              <td>Table Value Space Description</td>
            </tr>
            <tr>
              <th scope="row">Table Value Title</th>
              <td>Table Value Space Description</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="row mt-5 mb-6">
    <!--Overall review-->
    <h3 class="ms-0 ps-0 mb-2">
      Overall review: 4,6
      <a href="">
        <svg id="Products_-_Star_ratings" data-name="Products - Star ratings" xmlns="http://www.w3.org/2000/svg" width="216" height="24" viewBox="0 0 216 24">
          <rect id="Rectangle_498" data-name="Rectangle 498" width="216" height="24" rx="2" fill="none" />
          <g id="Group_503" data-name="Group 503" transform="translate(-413)">
            <g id="Icons_Actions_ic-actions-star" data-name="Icons / Actions / ic-actions-star" transform="translate(517)">
              <rect id="Rectangle_160" data-name="Rectangle 160" width="24" height="24" fill="none" />
              <g id="ic-actions-star" transform="translate(1.954 2.42)">
                <path id="Path_38" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#ddd" fill-rule="evenodd" />
              </g>
            </g>
            <g id="Icons_Actions_ic-actions-star-2" data-name="Icons / Actions / ic-actions-star" transform="translate(491)">
              <rect id="Rectangle_160-2" data-name="Rectangle 160" width="24" height="24" fill="none" />
              <g id="ic-actions-star-2" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                <path id="Path_38-2" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
              </g>
            </g>
            <g id="Icons_Actions_ic-actions-star-3" data-name="Icons / Actions / ic-actions-star" transform="translate(465)">
              <rect id="Rectangle_160-3" data-name="Rectangle 160" width="24" height="24" fill="none" />
              <g id="ic-actions-star-3" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                <path id="Path_38-3" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
              </g>
            </g>
            <g id="Icons_Actions_ic-actions-star-4" data-name="Icons / Actions / ic-actions-star" transform="translate(439)">
              <rect id="Rectangle_160-4" data-name="Rectangle 160" width="24" height="24" fill="none" />
              <g id="ic-actions-star-4" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                <path id="Path_38-4" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
              </g>
            </g>
            <g id="Icons_Actions_ic-actions-star-5" data-name="Icons / Actions / ic-actions-star" transform="translate(413)">
              <rect id="Rectangle_160-5" data-name="Rectangle 160" width="24" height="24" fill="none" />
              <g id="ic-actions-star-5" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                <path id="Path_38-5" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
              </g>
            </g>
          </g>
          <text id="_183_reviews" data-name="183 reviews" transform="translate(216 18)" fill="#888" font-size="14" font-family="SegoeUI, Segoe UI" text-decoration="underline">
            <tspan x="-72.14" y="0">183 reviews</tspan>
          </text>
        </svg>
      </a>
    </h3>
    <div class="card pe-0 mt-2">
      <div class="card-body row"></div>
      <div class="row">
        <p>Overall review of the product belong here</p>
      </div>
      <div class="row mt-2 me-0 ps-0 pe-0 me-0">
        <div class="col-6">
          <!--bagian kiri-->
          <div class="row">
            <p>Pros Options</p>
          </div>
          <div class="row">
            <p><svg id="Icons_Actions_ic-actions-check" data-name="Icons / Actions / ic-actions-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <rect id="Rectangle_139" data-name="Rectangle 139" width="24" height="24" fill="none" />
                <g id="ic-actions-check">
                  <path id="Path_9" data-name="Path 9" d="M6.56,12.85l3.06,3.06,7.82-7.82" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Pros option description</p>
          </div>
          <div class="row">
            <p><svg id="Icons_Actions_ic-actions-check" data-name="Icons / Actions / ic-actions-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <rect id="Rectangle_139" data-name="Rectangle 139" width="24" height="24" fill="none" />
                <g id="ic-actions-check">
                  <path id="Path_9" data-name="Path 9" d="M6.56,12.85l3.06,3.06,7.82-7.82" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Pros option description</p>
          </div>
          <div class="row">
            <p><svg id="Icons_Actions_ic-actions-check" data-name="Icons / Actions / ic-actions-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <rect id="Rectangle_139" data-name="Rectangle 139" width="24" height="24" fill="none" />
                <g id="ic-actions-check">
                  <path id="Path_9" data-name="Path 9" d="M6.56,12.85l3.06,3.06,7.82-7.82" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Pros option description</p>
          </div>
        </div>
        <div class="col-6">
          <!--bagian kanan-->
          <div class="row">
            <p>Cons options</p>
          </div>
          <div class="row">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                <g id="ic-actions-close" transform="translate(-1 -1)">
                  <circle id="Ellipse_3" data-name="Ellipse 3" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_16" data-name="Line 16" x1="7.07" y1="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_17" data-name="Line 17" y1="7.07" x2="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Cons option description</p>
          </div>
          <div class="row">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                <g id="ic-actions-close" transform="translate(-1 -1)">
                  <circle id="Ellipse_3" data-name="Ellipse 3" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_16" data-name="Line 16" x1="7.07" y1="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_17" data-name="Line 17" y1="7.07" x2="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Cons option description</p>
          </div>
          <div class="row">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                <g id="ic-actions-close" transform="translate(-1 -1)">
                  <circle id="Ellipse_3" data-name="Ellipse 3" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_16" data-name="Line 16" x1="7.07" y1="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_17" data-name="Line 17" y1="7.07" x2="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Cons option description</p>
          </div>
        </div>
        <hr>
        <div class="row pe-0 me-0">
          <div class="col text-start">
            <p><svg id="Avatar_-_Name_-_S" data-name="Avatar - Name - S" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <circle id="Ellipse_40" data-name="Ellipse 40" cx="16" cy="16" r="16" fill="#1170ff" />
                <text id="PB" transform="translate(16 21)" fill="#fff" font-size="14" font-family="Poppins-SemiBold, Poppins" font-weight="600">
                  <tspan x="-8.757" y="0">PB</tspan>
                </text>
              </svg>
              Name and Surname - customer</p>
          </div>
          <div class="col text-end">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="225" height="24" viewBox="0 0 225 24">
                <g id="Group_638" data-name="Group 638" transform="translate(-923 -3259)">
                  <g id="Group_637" data-name="Group 637" transform="translate(607.011 3259)">
                    <g id="Icons_Actions_ic-actions-star" data-name="Icons / Actions / ic-actions-star" transform="translate(516.989)">
                      <rect id="Rectangle_160" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#ddd" fill-rule="evenodd" />
                      </g>
                    </g>
                    <g id="Icons_Actions_ic-actions-star-2" data-name="Icons / Actions / ic-actions-star" transform="translate(490.989)">
                      <rect id="Rectangle_160-2" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-2" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-2" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                    <g id="Icons_Actions_ic-actions-star-3" data-name="Icons / Actions / ic-actions-star" transform="translate(464.989)">
                      <rect id="Rectangle_160-3" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-3" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-3" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                    <g id="Icons_Actions_ic-actions-star-4" data-name="Icons / Actions / ic-actions-star" transform="translate(438.989)">
                      <rect id="Rectangle_160-4" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-4" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-4" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                    <g id="Icons_Actions_ic-actions-star-5" data-name="Icons / Actions / ic-actions-star" transform="translate(412.989)">
                      <rect id="Rectangle_160-5" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-5" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-5" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                  </g>
                  <text id="_11._6._2020" data-name="11. 6. 2020" transform="translate(1004 3277)" fill="#888" font-size="17" font-family="SegoeUI, Segoe UI">
                    <tspan x="-80.833" y="0">11. 6. 2020</tspan>
                  </text>
                </g>
              </svg>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card pe-0 mt-2">
      <div class="card-body row"></div>
      <div class="row">
        <p>Overall review of the product belong here</p>
      </div>
      <div class="row mt-2 me-0 ps-0 pe-0 me-0">
        <div class="col-6">
          <!--bagian kiri-->
          <div class="row">
            <p>Pros Options</p>
          </div>
          <div class="row">
            <p><svg id="Icons_Actions_ic-actions-check" data-name="Icons / Actions / ic-actions-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <rect id="Rectangle_139" data-name="Rectangle 139" width="24" height="24" fill="none" />
                <g id="ic-actions-check">
                  <path id="Path_9" data-name="Path 9" d="M6.56,12.85l3.06,3.06,7.82-7.82" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Pros option description</p>
          </div>
          <div class="row">
            <p><svg id="Icons_Actions_ic-actions-check" data-name="Icons / Actions / ic-actions-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <rect id="Rectangle_139" data-name="Rectangle 139" width="24" height="24" fill="none" />
                <g id="ic-actions-check">
                  <path id="Path_9" data-name="Path 9" d="M6.56,12.85l3.06,3.06,7.82-7.82" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Pros option description</p>
          </div>
          <div class="row">
            <p><svg id="Icons_Actions_ic-actions-check" data-name="Icons / Actions / ic-actions-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <rect id="Rectangle_139" data-name="Rectangle 139" width="24" height="24" fill="none" />
                <g id="ic-actions-check">
                  <path id="Path_9" data-name="Path 9" d="M6.56,12.85l3.06,3.06,7.82-7.82" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Pros option description</p>
          </div>
        </div>
        <div class="col-6">
          <!--bagian kanan-->
          <div class="row">
            <p>Cons options</p>
          </div>
          <div class="row">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                <g id="ic-actions-close" transform="translate(-1 -1)">
                  <circle id="Ellipse_3" data-name="Ellipse 3" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_16" data-name="Line 16" x1="7.07" y1="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_17" data-name="Line 17" y1="7.07" x2="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Cons option description</p>
          </div>
          <div class="row">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                <g id="ic-actions-close" transform="translate(-1 -1)">
                  <circle id="Ellipse_3" data-name="Ellipse 3" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_16" data-name="Line 16" x1="7.07" y1="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_17" data-name="Line 17" y1="7.07" x2="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Cons option description</p>
          </div>
          <div class="row">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                <g id="ic-actions-close" transform="translate(-1 -1)">
                  <circle id="Ellipse_3" data-name="Ellipse 3" cx="10" cy="10" r="10" transform="translate(2 2)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_16" data-name="Line 16" x1="7.07" y1="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                  <line id="Line_17" data-name="Line 17" y1="7.07" x2="7.07" transform="translate(8.66 8.59)" fill="none" stroke="#888" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                </g>
              </svg>
              Cons option description</p>
          </div>
        </div>
        <hr class="pe-2 ps-2">
        <div class="row pe-0 me-0">
          <div class="col text-start">
            <p><svg id="Avatar_-_Name_-_S" data-name="Avatar - Name - S" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <circle id="Ellipse_40" data-name="Ellipse 40" cx="16" cy="16" r="16" fill="#1170ff" />
                <text id="PB" transform="translate(16 21)" fill="#fff" font-size="14" font-family="Poppins-SemiBold, Poppins" font-weight="600">
                  <tspan x="-8.757" y="0">PB</tspan>
                </text>
              </svg>
              Name and Surname - customer</p>
          </div>
          <div class="col text-end">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="225" height="24" viewBox="0 0 225 24">
                <g id="Group_638" data-name="Group 638" transform="translate(-923 -3259)">
                  <g id="Group_637" data-name="Group 637" transform="translate(607.011 3259)">
                    <g id="Icons_Actions_ic-actions-star" data-name="Icons / Actions / ic-actions-star" transform="translate(516.989)">
                      <rect id="Rectangle_160" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#ddd" fill-rule="evenodd" />
                      </g>
                    </g>
                    <g id="Icons_Actions_ic-actions-star-2" data-name="Icons / Actions / ic-actions-star" transform="translate(490.989)">
                      <rect id="Rectangle_160-2" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-2" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-2" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                    <g id="Icons_Actions_ic-actions-star-3" data-name="Icons / Actions / ic-actions-star" transform="translate(464.989)">
                      <rect id="Rectangle_160-3" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-3" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-3" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                    <g id="Icons_Actions_ic-actions-star-4" data-name="Icons / Actions / ic-actions-star" transform="translate(438.989)">
                      <rect id="Rectangle_160-4" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-4" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-4" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                    <g id="Icons_Actions_ic-actions-star-5" data-name="Icons / Actions / ic-actions-star" transform="translate(412.989)">
                      <rect id="Rectangle_160-5" data-name="Rectangle 160" width="24" height="24" fill="none" />
                      <g id="ic-actions-star-5" data-name="ic-actions-star" transform="translate(1.954 2.42)">
                        <path id="Path_38-5" data-name="Path 38" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z" transform="translate(-1.959 -2.435)" fill="#fba422" fill-rule="evenodd" />
                      </g>
                    </g>
                  </g>
                  <text id="_11._6._2020" data-name="11. 6. 2020" transform="translate(1004 3277)" fill="#888" font-size="17" font-family="SegoeUI, Segoe UI">
                    <tspan x="-80.833" y="0">11. 6. 2020</tspan>
                  </text>
                </g>
              </svg>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row-auto p-0 mt-2">
      <!--bawah overall review-->
      <div class="card">
        <div class="card-body m-0">
          <div class="row">
            <div class="col text-start">
              <h6>Still not sure?<small class="text-muted">Ask to get answer</small></h6>
            </div>
            <div class="col text-end">
              <a class="text-decoration-none">+12 reiews</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-auto p-0 mt-5">
      <!--ask a question-->
      <h3 class="mb-2">Ask a question</h3>
      <div class="card mt-3">
        <!--bagian atas-->
        <div class="card-body">
          <div class="row-auto">
            <h6>Space for your question is here. Paste the question, ask for answer.</h6>
          </div>
          <hr>
          <div class="row">
            <div class="col text-start">
              <h6><svg id="Avatar_-_Name_-_S" data-name="Avatar - Name - S" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <circle id="Ellipse_40" data-name="Ellipse 40" cx="16" cy="16" r="16" fill="#1170ff" />
                  <text id="PB" transform="translate(16 21)" fill="#fff" font-size="14" font-family="Poppins-SemiBold, Poppins" font-weight="600">
                    <tspan x="-8.757" y="0">PB</tspan>
                  </text>
                </svg>
                Name and Surname <small class="text-muted">- Customer</small>
              </h6>
            </div>
            <div class="col text-end">
              <a class="text-primary text-decoration-none">Answer now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row-auto ps-5">
        <div class="card mt-2">
          <!--bagian bawah-->
          <div class="card-body">
            <div class="row-auto">
              <h6>Space for your question is here. Paste the question, ask for answer.</h6>
            </div>
            <hr>
            <div class="row">
              <div class="col text-start">
                <h6><svg id="Avatar_-_Name_-_S" data-name="Avatar - Name - S" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <circle id="Ellipse_40" data-name="Ellipse 40" cx="16" cy="16" r="16" fill="#1170ff" />
                    <text id="PB" transform="translate(16 21)" fill="#fff" font-size="14" font-family="Poppins-SemiBold, Poppins" font-weight="600">
                      <tspan x="-8.757" y="0">PB</tspan>
                    </text>
                  </svg>
                  Name and Surname <small class="text-muted">- Customer</small>
                </h6>
              </div>
              <div class="col text-end">
                <a class="text-primary text-decoration-none">Answer now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-auto mt-2"></div>
      <!--ask now-->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col text-start">
              <h6>Have a question? <small class="text-muted">Ask to get answer!</small></h6>
            </div>
            <div class="col text-end">
              <a href="" class="text-decoration-none">Ask now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-auto p-0 mt-5">
      <!--related post-->
      <h3>Related Products</h3>
      <div class="row mt-4">
        <div class="col-3">
          <!--product 1-->
          <div class="card" style="box-shadow: 0 1px 4px 0 rgba(0,0,0,0.1);">
            <a class="text-center" href=""><img class="card-img-center pb-3" style="width:100%;height:13rem;object-fit:cover;" src="<?= URLROOT; ?>/img/banner.jpg"></a>
            <div class="card-body pt-0 pe-4">
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
    </div>
  </div>
</div>