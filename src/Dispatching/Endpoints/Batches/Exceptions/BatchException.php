<?php


namespace Apwilio\RussianPostSDK\Dispatching\Endpoints\Batches\Exceptions;

use Appwilio\RussianPostSDK\Dispatching\Entities\Error;
use Appwilio\RussianPostSDK\Dispatching\Contracts\DispatchingException;

class BatchException extends \InvalidArgumentException implements \IteratorAggregate, DispatchingException
{
    /** @var Error[] */
    private $errors;

    public function __construct(array $errors)
    {
        parent::__construct('Не удалось создать партию.');

        foreach ($errors as $error) {
            $this->errors[] = new \Error($error['code'], $error['description'] ?? null);
        }
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->errors);
    }
}