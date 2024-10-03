<?php
remove_role('author'); 
remove_role('contributor'); 
remove_role('editor'); 

$result = add_role(
    'wait_member',
    __( 'Ожидает добавления' ),
    array( 'read' => true, )
);

$result = add_role(
    'designer',
    __( 'Дизайнер' ),
    array( 'read' => true, )
);


// function wph_login_redirect($redirect_to, $request, $user) {
//     global $user;
//     if (isset($user->roles) && is_array($user->roles)) {
//         if (in_array('administrator', $user->roles)) {
//             return $redirect_to;
//         } elseif (in_array('wait_member', $user->roles)){
//             return site_url('loyalty');
//         }else {
//             //return home_url();
//             echo 'redirect';
//         }
//     } else {
//         return $redirect_to;
//     }
// }
// add_filter('login_redirect', 'wph_login_redirect', 10, 3);
//редирект пользователей после авторизации на главную end

//запрет доступа к админке start


// function wph_noadmin() {
//     if (is_admin() && !current_user_can('administrator')) {
//         wp_redirect(home_url());
//         exit;
//     } }
// add_action('init', 'wph_noadmin'); 


//запрет доступа к админке end


function hello_world_cf7_func() {
    return "Привет! Я шорткод для Contact Form 7!";
}
wpcf7_add_form_tag('hello_world', 'hello_world_cf7_func');