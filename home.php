<?php
session_start();
?>
<html lang="ru" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="KD" content="" />
<title>Головна</title>
<!-- BOOTSTRAP CORE CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="assets/css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="assets/css/animations.min.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="assets/css/style-green.css" rel="stylesheet" />
<link href="assets/css/new.css" rel="stylesheet" />
</head>
<body data-spy="scroll" data-target="#menu-section">
	<br>
       <div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="home.php">
                            COCOMO
                        </a>
                   </div>
                   <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        	<li><a href="#blog">Блог</a></li>
                          <li><a href="#contact">Контакти</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          <section id="blog">
            <div class="container">
                <div class="row text-center header">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                    <p>	<?php
							if (empty($_SESSION['login']) or empty($_SESSION['id']))
							{
							echo "Ви увійшли на сайт, як гість <br> <a href='#'> Це посилання доступне тільки зареєстрованим користувачам </a>";
							}
							else
							   {
							    echo "Ви увійшли на сайт, як ". $_SESSION ['login']. "<br> <a href='https://github.com/DianaKucheriava/Cometa_/deployments'> Це посилання доступна тільки зареєстрованим користувачам </a>";
							   } ?>
					</p>
                           <h3>Що таке COCOMO модель?</h3>
                    </div>
                </div>
                    <div class="row animate-in" data-anim-type="fade-in-up">
                                <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                                    <div class="services-wrapper">
                                     <p>Модель конструктивної вартості (COCOMO) - це алгоритмічна модель оцінки вартості розробки програмного забезпечення, розроблена Баррі Боем (Barry Boehm). Модель використовує просту формулу регресії з параметрами, визначеними з даних, зібраних з ряду проектів. COCOMO використовується для оцінки розміру, зусиль і тривалості на основі вартості програмного забезпечення.</p>
                                        <h3>Ваші коментарі</h3>
                                          <div id='comment'>
                                            <?php
                                              $page_id = 1;
                                              $mysqli = new mysqli("localhost", "root", "", "Client");
                                              $result_set = $mysqli->query("SELECT name, text_comment FROM `comments` WHERE `page_id`='$page_id'"); 
                                              while ($row = $result_set->fetch_assoc()) {
                                                //print_r($row);
												 echo "<tr><td><b> " .$row['name']. "</b></td></tr> <tr><td> : <b>" .$row['text_comment']."</b></td></tr><br />";}  ?>
                                        </div>
                                        <form name="comment" action="comment.php" method="post">
                                        	<h3>Залиште коментар:</h3>
                                              <p>
                                                <label>Ім'я:</label>
                                                <input type="text" name="name" style="width: 450px; background: #a9a9a9ab;"/>
                                              </p>
                                              <p>
                                                <label>Коментар:</label>
                                                <br />
                                             <textarea name="text_comment" cols="30" rows="50" style="height: 71px; width: 500px;  background: #a9a9a9ab;"></textarea>
                                              </p>
                                              <p>
                                                <input type="hidden" name="page_id" value="1" />
                                                <input type="submit" value="Отправить" />
                                              </p>
                                        </form>
                                    </div>
                                </div>
                    		</div>
           			 </div>
        	</section>
       		 <section id="contact" >
               <div class="container">
                <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Контакти </h3>
                            <hr />
                    </div>
                </div>
                <div class="row animate-in" data-anim-type="fade-in-up">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                         <div class="contact-wrapper">
                            <h3>Ми в соціальних мережах</h3>
                            <p>Приєднуйтесь, Ми завжди раді новим знайомим!</p>
                                <div class="social-below">
                                    <a href="https://www.facebook.com/pk.krnu?fref=ts" class="btn button-custom btn-custom-two" > Facebook</a>
                                    <a href="https://t.me/krnu_org" class="btn button-custom btn-custom-two" > Telegram</a>
                                    <a href="https://www.messenger.com/" class="btn button-custom btn-custom-two" > Messenger</a>
                                </div>
                         </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="contact-wrapper">
                            <h3>Основні контакти</h3>
                                    <h4><strong>Email : </strong> krnu@i.ua </h4>
                                    <h4><strong>Телефон : </strong>  05366 32002 (+380687948246) </h4>
                                    <h4><strong>Факс : </strong> (05366) 3-60-00 </h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="contact-wrapper">
                            <h3>Адреса : </h3>
                            <h4> вул. Першотравнева, 20<br></h4>
                            <h4>Кременчук, 39600</h4>
                                <div class="footer-div" >
                                    &copy; 2018 Kucheriava D.L.<a href="https://github.com/DianaKucheriava" target="_blank" >COMETA</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </body>
       </html>
                <!-- CORE JQUERY -->
        <script src="assets/js/jquery-1.11.1.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- EASING SCROLL SCRIPTS PLUGIN -->
        <script src="assets/js/vegas/jquery.vegas.min.js"></script>
        <!-- VEGAS SLIDESHOW SCRIPTS -->
        <script src="assets/js/jquery.easing.min.js"></script>
        <!-- FANCYBOX PLUGIN -->
        <script src="assets/js/source/jquery.fancybox.js"></script>
        <!-- ISOTOPE SCRIPTS -->
        <script src="assets/js/jquery.isotope.js"></script>
        <!-- VIEWPORT ANIMATION SCRIPTS   -->
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/animations.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/jquery-migrate.min.js"></script>
