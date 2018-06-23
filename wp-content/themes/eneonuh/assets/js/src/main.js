const $ = jQuery.noConflict();
import './vendors/svgeezy.min'
import './vendors/picturefill.min'
import frontPage from './imports/front-page.js';
import header from './imports/header.js';

$(document).ready(function () {
  console.log('svgeezy');
  svgeezy.init(false, 'png');
  frontPage();
  header();
});
