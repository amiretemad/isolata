<?php


namespace Isolta\OpenData\Traits;

/**
 * Trait CompanyFormTrait
 * @package Isolta\OpenData\Traits
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
     * @param string|null $companyForm
     * @return $this
     */
    public function setCompanyForm(?string $companyForm): self
    {
        $this->companyForm = $companyForm;

        return $this;
    }

}