<?php

namespace App\Controller;

use App\Lib\Controller\ResponseBuilder;
use App\Lib\Resolver\APIRequest;
use App\Mock\Shipment\CreateDKPickupShipmentMockData;
use App\Mock\Shipment\DeleteDKPickupShipmentMockData;
use App\Mock\Shipment\DKPickupShipmentMockData;
use App\Mock\Shipment\DKPickupShipmentsMockData;
use App\Mock\Shipment\DKShipmentCreationPackagesMockData;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ShipmentAPIController extends AbstractAPIController
{
    #[Route(path: '/api/v3/shipments/dk', name: "DKPickupShipmentsListView", methods: ["GET"])]
    public function DKPickupShipmentsListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, DKPickupShipmentsMockData::class));
    }

    #[Route(path: '/api/v3/shipments/dk', name: "CreateDKPickupShipmentForm", methods: ["POST"])]
    public function CreateDKPickupShipmentForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, CreateDKPickupShipmentMockData::class));
    }

    #[Route(path: '/api/v3/shipments/dk/packages', name: "DKShipmentCreationPackagesListView", methods: ["GET"])]
    public function DKShipmentCreationPackagesListView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, DKShipmentCreationPackagesMockData::class));
    }

    #[Route(path: '/api/v3/shipments/dk/{shipment_id}', name: "DKPickupShipmentObjectView", methods: ["GET"])]
    public function DKPickupShipmentObjectView(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, DKPickupShipmentMockData::class));
    }

    #[Route(path: '/api/v3/shipments/dk/{shipment_id}', name: "DeleteDKPickupShipmentForm", methods: ["DELETE"])]
    public function DeleteDKPickupShipmentForm(APIRequest $APIRequest): JsonResponse
    {
        return $this->createJsonResponseV2(ResponseBuilder::execute($APIRequest, DeleteDKPickupShipmentMockData::class));
    }
}