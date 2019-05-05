<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class TariffController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index()
    {
    	Mail::to('hak055-sahakyan@yandex.ru')->send(new SendEmail);
    	return view('tariff');
    }
}
