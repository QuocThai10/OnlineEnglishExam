<?php 
  require 'config/connect.php';
  $macc = $_GET['macc']??"";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.png"
      type="image/x-icon"
    />

    <!--=============== REMIXICONS ===============-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./css/main.css" />

    <title>CHỌN CHỨNG CHỈ</title>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="container nav">
        <a href="index.php" class="nav__logo">
          <img
            src="./images/logo.png"
            alt=""
            style="position: relative; top: 10px; left: 20px"
          />
          <i>English </i>
          <p>test</p>
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">Doing Test</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">List Exam</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">News</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">About</a>
            </li>
          </ul>

          <!-- Button close -->
          <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
          </div>
        </div>

        <div class="nav__actions">
          <i class="ri-user-line"></i>

          <!-- Toggle Button -->
          <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
          </div>
        </div>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="menu_exam section" id="menu-exam">
        <div class="menu__exam container">
          <?php 
          $stm = $pdo->query('SELECT * FROM `tbl_chungchi`');
          if($stm->rowCount()>0){
            $row = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach($row as $item){
              ?>
                <div class="menu__exam_test">
                  <div class="row">
                    <div class="title_exam">
                      <h3><?php echo $item->tenchungchi?></h3>
                     
                      <p class="name_object_exam" style="text-align: justify;">
                        <i class="ri-coin-fill"></i> <?php echo $item->mota?>
                      </p>
                      <p class="time_exam">
                        <i class="ri-time-line"></i> Thời gian làm bài: 15 phút
                      </p>
              </div>

              <div class="details_exam">
                <a href="#" class="link_details_exam"
                  ><button class="btn_details_exam">Vào thi</button></a
                >
              </div>
            </div>
          </div>
              <?php
            }
          }
          ?>
          
        </div>
      </section>

      <section class="pagination" id="pagination-id">
        <div class="page_number">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">></a></li>
          </ul>
        </div>
      </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__container container grid">
        <div>
          <a href="" class="footer__logo">
            <i class="ri-catus-line"></i>
          </a>

          <p class="footer__description">
            Choose the best <br />
            English Test for you.
          </p>
        </div>

        <div class="footer__content grid">
          <div>
            <h3 class="footer__title">COMPANY</h3>

            <ul class="footer__links">
              <li>
                <a href="" class="footer__link">About us</a>
              </li>
              <li>
                <a href="" class="footer__link">Products</a>
              </li>
              <li>
                <a href="" class="footer__link">Feature</a>
              </li>
              <li>
                <a href="" class="footer__link">Blog & News</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">COMPANY</h3>

            <ul class="footer__links">
              <li>
                <a href="" class="footer__link">About us</a>
              </li>
              <li>
                <a href="" class="footer__link">Products</a>
              </li>
              <li>
                <a href="" class="footer__link">Feature</a>
              </li>
              <li>
                <a href="" class="footer__link">Blog & News</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title"></h3>

            <ul class="footer__social">
              <a href="" target="_blank" class="footer__social-link">
                <i class="ri-facebook-circle-fill"></i>
              </a>

              <a href="" target="_blank" class="footer__social-link">
                <i class="ri-instagram-fill"></i>
              </a>

              <a href="" target="_blank" class="footer__social-link">
                <i class="ri-twitter-x-line"></i>
              </a>
            </ul>
          </div>
        </div>
      </div>

      <span class="footer__copy"> &#169; All Rights Reserved By DucThien </span>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src=""></script>

    <!--=============== MAIN JS ===============-->
    <script src="../js/main.js"></script>
  </body>
</html>
