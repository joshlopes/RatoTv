<?php
namespace AppBundle\Controller;

use Doctrine\ORM\EntityRepository;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends FOSRestController
{

    protected function paginateObject(Request $request, EntityRepository $repository, $whereCriteria = null)
    {
        $curPage = $request->getRequestUri();
        $page = $request->get('page', '1');
        $maxr = $request->get('maxr', '10');
        $skip = ($page - 1) * $maxr;

        $objects = $repository->findBy([], null, $maxr, $skip);
        $totalObjects = count($repository->findAll());
        $payload = ["payload" => $objects];
        $payload['pagination']['total'] = $totalObjects;
        $payload['pagination']['hasNext'] = false;
        $payload['pagination']['hasPrev'] = false;
        $payload['pagination']['currentPage'] = $page;
        $payload['pagination']['maxRecords'] = $maxr;
        if (($skip + $maxr) < $totalObjects) {
            $payload['pagination']['nextPage'] = preg_replace("/page=\\d+/i", "page=" . ($page + 1), $curPage);
            $payload['pagination']['hasNext'] = true;
        }
        if ($skip > 0) {
            $payload['pagination']['prevPage'] = preg_replace("/page=\\d+/i", "page=" . ($page - 1), $curPage);
            $payload['pagination']['hasPrev'] = true;
        }
        return $payload;
    }

}
