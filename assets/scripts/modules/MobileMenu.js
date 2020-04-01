import $ from 'jquery';

class MobileMenu {
  constructor() {
    this.menuIcon = $('.navi-toggle__button');
    this.menuItems = $('.menu-item a');
    this.menuContent = $('.site-header__menu-content');
    this.menuCheckbox = $('.navi-toggle__checkbox');
    this.events();
  }

  events() {
    this.menuIcon.click(this.toggleTheMenu.bind(this));
    this.menuItems.click(this.menuItemClicked.bind(this));
  }

  toggleTheMenu() {
    var that = this;
    this.menuContent.slideToggle(400, function() {
      that.menuContent.toggleClass('site-header__menu-content--is-visible').css('display', '');
    });
  }

  menuItemClicked() {
    this.menuCheckbox.prop('checked', false);
    this.menuContent.toggleClass('site-header__menu-content--is-visible').css('display', '');
  }
}

export default MobileMenu;
