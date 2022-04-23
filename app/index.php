<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="pre-header">
      <div class="pre-header-news">
        Лучшие новинки
      </div>
      <div class="pre-header-block"></div>
      <div class="pre-header-shiping">
          Именитые Бренды
      </div>
    </div>
    <div class="container">
      <div class="main-header">
               <nav class="header-navigation" style=" width: 210px">
          <a href="forfe.php" class="header-navigation-he">ДЛЯ НЕГО</a>
          <a href="test/test.php " class="header-navigation-he">Все товары</a>
        </nav>
        <nav class="header-autorization">
  	<!-- notification message -->
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Здравствуйте <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Выйти</a> </p>
    <?php endif ?>
    </nav>
        <!-- <nav class="header-autorization">
          <a>Войти</a>
          <a class="header-autorization-reg">Зарегестрироваться</a>
        </nav> -->
        <div class="header-logo">Luxary Clothing Store</div>
      </div>
    </div>
  </header>
  <section class="pre__order">
    <div class="container">
      <div class="pre__order-inner">
        <img src="img/pre-order1.jpg">
        <img src="img/pre-order2.jpg">
      </div>
      <div class="pre__order-content">
        <div class="pre__order-title  _anim-items">Предзаказ на Luxary Clothing Store </div>
        <div class="pre__order-subtitle _anim-items">Чего ждать от нового сезона? Главные новинки
          из коллекций лучших дизайнеров доступны к предзаказу на Luxary Clothing
          Store уже сейчас.</div>
      </div>
    </div>
  </section>
  <section class="new-colection">
    <div class="container">
      <div class="colection">
        Новинки: из коллекций лучших брендов
      </div>
      <div class="colection__inner">
        <div class="colection__item">
          <img src="img/tovar/she1.jpg">
          <div class="colection__item-title">
            Khrisjoy
          </div>
          <div class="colection__item-price">
            2990 BYN
          </div>
        </div>
        <div class="colection__item">
          <img src="img/tovar/she2.jpg">
          <div class="colection__item-title">
            Bottega Veneta
          </div>
          <div class="colection__item-price">
            4000 BYN
          </div>
        </div>
        <div class="colection__item">
          <img src="img/tovar/she3.jpg">
          <div class="colection__item-title">
            GANNI
          </div>
          <div class="colection__item-price">
            700 BYN
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- git section -->
  <!-- start swiper -->
  <section>
    <div class="swiper__title">
      Гид по подаркам: классический стиль
  </div>
  <div class="swiper__title-subtitle">
    Выберите идеальный подарок не выходя из дома
  </div>
    <div class="container">
    <div class="catalog-container">
        <ul class="catalog-list">
          <li class="catalog-item">
            <div class="item-container">
              <div class="swaip__item">
                <img src="img/tovar/she2-1.jpg">
                <div class="trend__item-title">
                  Peserico 
                </div>
                <div class="swaip__item-subtitle">
                  укороченные брюки широкого кроям
                </div>
                <div class="trend__item-price">
                  700 BYN
                </div>
              </div>
              <div class="swaip__item">
                <img src="img/tovar/she2-2.jpg">
                <div class="trend__item-title">
                  Si Rossi  
                </div>
                <div class="swaip__item-subtitle">
                  ботильоны на блочном каблуке
                </div>
                <div class="trend__item-price">
                  2200 BYN
                </div>
              </div>
          </div>
          </li>
          <li class="catalog-item">
            <div class="item-container">
              <div class="swaip__item">
                <img src="img/tovar/she2-3.jpg">
                <div class="trend__item-title">
                  Orciani  
                </div>
                <div class="swaip__item-subtitle">
                  сумка-тоут Liberty
                </div>
                <div class="trend__item-price">
                  2100 BYN
                </div>
              </div>
              <div class="swaip__item">
                <img src="img/tovar/she2-4.jpg">
                <div class="trend__item-title">
                  Aspesi  
                </div>
                <div class="swaip__item-subtitle">
                  поплиновая рубашка 
                  с длинными рукавами
                </div>
                <div class="trend__item-price">
                  700 BYN
                </div>
              </div>
          </div>
          </li>
          <li class="catalog-item">
            <div class="item-container">
              <div class="swaip__item">
                <img src="img/tovar/she2-5.jpg">
                <div class="trend__item-title">
                  Peserico
                </div>
                <div class="swaip__item-subtitle">
                  укороченные брюки широкого кроя
                </div>
                <div class="trend__item-price">
                  1000 BYN
                </div>
              </div>
              <div class="swaip__item">
                <img src="img/tovar/she2-6.jpg">
                <div class="trend__item-title">
                  Si Rossi 
                </div>
                <div class="swaip__item-subtitle">
                  ботильоны на блочном каблуке
                </div>
                <div class="trend__item-price">
                  1000 BYN
                </div>
              </div>
          </div>
          </li>
        </ul>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> 
      </div>
    </div>
    </section>
    <!-- end swiper -->
   <!-- trend accessories -->
  <section class="trend accessories">
    <div class="container">
    <div class="triend__title _anim-items">
      Тренд: аксессуары с логотипами
    </div>
    <div class="trend__inner">
      <div class="trend__item">
        <img src="img/tovar/she3-1.jpg">
        <div class="trend__item-title">
          Balenciaga 
        </div>
        <div class="trend__item-subtitle">
          ремень с 
          пряжкой-логотипом
        </div>
        <div class="trend__item-price">
          1000 BYN
        </div>
      </div>
      <div class="trend__item">
        <img src="img/tovar/she3-2.jpg">
        <div class="trend__item-title">
          Valentino Garavani 
        </div>
        <div class="trend__item-subtitle">
          серьги-подвески с логотипом
          VLogo Signature
        </div>
        <div class="trend__item-price">
          1000 BYN
        </div>
      </div>
      <div class="trend__item">
        <img src="img/tovar/she3-3.jpg">
        <div class="trend__item-title">
          Fendi   
        </div>
        <div class="trend__item-subtitle">
          картхолдер O’Lock 
с логотипом FF
        </div>
        <div class="trend__item-price">
          1300 BYN
        </div>
      </div>
      <div class="trend__item">
        <img src="img/tovar/she3-4.jpg">
        <div class="trend__item-title">
          Off-White
        </div>
        <div class="trend__item-subtitle">
          шапка бини в рубчик 
          с логотипом
        </div>
        <div class="trend__item-price">
          700 BYN
        </div>
      </div>
    </div>
  </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="footer-item">
          <ul class="footer-list">
              <li class="footer-card left" id="left">
                  <span class="footer-title">О Luxary Clothing</span>
                  <div class="footer-subtitle">
                    Luxary Clothing Store это интернет магазин премиальных вещей мировых брендов. Товар является 100% оригинальной продукцией и сертефицирован.
                  </div>
                  <div class="footer-subtitle">
                      У нас вы можете найти новинки высокой моды, а так же актуальные вещи которые были представлены в модных домах всего мира.
                  </div>
              </li>
              <li class="footer-card">
                  <span class="footer-title">Информащия об одежде</span>
                  <div class="footer-subtitle">
                      Все вещи сертефицированы
                  </div>
                  <div class="footer-subtitle">
                    вся продукция изготавливается из безопастных для человека материалов
                  </div>
                  <div class="footer-subtitle">Компании производители предоставляют гарантию соблюдения строгих норм в отножении животных
                  </div>
                  <div class="footer-subtitle">Мы толерантны к <a class="footer-link" href="https://blacklivesmatter.com/">Black Lives Matter</a> поэтому у некоторые модели являются чернокожими </div>
                  
              </li>
              <li class="footer-card">
                  <span class="footer-title">Связь с нами</span>
                  <div class="footer-subtitle">
                      Напишите письмо на электронную почту или подпишитесь на нас в соц. сетях
                  </div>
                  <div class="footer-subtitle">
                   kovalchuk@gmai.com
                  </div>
                  <div class="footer-subtitle">
                      <img src="img/facebook.png">
                      <img src="img/twitter2.png">
                      <img src="img/email3.png">
                      <img src="img/rss4.png">
                      <img src="img/vimeo.5png.png">
                  </div>
              </li>
          </ul>
      </div>
  </div>
      <!-- <div class="footer__copy">
        <div class="container">
          <div class="footer__copy-text">
            Сайт был разработан Ковальчуком Павлом 
          </div>
        </div>
      </div> -->
    </div>
  </footer>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/anime.js"></script>
  <script src="js/main.js"></script>
</body>
</html>