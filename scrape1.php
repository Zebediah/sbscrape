<?php
include_once("LIB_http.php");
include_once("LIB_parse.php");

$source = "http://procure.ocps.net/pages/123.asp";
$home_url = "http://procure.ocps.net/pages/123.asp";

$res = http_get($home_url, '');
//print_r($res);

//run search from the homepage

$tables = parse_array($res['FILE'], "<table", "</table>");
print_r($tables[4]);
$td = parse_array($res['FILE'], "<td class=", "</td>");
print_r($td);
$td1 = $td[5];

$tdAttr = get_attribute($td1, "class");

echo  $tdAttr;

/*for($i=37; $i<count($td); $i++) {
	echo $td[$i];
}*/


/*$rows = parse_array($res['FILE'], "<td", "</td>");
if(!$rows) {
	echo "Can't get bid urls";
}
	for($i=0; $i<count($rows); $i++) {
		preg_match('/<a href="([^"]+)"/s', $rows[$i], $match);
		print($match);
	}*/
 

	/*
		// visit homepage
		$source = "fbo.gov";
		$home_url = "https://www.fbo.gov";
		$res = http_get($home_url, '');

		// run a search from the homepage
		$forms = parse_array($res['FILE'], "<form", "</form>");
		$form = $forms[0];
		$selects = parse_array($form, "<select", "</select>");
		$action = get_attribute($form, "action");
		$method = get_attribute($form, "method");

		for($i=0; $i<count($selects); $i++) {
			$options = parse_array($selects[$i], "<option", "</option>");
			
			$opt_i = ($i>0)?0:1;
			
			$val = get_attribute($options[$opt_i],"value");
			echo $val;
			$name = get_attribute($selects[$i], "name");
			echo $name;
			$data_array[$name] = $val;
			print_r($data_array[$name]);
		}

		while
		$rows = parse_array($res['FILE'], '<tr id="row_', '</tr>');
		echo $rows;
		 */
		
		 

?>