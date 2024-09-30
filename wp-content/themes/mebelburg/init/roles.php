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


function wph_login_redirect($redirect_to, $request, $user) {
    global $user;
    if (isset($user->roles) && is_array($user->roles)) {
        if (in_array('administrator', $user->roles)) {
            return $redirect_to;
        } else {
            return home_url();
        }
    } else {
        return $redirect_to;
    }
}
add_filter('login_redirect', 'wph_login_redirect', 10, 3);
//редирект пользователей после авторизации на главную end

//запрет доступа к админке start
function wph_noadmin() {
    if (is_admin() && !current_user_can('administrator')) {
        wp_redirect(home_url());
        exit;
    } }
add_action('init', 'wph_noadmin'); 
//запрет доступа к админке end
