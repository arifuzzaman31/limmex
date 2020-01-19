<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Service;
use App\Feature;
use App\Team;
use App\Blog;
use App\Priceplan;

class FrontController extends Controller
{
    public function index()
    {
    	$team_members =  Team::where('status',1)->get();
    	$portfolios	  =  Portfolio::where('status',1)->get();
    	$features 	  =  Feature::where('status',1)->get();
    	$blogs 		  =  Blog::where('status',1)->take(2)->latest()->get();
    	$RSservices   =  Service::where(['status'=>1,'type'=>'Ready Software'])->get();
        $OSservices     =  Service::where(['status'=>1,'type'=>'Own Service'])->get();
        $WSservices     =  Service::where(['status'=>1,'type'=>'Ready WS'])->get();
        $ODservices     =  Service::where(['status'=>1,'type'=>'On demand service'])->get();
        $priceplans   =  Priceplan::where('status',1)->get();
    	return view('setup.setup',compact('team_members','portfolios','features','blogs','RSservices','OSservices','WSservices','ODservices','priceplans'));
    }

    public function getSpecificService($id)
    {
    	$services 	 = Service::where('id',$id)->first();
    	$allservices = Service::where('status',1)->get();
    	$blogs 		 =  Blog::where('status',1)->get();
    	return view('pages.viewService', compact('services','allservices','blogs'));
    }

    public function getSpecificBlog($id)
    {
    	$blog 		 = Blog::where('id',$id)->first();
    	return view('pages.viewBlog', compact('blog'));
    }
    public function getAllBlog()
    {
        $allblogs =  Blog::where('status',1)->Paginate(5);
        return view('pages.allblog', compact('allblogs'));
    }

}
