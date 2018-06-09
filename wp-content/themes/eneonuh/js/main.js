var $ = jQuery.noConflict();

function make_base_auth(user, password) {
  var tok = user + ':' + password;
  var hash = btoa(tok);
  return "Basic " + hash;
}

var auth = make_base_auth('ck_419652ef94bd65f963e6af8f234960f61ba96b89', 'cs_5f0a49a2a0c2f98358a7560485c141e65a1c9ef5');


$.ajax({
  url: "/wp-json/wc/v2/products",
  method: 'GET',
  beforeSend: function (req) {
    req.setRequestHeader('Authorization', auth);
  }
})
 .done(function (data) {
   console.log(data);
 });