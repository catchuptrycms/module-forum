<?php namespace Cms\Modules\Forum\Http\Controllers\Api\V1;

use Cms\Modules\Core\Http\Controllers\BaseApiController;

class BaseController extends BaseApiController
{

    public function getIndex()
    {
        return $this->sendOK('ok');
    }
}
