<?php

namespace App\Controller;

use Acme\TunisiaGovernoratesBundle\Service\GovernorateService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GovernorateController
{
    #[Route('/governorates/autocomplete', name: 'governorate_autocomplete', methods: ['GET'])]
    public function autocomplete(Request $request, GovernorateService $governorateService): JsonResponse
    {
        $query = $request->query->get('q', '');
        $suggestions = $governorateService->findMatchingGovernorates($query);

        return new JsonResponse(array_values($suggestions));
    }
}