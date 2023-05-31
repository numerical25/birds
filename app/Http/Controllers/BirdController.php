<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebirdRequest;
use App\Http\Requests\UpdatebirdRequest;
use App\Models\bird;
use App\Services\BirdService;

class BirdController extends Controller
{
    protected $birdService;

    public function __construct(BirdService $birdService)
    {
        $this->birdService = $birdService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $birds =  $this->birdService->getBirds();
        return $birds;
    }

    public function idle()
    {
        return $this->birdService->buildABird('', 0);
    }

    public function walk()
    {
        return $this->birdService->buildABird(null, 1);
    }
    public function eat()
    {
        return $this->birdService->buildABird(null, 2);
    }
    public function getIdleById($id)
    {
        $bird = $this->birdService->buildABird($id, 0);
        return $bird;
    }

    public function getyWalkById($id)
    {
        return $this->birdService->buildABird($id, 1);
    }

    public function getEatById($id)
    {
        return $this->birdService->buildABird($id, 2);
    }
}
