/*
---------------------------------
    : Custom - Switchery js :
---------------------------------
*/
!function($) {
    "use strict";
    /* -- Switchery - Colored Switches -- */
    $('.js-switch-primary').each(function (index, element) {
        new Switchery(element, { color: '#506fe4' });
    });

    $('.js-switch-secondary').each(function (index, element) {
        new Switchery(element, { color: '#96a3b6' });
    });
    $('.js-switch-success').each(function (index, element) {
        new Switchery(element, { color: '#43d187' });
    });
    $('.js-switch-danger').each(function (index, element) {
        new Switchery(element, { color: '#f9616d' });
    });
    $('.js-switch-warning').each(function (index, element) {
        new Switchery(element, { color: '#f7bb4d' });
    });
    $('.js-switch-info').each(function (index, element) {
        new Switchery(element, { color: '#3d9bfb'});
    });
    $('.js-switch-light').each(function (index, element) {
        new Switchery(element, { color: '#f2f3f7' });
    });
    $('.js-switch-dark').each(function (index, element) {
        new Switchery(element, { color: '#141d46'});
    });

    /* -- Switchery small- Colored Switches -- */
    $('.js-switch-primary-small').each(function (index, element) {
        new Switchery(element, { color: '#506fe4',size: 'small' });
    });

    $('.js-switch-secondary-small').each(function (index, element) {
        new Switchery(element, { color: '#96a3b6',size: 'small' });
    });
    $('.js-switch-success-small').each(function (index, element) {
        new Switchery(element, { color: '#43d187',size: 'small' });
    });
    $('.js-switch-danger-small').each(function (index, element) {
        new Switchery(element, { color: '#f9616d',size: 'small' });
    });
    $('.js-switch-warning-small').each(function (index, element) {
        new Switchery(element, { color: '#f7bb4d',size: 'small' });
    });
    $('.js-switch-info-small').each(function (index, element) {
        new Switchery(element, { color: '#3d9bfb',size: 'small' });
    });
    $('.js-switch-light-small').each(function (index, element) {
        new Switchery(element, { color: '#f2f3f7',size: 'small' });
    });
    $('.js-switch-dark-small').each(function (index, element) {
        new Switchery(element, { color: '#141d46',size: 'small' });
    });


    /* -- Switchery  large- Colored Switches -- */
    $('.js-switch-primary-large').each(function (index, element) {
        new Switchery(element, { color: '#506fe4',size: 'large' });
    });

    $('.js-switch-secondary-large').each(function (index, element) {
        new Switchery(element, { color: '#96a3b6',size: 'large' });
    });
    $('.js-switch-success-large').each(function (index, element) {
        new Switchery(element, { color: '#43d187',size: 'large' });
    });
    $('.js-switch-danger-large').each(function (index, element) {
        new Switchery(element, { color: '#f9616d',size: 'large' });
    });
    $('.js-switch-warning-large').each(function (index, element) {
        new Switchery(element, { color: '#f7bb4d',size: 'large' });
    });
    $('.js-switch-info-large').each(function (index, element) {
        new Switchery(element, { color: '#3d9bfb',size: 'large' });
    });
    $('.js-switch-light-large').each(function (index, element) {
        new Switchery(element, { color: '#f2f3f7',size: 'large' });
    });
    $('.js-switch-dark-large').each(function (index, element) {
        new Switchery(element, { color: '#141d46',size: 'large' });
    });

      /* -- Switchery - Multicolor Switches -- */
      var primary_multicolor = document.querySelector('.js-switch-primary-multicolor');
      var switchery = new Switchery(primary_multicolor, { color: '#506fe4', jackColor: '#dbe5fd' });
      var secondary_multicolor = document.querySelector('.js-switch-secondary-multicolor');
      var switchery = new Switchery(secondary_multicolor, { color: '#96a3b6', jackColor: '#e9eaed' });
      var success_multicolor = document.querySelector('.js-switch-success-multicolor');
      var switchery = new Switchery(success_multicolor, { color: '#43d187', jackColor: '#a5ecc4' });
      var danger_multicolor = document.querySelector('.js-switch-danger-multicolor');
      var switchery = new Switchery(danger_multicolor, { color: '#f9616d', jackColor: '#ffe4e6' });
      var warning_multicolor = document.querySelector('.js-switch-warning-multicolor');
      var switchery = new Switchery(warning_multicolor, { color: '#f7bb4d', jackColor: '#fef7e6' });
      var info_multicolor = document.querySelector('.js-switch-info-multicolor');
      var switchery = new Switchery(info_multicolor, { color: '#3d9bfb', jackColor: '#c7ecee' });
      var light_multicolor = document.querySelector('.js-switch-light-multicolor');
      var switchery = new Switchery(light_multicolor, { color: '#f2f3f7', jackColor: '#e2e6ea' });
      var dark_multicolor = document.querySelector('.js-switch-dark-multicolor');
      var switchery = new Switchery(dark_multicolor, { color: '#141d46', jackColor: '#7e7e7e' });
      /* -- Switchery - On-Off Multicolor Switches -- */
      var primary_multicolor_on_off = document.querySelector('.js-switch-primary-multicolor-on-off');
      var switchery = new Switchery(primary_multicolor_on_off, { color: '#506fe4', secondaryColor: '#949ca9', jackColor: '#dbe5fd', jackSecondaryColor: '#e9eaed' });
      var secondary_multicolor_on_off = document.querySelector('.js-switch-secondary-multicolor-on-off');
      var switchery = new Switchery(secondary_multicolor_on_off, { color: '#96a3b6', secondaryColor: '#506fe4', jackColor: '#e9eaed', jackSecondaryColor: '#dbe5fd' });
      var success_multicolor_on_off = document.querySelector('.js-switch-success-multicolor-on-off');
      var switchery = new Switchery(success_multicolor_on_off, { color: '#43d187', secondaryColor: '#f9616d', jackColor: '#a5ecc4', jackSecondaryColor: '#ffe4e6' });
      var danger_multicolor_on_off = document.querySelector('.js-switch-danger-multicolor-on-off');
      var switchery = new Switchery(danger_multicolor_on_off, { color: '#f9616d', secondaryColor: '#43d187', jackColor: '#ffe4e6', jackSecondaryColor: '#a5ecc4' });
      var warning_multicolor_on_off = document.querySelector('.js-switch-warning-multicolor-on-off');
      var switchery = new Switchery(warning_multicolor_on_off, { color: '#f7bb4d', secondaryColor: '#3d9bfb', jackColor: '#fef7e6', jackSecondaryColor: '#c7ecee' });
      var info_multicolor_on_off = document.querySelector('.js-switch-info-multicolor-on-off');
      var switchery = new Switchery(info_multicolor_on_off, { color: '#3d9bfb', secondaryColor: '#f7bb4d', jackColor: '#c7ecee', jackSecondaryColor: '#fef7e6' });
      var light_multicolor_on_off = document.querySelector('.js-switch-light-multicolor-on-off');
      var switchery = new Switchery(light_multicolor_on_off, { color: '#f2f3f7', secondaryColor: '#141d46', jackColor: '#e2e6ea', jackSecondaryColor: '#7e7e7e' });
      var dark_multicolor_on_off = document.querySelector('.js-switch-dark-multicolor-on-off');
      var switchery = new Switchery(dark_multicolor_on_off, { color: '#141d46', secondaryColor: '#f2f3f7', jackColor: '#7e7e7e', jackSecondaryColor: '#e2e6ea' });
}(window.jQuery);
