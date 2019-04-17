<?php

namespace Statamic\Addons\CpCss;

use Statamic\Extend\Fieldtype;

class CpCssFieldtype extends Fieldtype
{
    /**
     * The blank/default value.
     *
     * @return array
     */
    public function blank()
    {
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param mixed $data
     *
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param mixed $data
     *
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }
}
