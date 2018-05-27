<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlsController extends Controller
{
    //

	public function create()
	{
		return view('welcome');
	}	

	public function store(Request $request)
	{
		$this->validate($request,['url' => 'required|url']);	
		$record = $this->getRecordForUrl($request->url);
		if($record){
			return view('result')->withShortened($record->shortened);
		}
	//gestion erreur
		return view('error');
	}

	public function show($shortened) 
	{
		$url =Url::whereShortened($shortened)->firstOrFail();
		return redirect($url->url);
	}

	private function getRecordForUrl($url)
	{
		$record =Url::where('url',$url)->first();
		if(! $record){
			$record = Url::create([
				'url'=>$url,
				'shortened'=>Url::getUniqueShortUrl()
			]);
		}

		return 	$record;	

	}
}
