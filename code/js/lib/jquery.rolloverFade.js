/**
 ***********************************************
 * 
 * ホバーでフェードするアニメーション
 * _off, _on の画像を用意
 * @category 	Application of AZLINK.
 * @author 		Norio Murata <nori@azlink.jp>
 * @copyright 	2010- AZLINK. <http://www.azlink.jp>
 * @final 		2016.01.27
 * 
 ***********************************************
 */
(function($) {
	
	$.fn.extend({
		
		rolloverFade: function(config) {
			
			var defaults = {
				durationOver: 300, 
				durationOut: 200
			};
			
			var options = $.extend(defaults, config);
			
			return this.each(function(i) {
				if (!isIE6 && !isIE7 && !isIE8) {
					if (this.src.match('_off')) {
						this.rollOverImg = new Image();
						this.rollOverImg.src = this.getAttribute('src').replace('_off', '_on');
						$(this.rollOverImg).css({
							position: 'absolute', 
							opacity: 0
						}).addClass('onImg');
						$(this).before(this.rollOverImg);
						
						$(this.rollOverImg).hover(function(){
							$(this).stop().animate({
								opacity: 1
							}, {
								duration: defaults.durationOver, 
								queue: false
							});
						}, function(){
							$(this).stop().animate({
								opacity: 0
							}, {
								duration: defaults.durationOut, 
								queue: false
							});
						});
					}
				} else {
					$(this).hover(function() {
						var imgSrcOver = $(this).attr('src').replace('_off', '_on');
						$(this).attr('src', imgSrcOver);
					}, function() {
						var imgSrcOut = $(this).attr('src').replace('_on', '_off');
						$(this).attr('src', imgSrcOut);
					});
				}
			});
			
			$.fn.rolloverFade.destroy = function() {
				this.each(function(i) {
					$(this).find('.onImg').remove();
					$('.roFadeImg').off('hover');
				});
			};
		}
		
	});
	
}(jQuery));
