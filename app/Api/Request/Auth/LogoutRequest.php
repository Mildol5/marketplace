<?php

namespace App\Api\Request\Auth;


use App\Api\Request\Request;
use App\Api\Response\Response;
use Illuminate\Support\Collection;

/**
 * API logout request
 */
class LogoutRequest extends Request
{

    /**
     * @inheritDoc
     */
    protected function doResolve($name, Collection $parameters)
    {
        \Auth::logout();

        \Session::invalidate();

        return new Response(true, []);
    }
}