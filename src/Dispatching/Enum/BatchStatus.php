<?php

declare(strict_types=1);

namespace Infrastructure\Http\RussianPostSDK\Dispatching\Enum;

class BatchStatus
{
    /**
     * Статусы партии.
     *
     * @see https://otpravka.pochta.ru/specification#/enums-base-batch-status
     */
    const CREATED = 'CREATED';
    const FROZEN = 'FROZEN';
    const ACCEPTED = 'ACCEPTED';
    const SENT = 'SENT';
    const ARCHIVED = 'ARCHIVED';

}