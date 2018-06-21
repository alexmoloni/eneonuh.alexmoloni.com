const $ = jQuery.noConflict();

function getProductsFromWoocommerce() {
  //connect to woocommerce Rest Api
  function make_base_auth(user, password) {
    var tok = user + ':' + password;
    var hash = btoa(tok);
    return "Basic " + hash;
  }

  var auth = make_base_auth('ck_419652ef94bd65f963e6af8f234960f61ba96b89', 'cs_5f0a49a2a0c2f98358a7560485c141e65a1c9ef5');


  $.ajax({
    url: "/wp-json/wc/v2/products?orderby=title",
    method: 'GET',
    beforeSend: function (req) {
      req.setRequestHeader('Authorization', auth);
    }
  })
   .done(function (data) {
     console.log(data, 'a');
   });
}

function featuredCategories() {
  $('#featured-categories .box .btn-pink').hover(
    //handler in
    function () {
      $(this).parents('.box').addClass('on-hover')
    },
    //handler out
    function () {
      $(this).parents('.box').removeClass('on-hover')
    },
  )
}

function featuredCategoriesSlider() {
  $(".featured-categories-slider").slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 690,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
}


export default function () {
  getProductsFromWoocommerce();
  featuredCategories();
  featuredCategoriesSlider();

}

