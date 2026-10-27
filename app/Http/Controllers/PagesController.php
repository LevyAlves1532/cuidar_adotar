<?php

namespace App\Http\Controllers;

use App\UseCases\Pages\AnimalPageUseCase;
use App\UseCases\Pages\HomePageUseCase;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function home(HomePageUseCase $useCase)
    {
        $data = $useCase->execute();

        return view('pages.home', $data);
    }

    public function catalog()
    {
        return view('pages.catalog');
    }

    public function animal(string $animalId, AnimalPageUseCase $useCase): View
    {
        $data = $useCase->execute($animalId);

        return view('pages.animal', $data);
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }
}
