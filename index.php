<!DOCTYPE html>
<html>
<head>
	<title>numbers.test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css"/>
    <meta property="og:title" content="numbers.test"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="numbers.testt"/>
    <meta property="og:locale" content="ru"/>
    <meta property="og:image" content="images/logo.png"/>
    <meta property="og:image:alt" content="numbers.test"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
</head>
<body>
    <header>
        <section>
            <div class= "title">Найдём номера под ваши пожелания</div>
        </section>
        <section>
            <div class= "title-3">Прибытие</div>
            <div class= "title-2">Выезд</div>
        </section>
        <input type="text" name="daterange1" value="ДД.ММ.ГГГГ"/>

        <script type="text/javascript">
            $(function() {

              $('input[name="daterange1"]').daterangepicker({
                  autoUpdateInput: false,
                  locale: {
                      cancelLabel: 'Clear'
                  }
              });

              $('input[name="daterange1"]').on('apply.daterangepicker', function(ev, picker) {
                  $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
              });

              $('input[name="daterange1"]').on('cancel.daterangepicker', function(ev, picker) {
                  $(this).val('');
              });

          });
      </script>

      <input type="text2" name="daterange2" value="ДД.ММ.ГГГГ"/>

      <script type="text/javascript">
        $(function() {

          $('input[name="daterange2"]').daterangepicker({
              autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
          });

          $('input[name="daterange2"]').on('apply.daterangepicker', function(ev, picker) {
              $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
          });

          $('input[name="daterange2"]').on('cancel.daterangepicker', function(ev, picker) {
              $(this).val('');
          });

      });
  </script>
  <section>
    <div class="guests">
        <div class="text">Гости</div>
        <select id="guests-select">
            <option value="1">Сколько гостей</option>
            <option value="2">1</option>
            <option value="3">2</option>
            <option value="4">3</option>
            <option value="5">4</option>
        </select>
    </div>
</section>
<section>
    <div class="numbers">
        <div class="text">Подобрать номер</div>
    </div>
</section>
</header>
</body>