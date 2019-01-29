@extends('layouts.app')
@section('content')
<section id="main-content">
	<section class="wrapper">         
		<div class="container">
			<div class="row">
			 <br>
			 <div class="col-md-12">
			 	<?php 
				 	function countSetBits($n) 
						{ 
						    $count = 0; 
						    while ($n) 
						    { 
						        $count += $n & 1; 
						        $n >>= 1; 
						    } 
						    return $count; 
						} 
						  
						// Driver Code 
						$a = 3;
					 	$b = 7;
					 	$jumlah = 3 * 7;
					 	$binary = decbin($jumlah);
					 	echo 'Perkalian Dari '.$a .' x '.$b.'='.$jumlah . '<br>';
					 	echo 'Binary : '.$binary. '<br>';
					 	echo 'Jumlah Angka 1 Binary : ' .countSetBits($jumlah); 
						?> 


			</div>
		</div>
	</div>
</section>
</section>
@endsection