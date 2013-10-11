<?
  
  if(isset($_GET['metodo']) and $_GET['metodo']=='pagseguro'){
	  
	 echo "Pagando com Pagseguro";
	 
	 
	 
  }else if(isset($_GET['metodo']) and $_GET['metodo']=='paypal'){
	  
	echo "Pagando com Paypal";
	
  }
?>