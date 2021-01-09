<?php
function bolme($birincisayi,$ikincisayi)
{
	if($ikincisayi == 0){
	throw new Exception('Ýkinci sayi 0 olamaz.');
	}
	return $birinci sayi / $ikincisayi;
	
	}
}

try{
	echo bolme(16,0);
	}
catch(Exception $e){
	echo $e->getMessage();
	}
?>
