<?php
namespace ccxt;

// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------

function test_order($exchange, $order, $symbol, $now) {
    assert ($order);
    assert (is_array($order) && array_key_exists('id', $order));
    assert (gettype($order['id']) === 'string');
    assert (is_array($order) && array_key_exists('timestamp', $order));
    assert ((is_float($order['timestamp']) || is_int($order['timestamp'])));
    assert ($order['timestamp'] > 1230940800000); // 03 Jan 2009 - first block
    assert ($order['timestamp'] < $now);
    assert (is_array($order) && array_key_exists('lastTradeTimestamp', $order));
    assert (is_array($order) && array_key_exists('datetime', $order));
    assert ($order['datetime'] === $exchange->iso8601 ($order['timestamp']));
    assert (is_array($order) && array_key_exists('status', $order));
    assert (($order['status'] === 'open') || ($order['status'] === 'closed') || ($order['status'] === 'canceled'));
    assert (is_array($order) && array_key_exists('symbol', $order));
    assert ($order['symbol'] === $symbol);
    assert (is_array($order) && array_key_exists('type', $order));
    assert (gettype($order['type']) === 'string');
    assert (is_array($order) && array_key_exists('side', $order));
    assert (($order['side'] === 'buy') || ($order['side'] === 'sell'));
    assert (is_array($order) && array_key_exists('price', $order));
    assert ((is_float($order['price']) || is_int($order['price'])));
    assert ($order['price'] > 0);
    assert (is_array($order) && array_key_exists('amount', $order));
    assert ((is_float($order['amount']) || is_int($order['amount'])));
    assert ($order['amount'] >= 0);
    assert (is_array($order) && array_key_exists('filled', $order));
    if ($order['filled'] !== null) {
        assert ((is_float($order['filled']) || is_int($order['filled'])));
        assert (($order['filled'] >= 0) && ($order['filled'] <= $order['amount']));
    }
    assert (is_array($order) && array_key_exists('remaining', $order));
    if ($order['remaining'] !== null) {
        assert ((is_float($order['remaining']) || is_int($order['remaining'])));
        assert (($order['remaining'] >= 0) && ($order['remaining'] <= $order['amount']));
    }
    assert (is_array($order) && array_key_exists('trades', $order));
    if ($order['trades']) {
        assert (gettype($order['trades']) === 'array' && count(array_filter(array_keys($order['trades']), 'is_string')) == 0);
    }
    assert (is_array($order) && array_key_exists('fee', $order));
    $fee = $order['fee'];
    if ($fee) {
        assert ((is_float($fee['cost']) || is_int($fee['cost'])));
        if ($fee['cost'] !== 0) {
            assert (gettype($fee['currency']) === 'string');
        }
    }
    assert (is_array($order) && array_key_exists('info', $order));
    assert ($order['info']);
}


