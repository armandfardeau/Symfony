<?php


namespace OC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Armand'));

        return new Response($content);
    }

    public function viewAction($id)
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:view.html.twig', array('id'=>$id));
        return new Response($content);

    }

    public function viewSlugAction($slug, $year, $_format)
    {
        $content = $this->get('templating')->render('@OCPlatform/Advert/viewSlug.html.twig', array('slug' => $slug, 'year' => $year, 'format' => $_format));
        return new Response($content);
    }
}

