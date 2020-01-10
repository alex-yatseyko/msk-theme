<?php 
// Change dashboard Posts to Новости
add_action( 'init', 'cp_change_post_object' );

function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Новости';
        $labels->singular_name = 'Новости';
        $labels->add_new = 'Добавить Новости';
        $labels->add_new_item = 'Добавить Новости';
        $labels->edit_item = 'Редактировать Новости';
        $labels->new_item = 'Новости';
        $labels->view_item = 'Посмотреть Новости';
        $labels->search_items = 'Найти Новости';
        $labels->not_found = 'Новости не найдены';
        $labels->not_found_in_trash = 'Не найдено новостей в корзине';
        $labels->all_items = 'Все Новости';
        $labels->menu_name = 'Новости';
        $labels->name_admin_bar = 'Новости';
}
