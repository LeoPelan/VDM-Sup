<?php
namespace AppBundle\Controller;
use AppBundle\Entity\VdmPost;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
class FormController extends Controller
{
    /**
     * @Route("/form", name="form")
     */
    public function formAction(Request $request)
    {
        $name = $request->get('name');
        $title = $request->get('title');
        $content = $request->get('content');
        if (isset($name) || isset($title) || isset($content)) {
            if ($name == "") {
                echo "Name is empty / Error";
              }
                elseif ($title == "") {
                    echo "Title is empty / Error";
                }
                elseif ($content == "") {
                    echo "Content is empty / Error";
            } else {
              $posts = new VdmPost();
              $posts->setName($name);
              $posts->setTitle($title);
              $posts->setContent($content);
              $posts->setisLiked(0);
              $posts->setisUnliked(0);
              $em = $this->getDoctrine()->getManager();
              $em->persist($posts);
              $em->flush();
              echo "Your VDM has been posted / Success";
            }
          }
          return $this->render('form.html.twig');
        }
      }
