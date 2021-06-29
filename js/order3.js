/*
CheckBox Selector Order code
Copyright: Eric Matthew Masaba
Free to use. Find me on GitHub - https://github.com/agileminds
MIT licence

*/
  function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
  }
  function zeb(){
    return Object.values(colors)[getRandomInt(Object.keys(colors).length)];
  }
  const da_colours = {...colors};

  $(function (){
  	$("form").submit(function(e){
  		e.preventDefault();
      if ($('input:checkbox').filter(':checked').length < 1){
          console.log("Please Check at least one Check Box");
          return false;
           }
    	});

    var zechariah = Object.values(colors)[getRandomInt(Object.keys(colors).length)];
//  $("#selectBox").css( "background-color", zeb());
    $("#box").css( "background-color", "#ffdead");
    $("#results2").css( "background-color", "#f0fff0");
    $("#selectBox").css("background-image", "url('https://app.neales.london/assets/img/eco/bk-eco.jpg')");

    $("#response").html("--------");

    $("#goa").click(function(){
    	var data = $("#violeta").serialize();
    	$("form").trigger("reset");
    	document.getElementById("violeta").reset();
    	$( "#results2").text("");
    	$.ajax({
                url: '/process.php',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: data,
                success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
    });

      $( "select" )
        .change(function () {
          var str = "";
          var arr =[];
          box_id = $(this).data("box");
          $( "select option:selected" ).each(function() {
            str += $( this ).text() + " ";
            arr.push($( this ).text());
          });
          var sz1  = $('#selectBox > option:selected').prevAll().length;
          var selectedValues = $('#selectBox').val();
          $( "#results"+ box_id ).text( str );
	        })
        .change();

        $(".selecta")
        .change(function (){
         box_id = $(this).parent().parent().data("box");
    // console.log($(this).is(':checked'));
		// console.log($( "#results"+box_id ));
		
          var str = $( this ).val();
          var running = $( "#results"+box_id ).text().split(",");
          if ( $( "#results"+box_id ).text()=="") {
            var current = [];
          } else {
            var current = running;
        }

          if ($(this).is(':checked')){
            current.push(str);
            } else {
            var a = current.indexOf(str);
            if (a>-1) {current.splice(a,1)};
            }
          $( "#results"+box_id ).text( current );
          $( "input[name=order]").val(current);
        });

        $(".allow-numeric").bind("keypress", function (e) {
          var keyCode = e.which ? e.which : e.keyCode
          if (!(keyCode >= 48 && keyCode <= 57)) {
            $(".error").css("display", "inline");
            return false;
          }else{
            $(".error").css("display", "none");
          }
      });

  });