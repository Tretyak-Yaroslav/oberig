<?php

namespace App\Cms;

use Vis\Builder\Setting\AdminBase;

class Admin extends AdminBase
{
    public function menu()
    {
        return [
            [
                'title' => 'Структура сайта',
                'icon'  => 'sitemap',
                'link'  => '/tree',
            ],

            [
                'title' => 'Меню',
                'icon'  => 'chart-network',
                'link'  => '/menu_footer_header',
                'submenu' => array(
                    array(
                        'title' => "Меню основное",
                        'link'  => '/menu_header',
                    ),
                    array(
                        'title' => "Меню футера",
                        'link'  => '/menu_footer',
                    ),
                ),
            ],

            [
                'title' => 'Отзывы',
                'icon'  => 'comments',
                'link'  => '/reviews',
            ],

            [
                'title' => 'Доктора',
                'icon'  => 'user-md',
                'link'  => '/doctors_folder',
                'submenu' => [
                    [
                        'title' => 'Доктора',
                        'link'  => '/doctors',
                    ],
                    [
                        'title' => 'Специальности',
                        'link'  => '/doctors_specialties',
                    ],
                ],
            ],

            [
                'title' => 'Отделения',
                'icon'  => 'building',
                'link'  => '/departments',
             ],

           /* [
                'title' => 'Партнёры',
                'icon'  => 'handshake-alt',
                'link'  => '/partners',
            ],*/

            [
                'title' => 'Записи',
                'icon'  => 'calendar-check',
                'link'  => '/appointments_folder',
                'submenu' => [
                    [
                        'title' => 'На приём',
                        'link'  => '/appointments',
                    ],
                    [
                        'title' => 'На консультацию',
                        'link'  => '/requests_consultations',
                    ],
                ],
            ],

            [
                'title' => 'Услуги',
                'icon'  => 'stethoscope',
                'link'  => '/services',
            ],

            [
                'title' => 'Подготовка к обслед.',
                'icon'  => 'ambulance',
                'link'  => '/preparation_surveys',
            ],

            [
                'title' => 'Болезни',
                'icon'  => 'journal-whills',
                'link'  => '/illnesses',
            ],

            [
                'title' => 'Слайдеры на главной',
                'icon'  => 'presentation',
                'link'  => '/sliders_on_main',
            ],

            [
                'title' => 'Медиаматериалы',
                'icon'  => 'newspaper',
                'link'  => '/news_folder',
                'submenu' => [
                    [
                        'title' => 'Новости',
                        'link'  => '/news',
                    ],
                    [
                        'title' => 'Теги',
                        'link'  => '/tags',
                    ],
                    [
                        'title' => 'Разделы',
                        'link'  => '/categories',
                    ],
                ],
            ],

            array(
                'title' => 'Медиахранилище',
                'icon'  => 'images',
                'link' => 'image_storage',
                'submenu' => array(
                    array(
                        'title' => "Изображения",
                        'link'  => '/image_storage/images',
                    ),
                    array(
                        'title' => "Галереи",
                        'link'  => '/image_storage/galleries',
                    ),
                    array(
                        'title' => "Видео",
                        'link'  => '/image_storage/videos',
                    ),
                    array(
                        'title' => "Видеогалереи",
                        'link'  => '/image_storage/video_galleries',
                    ),
                    array(
                        'title' => "Документы",
                        'link'  => '/image_storage/documents',
                    ),
                    array(
                        'title' => "Теги",
                        'link'  => '/image_storage/tags',
                    ),
                )
            ),

            [
                'title' => 'Вакансии',
                'icon'  => 'briefcase',
                'link'  => '/vacancies_folder',
                'submenu' => [
                    [
                        'title' => 'Вакансии',
                        'link'  => '/vacancies',
                    ],
                    [
                        'title' => 'Специальности',
                        'link'  => '/vacancy_specialty',
                    ],
                    [
                        'title' => 'Отклики',
                        'link'  => '/vacancies_feedback',
                    ],
                ],
            ],

            [
                'title' => 'Настройки',
                'icon'  => 'cog',
                'link'  => '/settings_block',
                'submenu' => [
                    [
                        'title' => 'Управление',
                        'link'  => '/settings/settings_all',
                    ],
                    [
                        'title' => 'Переводы CMS',
                        'link'  => '/translations_cms/phrases',
                    ],
                    [
                        'title' => 'Контроль изменений',
                        'link'  => '/revisions',
                    ],
                    [
                        'title' => 'Типы',
                        'link'  => '/types',
                    ],

                ],
            ],

            [
                'title' => 'Переводы',
                'icon'  => 'language',
                'link'  => '/translations/phrases',
            ],

            [
                'title' => 'Упр. пользователями',
                'icon'  => 'user',
                'link'  => '/users_group',
                'submenu' => [
                    [
                        'title' => 'Пользователи',
                        'link'  => '/users',
                    ],

                    [
                        'title' => 'Группы',
                        'link'  => '/groups',
                    ],

                ],
            ],
        ];
    }
}
