<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51HISwMIXWJoGOKZWMXoKAWXgTEN4JJh87OijFUL7TwUNHhpvg6AN79qZmLgp3tq477UynMAJxOV6TY1EepWMcagr00cjq4ue0U');

$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
      'price_data' => [
        'currency' => 'usd',
        'product_data' => [
          'name' => 'T-shirt',
        ],
        'unit_amount' => 2000,
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'https://example.com/success',
    'cancel_url' => 'https://example.com/cancel',
  ]);

  echo  json_encode([ 'id' => $session->id ]);