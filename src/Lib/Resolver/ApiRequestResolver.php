<?php

namespace App\Lib\Resolver;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class ApiRequestResolver implements ValueResolverInterface
{

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $argumentType = $argument->getType();

        if (!$argumentType || $argumentType != APIRequest::class) {
            return [];
        }

        $jsonContentArray = json_decode($request->getContent(), true);
        if (!empty($jsonContentArray)) {
            $request->request->add($jsonContentArray);
        }

        return [new APIRequest($request)];
    }
}