<section class="tags-cloud">
    <div class="container">
        <h2>ПОИСК — путеводитель по науке</h2>

        <div class="tags-cloud">
            <?php
        $tags_list = get_tags(); // записываем в переменную $posts_tags_list выводимые функцией значения
 
 if ( $tags_list ) {    // проверяем существует ли данная переменная
  
     echo '<div class="tag-cloud">';
  
         foreach( $tags_list as $tag ) {  // запускем цикл и обращаемся к каждому объекту массива
  
             echo '<a class="post-tag" href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a>';
  
         } 	//заканчиваем цикл
  
     echo '</div>';
  
 } //закрываем условие if
 ?>
        </div>
    </div>
</section>