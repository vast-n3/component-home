<?php

namespace Neoan3\Components;

use Neoan3\Frame\Vastn3;

/**
 * Class Home
 * @package Neoan3\Components
 */
class Home extends Vastn3
{
    /**
     * @var array
     */
    private array $vueComponents = [];

    /**
     * init route
     */
    function init()
    {
        $this
            ->hook('main', 'home', [])
            ->addHead('title','Welcome to vast-n3')
            ->vueComponents($this->vueComponents, [])
            ->output();
    }

    /**
     * API test
     * @param array $parameters
     * @return array
     */
    function getHome($parameters = [])
    {
        return [
            'msg' => 'API response',
            'sent_params' => $parameters
        ];
    }
}
