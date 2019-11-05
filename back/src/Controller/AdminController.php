<?php

namespace App\Controller;

use App\Entity\FichePersonne;
use App\Entity\Abonnement;
use App\Entity\Membre;
use App\Entity\HistoriqueMembre;
use App\Controller\Serializing;
use App\Repository\AbonnementRepository;
use App\Repository\FilmRepository;
use App\Repository\HistoriqueMembreRepository;
use App\Repository\MembreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/admin", name="admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="adminIndex")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/search/personne/{params}",  name="personne")
     * @param $params
     * @return JsonResponse
     */
    function RecherchePersonne ($params)
    {
        $repo = $this->getDoctrine()->getRepository(FichePersonne::class);

        $Nom = $repo->createQueryBuilder('q')
            ->where('q.nom LIKE :nom OR q.prenom LIKE :prenom')
            ->setParameter('nom', '%'.$params . '%')
            ->setParameter('prenom', '%'.$params . '%')
            ->getQuery()
            ->getArrayResult();

        return new JsonResponse($Nom, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Route("/add_abo", name="admin_new_abo")
     * @param Request $request
     * @param MembreRepository $membreRepo
     * @param AbonnementRepository $abonnementRepo
     * @return JsonResponse
     */
    public function AddAbo(Request $request, MembreRepository $membreRepo, AbonnementRepository $abonnementRepo)
    {


        $abonnement = $abonnementRepo->findOneBy(['nom'=>$request->request->get('nom')]);

        $membre = $membreRepo->findOneBy(['id_membre'=>$request->request->get('id_membre')]);

        $membre->setIdAbo($abonnement->getIdAbo());
        $entityManger = $this->getDoctrine()->getManager();
        $entityManger->persist($membre);

        $entityManger->flush();


        return new JsonResponse('success', 200,['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Route("/delete_abo", name="admin_delete_abo")
     * @param Request $request
     * @param MembreRepository $membreRepo
     * @return JsonResponse
     */
    public function UpdateAbo(Request $request, MembreRepository $membreRepo)
    {
        $membre = $membreRepo->findOneBy(['id_membre'=>$request->request->get('id_membre')]);
        $membre->setIdAbo(0);
        $entityManger = $this->getDoctrine()->getManager();
        $entityManger->persist($membre);

        $entityManger->flush();
        return new JsonResponse('success', 200,['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }


    /**
     * @Route("/afficher_film/{id}", name="admin_afficher_film")
     * @param $id
     * @param FilmRepository $rFilm
     * @param HistoriqueMembreRepository $historiqueMembre
     * @return Response
     */
    public function HistoriqueMembre($id, FilmRepository $rFilm, HistoriqueMembreRepository $historiqueMembre)
    {
//

        $historique = $historiqueMembre->findBy(['id_membre'=>$id], ['date' => "DESC"]);
//        dd($historique);
        $arr = [];
        foreach ($historique as $key => $value){
            $idFix = $value->getIdFilm();
            $film = $rFilm->find($idFix);
            $arr[] = ["date" => $value->getDate()->format('d/m/Y H:i:s'), "film" => $film->getTitre()];
           // echo ($film->getTitre())." le ".$value->getDate()->format('d/m/Y H:i:s')."<br>";
        }


        return $this->json($arr, 200);

    }

    /**
     * @Route("/ajouter_film", name="admin_ajouter_film")
     * @param Request $request
     * @param FilmRepository $filmMembre
     * @param HistoriqueMembreRepository $historiqueMembre
     * @return JsonResponse
     */
    public function AjouteFilm(Request $request, FilmRepository $filmMembre,HistoriqueMembreRepository $historiqueMembre)
    {
        $historique = new HistoriqueMembre();

        $historique->setIdMembre($request->request->get('id_membre'));
        $historique->setIdFilm($request->request->get('id_film'));
        $historique->setDate(new \DateTime());
        $entityManger = $this->getDoctrine()->getManager();
        $entityManger->persist($historique);

        $entityManger->flush();


        return new JsonResponse('success', 200,['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }
}
