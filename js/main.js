$( document ).ready( function() {

  $( 'a.generate-qr-code-link' ).on( 'click', function ( e ) {
    e.preventDefault();

    let data = {
      name: $( '.gcc-qr-code--meta-box-wrapper' ).data( 'name' ),
      id: $( '.gcc-qr-code--meta-box-wrapper' ).data( 'id' ),
      action: 'gcc_qr_code_generate',
    }

    $.ajax({
      url: window.ajaxurl,
      method: 'POST',
      dataType: 'json',
      data: data,
  }).done(function(response) {
    let src = '<a class="qrcode-img-wrapper" href="'+ response.url + '" target="_blank"><img src="' + response.url + '"></a>';
    $('.gcc-qr-code--meta-box-wrapper').append(src);
  });

  });

});
