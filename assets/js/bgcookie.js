jQuery(document).ready(function ($) {
	$("#cookie-footer .close").bind("click",function(e){
  	e.preventDefault();
		Cookies.set('cookie-cgv', '1', { expires: 365 });
		$("#cookie-footer").fadeOut(1600);
  });

  if(Cookies.get('cookie-cgv')) {
  	$("#cookie-footer").hide();
  }
});