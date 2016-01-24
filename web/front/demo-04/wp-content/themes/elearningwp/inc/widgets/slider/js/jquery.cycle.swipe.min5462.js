(function($){"use strict";var supportTouch="ontouchend"in document;$.event.special.swipe=$.event.special.swipe||{scrollSupressionThreshold:10,durationThreshold:1e3,horizontalDistanceThreshold:30,verticalDistanceThreshold:75,setup:function(){var $this=$(this);$this.bind("touchstart",function(event){var data=event.originalEvent.touches?event.originalEvent.touches[0]:event;var stop,start={time:(new Date).getTime(),coords:[data.pageX,data.pageY],origin:$(event.target)};function moveHandler(event){if(!start)return;var data=event.originalEvent.touches?event.originalEvent.touches[0]:event;stop={time:(new Date).getTime(),coords:[data.pageX,data.pageY]};if(Math.abs(start.coords[0]-stop.coords[0])>$.event.special.swipe.scrollSupressionThreshold){event.preventDefault()}}$this.bind("touchmove",moveHandler).one("touchend",function(event){$this.unbind("touchmove",moveHandler);if(start&&stop){if(stop.time-start.time<$.event.special.swipe.durationThreshold&&Math.abs(start.coords[0]-stop.coords[0])>$.event.special.swipe.horizontalDistanceThreshold&&Math.abs(start.coords[1]-stop.coords[1])<$.event.special.swipe.verticalDistanceThreshold){start.origin.trigger("swipe").trigger(start.coords[0]>stop.coords[0]?"swipeleft":"swiperight")}}start=stop=undefined})})}};$.event.special.swipeleft=$.event.special.swipeleft||{setup:function(){$(this).bind("swipe",$.noop)}};$.event.special.swiperight=$.event.special.swiperight||$.event.special.swipeleft})(jQuery);