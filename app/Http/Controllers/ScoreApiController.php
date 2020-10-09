<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreApiController extends Controller
{
    public function getAllScores()
    {
        $scores = Score::get()->toJson(JSON_PRETTY_PRINT);
        return response($scores, 200);
    }
}
