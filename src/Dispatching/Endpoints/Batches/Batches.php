<?php

namespace Appwilio\RussianPostSDK\Dispatching\Endpoints\Batches;

use Appwilio\RussianPostSDK\Dispatching\Endpoints\Orders\Entites\Order;
use Appwilio\RussianPostSDK\Dispatching\Endpoints\Orders\Exceptions\OrderException;
use Appwilio\RussianPostSDK\Dispatching\Http\ApiClient;
use Appwilio\RussianPostSDK\Dispatching\Http\ArrayOf;
use Appwilio\RussianPostSDK\Dispatching\Endpoints\Batches\Entities\Batch;
use Appwilio\RussianPostSDK\Dispatching\Endpoints\Batches\Requests\CreateBatchRequest;
use Appwilio\RussianPostSDK\Dispatching\Instantiator;
use Apwilio\RussianPostSDK\Dispatching\Endpoints\Batches\Exceptions\BatchException;

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
        $response = $this->client->post('/1.0/user/shipment', $request);

//        if (isset($response['result-ids'])) {
//            return (string) $response['result-ids'][0];
//        }

        if (isset($response['errors'])) {
            throw new BatchException($response['errors'][0]['error-codes']);
        }

        return Instantiator::instantiate(Batch::class, $response['batches'][0]);
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
