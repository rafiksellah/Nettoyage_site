<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }
    /**
     * @Route("/covid", name="covid_19")
     */
    public function covide()
    {
        return $this->render('home/covid.html.twig');
    }
    /**
     * @Route("/nattoyage_maison", name="maison")
     */
    public function nattoyage_maison()
    {
        return $this->render('home/maison.html.twig');
    }
    /**
     * @Route("/nattoyage_bureau", name="bureau")
     */
    public function nattoyage_bureau()
    {
        return $this->render('home/bureau.html.twig');
    }
    /**
     * @Route("/nattoyage_vitre", name="vitre")
     */
    public function nattoyage_vitre()
    {
        return $this->render('home/vitre.html.twig');
    }
    /**
     * @Route("/débarras", name="debarras")
     */
    public function debarras()
    {
        return $this->render('home/debarras.html.twig');
    }
    /**
     * @Route("/nattoyage_fin_chantier", name="chantier")
     */
    public function nattoyage_chantier()
    {
        return $this->render('home/chantier.html.twig');
    }
    /**
     * @Route("/nattoyage_appartement", name="appartement")
     */
    public function nattoyage_appartement()
    {
        return $this->render('home/appartement.html.twig');
    }
    /**
     * @Route("/nattoyage_immeubles", name="immeubles")
     */
    public function nattoyage_immeubles()
    {
        return $this->render('home/immeubles.html.twig');
    }
    /**
     * @Route("/nattoyage_Autres_Services", name="Autres")
     */
    public function nattoyage_Autres()
    {
        return $this->render('home/Autres.html.twig');
    }
    /**
     * @Route("/nattoyage_Petits_Traveaux", name="Petits_traveaux")
     */
    public function nattoyage_Petits_traveaux()
    {
        return $this->render('home/Petits_traveaux.html.twig');
    }
    /**
     * @Route("/contacts", name="contact")
     */
    public function contacts()
    {
        return $this->render('home/contact.html.twig');
    }
}
