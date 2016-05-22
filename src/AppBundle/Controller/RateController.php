<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class RateController extends Controller
{
    /**
     * @Route("/ratevdm", name="top")
     */
    public function rateAction(Request $request)
    {
      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:VdmPost');
        $listTopRated = $repository->findBy(array(), array('isLiked' => 'DESC'));
      return $this->render('rate.html.twig', array(
        "toplist" => $listTopRated
      ));
    }
}
