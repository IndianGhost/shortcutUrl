<?php

namespace shortcuturl\Http\Controllers;

use shortcuturl\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LinkController extends Controller
{
    //Au cas echeant, on utilisera un objet Request $request passe au parametres
    public function create()
    {
        //Affectation de la valeur saisie par l'utilisateur a une variable (simplification)
        $url = Input::get('url');

        //exception
        if($url === null)
        {
            return view('Post.linkNotFound');
        }
        elseif (!$this->isValidUrl($url)) 
        {
            $error = 'This URL is not valid !';
            return view('Post.index', compact('error'));
        }

        //Verifier si l'URL existe deja dans la base de donnees
        $exist = Link::where('url', '=', $url)->exists();

        //Si l'URL n'existe pas deja, on l'insere a notre base de donnees !
        if(!$exist)
        {
            $link = new Link();
            $link->fill([
                'url' => $url
            ]);
            $link->save();
        }
        //On recupere l'id de notre chere URL ;)
        $id = Link::where('url', $url)->value('id');
        return view('Post.shortcut', compact('id', 'url'));
    }

    public function read($id){
        $url = Link::where('id', $id)->value('url');
        if($url === null){
            return view('Post.shortcutNotFound');
        }
        else{
            return redirect()->away($url);
        }
    }

    /**
     * Determine if the given path is a valid URL.
     *
     * @param  string  $path
     * @return bool
     */
    protected function isValidUrl($path)
    {
        if (! preg_match('~^(#|//|https?://|mailto:|tel:)~', $path))
        {
            return filter_var($path, FILTER_VALIDATE_URL) !== false;
        }

        return true;
    }
}
