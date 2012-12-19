$(document).ready(function(){
	$.each($('.hasicon tr td:first-child'), function(i, item){
		var url = $(item).find('a').attr('href');
		var val = 'url(http://images.websnapr.com/?size=s&key=W9Ra71TcQeDa&url='+url+')';
		$(item).css('background-image', val);
	});
	$.each($('.hasicon tr td.tcl:last-child'), function(i, item){
		var d = $(item).text();
		$(item).text(prettyDate(d));
	});
});

