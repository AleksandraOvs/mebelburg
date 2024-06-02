<?php

function custom_pagination() {
    global $wp_query;
	$max = $wp_query->max_num_pages;  
    $pages = paginate_links( array(
    'type' => 'array',
    'prev_next' => TRUE,
    'prev_text' => '<svg width="41" height="8" viewBox="0 0 41 8" fill="none" xmlns="http://www.w3.org/2000/svg">
    //         <path d="M0.646446 3.64644C0.451183 3.84171 0.451183 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82842L1.70711 4L4.53553 1.17157C4.7308 0.976308 4.7308 0.659725 4.53553 0.464463C4.34027 0.269201 4.02369 0.269201 3.82843 0.464463L0.646446 3.64644ZM41 3.5L1 3.5L1 4.5L41 4.5L41 3.5Z" fill="#18223D"/>
    //         </svg>',
    'next_text' => '<svg width="41" height="8" viewBox="0 0 41 8" fill="none" xmlns="http://www.w3.org/2000/svg">
    //         <path d="M40.3536 3.64644C40.5488 3.84171 40.5488 4.15829 40.3536 4.35355L37.1716 7.53553C36.9763 7.73079 36.6597 7.73079 36.4645 7.53553C36.2692 7.34027 36.2692 7.02369 36.4645 6.82842L39.2929 4L36.4645 1.17157C36.2692 0.976308 36.2692 0.659725 36.4645 0.464463C36.6597 0.269201 36.9763 0.269201 37.1716 0.464463L40.3536 3.64644ZM-4.37114e-08 3.5L40 3.5L40 4.5L4.37114e-08 4.5L-4.37114e-08 3.5Z" fill="#18223D"/>
    //         </svg>',
    ) );
    if( is_array( $pages ) ) {
    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
    echo '<ul class="pagination__list"';
    foreach ( $pages as $page ) {
    echo '<li class="pagination__item">' . $page . '</li>';
    }
    echo '</ul>';
    }
    }