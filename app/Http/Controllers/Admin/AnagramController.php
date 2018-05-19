<?php
/**
 * Created by PhpStorm.
 * User: steny
 * Date: 18/05/2018
 * Time: 18:36
 */

namespace App\Http\Controllers\Admin;


use App\Anagram;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnagramController extends Controller
{

    public function index()
    {
        $result = null;
        return view('anagram.index', compact('result'));
    }

    public function store(Request $request)
    {
        $result = null;
        $keyword = $request->get('anagrama');
        if (!empty($keyword)) {
            $result = Anagram::run($keyword);
        }

        return view('anagram.index', compact('result'));
    }

}