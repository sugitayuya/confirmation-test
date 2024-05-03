<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(ContactRequest $request)
  {
  $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'category', 'content']);
    return view('confirm', ['contact' => $contact]);
  }

  public function store(ContactRequest $request)
  {
      $contact = $request->only(['name', 'email', 'tel', 'content']);
      Contact::create($contact);
      return view('thanks');
  }

  public function home()
  {
    return view('index');
  }

  public function login()
  {
    return view('auth/login');
  }
}


