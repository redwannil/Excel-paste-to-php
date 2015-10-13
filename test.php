<form action="#" method="get">
  <p>Input datas: <input type="text" name="d" /></p>
  <p>Paste from excel, not include title.</p>
  <input type="submit" value="Submit" />
</form>
<?php


if($_GET){
	$str=urlencode($_GET["d"]);
	$arrayCode = array();
	$rows = explode("+", $str);
	foreach($rows as $idx => $row)
	{
	    $row = explode( "%09", $row );
	    foreach( $row as $field )
	    {
	        $arrayCode[$idx][] = $field;
	    }
	}
	print_r( $arrayCode );

}

?>