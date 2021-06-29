<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Memory of Checkboxes</title>
        <meta name="description" content="This is a way to limit how many checkboxes can be selected. A radio button becomes a special case of checkbox, with follow limit =1.The first selected checkbox is unclicked as the limit is reached">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">

        <link rel="manifest" href="site.webmanifest">
        <!-- Place favicon.ico in the root directory -->

<!--         <link rel="stylesheet" href="/css/normalize.css"> -->
        <link rel="stylesheet" href="/css/erik.css">
    </head>
    <body>

        <?php include __DIR__."../ejc/navigation.html"; 
        $rdf = 1; //rand(1,10);
        ?>

        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="super">
	        <!-- Add your site or application content here -->
	        <h1>CheckBox Follow</h1>
			<fieldset class="snakeTail">
				<h2>Limit follow selections</h2>
                <h3>This is a way to limit how many checkboxes can be selected. A radio button becomes a special case of checkbox, with follow limit =1.The first selected checkbox is unclicked as the limit is reached.</h3>

                <div class="beatb">
                    <form class="range">
                        <div class="form-group range__slider">
                          <input type="range" step="1">
                        </div>
                        <div class="form-group range__value">
                          <label>Max</label>
                          <span></span>            
                        </div>
                      </form>
                </div>
 
<!-- 
		        <input type="radio" name="limit" value="1" checked>1
		        <input type="radio" name="limit" value="2">2
		        <input type="radio" name="limit" value="3">3
                <input type="radio" name="limit" value="4">4
                <input type="radio" name="limit" value="5">5
                <input type="radio" name="limit" value="6">6
                <br>
 -->
                <form class="range">
                <div class="form-group">
                    <input id="limiter" type="range" min="1" max="10" step="1" value="<?=$rdf?>">
                </div>
                <div class="form-group">
                     <label>Top</label>
                     <span></span>   
                    <div class="calspy">
                        <div id="bm1"><?=$rdf?></div>
                        <div id="bm2">Follows</div>
                    </div>
                </div>
                </form>
		    </fieldset>

            <br>

			<fieldset id="checkArray">
			    <?php

			    $models = ["Claudia Schiffer","Naomi Campbell","Linda Evangelista", "Eva Herzigova","Nadja Auermann","Kate Moss","Almudena Fernandez","Heidi Klum","Gisele Bundchen","Carmen Kass","Helena Christensen","Cindy Crawford","Christy Turlington","Tatjana Patiz","Tyra Banks"];

                $models = ["Claudia Moro","Lorena Ayala","Veronica Blume","Clara Alonso","Eugenia Silva","Blanca Suarez","Judit Masco","Sonia Ferrer","Belén Fabra","Eva González","Goya Toledo","Rosanna Walls","Eva Sisó","Nati Abascal","Noelia López","Paloma Lago","Natalia Estrada","Almudena Fernández","Carolina Bang","Silvia de Esteban","Ana Milán","Esther Arroyo","Laura Ponte","Inés Sastre","Elisabeth Reyes","Natalia Sánchez","Nuria Bermúdez","Vanessa Lorenzo","Asun Ortega","Berta Collado","Esther Cañadas","Arantxa Santamaria"];

			    $format = "\n\t\t\t<label class='container' for='fruit_%02d'><input type='checkbox' name='chkqs' id='fruit_%02d' value='%s'><span class='checkmark'></span>%s</label>\r";
			    $checkbpx = "\n\t\t\t<input type='checkbox' value='%02d'> %s <br>\r";
			    $i="0";
			    foreach ($models as $value) {
			    	echo sprintf($format, $i,$i++, $value, $value);
			    }
			    
			    ?>
			</fieldset>
		</div>

        <script src="/js/modernizr.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="/js/erik.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>