<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Remember Order of Selection</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Bootstrap and FontAwesome -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/order.css">
    </head>
<body>

<div class="float-container">

  <div class="float-child">
    <div class="green">Input</div>
    <div class="description">The following box will remembers the order in which options were selected. This order state is preserved via submission in a hidden field</div>
    <form id="violeta">
      <input name="order" type="hidden">
      <div class="container" id="boxes" data-box="2">
          <span><input id="cb1" class="selecta" value="Valencia" type="checkbox"><label for="cb1">Valencia</label></span><br>
          <span><input id="cb2" class="selecta" value="Navarre" type="checkbox"><label for="cb2">Navarre</label></span><br>
          <span><input id="cb3" class="selecta" value="Murcia" type="checkbox"><label for="cb3">Murcia</label></span><br>
          <span><input id="cb4" class="selecta" value="Galicia" type="checkbox"><label for="cb4">Galicia</label></span><br>      
          <span><input id="cb5" class="selecta" value="Madrid" type="checkbox"><label for="cb5">Madrid</label></span><br>
          <span><input id="cb6" class="selecta" value="La Rioja" type="checkbox"><label for="cb6">La Rioja</label></span><br>
         <span><input id="cb7" class="selecta" value="Extremadura" type="checkbox"><label for="cb7">Extremadura</label></span><br>
         <span><input id="cb8" class="selecta" value="Catalonia" type="checkbox"><label for="cb8">Catalonia</label></span><br>
         <span><input id="cb9" class="selecta" value="Castile-La Mancha" type="checkbox"><label for="cb9">Castile-La Mancha</label></span><br>     
         <span><input id="cb10" class="selecta" value="Castile Leon" type="checkbox"><label for="cb10">Castile Leon</label></span><br>     
         <span><input id="cb11" class="selecta" value="Cantabria" type="checkbox"><label for="cb11">Cantabria</label></span><br>
         <span><input id="cb12" class="selecta" value="Canary Islands" type="checkbox"><label for="cb12">Canary Islands</label></span><br>        
       </div>
       <div><button class="button btn-sm btn-warning" id="goa" type="submit">Go &raquo;</button></div>
     </form>
      <div id="results2"></div>    
  </div>
  
  <div class="float-child">
    <div class="blue">Output</div>
    <div class="description">This is what is selected sorted in order of selection</div>
    <div id="response" class="pre"></div>
  </div>
  
</div>

<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script type="text/javascript" src="js/colors.js"></script>
    <script type="text/javascript" src="js/order3.js"></script>
 </body>
</html>