<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait OrderTrait
 * @package Isolta\OpenData\Response\Traits
 */
trait CompanyFormTrait
{

    /**
     * @var string
     */
    protected $companyForm;

    /**
     * @return string
     */
    public function getCompanyForm(): ?string
    {
        return $this->companyForm;
    }

    /**
     * @param string $companyForm
     * @return $this
     */
    public function setCompanyForm(?string $companyForm): self
    {
        $this->companyForm = $companyForm;

        return $this;
    }

}