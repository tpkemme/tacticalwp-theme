<?php
    // If Google Analytics tracking code is set, display it now
    $ga = twp_get_option('twp_google_analytics');

    if ( ! empty($ga) ) {
	echo $ga;
    }
