jQuery(function($){
    $(".tweet").tweet({
        username: "kobesushigrill",
        join_text: "auto",
        avatar_size: 32,
        count: 3,
        auto_join_text_default: " ",
        auto_join_text_ed: " ",
        auto_join_text_ing: " ",
        auto_join_text_reply: " ",
        auto_join_text_url: " ",
        loading_text: "loading tweets..."
	});
});
    	
$(document).ready(function() {
	$('#s3slider').s3Slider({
	timeOut: 7000
	});
});