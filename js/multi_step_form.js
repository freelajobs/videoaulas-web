//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var startHeight = 0;

function Previous(obj)
{
	if(animating) return false;

	animating = true;

	current_fs = $(obj).parent();
	previous_fs = $(obj).parent().prev();
	previous_size = $(obj).parent().prev();

	//de-activate current step on progressbar
	$(".progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 800,
		complete: function()
		{
			var h = $("#formRegister").height() - current_fs.height() + previous_fs.height();
			$("#formRegister").height(h);
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
}

function Next(obj)
{
	if(animating) return false;
	animating = true;

	current_fs = $(obj).parent();
	next_fs = $(obj).parent().next();

	if(startHeight == 0) startHeight = $("#formRegister").height() + 100;
	//activate next step on progressbar using the index of next_fs
	$(".progressbar  li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
				'transform': 'scale('+scale+')',
				'position': 'absolute'
			});
			next_fs.css({'left': left, 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			var h = startHeight + next_fs.height();
			$("#formRegister").height(h);

			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
}
$(".next").click(function(){
	Next(this);
});

$(".previous").click(function(){
	Previous(this);
});

$(".submit").click(function(){
	return false;
})
