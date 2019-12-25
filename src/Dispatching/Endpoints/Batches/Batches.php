<?php

namespace Appwilio\RussianPostSDK\Dispatching\Endpoints\Batches;

use Appwilio\RussianPostSDK\Dispatching\Endpoints\Orders\Entites\Order;
use Appwilio\RussianPostSDK\Dispatching\Http\ApiClient;
use Appwilio\RussianPostSDK\Dispatching\Http\ArrayOf;
use Appwilio\RussianPostSDK\Dispatching\Endpoints\Batches\Entities\Batch;
use Appwilio\RussianPostSDK\Dispatching\Endpoints\Batches\Requests\CreateBatchRequest;

class Batches
{
    /**
     * @var ApiClient
     */
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function create(CreateBatchRequest $request)
    {
        return $this->client->post('/1.0/user/shipment', $request);
    }

    /**
     * @return Batch[]
     */
    public function getAll()
    {
        return $this->client->get('/1.0/batch', null, new ArrayOf(Batch::class));
    }

    /**
     * @param $name
     *
     * @return Order[]
     */
    public function getOrders($name)
    {
        return $this->client->get("/1.0/batch/{$name}/shipment", null, new ArrayOf(Order::class));
    }

}
