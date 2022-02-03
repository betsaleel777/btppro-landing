<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    public function add(Request $request)
    {
        $validated = $request->validate(Newsletter::RULES, Newsletter::MESSAGES);
        $newsletter = new Newsletter($request->all());
        $newsletter->save();
        if ($validated) {
            $message = "Inscription enregistrée avec succès.";
            return redirect()->route('acceuil')->withSuccess($message);
        } else {
            $message = "Veuillez remplir correctement les champs.";
            return redirect()->to(route('acceuil') . '#signup')->withFail($message)->withInput();
        }
    }
}
