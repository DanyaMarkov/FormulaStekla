<?php

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'formulastekla_scripts');
function formulastekla_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('main',  get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('calculator',  get_template_directory_uri() . '/css/calculator.css');
  wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0.0', true);
  wp_enqueue_script('script_calculator', get_template_directory_uri() . '/js/calc.js', array(), '1.0.0', true);
}
