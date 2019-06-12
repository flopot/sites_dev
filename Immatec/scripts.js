


$('document').ready(function(){
	// Apparition et disparition des détails produits
	// quand on clique, product1-details apparait et les autres disparaissent
	$('#button-product-1').click(function(){
		$('#product2-details').hide();
		$('#product3-details').hide();
		$('#product4-details').hide();
		$('#product5-details').hide();
		$('#product6-details').hide();
		if($('#product1-details').css('display')==('none')) {
			$('#product1-details').slideDown(500);
			$('#product1-details').css('background-color','rgba(255,255,255,0.5)');
			$('#product1-details').css('color','rgba(27,69,83,1)');
		} else $('#product-details').slideUp(500);
	});
	$('#button-product-2').click(function(){
		$('#product1-details').hide();
		$('#product3-details').hide();
		$('#product4-details').hide();
		$('#product5-details').hide();
		$('#product6-details').hide();
		if($('#product2-details').css('display')==('none')) {
			$('#product2-details').slideDown(500);
			$('#product2-details').css('background-color','rgba(255,255,255,0.5)');
			$('#product2-details').css('color','rgba(27,69,83,1)');
		} else $('#product2-details').slideUp(500);
	});
	$('#button-product-3').click(function(){
		$('#product1-details').hide();
		$('#product2-details').hide();
		$('#product4-details').hide();
		$('#product5-details').hide();
		$('#product6-details').hide();
		if($('#product3-details').css('display')==('none')) {
			$('#product3-details').slideDown(500);
			$('#product3-details').css('background-color','rgba(255,255,255,0.5)');
			$('#product3-details').css('color','rgba(27,69,83,1)');
		} else $('#product3-details').slideUp(500);
	});
	$('#button-product-4').click(function(){
		$('#product1-details').hide();
		$('#product2-details').hide();
		$('#product3-details').hide();
		$('#product5-details').hide();
		$('#product6-details').hide();
		if($('#product4-details').css('display')==('none')) {
			$('#product4-details').slideDown(500);
			$('#product4-details').css('background-color','rgba(255,255,255,0.5)');
			$('#product4-details').css('color','rgba(27,69,83,1)');
		} else $('#product4-details').slideUp(500);
	});
	$('#button-product-5').click(function(){
		$('#product1-details').hide();
		$('#product2-details').hide();
		$('#product3-details').hide();
		$('#product4-details').hide();
		$('#product6-details').hide();
		if($('#product5-details').css('display')==('none')) {
			$('#product5-details').slideDown(500);
			$('#product5-details').css('background-color','rgba(255,255,255,0.5)');
			$('#product5-details').css('color','rgba(27,69,83,1)');
		} else $('#product5-details').slideUp(500);
	});
	$('#button-product-6').click(function(){
		$('#product1-details').hide();
		$('#product2-details').hide();
		$('#product3-details').hide();
		$('#product4-details').hide();
		$('#product5-details').hide();
		if($('#product6-details').css('display')==('none')) {
			$('#product6-details').slideDown(500);
			$('#product6-details').css('background-color','rgba(255,255,255,0.5)');
			$('#product6-details').css('color','rgba(27,69,83,1)');
		} else $('#product6-details').slideUp(500);
	});
	$('.product-details-icon').click(function(){
		$('#product1-details').slideUp(500);
		$('#product2-details').slideUp(500);
		$('#product3-details').slideUp(500);
		$('#product4-details').slideUp(500);
		$('#product5-details').slideUp(500);
		$('#product6-details').slideUp(500);
	});

});