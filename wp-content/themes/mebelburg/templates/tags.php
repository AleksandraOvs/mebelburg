<?php 
$post_id = get_the_ID(); //получаем ID текущего поста
 
// echo get_the_tags( $post_id ); // так не сработает, те сработает, но выведет array(), тк мы получаем массив объектов
// Будьте внимательны!!!
 
//чтобы вывести все метки, мы должны использовать цикл
$post_tags = get_the_tags( $post_id );
 
if ( $post_tags ) { //проверка на наличие меток, чтобы не выводилось только название с пустотой
 
	
	echo '<div class="post-header__tags">';
 
	foreach ( $post_tags as $post_tag ) { //запускаем цикл
 
		echo '<a class="post-tag" href="' . get_term_link( $post_tag->term_id ) . '">' . $post_tag->name . '</a>' ;
 
	} //заканчиваем цикл
 
	echo '</div>';
 
}

?>

