<?php

namespace locomotif\testimonials;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
    public function index(){
    	return view('testimonials::list');
    }
}
