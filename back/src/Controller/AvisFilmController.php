<?php

namespace App\Controller;

use App\Entity\HistoriqueMembre;
use App\Repository\FilmRepository;
use App\Repository\HistoriqueMembreRepository;
use App\Repository\MembreRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AvisFilmController extends AbstractController
{
    /**
     * @Route("/avis/film", name="avis_film")
     */
    public function index()
    {
        return $this->render('avis_film/index.html.twig', [
            'controller_name' => 'AvisFilmController',
        ]);
    }

    /**
     * @Route("/ajout/avis/", name="avis")
     * @param Request $request
     * @param HistoriqueMembreRepository $historiqueM
     * @param FilmRepository $filmRepo
     * @param MembreRepository $mRepo
     * @param ObjectManager $manager
     * @return JsonResponse
     */
    public function AjouteAvis(Request $request, HistoriqueMembreRepository $historiqueM, FilmRepository $filmRepo, MembreRepository $mRepo, ObjectManager $manager)
    {


        $historique = $historiqueM->findOneBy(['id_film'=>$request->request->get('id_film')]);

        $historique->setAvis($request->request->get('avis'));
        $manager->persist($historique);

        $manager->flush();


        return new JsonResponse('sucess', 200,['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Route("/afficher/avis/{id}", name="avisA")
     * @param $id
     * @param FilmRepository $rFilm
     * @param HistoriqueMembreRepository $historiqueMembre
     * @return JsonResponse
     */

      public function DisplayAvis($id, HistoriqueMembreRepository $historiqueMembre, FilmRepository $filmrepos)
    {
        $titreFilm = $filmrepos->createQueryBuilder('q')
            ->show('q.avis')
            ->where('q.id_film = :id' )
            ->setParameter('id', $id)
            ->getQuery()
            ->getArrayResult();

        return new JsonResponse($titreFilm, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }
}
