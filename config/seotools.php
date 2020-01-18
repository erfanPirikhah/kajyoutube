<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "کاج یوتاب نوآوری بالاتر از تصور", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "در کاج یوتاب تمام تلاش خود را به کار خواهیم بست تا شما را به بهترین نماینده ی شرکت در معرفی خدمات متنوع به دیگر مشتریان تبدیل کنیم. ما باور داریم ترکیب معجزه آسای دانش و هنر می تواند پاسخگوی تمامی نیازهای مشتریان ما باشد. در تمامی فرایندهای تولید محصولات شما نیز در کنار ما بوده و از نزدیک شاهد خلق اثر هنری همکاران ما خواهید بود. ",
            'separator'    => ' - ',
            'keywords'     => ["تبلیغات, اندروید, طراحی سایت, Android, تولید محتوا, مدیریت پیج, IOS, اینستاگرام, کاج یوتاب, تیزر, یوتاب,شرکت تبلیغاتی"],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => "index, follow", // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'کاج یوتاب - نوآوری بالاتر از تصور', // set false to total remove
            'description' => "در کاج یوتاب تمام تلاش خود را به کار خواهیم بست تا شما را به بهترین نماینده ی شرکت در معرفی خدمات متنوع به دیگر مشتریان تبدیل کنیم. ما باور داریم ترکیب معجزه آسای دانش و هنر می تواند پاسخگوی تمامی نیازهای مشتریان ما باشد. در تمامی فرایندهای تولید محصولات شما نیز در کنار ما بوده و از نزدیک شاهد خلق اثر هنری همکاران ما خواهید بود. ",
            'url'         => "http://office.kajyoutube.com/", // Set null for using Url::current(), set false to total remove
            'type'        => "website",
            'site_name'   => "کاج یوتاب",
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'کاج یوتاب - نوآوری بالاتر از تصور', // set false to total remove
            'description' => "در کاج یوتاب تمام تلاش خود را به کار خواهیم بست تا شما را به بهترین نماینده ی شرکت در معرفی خدمات متنوع به دیگر مشتریان تبدیل کنیم. ما باور داریم ترکیب معجزه آسای دانش و هنر می تواند پاسخگوی تمامی نیازهای مشتریان ما باشد. در تمامی فرایندهای تولید محصولات شما نیز در کنار ما بوده و از نزدیک شاهد خلق اثر هنری همکاران ما خواهید بود. ",
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'images'      => [],
        ],
    ],
];
