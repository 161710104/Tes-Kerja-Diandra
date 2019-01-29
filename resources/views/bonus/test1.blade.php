@extends('layouts.app')
@section('content')
<section id="main-content">
          <section class="wrapper">         
<div class="container">
    <div class="row">
  <br>
      <div class="col-md-12">
	<?php 

$i; 
for ($i = 1; $i <= 1000; $i++) 
{ 
	if ($i%2==0 && $i%3==0 && $i%5==0) 
		echo "CodilityTestCoders" . "<br>"; 

	else if ($i%2==0 && $i%3==0) 
		echo "CodilityTest" . "<br>"; 

	else if ($i%2==0 && $i%5==0) 
		echo "CodilityCoders" . "<br>";		

	else if ($i%3==0 && $i%5==0) 
		echo "CodersTest" . "<br>";			 	 
	

	else if (($i % 3) == 0) 
		echo "Test" . "<br>";			 
	
	else if (($i % 5) == 0)				 
		echo "Coders" . "<br>";		

	else if (($i % 2) == 0)				 
		echo "Codility" . "<br>";			 


	else	 
		echo $i,"<br>" ;			 
} 

?> </div>
</div>
</div>
</section>
@endsection