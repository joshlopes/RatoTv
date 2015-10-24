<?php
namespace AppBundle\Controller;

use AppBundle\Entity\StreamPost;
use AppBundle\Exception\ResourceNotFoundException;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;

class StreamController extends BaseController
{

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Get Post Streams",
     *  filters={
     *      {"name"="maxr", "dataType"="integer", "requirement"="\d+", "description"="Number of Records per request"},
     *      {"name"="page", "dataType"="integer", "requirement"="\d+", "description"="Number of the page"},
     *  }
     * )
     */
    public function getStreamsAction(Request $request)
    {
        $streamRepo = $this->getDoctrine()->getRepository('AppBundle:StreamPost');
        $streams = $this->paginateObject($request, $streamRepo);

        $view = $this->view($streams, 200);
        return $this->handleView($view);
    }

    /**
     * @param StreamPost $stream
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws ResourceNotFoundException
     *
     * @ApiDoc(
     *  statusCodes={
     *      200="Returned when successful",
     *      404="Returned when Resource could not be found",
     *  },
     *  resource=true,
     *  description="Return one episode resource",
     *  requirements={
     *      {"name"="stream", "dataType"="integer", "requirement"="\d+", "description"="Id of resource"},
     *  }
     * )
     */
    public function getStreamAction(StreamPost $stream)
    {
        if (null === $stream) {
            throw new ResourceNotFoundException();
        }
        $view = $this->view($stream, 200);
        return $this->handleView($view);
    }

}
