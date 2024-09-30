<?php
/*
Template Name: Login
*/

if ($_POST) {

    global $wpdb;

    //Проверяем все поля ввода перед запросом SQL
    $username = $wpdb->escape($_REQUEST['username']);
    $password = $wpdb->escape($_REQUEST['password']);
    $remember = $wpdb->escape($_REQUEST['rememberme']);

    if ($remember) $remember = "true";
    else $remember = "false";

    $login_data = array();
    $login_data['user_login'] = $username;
    $login_data['user_password'] = $password;
    $login_data['remember'] = $remember;

    $user_verify = wp_signon($login_data, false);

    if (is_wp_error($user_verify)) {
        //Передаем параметр error для использования его потом в скрипте
        header("Location: " . home_url() . "/login?error=true");
    }elseif (is_admin() && ! current_user_can( 'administrator' )){
        echo "<script>window.location='" . home_url('wp-admin') . "'</script>";
}else {
        echo "<script>window.location='" . home_url() . "'</script>";
        exit();
    }
}
get_header();
?>

<section class="page-section" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2><?php the_title() ?></h2>
            </div>

            <div class="page-section__content">
                <div class="page-section__description _login">
                    <p id="message">Введите данные для входа на сайт</p>
                </div>
                
                <form id="login" name="form" action="<?php echo home_url(); ?>/login/" method="post">
                    <p>
                        <input id="username" type="text" placeholder="Логин" name="username">
                    </p>
                    <p>
                        <input id="password" type="password" placeholder="Пароль" name="password">
                    </p>
                    <input id="submit" type="submit" name="submit" value="Отправить">
                </form>
                <p><a href="<?= home_url(); ?>/lost-password/">Забыли пароль</a></p>
                <script>
                    let message = document.getElementById('message');
                    if (location.search.indexOf('error') > -1) {
                        message.innerHTML = 'Неверные учетные данные';
                        message.innerHTML += '<br>Введите заново или перейдите на страницу <a href="<?php echo home_url(); ?>/register">регистрации</a>';
                    }
                </script>
            </div>


        </div>

    </div>
</section>



<?php
get_footer();
?>