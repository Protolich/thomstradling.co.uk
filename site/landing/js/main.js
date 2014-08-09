
$(document).ready(function(){
	console.log(window.location.hostname);
	$('a').each(function(){
		if (this.href.indexOf(window.location.hostname) < 0)
			this.target = "_blank";
		// $(this).attr('target', '_blank');
			
	});
});