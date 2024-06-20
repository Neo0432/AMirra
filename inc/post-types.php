<?php
//Страница Пресс-центр
function services_posttype()
{
$args = array(
	'label'  => 'Услуги',
	'public' => true,
	'menu_icon' => 'dashicons-list-view',
	'supports' => array('title', 'editor'),
);

register_post_type('services', $args);
}

add_action('init', 'services_posttype');
?>

<?php
function employee_posttype()
{
$args = array (
    'label' => 'Специалисты',
    'public' => true,
    'menu_icon' => 'dashicons-businessman',
    'supports' => array('title', 'editor'),
);

register_post_type('employee', $args);
}

add_action('init', 'employee_posttype');
?>

<?php
function feedback_posttype()
{
$args = array (
    'label' => 'Отзывы',
    'public' => true,
    'menu_icon' => 'dashicons-feedback',
    'supports' => array('title', 'editor'),
);

register_post_type('feedback', $args);
}

add_action('init', 'feedback_posttype');
?>

<?php
function articles_posttype()
{
$args = array (
    'label' => 'Статьи',
    'public' => true,
    'menu_icon' => 'dashicons-media-document',
    'supports' => array('title', 'editor'),
);

register_post_type('articles', $args);
}

add_action('init', 'articles_posttype');
?>