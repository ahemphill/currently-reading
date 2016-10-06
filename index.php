<?php

$addr = 'http://www.goodreads.com/review/list?v=2&id=' . getenv( GOODREADS_ID ) . '&shelf=currently-reading&per_page=1&key=' . getenv( GOODREADS_KEY );

$xml = file_get_contents( $addr );
$data = simplexml_load_string( $xml );

echo '<em>' . $data->reviews->review->book->title . '</em> by ' . $data->reviews->review->book->authors->author->name;
