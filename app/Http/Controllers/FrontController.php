<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Service;
use App\Feature;
use App\Team;
use App\Blog;

class FrontController extends Controller
{
    public function index()
    {
    	$team_members =  Team::where('status',1)->get();
    	$portfolios =  Portfolio::where('status',1)->get();
    	$features =  Feature::where('status',1)->get();
    	$blogs =  Blog::where('status',1)->get();
    	$services =  Service::where('status',1)->get();
    	return view('setup.setup',compact('team_members','portfolios','features','blogs','services'));
    } 

}
