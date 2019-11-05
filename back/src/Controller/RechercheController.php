<?php

namespace App\Controller;


use App\Entity\Genre;
use App\Entity\Film;
use App\Entity\Distrib;
use App\Repository\DistribRepository;
use App\Repository\FilmRepository;
use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Json;
use Doctrine\ORM\Query;

class RechercheController extends AbstractController
{
    /**
     * @Route("/recherche", name="recherche")
     */
    public function index()
    {
        return $this->render('recherche/index.html.twig', [
            'controller_name' => 'RechercheController',
        ]);
    }

    /**
     * @Route("/search/genre/{id}",  name="genre")
     * @param $id
     * @param GenreRepository $repository
     * @return JsonResponse
     */
    function RechercheGenre ($id, GenreRepository $repository, FilmRepository $filmrepos)
    {
        $titreFilm = $filmrepos->createQueryBuilder('q')
            ->where('q.id_genre = :id' )
            ->setParameter('id', $id)
            ->getQuery()
            ->getArrayResult();

        return new JsonResponse($titreFilm, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Route("/search/titre/{params}",  name="titre")
     * @param $params
     * @return JsonResponse
     */
    function RechercheTitre ($params)
    {
        $repo = $this->getDoctrine()->getRepository(Film::class);

        $titreTitre = $repo->createQueryBuilder('q')
            ->where('q.titre LIKE :titre')
            ->setParameter('titre', '%'.$params . '%')
            ->getQuery()
            ->getArrayResult();


        return new JsonResponse($titreTitre, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Route("/genres",  name="genres")
     * @return Response
     */

    public function GetAllGenre()
    {
        $repo = $this->getDoctrine()->getRepository(Genre::class);

        $encoders = [new Xmlencoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializers = new Serializer($normalizers, $encoders);

        $result = $serializers->serialize($repo->findAll(),'json');

        return new Response($result, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }


    /**
     * @Route("/search/dst/{id}",  name="dst")
     * @param $id
     * @param DistribRepository $dstrepos
     * @return JsonResponse
     */
    function RechercheDst ($id, DistribRepository $dstrepos)
    {
        //dd($params);
//        $repo = $this->getDoctrine()->getRepository(Distrib::class);

        $distrib = $dstrepos->createQueryBuilder('q')
            ->where('q.id_distrib = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getArrayResult();

        return new JsonResponse($distrib, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Route("/search/Projection/{date}",  name="projection")
     * @param $params
     * @param FilmRepository $filmRepos
     * @return JsonResponse
     */
    public function RechercheFilmDate($date, FilmRepository  $filmRepos)
    {
        $date = new \DateTime($date);

        $films = $filmRepos->createQueryBuilder('q')

            ->where('q.date_debut_affiche = :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getArrayResult();


        return $this->json($films, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

}
