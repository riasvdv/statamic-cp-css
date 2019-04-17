<?php

namespace Statamic\Addons\CpCss;

use Statamic\Extend\Listener;

class CpCssListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
        'cp.add_to_head' => ['addCss', 'addJs', 'addConfigCSS'],
    ];

    public function addCss()
    {
        return $this->css->tag('codemirror.css');
    }

    public function addJs()
    {
        return $this->js->tag('codemirror.js').$this->js->tag('cm-css.js');
    }

    public function addConfigCSS()
    {
        return $this->css->inline($this->getConfig('css'));
    }
}
