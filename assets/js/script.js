$(document).ready(function(){
	$('#login').click(function(){
		$('#login-modal').modal('show');    
	});
	$('#contactus').click(function(){
		$('#contactus-modal').modal('show');    
	});
	$('#sellerinfo').click(function(){
		$('#sellerinfo-modal').modal('show');    
	});
	$('.removeseller').click(function(){
		$('.removeseller-modal').modal('show');    
	});
	$('#editprofile').click(function(){
		$('#editprofile-modal').modal('show');    
	});
	$('#addproduct').click(function(){
		$('#addproduct-modal').modal('show');    
	});
	$('#editproduct').click(function(){
		$('#editproduct-modal').modal('show');    
	});
	$('#deleteproduct').click(function(){
		$('#deleteproduct-modal').modal('show');    
	});
	$('.dimmerz').dimmer({on: 'hover'});
	$('.gridz').masonry({
		columnWidth: 0,
		horizontalOrder: true,
		itemSelector: '.grid-item'
	});
});