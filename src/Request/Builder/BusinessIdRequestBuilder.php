<?php

namespace Isolta\OpenData\Request\Builder;

use Isolta\OpenData\Traits\BusinessIdTrait;

class BusinessIdRequestBuilder extends AbstractRequestBuilder
{

    use BusinessIdTrait;

    /**
     * @return string|null
     */
    public function getUri(): ?string
    {
        return 'bis/v1/' . $this->getBusinessId();
    }

}