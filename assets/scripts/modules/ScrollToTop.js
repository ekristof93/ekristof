import $ from 'jquery';
import waypoints from '../../../../../../node_modules/waypoints/lib/noframework.waypoints.min';

class ScrollToTop {
  constructor() {
    this.upArrow = $('.scroll-to-top');
    this.triggerElement = $('.introduction, .post__title');
    this.createScrollToTopWaypoint();
    this.scrollUp();
  }

  scrollUp() {
    this.upArrow.click(function() {
      $('html, body').animate({scrollTop : 0});
    });
  }

  createScrollToTopWaypoint() {
    var that = this;
    new Waypoint({
      element: this.triggerElement[0],
      handler: function(direction) {
        if(direction == "down") {
          that.upArrow.addClass('scroll-to-top--displayed');
        }
        else {
          that.upArrow.removeClass('scroll-to-top--displayed');
        }
      }
    });
  }
}

export default ScrollToTop;
