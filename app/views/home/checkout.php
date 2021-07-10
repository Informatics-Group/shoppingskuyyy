<div class="mx-4">
  <div class="row py-3">
    <div class="col-3 order-2" id="sticky-sidebar">
      <div class="sticky-top">
        <div class="nav flex-column">
          <div class="row-auto p-3 ms-0 " style="background-color: white;border: 1px solid rgba(34, 40, 49, .3);">
            <div class="row">
              <span class="h4">Checkout</span>
            </div>
            <div class="row mt-3">
              <h6>Have a coupon?</h6>
            </div>
            <div class="row">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Text Field" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Apply</button>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col text-start pe-0">
                <span class=" text-muted" style="font-size: 0.85rem;">Description</span>
                <hr>
                <div class="row pe-0">
                  <span style="font-size: 0.75rem;" class="pe-0">Space for product name belong here.</span>
                  <span style="font-size: 0.75rem;" class="pe-0">Space for product name belong here.</span>
                </div>
              </div>
              <div class="col-3 text-end ps-0 ">
                <span class=" text-muted" style="font-size: 0.85rem;">Price</span>
                <hr>
                <div class="row pe-1 ">
                  <span style="font-size: 0.75rem;" class="pe-2">Harga</span>
                  <span style="font-size: 0.75rem;" class="pe-2">Harga</span>
                </div>
              </div>
              <div class="row mt-3 mx-0 pe-2">
                <hr>
              </div>
              <div class="row mt-2 g-0 px-3 pe-2">
                <div class="col-7 text-start">
                  <span>Payment Method</span>
                </div>
                <div class="col-5 text-end p-0 me-0">
                  <a href="" style="font-size: 0.85rem;">Pick a method</a>
                </div>
              </div>
              <div class="row mt-3 ms-0 pe-2">
                <hr>
              </div>
              <div class="row mt-2 g-0 px-3 pe-2">
                <div class="col-7 text-start">
                  <span>Shipping Method</span>
                </div>
                <div class="col-5 text-end p-0 me-0">
                  <a href="" style="font-size: 0.85rem;">Pick a method</a>
                </div>
              </div>
              <div class="row mt-3 ms-0 pe-2">
                <hr>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col text-start pe-0">
                <div class="row pe-0 ps-0">
                  <span style="font-size: 0.85rem;" class="pe-0">VAT</span>
                  <span style="font-size: 0.85rem;" class="pe-0 mt-2">Subtotal</span>
                </div>
              </div>
              <div class="col-3 text-end ps-0 ">
                <div class="row pe-1 ">
                  <span style="font-size: 0.75rem;" class="pe-2">Harga</span>
                  <span style="font-size: 0.75rem;" class="pe-2 mt-2">Harga</span>
                </div>
              </div>
            </div>
            <div class="row mt-3 ms-0 pe-2">
              <hr>
            </div>
            <div class="row mt-2">
              <div class="col text-start pe-0 align-self-center">
                <div class="row pe-0 ps-0">
                  <span style="font-size: 0.85rem;" class="pe-0">Total Price</span>
                </div>
              </div>
              <div class="col-5 text-end ps-0 align-self-center m-0">
                <div class="row pe-1 ">
                  <h3 class=" fw-bold m-0" style="color: blue;">Harga</h3>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4 form-control">Confirm Purchase</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col" id="main">
      <div class="row p-2 me-2" style="background-color: white;border: 1px solid rgba(34, 40, 49, .3);">
        <h4>Cart</h4>
        <div class="row">
          <div class="col">
            <div class="row">
              <span class="text-muted">Product</span>
            </div>
            <div class="row mt-2">
              <!--product-->
              <div class="col-3">
                <img class="" style="width:5.5rem;height:5.5rem;object-fit:cover;" src="<?= URLROOT; ?>/img/banner.jpg">
              </div>
              <div class="col align-self-center">
                <div class="row">
                  <span>Space for product name belong here.</span>
                </div>
                <div class="row mt-1">
                  <div class="col text-start">
                    <span class=" text-muted">Category: Clothe</span>
                  </div>
                  <div class="col text-end me-4">
                    <span class=" text-muted">Size:
                      <select name="size" id="inputgroupselect" style="border:0px; outline:0px;">
                        <option selected>-</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                      </select>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <!--quantity-->
            <div class="row-4" style="align-items: start;">
              <span class=" text-muted">Quantity</span>
            </div>
            <div class="row-1 pe-2">
              <input type="number" class=" form-control mt-4">
            </div>
          </div>
          <div class="col-2">
            <div class="row">
              <span class=" text-muted">Price</span>
            </div>
            <div class="col mt-4">
              <span class=" fw-bold" style="color: blue;">Harga</span>
            </div>
          </div>
          <div class="col-2">
            <div class="row">
              <span class=" text-muted">Action</span>
              <div class="col mt-4">
                <span>
                  <svg id="Button_-_Fourth_-_Icon" data-name="Button - Fourth - Icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                    <rect id="Rectangle_1" data-name="Rectangle 1" width="48" height="48" rx="2" fill="#eef5ff" />
                    <g id="Icons_Actions_ic-actions-heart" data-name="Icons / Actions / ic-actions-heart" transform="translate(12 12)">
                      <rect id="Rectangle_144" data-name="Rectangle 144" width="24" height="24" fill="none" />
                      <g id="ic-actions-heart" transform="translate(1.999 3.399)">
                        <path id="Path_23" data-name="Path 23" d="M13.31,4.89a5.091,5.091,0,0,1,7.2,7.2L19.2,13.4h0L12,20.6h0L4.8,13.4h0L3.49,12.09a5.091,5.091,0,1,1,7.2-7.2L12,6.2Z" transform="translate(-1.999 -3.399)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd" />
                      </g>
                    </g>
                  </svg>
                  <svg id="Button_-_Fourth_-_Icon" data-name="Button - Fourth - Icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                    <rect id="Rectangle_1" data-name="Rectangle 1" width="48" height="48" rx="2" fill="#eef5ff" />
                    <g id="Icons_Actions_ic-actions-trash" data-name="Icons / Actions / ic-actions-trash" transform="translate(12 12)">
                      <rect id="Rectangle_165" data-name="Rectangle 165" width="24" height="24" fill="none" />
                      <g id="ic-actions-trash" transform="translate(3 1.81)">
                        <line id="Line_53" data-name="Line 53" x1="6" y1="6" transform="translate(6 9.39)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                        <line id="Line_54" data-name="Line 54" x1="6" y2="6" transform="translate(6 9.39)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                        <rect id="Rectangle_15" data-name="Rectangle 15" width="18" height="4" rx="1" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" />
                        <path id="Path_41" data-name="Path 41" d="M19,5.81V20.19a2,2,0,0,1-2,2H7a2,2,0,0,1-2-2V5.81" transform="translate(-3 -1.81)" fill="none" stroke="#1170ff" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="2" fill-rule="evenodd" />
                      </g>
                    </g>
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>