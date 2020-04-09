<?php

namespace App\Controller\Api;

use App\Controller\Api\AbstractApiController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LeagueRepository;

class LeagueController extends AbstractApiController
{
    private $_league = null;
    
    public function __construct(LeagueRepository $league)
    {
        $this->_league = $league;
    }
    
    /**
     * @Route("/api/league", name="league_list", methods={"GET"})
     * @Route("/api/league/{id}", name="league_get", methods={"GET"})
     */
    public function index($id = null)
    {
        return $this->json($this->_league->findAll());
    }

    /**
     * @Route("/api/league/add", name="league_add", methods={"POST"})
     */
    public function add()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/LeagueController.php',
        ]);
    }

    /**
     * @Route("/api/league/edit", name="league_edit", methods={"PUT"})
     */
    public function edit()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/LeagueController.php',
        ]);
    }

    /**
     * @Route("/api/league/delete", name="league_delete", methods={"DELETE"})
     */
    public function delete()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/LeagueController.php',
        ]);
    }
}
