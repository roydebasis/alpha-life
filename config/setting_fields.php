<?php

return [
    'app' => [
        'title' => 'General',
        'desc'  => 'All the general settings for application.',
        'icon'  => 'fas fa-cube',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'app_name', // unique name for field
                'label' => 'App Name', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Laravel Starter', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'footer_text', // unique name for field
                'label' => 'Footer Text', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '<a href="https://github.com/nasirkhan/laravel-starter/">Built with ♥ from Bangladesh</a>', // default value if you want
            ],
            [
                'type'  => 'checkbox', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'show_copyright', // unique name for field
                'label' => 'Show Copyright', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '1', // default value if you want
            ],
            [
                'type'  => 'textarea', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'address', // unique name for field
                'label' => 'Address', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
            [
                'type'  => 'file', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'mobile_app_image', // unique name for field
                'label' => 'Mobile App Image', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
        ],
    ],
    'email' => [
        'title' => 'Email',
        'desc'  => 'Email settings for app',
        'icon'  => 'fas fa-envelope',

        'elements' => [
            [
                'type'  => 'email', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'email', // unique name for field
                'label' => 'Email', // you know what label it is
                'rules' => 'required|email', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'info@example.com', // default value if you want
            ],
        ],

    ],
    'social' => [
        'title' => 'Social Profiles',
        'desc'  => 'Link of all the social profiles.',
        'icon'  => 'fas fa-users',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'facebook_url', // unique name for field
                'label' => 'Facebook Page URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'twitter_url', // unique name for field
                'label' => 'Twitter Profile URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'instagram_url', // unique name for field
                'label' => 'Instagram Account URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'linkedin_url', // unique name for field
                'label' => 'LinkedIn URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'youtube_url', // unique name for field
                'label' => 'Youtube Channel URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
        ],

    ],
    'meta' => [
        'title' => 'Meta ',
        'desc'  => 'Application Meta Data',
        'icon'  => 'fas fa-globe-asia',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_site_name', // unique name for field
                'label' => 'Meta Site Name', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Awesome Laravel | A Laravel Starter Project', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_description', // unique name for field
                'label' => 'Meta Description', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'A CMS like modular starter application project built with Laravel.', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_keyword', // unique name for field
                'label' => 'Meta Keyword', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Web Application, Laravel,Laravel starter,Bootstrap,Admin,Template,Open,Source, nasir khan, nasirkhan', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_image', // unique name for field
                'label' => 'Meta Image', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'img/default_banner.jpg', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_fb_app_id', // unique name for field
                'label' => 'Meta Facebook App Id', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '569561286532601', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_twitter_site', // unique name for field
                'label' => 'Meta Twitter Site Account', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_twitter_creator', // unique name for field
                'label' => 'Meta Twitter Creator Account', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
        ],
    ],
    'buttons' => [
        'title' => 'Home 4 Buttons',
        'desc'  => 'Home 4 Buttons',
        'icon'  => 'fas fa-home',
        'col'   => 4,

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_one_icon', // unique name for field
                'label' => 'Button One Icon Class', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'flaticon-calculate6', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_one_text', // unique name for field
                'label' => 'Button One Text', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Premium Calculator', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_one_link', // unique name for field
                'label' => 'Button One Link', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'http://alphalife.com.bd/page/premium-calculator', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_two_icon', // unique name for field
                'label' => 'Button Two Icon Class', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'flaticon-paint104', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_two_text', // unique name for field
                'label' => 'Button Two Text', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Insurance Plan', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_two_link', // unique name for field
                'label' => 'Button Two Link', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'http://alphalife.com.bd/plans?category=1', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_three_icon', // unique name for field
                'label' => 'Button Three Icon Class', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'flaticon-paint104', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_three_text', // unique name for field
                'label' => 'Button Three Text', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Supplemantary Plan', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_three_link', // unique name for field
                'label' => 'Button Three Link', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'http://alphalife.com.bd/plans?category=2', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_four_icon', // unique name for field
                'label' => 'Button Four Icon Class', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'flaticon-paint104', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_four_text', // unique name for field
                'label' => 'Button Four Text', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Recent News', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'button_four_link', // unique name for field
                'label' => 'Button Four Link', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'http://alphalife.com.bd/news', // default value if you want
            ],
        ],
    ],
    'analytics' => [
        'title' => 'Analytics',
        'desc'  => 'Application Analytics',
        'icon'  => 'fas fa-chart-line',

        'elements' => [
            [
                'type'  => 'textarea', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'google_analytics', // unique name for field
                'label' => 'Google Analytics', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                // 'value' => '123', // any class for input
                'value' => '', // default value if you want
                'help'     => 'Paste the tracking code in this field.', // Help text for the input field.
                'display'  => 'raw', // Help text for the input field.
            ],
        ],
    ],
    'map' => [
        'title' => 'Map',
        'desc'  => 'Google Map Embed Code',
        'icon'  => 'fas fa-map',

        'elements' => [
            [
                'type'  => 'textarea', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'google_map_embed_code', // unique name for field
                'label' => 'Google Map', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
                'help'     => 'Paste Google Map Embed Code', // Help text for the input field.
                'display'  => 'raw', // Help text for the input field.
            ],
        ],
    ],
];
