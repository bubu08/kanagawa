/**
 ***********************************************
 * 
 * 指定クラスの幅・高さを統一
 * @category 	Application of AZLINK.
 * @author 		Norio Murata <nori@azlink.jp>
 * @copyright 	2010- AZLINK. <http://www.azlink.jp>
 * @final 		2013.08.12
 * 
 ***********************************************
 */
(function($) {
	
	$.fn.extend({
		
		adjustSize: function(config) {
			
			var defaults = {
				type: 'normal',
				heightPlus: 0
			};
			
			var options = $.extend(defaults, config);
			var element = this;
			var setHeight = 0;
			
			$(element).each(function() {
				switch (defaults.type) {
					case 'inner':
						var getHeight = $(this).height();
						break;
					case 'outer':
						var getHeight = $(this).outerHeight();
						break;
					default:
						var getHeight = $(this).height();
				}
				
				if (getHeight > setHeight) {
					setHeight = getHeight;
				}
				setHeight = getHeight > setHeight ? getHeight : setHeight;
			});
			
			switch (defaults.type) {
				case 'inner':
					$(element).innerHeight(setHeight + defaults.heightPlus);
					break;
				case 'outer':
					$(element).outerHeight(setHeight + defaults.heightPlus);
					break;
				default:
					$(element).height(setHeight + defaults.heightPlus);
			}
		}
		
	});
	
}(jQuery));