<?php
/*
CSS of Percentaje Bar 
Date: 2015-05-08
By: Engineer Gregory Hidalgo Ramírez
Websites:
- www.gregoryhidalgo.com
- www.valoresweb.com

Twitter: @websoundcr

For free. Please only refer me :-);
*/

function coloBar($percentage, $cssRule)
{

	$htmlUnidadHeader = "<div class=\"coloBar border-all-round\">";
	$htmlUnidadFin = "</div>";

	#Save html code
	$html = ""; #It's all HTML code
	$htmlUnidad = ""; #HTML code of the Bar. The WIDTH depend of $percentage

	if(is_numeric($percentage) && $percentage>=0 && $percentage<=100)
	{
		#Create a DIV thet represents the "color bar".
		$htmlUnidad = $htmlUnidad."<div style=\"width:".$percentage."%;\" class=\"".$cssRule."\">".$percentage."%&nbsp;</div>";

		$htmlUnidad = $htmlUnidad."<div class=\"clear\"></div>"; #Clear both

		#Complete HTML / All Structure
		$html = $htmlUnidadHeader.$htmlUnidad.$htmlUnidadFin;
	}
	else
	{
		$html = $htmlUnidadHeader."&nbsp;".$htmlUnidadFin; #Empty, not color bar
	}

	echo $html;
}
?>
