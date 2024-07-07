<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\newsModel;
use Hash;
use Session;

class newsController extends Controller
{
    public function index() {
        $newsData = newsModel::all();
        return view('newsCon', ['newsData' => $newsData]);
    }
    
    public function insertNewsData() {
        $data = [
            'title' => 'International Football Federation "FIFA" President with Indonesian Batik',
            'content' => 'In a groundbreaking moment that melds the rich tapestry of Indonesian culture with the global sphere of sports leadership, FIFA President, graced a prestigious international event adorned in the captivating elegance of Indonesian Batik. This cultural statement not only showcased the appreciation from Mr.President for Indonesia heritage but also marked a significant stride toward promoting diversity and inclusivity within the international sports community. The intricate patterns of Batik, meticulously designed by Indonesian artisans, added a touch of sophistication to the world stage, symbolizing the harmonious blend of tradition and modernity. The choice to wear Batik stands as a testament to FIFA commitment to embracing diverse cultural narratives, transcending boundaries, and fostering a global community united through the universal language of sports. As the images of the FIFA President draped in Batik reverberate globally, this momentous occasion sparks conversations about the power of sport to bridge cultural gaps and celebrate the vibrant diversity that defines our shared humanity. The Indonesian Batik, with its deep-rooted symbolism and timeless allure, takes its place not only as a garment but as a representation of unity and mutual respect in the world of sports diplomacy.'
        ];
        newsModel::create($data);
        return "Data inserted successfully";
    }
}
