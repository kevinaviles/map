<!DOCTYPE html>
<html lang="es">
<head>
<title>Mapa de El Salvador</title>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> 
<!-- Script del mapa para dibujar los departamentos -->
<script type="text/javascript">
		jQuery(function($){
			$('.map').append('<div class="overlay">');
      
      $(document).mousemove(function(u){
        $('.map .tooltip').css({
          top: u.pageY-$('.map .tooltip').height()-10,
          left: u.pageX-$('.map .tooltip').width()/2-10,
        });
      });
      // pasa por algun departamento
			$('.map area').mouseover(function(){
					var index = $(this).index();
					var left = -index*1000-1000;
      
      	$('.map .overlay').css({
						backgroundPosition: left+"px 0px"
					})
				});
        
        $('.map').mouseout(function(){
          $('.map .overlay').css({
            backgroundPosition: "1000px 0px"
          });
        });
			});
</script>
<script>

function datospordepartamento(dept)  {  
    $(document).ready(function(){
      $('#resultado').html(dept);
    });

    jQuery(document).ready(function(){
        var n = jQuery("#resultado").html();       
        var params = { "nombreDpto" : n };

        $('#resultado').hide();
        $.ajax({
           data: params,
           url: 'extractor.php',   
           dataType: 'html',                        
           type: "post",                 
           success: function(response)            
           {
             jQuery('#resp').html(response);           
           }
         });
      });
};
</script>
</head>
<!-- inicia codigo html con php -->
<body>
<h1><i class="fab fa-php"></i></h1>
<form method="post" id="formulario" action="">
 <div class="map">
		<img src="void.png" width="1000" height="549" usemap="Map"/>
		<map name="Map">
			<span id="" ><area shape="poly" coords="122,325,135,288,140,257,141,235,160,225,170,188,157,170,115,152,75,172,15,224,5,268,7,299,38,315,69,330" title="Ahuachapán" alt="Ahuachapán" href="#" class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('Ahuachapan')" id="cero">
      </span>
			<area shape="poly" coords="68,331,110,398,208,394,219,377,235,353,247,324,272,292,254,283,223,258,202,261,187,236,172,230,150,235,145,255,139,288,127,311,123,326,93,320" title="Sonsonate" alt="Sonsonate" href="#" class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('Sonsonate')" >
			<area shape="poly" coords="169,186,165,226,183,231,192,236,202,248,220,257,240,267,257,282,273,285,281,257,283,223,302,199,306,174,283,156,291,130,312,120,334,86,339,35,321,15,303,8,267,2,238,2,179,119,162,147,149,161" title="Santa Ana" alt="Santa Ana" href="#" class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('Santa Ana')" >
		  <area shape="poly" coords="212,393,243,405,392,436,402,438,410,418,387,407,372,387,377,345,349,300,360,257,372,224,350,195,326,161,284,222,278,283,281,294,260,311,245,343" title="La Libertad" alt="La Libertad" href="#" class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('La Libertad')" >					
			<area shape="poly" coords="311,170,287,164,292,134,312,123,327,109,335,97,347,83,360,56,357,49,341,38,335,21,385,0,465,30,562,132,585,183,558,193,540,200,495,210,456,194,439,170,412,155,340,161" title="Chalatenango" alt="Chalatenango" href="#" class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('Chalatenango')" >
    	<area shape="poly" coords="397,405,379,405,375,388,377,347,377,334,357,309,356,286,367,253,378,222,372,213,348,194,354,171,378,166,395,169,396,207,401,225,403,243,428,277,449,325,417,357,407,359,411,378" title="San Salvador" alt="San Salvador" href="#"class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('San Salvador')" >		    
    	<area shape="poly" coords="490,214,481,227,472,235,488,261,520,294,523,281,558,272,588,274,630,288,649,291,665,257,665,198,598,185,548,201,513,215" title="Cabañas" alt="Cabañas" href="#"class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('Cabanas')" >
    	<area shape="poly" coords="452,330,482,342,500,336,504,360,528,366,533,412,535,426,543,447,540,477,526,497,407,440,407,414,413,375,411,359,430,351"  title="La Paz" alt="La Paz" href="#"class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('La Paz')" >
    	<area shape="poly" coords="526,284,602,276,649,301,668,322,647,336,634,356,614,365,598,379,576,436,553,483,552,437,536,421,541,385,527,358,508,357,506,333" title="San Vicente" alt="San Vicente" href="#"class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('San Vicente')" >
    	<area shape="poly" coords="672,322,700,330,719,344,716,362,718,399,708,431,741,476,782,513,819,546,529,538,538,503,574,470,590,419,621,364,646,354" title="Usulután" alt="Usulután" href="#" class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('Usulutan')" >
    	<area shape="poly" coords="831,538,837,501,854,503,860,481,858,432,863,406,855,380,829,380,807,359,788,357,768,325,764,309,781,290,765,269,760,224,668,252,660,287,672,318,701,326,724,341,725,357,722,392,717,430,732,469,774,479,791,511" title="San Miguel" alt="San Miguel" href="#"  class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('San Miguel')" >
    	<area shape="poly" coords="793,360,818,355,833,378,854,378,881,359,898,300,892,288,893,242,803,178,765,226,767,273,790,290,776,305,769,326" title="Morazán" alt="Morazán" href="#"  class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('Morazan')" >
    	<area shape="poly" coords="839,543,998,548,999,235,897,240,905,308,887,366,871,385,872,449,864,491,841,506" title="La Unión" alt="La Unión" href="#"  class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('La Union')" >
    	<area shape="poly" coords="411,159,399,173,396,201,411,236,424,268,440,282,453,328,488,340,512,315,521,297,493,274,467,234,481,213,457,202,436,172"  title="Cuscatlán" alt="Cuscatlán" href="#" class="btn" data-toggle="modal" data-target="#basicModal" onClick = "datospordepartamento('Cuscatlan')" >
		</map>
</div>

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header  modal-header-success">
        <h2><i class="fas fa-database"></i> <i class="fas fa-thumbs-up"></i></h2>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
      </div>
      <div class="modal-body">
        <h2>
            <div id="resp"></div>
        </h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="resultado"></div>
</form>
<!-- <div id="resp"></div>  -->
</body>
</html>

