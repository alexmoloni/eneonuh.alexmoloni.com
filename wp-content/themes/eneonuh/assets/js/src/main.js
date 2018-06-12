const $ = jQuery.noConflict();
import frontPage from './imports/front-page.js';
import header from './imports/header.js';

$(document).ready(function () {
  frontPage();
  header();
});
