<?php
class CustomFunctions {
    public function __construct() {
        // Инициализация функций
        add_action('init', [$this, 'initialize']);
    }

    public function initialize() {
        // Ваш код здесь, например, добавление шорткода
        add_shortcode('custom_shortcode', [$this, 'render_shortcode']);
    }

    public function render_shortcode($atts) {
        return '<div>Это кастомный шорткод!</div>';
    }
}

// Создание экземпляра класса
new CustomFunctions();
