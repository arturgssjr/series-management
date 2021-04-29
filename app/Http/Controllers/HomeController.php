<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\{Inertia, Response};

class HomeController extends Controller
{
    public function dashboard(): Response
    {
        $features = [
            [
                "name" => "Competitive exchange rates",
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
                "icon" => "GlobeAltIcon",
            ],
            [
                "name" => "No hidden fees",
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
                "icon" => "ScaleIcon",
            ],
            [
                "name" => "Transfers are instant",
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
                "icon" => "LightningBoltIcon",
            ],
            [
                "name" => "Mobile notifications",
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
                "icon" => "AnnotationIcon",
            ],
        ];

        return Inertia::render('Dashboard', compact('features'));
    }
}
