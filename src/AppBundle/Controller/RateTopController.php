<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class RateTopController extends Controller
{
    /**
     * @Route("/rateTopvdm", name="top")
     */
    public function rateAction(Request $request)
    {
      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:VdmPost');
        $listTopRated = $repository->findBy(array(), array('isLiked' => 'DESC'));
      return $this->render('rateTop.html.twig', array(
        "toplist" => $listTopRated
      ));
    }
}
