<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function getTrainers(Request $request) {

        $trainer_logic = $request->input('trainer_logic');

        $obj = new Trainer();
        $trainers = $obj->paginate($trainer_logic);

        return view('trainers', ['trainers' => $trainers]);
    }
}
