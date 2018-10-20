  $(document).ready(function(){
    
    $(".sidenav").sidenav();
    $(".parallax").parallax();
    $(".dropdown-trigger").dropdown({coverTrigger : false, constrainWidth : false});
    $(".tabs").tabs();
    $(".modal").modal();
	$("select").formSelect();
	$("#summernote").summernote({
		placeholder: '',
		tabsize: 5,
		height: 200
	});
	$("input#input_text").characterCounter();

  });