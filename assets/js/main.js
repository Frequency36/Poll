/*! main.js | Bulkit | CSS Ninja */

/* ==========================================================================
Website core JS file (see function.js for complete function reference)
========================================================================== */
"use strict"; //Set environment variable (Used for development and demo)

/* 
    Possible values:
    1. development
    2. demo
    3. customization
*/

var env = 'customization';
initPageLoader();
$(document).ready(function ($) {
  //0. Global
  if (env === 'development') {
    disableSidebarLinks();
    changeDemoImages();
  } else if (env === 'demo') {
    changeDemoImages();
  } else if (env === 'customization') {
    disableSidebarLinks();
  }

  initNavbar();
  initMobileMenu();
  initNavbarDropdown();
  initSidebar();
  initBackgroundImages(); //1. Tabs

  initTabsNav();
  initNavigationTabs();
  initVerticalTabs(); //2. Cards

  initMediaCards(); //3. Form controls

  initDatepicker();
  initTimepicker();
  initDatepickerAlt();
  initChosenSelects();
  initMaterialSelect();
  initAutocompletes();
  initFileInputs();
  initRangeInput();
  initRangeInputs();
  initJqueryTagInput();
  initBulmaTags();
  initBulmaSteps();
  initBulmaIconpicker();
  initBulmaCalendar();
  initComboBox();
  initImageComboBox();
  initStackedComboBox(); //4. Popups

  initPopovers();
  initTooltips();
  initModals(); //5. Carousels

  initBasicCarousel();
  initVerticalCarousel();
  initFlatCarousel();
  initImageCarousel();
  initSingleImageCarousel();
  initMultipleImagesCarousel(); //6. Video

  initVideoEmbed();
  initBackgroundVideo(); //7. Counters

  initCounters(); //8. Accordions

  initSimpleAccordion();
  initAccordions(); //9. File uploader

  initFileUploader(); //10. Toasts

  initToasts(); //11. Demo

  initDemo();
  initScrollspyNav();
  initParallax();
  initBackToTop(); //12. Utility functions

  initGitem();
  initAnchorScroll();
  initQuickview();
  initScrollReveal();
});