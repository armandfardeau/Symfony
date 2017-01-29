<?php


namespace OC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Armand'));

        return new Response($content);
    }

    public function viewAction($id)
    {
        // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

        // Ici, on récupèrera depuis la base de données
        // l'annonce correspondant à l'id $id.
        // Puis on passera l'annonce à la vue pour
        // qu'elle puisse l'afficher
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:view.html.twig',array('id' => $id));
        return new Response($content);
    }

    public function viewSlugAction($slug, $year, $format)
    {
        $content = $this->get('templating')->render('@OCPlatform/Advert/viewSlug.html.twig', array('slug'=>$slug, 'year'=>$year, 'format'=>$format));
        return new Response($content);
    }
}

