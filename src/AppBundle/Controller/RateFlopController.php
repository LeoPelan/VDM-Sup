<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class RateFlopController extends Controller
{
    /**
     * @Route("/rateFlopvdm", name="flop")
     */
    public function rateAction(Request $request)
    {
      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:VdmPost');
        $listTopRated = $repository->findBy(array(), array('isUnliked' => 'DESC'));
      return $this->render('rateFlop.html.twig', array(
        "toplist" => $listTopRated
      ));
    }
}
