<?php

namespace App\Http\Controllers;

use App\Models\Artigo;

class ShowArtigo extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke(int $id)
    {
        return view('artigo', ['artigo' => Artigo::findOrFail($id)]);
    }
}
