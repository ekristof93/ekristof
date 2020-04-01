import $ from 'jquery';
import waypoints from '../../../../../../node_modules/waypoints/lib/noframework.waypoints.min';
import smoothScroll from 'jquery-smooth-scroll';

class StickyHeader {
  constructor() {
    this.siteHeader = $('.site-header');
    this.headerTriggerElment = $('.first-block__title, .blog-header__content');
    this.createHeaderWaypoint();
    this.menuLinks = $('.menu-item a');
    this.addSmoothScrolling();
  }

  addSmoothScrolling() {
    this.menuLinks.smoothScroll();
  }

  createHeaderWaypoint() {
    var that = this;
    new Waypoint({
      element: this.headerTriggerElment[0],
      handler: function(direction) {
        if(direction == "down") {
          that.siteHeader.addClass('site-header--get-fixed');
        }
        else {
          that.siteHeader.removeClass('site-header--get-fixed');
        }
      }
    });
  }
}

export default StickyHeader;
