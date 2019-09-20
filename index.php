<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
      <ul>
        <li>Parallelepipedo:{{base}} x {{alt}} x {{prof}}</li>
        <li>Area:{{area}}</li>
        <li>Volume:{{volume}}</li>
      </ul>

    </script>
    <script id="item-template2" type="text/x-handlebars-template">

      <div class='somme'>
        <h3>Somma Aree : {{sumArea}}</h3>
        <h3>Somma Volumi : {{sumVol}}</h3>
      </div>
    </script>


    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- IMG: ICON -->
    <!-- <link rel="shortcut icon" href="img/me_icon.gif"> -->
    <title>OOP</title>
  </head>
  <body>
    <div class="container">
      <div class="paral">

      </div>
      <div class="sum">

      </div>
    </div>

  </body>
</html>
