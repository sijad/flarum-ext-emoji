<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Assets('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->asset(__DIR__.'/less/forum.less'),

    new Extend\FormatterConfiguration(function (Configurator $config) {
        $config->Emoticons->add(':)', '🙂');
        $config->Emoticons->add(':D', '😃');
        $config->Emoticons->add(':P', '😛');
        $config->Emoticons->add(':(', '🙁');
        $config->Emoticons->add(':|', '😐');
        $config->Emoticons->add(';)', '😉');
        $config->Emoticons->add(':\'(', '😢');
        $config->Emoticons->add(':O', '😮');
        $config->Emoticons->add('>:(', '😡');
    })
];
