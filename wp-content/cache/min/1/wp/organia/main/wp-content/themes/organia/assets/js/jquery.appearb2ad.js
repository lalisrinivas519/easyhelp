(function($){var selectors=[];var check_binded=!1;var check_lock=!1;var defaults={interval:250,force_process:!1}
var $window=$(window);var $prior_appeared;function process(){check_lock=!1;for(var index=0;index<selectors.length;index++){var $appeared=$(selectors[index]).filter(function(){return $(this).is(':appeared')});$appeared.trigger('appear',[$appeared]);if($prior_appeared){var $disappeared=$prior_appeared.not($appeared);$disappeared.trigger('disappear',[$disappeared])}
$prior_appeared=$appeared}}
$.expr[':'].appeared=function(element){var $element=$(element);if(!$element.is(':visible')){return!1}
var window_left=$window.scrollLeft();var window_top=$window.scrollTop();var offset=$element.offset();var left=offset.left;var top=offset.top;if(top+$element.height()>=window_top&&top-($element.data('appear-top-offset')||0)<=window_top+$window.height()&&left+$element.width()>=window_left&&left-($element.data('appear-left-offset')||0)<=window_left+$window.width()){return!0}else{return!1}}
$.fn.extend({appear:function(options){var opts=$.extend({},defaults,options||{});var selector=this.selector||this;if(!check_binded){var on_check=function(){if(check_lock){return}
check_lock=!0;setTimeout(process,opts.interval)};$(window).scroll(on_check).resize(on_check);check_binded=!0}
if(opts.force_process){setTimeout(process,opts.interval)}
selectors.push(selector);return $(selector)}});$.extend({force_appear:function(){if(check_binded){process();return!0};return!1}})})(jQuery)