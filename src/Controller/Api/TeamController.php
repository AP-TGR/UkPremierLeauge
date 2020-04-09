<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    /**
     * @Route("/api/team", name="team_list", methods={"GET"})
     * @Route("/api/team/{id}", name="team_get", methods={"GET"})
     */
    public function index($id = null)
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/TeamController.php',
        ]);
    }

    /**
     * @Route("/api/team/add", name="team_add", methods={"POST"})
     */
    public function add()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/TeamController.php',
        ]);
    }

    /**
     * @Route("/api/team/edit", name="team_edit", methods={"PUT"})
     */
    public function edit()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/TeamController.php',
        ]);
    }

    /**
     * @Route("/api/team/delete", name="team_delete", methods={"DELETE"})
     */
    public function delete()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/TeamController.php',
        ]);
    }
}
