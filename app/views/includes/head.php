<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" hreF="<?= URLROOT;?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= URLROOT;?>/css/style.css">

  <style>
    body{
      overflow-x: hidden;
      font-family: "Roboto", sans-serif;
    }
    body::-webkit-scrollbar {
      width: 0.25rem;
    }

    body::-webkit-scrollbar-track {
      background: rgb(34, 40, 49);
    }

    body::-webkit-scrollbar-thumb {
      background: rgb(240, 84, 84);
    }

    ul::-webkit-scrollbar {
      height: 0.25rem;
    }

    ul::-webkit-scrollbar-track {
      background: rgb(34, 40, 49);
    }

    ul::-webkit-scrollbar-thumb {
      background: rgb(240, 84, 84);
    }

    .button-primary {
      background-color: rgb(253, 0, 84); /* maroon */
      border: none;
      color: white;
      padding: 0.5rem 1rem;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }

    .button-secondary {
      background-color: rgb(253, 0, 84); /* maroon */
      border: none;
      color: white;
      padding: 0.5rem 1rem;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }

    .button-secondary:hover {
      background-color: rgb(220, 0, 56); /* maroon */
      border: none;
      color: white;
      padding: 0.5rem 1rem;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }

    .button-small{
      background-color: rgb(253, 0, 84); /* Red velvet */
      border: none;
      color: white;
      height: 1rem;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }

    .button-small:hover {
      background-color: rgb(253, 0, 84); /* maroon */
      border: none;
      color: white;
      height: 0.5rem;
      padding: 0.5rem 1rem;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }

    .button-logout{
      background-color: rgb(240, 84, 84);
    }

    .dark-overlay::after {
      content:"";
      display:block;
      position:absolute;
      top:0;
      bottom:0;
      left:0;
      right:0;
      background:rgba(0,0,0,0.2);
    }

    /* start of slider product */
    .story-container ul {
      list-style-type: none;
      user-select: none;
      display: flex;
      overflow-y: auto;
      padding: 0 0 1rem 2rem;
      background-color: rgb(239, 240, 255);
    }

    .story-text{
      color: rgba(255, 255, 255, .85);
      font-weight: 300;
      font-size: 15px;
      max-width: 85px;
      overflow: hidden;
      text-overflow: ellipsis;
      margin-top: 5px;
    }

    .story-container ul li {
      padding: 0 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .story-container ul li:first-child {
      padding-left: 20px;
    }

    .story-container ul li:last-child {
      padding-right: 20px;
    }

    .story-container ul li .story {
      width: 75px;
      height: 75px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.75);
      padding: 1px;
      position: relative;
    }

    .story-container ul li.has-story .story {
      padding: 2px;
      background: linear-gradient(45deg, #F09433 0%, #E6683C 25%, #DC2743 50%, #CC2366 75%, #BC1888 100%);
    }

    .story-container ul li .story img {
      padding: 4px;
      background: currentColor;
      border-radius: 50%;
      width: 100%;
      height: 100%;
    }

    .story-container ul li span{
      color: rgba(255, 255, 255, .85);
      font-weight: 300;
      font-size: 15px;
      max-width: 85px;
      overflow: hidden;
      text-overflow: ellipsis;
      margin-top: 5px;
    }

    /* end of slider product */
  </style>

  <!-- js -->
  <script src="<?= URLROOT; ?>/js/bootstrap.min.js"></script>

  <title><?= $data['judul']; ?></title>
</head>
<body>
    <div class="row d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom fixed-top bg-white">
      <div class="col-3">
        <a href="<?= URLROOT; ?>/index" class="ps-3 text-dark text-decoration-none">
          <strong>ShoppingSkuy</strong>
        </a>
      </div>
      <div class="col-6">
        <form class="w-100">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari produk atau toko di ShoppingSkuyyy">
            <div class="input-group-btn">
              <button class="btn" type="submit" style="background-color: rgb(221, 221, 221);">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.571" height="18.711" viewBox="0 0 18.571 18.711">
                  <g id="ic-actions-search" transform="translate(-2.969 -2.4)">
                    <circle id="Ellipse_12" data-name="Ellipse 12" cx="7" cy="7" r="7" transform="translate(6.79 3.15)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
                    <line id="Line_50" data-name="Line 50" x1="4.88" y2="4.88" transform="translate(4.03 15.17)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-3 text-end">
        <?php if(isset($_SESSION['user_id'])): ?>
          <a href="<?= URLROOT;?>/cart" class="text-decoration-none me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.081" height="18.165" viewBox="0 0 21.081 18.165">
              <g id="ic-construction-coasters" transform="translate(-1.549 -3.455)">
                <path id="Path_60" data-name="Path 60" d="M3,14.18H14.36a2.29,2.29,0,0,0,2.22-1.72l1.86-7.38a1.17,1.17,0,0,1,1.13-.87h2.31" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <line id="Line_61" data-name="Line 61" x2="1.93" y2="6.41" transform="translate(13.86 14.18)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <path id="Path_61" data-name="Path 61" d="M3,4.21H14a1,1,0,0,1,1,1.2l-1.07,5.17a1,1,0,0,1-1,.8H4.31a1,1,0,0,1-1-.83l-1-5.61A.63.63,0,0,1,3,4.21Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <circle id="Ellipse_22" data-name="Ellipse 22" cx="2" cy="2" r="2" transform="translate(3 16.87)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
              </g>
            </svg>
          </a>
          <a href="<?= URLROOT;?>/message" class="text-decoration-none me-4 border-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="15.5" viewBox="0 0 21.5 15.5">
              <g id="ic-contact-mail" transform="translate(-1.25 -4.25)">
                <rect id="Rectangle_25" data-name="Rectangle 25" width="20" height="14" rx="2" transform="translate(2 5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
                <path id="Path_81" data-name="Path 81" d="M2.58,5.59l8.23,8.22a2,2,0,0,0,2.83,0l8-8" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"/>
              </g>
            </svg>
          </a>
          <a href="<?= URLROOT;?>/profile" class="text-decoration-none me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="19.843" height="21.692" viewBox="0 0 19.843 21.692">
              <g id="ic-actions-user" transform="translate(-2.078 -1.23)">
                <path id="Path_42" data-name="Path 42" d="M3,22l.79-2.88c2.61-9.5,13.81-9.5,16.42,0L21,22" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                <circle id="Ellipse_20" data-name="Ellipse 20" cx="5" cy="5" r="5" transform="translate(7 1.98)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
              </g>
            </svg>
          </a>
          <a href="<?= URLROOT;?>/users/logout" class="me-3">
          <button class="button-secondary">
            Log out
          </button></a>
        <?php else :?>
          <a href="<?= URLROOT;?>/users/login" class="me-3">
          <button class="button-secondary">
            Sign-in
          </button></a>
        <?php endif; ?>
      </div>
    </div><br><br><br>