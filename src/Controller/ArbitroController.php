<?php

namespace App\Controller;

use App\Entity\Team;
use App\Repository\TeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArbitroController extends AbstractController
{
    #[Route('/arbitro', name: 'home')]
    public function index(): Response
    {
        return $this->render('arbitro/index.html.twig', [
            'controller_name' => 'ArbitroController',
        ]);
    }

    #[Route('/teams', name: 'teams')]
    public function teams(): Response
    {
        return $this->render('teams/index.html.twig', [
            'teams' => 'ArbitroController',
        ]);
    }

    #[Route('/team', name: 'create_team')]
    public function createteam(EntityManagerInterface $entityManager): Response
    {
        $team = new Team();
        $team->setName('Keyboard');
        // tell Doctrine you want to (eventually) save the team (no queries yet)
        $entityManager->persist($team);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new team with id '.$team->getId());
    }

    public function show(EntityManagerInterface $entityManager, int $id): Response
    {
        $team = $entityManager->getRepository(Team::class)->find($id);

        if (!$team) {
            throw $this->createNotFoundException(
                'No team found for id '.$id
            );
        }
        return new Response('Check out this great team: '.$team->getName());
    }

    
    }
