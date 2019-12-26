<?php

declare(strict_types=1);

namespace Appwilio\RussianPostSDK\Dispatching\Endpoints\Batches\Requests;


use Appwilio\RussianPostSDK\Dispatching\Contracts\Arrayable;

class CreateBatchRequest implements Arrayable
{
    /**
     * @var array
     */
    private $ids;

    /**
     * CreateBatchRequest constructor.
     * @param array $ids
     */
    public function __construct(array $ids)
    {
        $this->ids = $ids;
    }

    /**
     * @param $ids
     * @return self
     */
    public static function create(array $ids)
    {
        return new self($ids);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->ids;
    }
}