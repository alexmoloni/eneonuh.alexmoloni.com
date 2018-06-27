jQuery( function( $ ) {
  $(".input-text.qty.text").bind('keyup mouseup', function () {
    var value = $(this).val();
    $("#product_quantity").val(value)
  });

  if ( typeof wc_add_to_cart_params === 'undefined' )
    return false;

  $( document ).on( 'click', '.single_add_to_cart_button', function(e) {
    e.preventDefault();
    $variation_form = $( this ).closest( '.variations_form' );
    var var_id = $variation_form.find( 'input[name=variation_id]' ).val();
    var product_id = $variation_form.find( 'input[name=product_id]' ).val();
    var quantity = $variation_form.find( 'input[name=quantity]' ).val();
    $( '.ajaxerrors' ).remove();
    var item = {},
      check = true;
    variations = $variation_form.find( 'select[name^=attribute]' );
    if ( !variations.length) {
      variations = $variation_form.find( '[name^=attribute]:checked' );
    }
    if ( !variations.length) {
      variations = $variation_form.find( 'input[name^=attribute]' );
    }
    variations.each( function() {
      var $this = $( this ),
        attributeName = $this.attr( 'name' ),
        attributevalue = $this.val(),
        index,
        attributeTaxName;
      $this.removeClass( 'error' );
      if ( attributevalue.length === 0 ) {
        index = attributeName.lastIndexOf( '_' );
        attributeTaxName = attributeName.substring( index + 1 );
        $this
        .addClass( 'required error' )
        .before( '
        Please select ' + attributeTaxName + '

        ' )
        check = false;
      } else {
        item[attributeName] = attributevalue;
      }
    } );

    if ( !check ) {
      return false;
    }

    var $thisbutton = $( this );
    if ( $thisbutton.is( '.single_add_to_cart_button' ) ) {
      $thisbutton.removeClass( 'added' );
      $thisbutton.addClass( 'loading' );
      if ($(".variations_form")[0]){
        var product_id = $variation_form.find( 'input[name=product_id]' ).val();
        var quantity = $variation_form.find( 'input[name=quantity]' ).val();
        var data = {
          action: 'bodycommerce_ajax_add_to_cart_woo',
          product_id: product_id,
          quantity: quantity,
          variation_id: var_id,
          variation: item
        };
      }
      else {
        var product_id = $("#product_id").val();
        var quantity = $("#product_quantity").val();
        var data = {
          action: 'bodycommerce_ajax_add_to_cart_woo_single',
          product_id: product_id,
          quantity: quantity
        };
      }
      $( 'body' ).trigger( 'adding_to_cart', [ $thisbutton, data ] );
      $.post( wc_add_to_cart_params.ajax_url, data, function( response ) {
        if ( ! response )
          return;
        var this_page = window.location.toString();
        this_page = this_page.replace( 'add-to-cart', 'added-to-cart' );
        if ( response.error && response.product_url ) {
          window.location = response.product_url;
          return;
        }
        if ( wc_add_to_cart_params.cart_redirect_after_add === 'yes' ) {
          window.location = wc_add_to_cart_params.cart_url;
          return;
        } else {
          $thisbutton.removeClass( 'loading' );
          var fragments = response.fragments;
          var cart_hash = response.cart_hash;
          if ( fragments ) {
            $.each( fragments, function( key ) {
              $( key ).addClass( 'updating' );
            });
          }
          $( '.shop_table.cart, .updating, .cart_totals' ).fadeTo( '400', '0.6' ).block({
            message: null,
            overlayCSS: {
              opacity: 0.6
            }
          });
          $thisbutton.addClass( 'added' );
          if ( fragments ) {
            $.each( fragments, function( key, value ) {
              $( key ).replaceWith( value );
            });
          }
          $( '.widget_shopping_cart, .updating' ).stop( true ).css( 'opacity', '1' ).unblock();
          $( '.shop_table.cart' ).load( this_page + ' .shop_table.cart:eq(0) > *', function() {
            $( '.shop_table.cart' ).stop( true ).css( 'opacity', '1' ).unblock();
            $( document.body ).trigger( 'cart_page_refreshed' );
          });
          $( '.cart_totals' ).load( this_page + ' .cart_totals:eq(0) > *', function() {
            $( '.cart_totals' ).stop( true ).css( 'opacity', '1' ).unblock();
          });
        }
      });
      return false;
    } else {
      return true;
    }
  });
});