<?php
remove_role('author'); 
remove_role('contributor'); 
remove_role('editor'); 

// $result = add_role(
//     'wait_member',
//     __( 'Ожидает добавления' ),
//     array( 'read' => true, )
// );

$result = add_role(
    'designer',
    __( 'Дизайнер' ),
    array( 'read' => true, )
);
