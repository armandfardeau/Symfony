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
        // On veut avoir l'URL de l'annonce d'id 5.
        $url = $this->get('router')->generate(
            'oc_platform_view', // 1er argument : le nom de la route
            array('id' => $id)    // 2e argument : les valeurs des paramètres
        );
        // $url vaut « /platform/advert/5 »

        $content = $this->get('templating')->render('OCPlatformBundle:Advert:view.html.twig',array('url' => $url));
        return new Response($content);

    }

    public function viewSlugAction($slug, $year, $_format)
    {
        $content = $this->get('templating')->render('@OCPlatform/Advert/viewSlug.html.twig', array('slug'=>$slug, 'year'=>$year, 'format'=>$_format));
        return new Response($content);
    }
}

