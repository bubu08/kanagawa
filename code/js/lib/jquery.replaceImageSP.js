/**
 ***********************************************
 * 
 * 画像をSP用に差し替え
 * 頭にSP_のついた画像を用意
 * @category 	Application of AZLINK.
 * @author 		Norio Murata <nori@azlink.jp>
 * @copyright 	2010- AZLINK. <http://www.azlink.jp>
 * @final 		2016.08.26
 * 
 ***********************************************
 */
(function($) {
	
	$.fn.extend({
		
		replaceImageSP: function(config) {
			
			var defaults = {
				pcName: 		'PC_',
				spName: 		'SP_',
				breakPoint: 	768
			};
			
			var options = $.extend(defaults, config);
			
			return this.each(function(i) {
				var $this = $(this);
				
				function replaceImg() {
					if (parseInt($(window).width()) >= options.breakPoint) {
						// $this.attr('src', $this.attr('src').replace(options.spName, options.pcName)).css('visibility', 'visible');
						$this.attr('src', $this.attr('src').replace(options.spName, options.pcName));
					} else {
						// $this.attr('src', $this.attr('src').replace(options.pcName, options.spName)).css('visibility', 'visible');
						$this.attr('src', $this.attr('src').replace(options.pcName, options.spName));
					}
				}
				
				$(window).bind('resize', function() {
					replaceImg();
				});
				
				replaceImg();
			});
		}
		
	});
	
}(jQuery));
