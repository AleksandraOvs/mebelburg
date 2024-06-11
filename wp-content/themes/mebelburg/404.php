<?php get_header() ?>
<section class="page-section _e404">
    <div class="container">
        <div class="_e404__inner">
            <div class="_e404__inner__error">
                4<span>0</span>4
                <div class="error-text">
                    <p>ошибка</p>
                </div>
            </div>
            <div class="_e404__inner__text">
                <p class="_e404__inner__text__description">
                    Хм... странно, что то пошло не так. Возможно страница не существует, или неправильно введён адрес
                </p>

                <a href="<?php echo site_url() ?>" class="button">Вернуться на Главную</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>