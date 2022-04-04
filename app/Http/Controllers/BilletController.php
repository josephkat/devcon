<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Billet;
use App\Models\Unit;

class BilletController extends Controller
{
    public function getAll(Request $request) {
        $array = ['error' => ''];

        $property = $request->input('property');
        if($property) {
            $user = auth()->user();

            $billets = Billet::where('id_unit', $property)->get();

            $unit = Unit::where('id', $property)
            ->where('id_owner', $user['id'])
            ->count();
            
            // acessar unidade apenas do usuário.
            if($unit > 0) {
                foreach($billet as $billetKey => $billetValue) {
                    $billets[$billetKey]['fileurl'] = asset('storage/'.$billetValue['fileurl']);
                }

                $array['list'] = $billets;
            } else {
                $array['error'] = 'Essa unidade não é sua!';
            }

        } else {
            $array['error'] = 'A propriedade é obrigatório!';
        }
        return $array;
    }
}
