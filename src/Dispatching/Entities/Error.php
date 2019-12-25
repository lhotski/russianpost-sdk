<?php


namespace Appwilio\RussianPostSDK\Dispatching\Entities;


class Error
{
    private $code;
    private $description;

    /**
     * Error constructor.
     * @param $code
     * @param $description
     */
    public function __construct($code, $description)
    {
        $this->code = $code;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return Error
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Error
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

}