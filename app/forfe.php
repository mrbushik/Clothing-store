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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
        <nav class="header-navigation" style=" width: 201px">
          <a href="index.php" class="header-navigation-he">ДЛЯ НЕЕ</a>
          <a href="test/test.php" class="header-navigation-he">Все товары</a>
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
              <div class="he__order-inner">
                <img src="img/he/шляпа.jpg">
                <img src="img/he/niga.png">
              </div>
              <div class="pre__order-content">`
                <div class="pre__order-title-anime" id="title" style="float: left">Предзаказ на Luxary Clothing Store </div>
                <div class="pre__order-subtitle _anim-items">Новинки мужской коллекции уже доступны на 
                    Luxary Clothing
                      Store уже сейчас.</div>
              </div>
            </div>
          </section>
        </section>
        <!-- trend accessories -->
       <section class="trend accessories">
         <div class="container">
         <div class="triend__title">
            Новинки: из коллекций лучших брендов
         </div>
         <div class="trend__inner">
           <div class="trend__item">
             <img src="img/he/he1.jpg">
             <div class="trend__item-title">
                There Was One 
             </div>
             <div class="trend__item-subtitle-new">
                двубортный бушлат и
                з смесовой шерсти
             </div>
             <div class="trend__item-price">
               3200 BYN
             </div>
           </div>
           <div class="trend__item">
             <img src="img/he/he2.jpg">
             <div class="trend__item-title">
               Valentino Garavani 
             </div>
             <div class="trend__item-subtitle-new">
                сумка на плечо с 
                логотипом VLTN
             </div>
             <div class="trend__item-price">
               3000 BYN
             </div>
           </div>
           <div class="trend__item">
             <img src="img/he/he3.jpg">
             <div class="trend__item-title">
                Balmain    
             </div>
             <div class="trend__item-subtitle-new">
                толстовка с логотипом
             </div>
             <div class="trend__item-price">
               2000 BYN
             </div>
           </div>
           <div class="trend__item">
             <img src="img/he/he4.jpg">
             <div class="trend__item-title">
                Bottega Veneta 
             </div>
             <div class="trend__item-subtitle-new">
                ботинки по щиколотку
             </div>
             <div class="trend__item-price">
               2500 BYN
             </div>
           </div>
         </div>
       </div>
       </section>
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
                    <img src="img/he/he3-1.jpg">
                    <div class="trend__item-title">
                      Z Zegna  
                    </div>
                    <div style="width: 166px" class="swaip__item-subtitle">
                      однобортное пальто в клетку
                    </div>
                    <div class="trend__item-price">
                      2500 BYN
                    </div>
                  </div>
                  <div class="swaip__item">
                    <img src="img/he/he3-2.jpg">
                    <div class="trend__item-title">
                      Moncler 
                    </div>
                    <div style="width: 166px" class="swaip__item-subtitle">
                      джемпер с геометричным узором
                    </div>
                    <div class="trend__item-price">
                      2100 BYN
                    </div>
                  </div>
              </div>
              </li>
              <li class="catalog-item">
                <div class="item-container">
                  <div class="swaip__item">
                    <img src="img/he/he3-3.jpg">
                    <div class="trend__item-title">
                      AMI Paris  
                    </div>
                    <div style="width: 166px" class="swaip__item-subtitle">
                      джемпер с приспущенными плечами
                    </div>
                    <div class="trend__item-price">
                      700 BYN
                    </div>
                  </div>
                  <div class="swaip__item">
                    <img src="img/he/he3-4.jpg">
                    <div class="trend__item-title">
                      TOM FORD  
                    </div>
                    <div style="width: 166px" class="swaip__item-subtitle">
                      тренч с потайной застежкой
                    </div>
                    <div class="trend__item-price">
                      8900 BYN
                    </div>
                  </div>
              </div>
              </li>
              <li class="catalog-item">
                <div class="item-container">
                  <div class="swaip__item">
                    <img src="img/he/he3-5.jpg">
                    <div class="trend__item-title">
                      Stone Island 
                    </div>
                    <div style="width: 166px" class="swaip__item-subtitle">
                      куртка-рубашка с нашивкой Compass
                    </div>
                    <div class="trend__item-price">
                      2100 BYN
                    </div>
                  </div>
                  <div class="swaip__item">
                    <img src="img/he/he3-6.jpg">
                    <div class="trend__item-title">
                      Brunello Cucinelli 
                    </div>
                    <div style="width: 166px"  class="swaip__item-subtitle">
                      брюки прямого кроя
                    </div>
                    <div class="trend__item-price">
                      2700 BYN
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
       <!-- section actual -->
       <section class="actual">
        <div class="container">
        <div class="triend__title _anim-items">
            Актуально: необычные свитеры и толстовки
        </div>
        <div class="trend__inner">
          <div class="trend__item">
            <img src="img/he/he2-1.jpg">
            <div class="trend__item-title">
                Isabel Marant 
            </div>
            <div class="trend__item-subtitle-new">
                шерстяной джемпер Seth с графичным узором
            </div>
            <div class="trend__item-price">
              1000 BYN
            </div>
          </div>
          <div class="trend__item">
            <img src="img/he/he2-2.jpg">
            <div class="trend__item-title">
                Givenchy
            </div>
            <div class="trend__item-subtitle-new">
                джемпер с 
                логотипом 4G
            </div>
            <div class="trend__item-price">
              2700 BYN
            </div>
          </div>
          <div class="trend__item">
            <img src="img/he/he2-3.jpg">
            <div class="trend__item-title">
                Casablanca     
            </div>
            <div class="trend__item-subtitle-new" style="width: 185px;">
                толстовка длинными рукавами и графичным принтом
            </div>
            <div class="trend__item-price">
              1200 BYN
            </div>
          </div>
          <div class="trend__item">
            <img src="img/he/he2-4.jpg">
            <div class="trend__item-title">
                Balenciaga 
            </div>
            <div class="trend__item-subtitle-new">
                толстовка с логотипом
                Balenciaga
            </div>
            <div class="trend__item-price">
              1200 BYN
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
      <script src="js/libs.min.js"></script>
      <script src="js/anime.js"></script>
      <script src="js/anime.min.js"></script>
  <script>
    var cssSelectore = anime({
      targets: '#title',
      translateX: 432
    });
  </script>
      <script src="js/main.js"></script>
</body>
</html>