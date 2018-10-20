(function($) {
  $(function() {

    $(".sidenav").sidenav();
    $(".parallax").parallax();
    $(".dropdown-trigger").dropdown({coverTrigger : false, constrainWidth : false});
      $('.tabs').tabs();
	$('.modal').modal();
	$('select').formSelect();
	$('#summernote').summernote({
		placeholder: '',
		tabsize: 5,
		height: 200
	});
	$('input#input_text').characterCounter();
	 
    $('.datepicker').datepicker({
	showClearBtn : true,
	format: 'dd-mm-yyyy',
	defaultDate : new Date("1998-05-05"),
	yearRange : [1980,2005]
	

  	});



  }); // end of document ready
})(jQuery); // end of jQuery name space
