$.fn.ubislider = function (options) {
	return UbiSlider.init(this, options);
}

var UbiSlider = {
	init: function (elementThis, options) {
		var self = this;

		var settings = $.extend({
            item: elementThis,
            arrowsToggle: false,
            type: 'standard'
        }, options );

        var sliderWidth = settings.item.width();

        // Checking type of Slider
        switch(settings.type) {
		    case 'standard':
		    	settings.item.find('li').width(sliderWidth);
		        break;
		    case 'thumb':
		    	// process
		        break;
		}

        var widthOfSlider = settings.item.find('li').outerWidth(true) * settings.item.find('li').length;
        settings.item.attr('data-slideTime', 0);
        settings.item.find('.ubislider-inner').width(widthOfSlider);

        if(settings.arrowsToggle == true && (widthOfSlider < sliderWidth)){
        	settings.item.find('.arrow').hide();
        }

		self.events(settings.item);
		self.global(settings.item);
	},
	events: function (settings) {
	 	var self = this;

		settings.find('.arrow').on('click', function(){
			self.slider_arrow_function($(this), settings);
		});

	},
	slider_arrow_function: function (thisElement, settings) {
		var self = this;

		if(thisElement.hasClass('prev')){
			self.slider_prev(settings);
		}else{
			self.slider_next(settings);
		}
	},
	slider_prev: function (settings) {
		var self = this;
		slideTime = parseInt(settings.attr('data-slideTime'));
		if(slideTime != 0){
			settings.find('li').each(function (key, value) {
				if($(this).hasClass('active')){
					$(this).prev().addClass('active');
					$(this).removeClass('active');
					return false;
				}
			});
			slideTime--;
			settings.attr('data-slideTime', slideTime);
			settings.find('.ubislider-inner').css('left', '-' + ((settings.find('li').outerWidth(true)) * slideTime)+'px');
		}
	},
	slider_next: function (settings) {
		var self = this;
		var widthOfSlider = settings.width();
		var widthOfSlide = settings.find('li').width();
		var num = widthOfSlider/widthOfSlide;
		var halfedSlided = false;
		var maxNumber = settings.find('li').length - Math.round(num);
		

		if(num % 1 != 0){
			maxNumber = maxNumber + 1;
			halfedSlided = Math.ceil(num);
		}

		slideTime = parseInt(settings.attr('data-slideTime'));
		if(slideTime < maxNumber){
			settings.find('li').each(function (key, value) {
				if($(this).hasClass('active')){
					$(this).next().addClass('active');
					$(this).removeClass('active');
					return false;
				}
			});
			slideTime++;
			settings.attr('data-slideTime', slideTime);
			// console.log(halfedSlided);

			if(halfedSlided && maxNumber - slideTime == 0){
				var widthOfCount = settings.find('li').outerWidth(true)*halfedSlided;
				var widthToPush = (widthOfCount-widthOfSlider) + (settings.find('li').outerWidth(true)*(slideTime -1));
			} else{
				var widthToPush = settings.find('li').outerWidth(true)*slideTime;
			}
			settings.find('.ubislider-inner').css('left', '-'+widthToPush+'px');
		}
	},
	global: function (settings) {
		var self = this;

		var widthOfSlider = settings.width();
		var widthOfSlide = settings.find('li').width();
		var activeNumber = Math.round(widthOfSlider/widthOfSlide/2) - 1;

		settings.find('li').eq(activeNumber).addClass('active');
	}
}