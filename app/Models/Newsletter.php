<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['fullname', 'telephone', 'email'];
    const RULES = [
        'fullname' => 'required|max:255',
        'email' => 'required|email|unique:newsletters,email',
        'telephone' => 'required|numeric|unique:newsletters,telephone',
    ];
    const MESSAGES = [
        'fullname.required' => 'Le nom complet est requis.',
        'fullname.max' => 'Longueur maximale Nom complet atteinte.',
        'email.required' => 'Adresse email requise.',
        'email.email' => 'Adresse email invalide.',
        'email.unique' => 'Cette adresse email existe déjà.',
        'telephone.required' => 'Numéro de téléphone requis.',
        'telephone.unique' => 'Cet numéro est existe déjà.',
        'telephone.numeric' => 'Une valeur numérique est exigée.',
    ];
}
