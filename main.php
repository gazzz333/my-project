<div class="welcome"> 


<h1>Страхование на совесть</h1>

<!-- /Текст привествия -->



</div>



<div class="container-wide">
    <div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
      <div class="col-xl-8">
        <div class="parallax-text-wrap">
          <h1 class="h1">Виды страхования</h1>
        </div>
      
      </div>
      
    </div>
    <div class="strahovania">
      <?php
        include 'connect.php';

        $query = "SELECT * FROM strahovka LIMIT 0,6";
        $result = mysql_query($query);
        while ($tour = mysql_fetch_array($result)) {
          echo '<div class="col-md-6 col-xl-4">';
          echo '  <article class="event-default-wrap">';
          echo '    <div class="event-default">';
          echo '      <figure class="event-img"><img src="'.$tour['image'].'" alt="" width="350" height="350"/>
            </figure>';
          echo '      <button class="event-default-caption"><a  href="/?page=detail&id='.$tour['id'].'">Узнать подробнее</a></button>';
          echo '    </div>';
          echo '    <div class="event-default-inner">';
          echo '      <h5><a class="event-default-title" href="/?page=detail&id='.$tour['id'].'">'.$tour['name'].'</a></h5><span class="heading-5"> '.$tour['discription'].' </span>';
          echo '    </div>';
          echo '  </article>';
          echo '</div>';
        }
      ?>
    </div>
  </div>
  <div class="preim">
        <h1 class="h1">Расчет стоимости страхования</h1>

        <div class="preim-placeholder">
            <img class="preim-img" src="img/calc.jpg" alt="Preim">
            <p>Вы можете воспользоваться калькулятором страхования на нашем сайте,чтобы узнать стоимость страхования онлайн</p>

             
        </div>
<button class="razcet">Рассчитать</button>
    </div>
    <!-- /Преимущества -->
 <h1 class="h1">Наше местоположение</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8966.981462474347!2d49.10621!3d55.8150209!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32c4cbcc0cbcac47!2z0J7QvtC-ICLQm9C40LHQtdGA0YLQuCI!5e0!3m2!1sru!2sru!4v1590099133324!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



