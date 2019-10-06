<?php

function generateQRCode( $data ) {
  if( !$data ) {
    return;
  }

  QRcode::png( $data );

}
