<?php
  $riel = 2103942;
  $riel_to_usd_exchange_rate = 4066.5;

  $kyat = 19092;
  $kyat_to_usd_exchange_rate = 1644.8675;

  $krones = 109;
  $krones_to_usd_exchange_rate = 8.6965;

  $lek = 9094;
  $lek_to_usd_exchange_rate = 103.28;

  $currency_exchange_fee = 1;

  echo "Riel = $riel";
  echo "\nKyat = $kyat";
  echo "\nKrones = $krones";
  echo "\nLek = $lek";

  echo "\n\nValues in USD:";
  $riel_to_usd = $riel / $riel_to_usd_exchange_rate - $currency_exchange_fee;
  echo "\nRiel = $riel_to_usd" . "$";
  $kyat_to_usd = $kyat / $kyat_to_usd_exchange_rate - $currency_exchange_fee;
  echo "\nKyat = $kyat_to_usd" . "$";
  $krones_to_usd = $krones / $krones_to_usd_exchange_rate - $currency_exchange_fee;
  echo "\nKrones = $krones_to_usd" . "$";
  $lek_to_usd = $lek / $lek_to_usd_exchange_rate - $currency_exchange_fee;
  echo "\nLek = $lek_to_usd" . "$";