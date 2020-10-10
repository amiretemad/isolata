<?php


namespace Isolta\OpenData\Exception;

use Exception;
use JsonSerializable;
use Throwable;

class AbstractException extends Exception implements JsonSerializable
{
    /**
     * @var array
     */
    private $context;

    /**
     * @inheritDoc
     */
    public function __construct(string $message = '', Throwable $previous = null, array $context = [])
    {
        $this->context = $context;

        parent::__construct($message, 0, $previous);
    }

    /**
     * @return array
     */
    public function getContext(): array
    {
        return $this->context;
    }

    /**
     * @param array $context
     * @return AbstractException
     */
    public function setContext(array $context): AbstractException
    {
        $this->context = $context;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'message' => $this->getMessage(),
            'code' => $this->getCode(),
            'trace' => $this->getTrace(),
            'context' => $this->getContext()
        ];
    }
}
