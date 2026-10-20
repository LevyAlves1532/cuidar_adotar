<?php

namespace App\Http\Controllers;

use App\UseCases\Pages\HomePageUseCase;

class PagesController extends Controller
{
    public function home(HomePageUseCase $useCase)
    {
        $data = $useCase->execute();

        return view('pages.home', $data);
    }
}
