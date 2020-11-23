<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
	{
		$ap = new Article();

		$data = $ap->getAll();

		return json_encode($data);
    }

    public function show($id)
    {
		$ap = new Article();

		$data = $ap->select($id);

		return json_encode($data);
	}

	public function create(Request $request)
	{
		$ap = new Article();
	}

    public function update(Request $request, $id)
    {
		$ap = new Article();
    }

    public function delete($id)
    {
		$ap = new Article();
	}
}
