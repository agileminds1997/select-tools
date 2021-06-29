<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Memory of Checkboxes</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicon.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">

        <link rel="manifest" href="site.webmanifest">
        <link rel="stylesheet" href="css/eric.css">
    </head>
    <body>

        <?php 
        $rdf = rand(1,10);
        ?>

        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="super">
	        <h1>CheckBox Follow</h1>

			<fieldset id="snakeTail">
				<h2>Limit how many selections</h2>

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

        <script src="js/modernizr.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/eric.js"></script>

        <!-- Google Analytics -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
