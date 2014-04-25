<?php

// app/controllers/ContactsController.php

class ContactsController extends BaseController
{
   public function index()
   {
      // Show a listing of contacts.
      $contacts = Contact::all();

      //return View::make('index_contact', compact('contacts'));

      return View::make('contacts/index', compact('contacts'));

      //return Response::make('Controller Contacts');
   }

   public function create()
   {
      // Show the create contact form.
      return View::make('contacts/create');
   }

   public function handleCreate()
   {
      // Handle create form submission.
      $contact = new Contact;
      //$contact->user        = Input::get('user');
      $user_id = Auth::user()->id;
      $contact->user = $user_id;
      $contact->location    = Input::get('location');
      $contact->name    = Input::get('name');
      $contact->address    = Input::get('address');
      $contact->phone    = Input::get('phone');
      $contact->active     = Input::has('active');
      $contact->save();

      return Redirect::action('ContactsController@index');
   }

   public function edit(Contact $contact)
   {
      // Show the edit contact form.
      return View::make('contacts/edit', compact('contact'));
   }

   public function handleEdit()
   {
      // Handle edit form submission.
      $contact->user        = Input::get('user');
      $contact->location    = Input::get('location');
      $contact->name    = Input::get('name');
      $contact->address    = Input::get('address');
      $contact->phone    = Input::get('phone');
      $contact->active     = Input::has('active');
      $contact->save();

      return Redirect::action('ContactsController@index');
   }

   public function delete(Contact $contact)
   {
      // Show delete confirmation page.
      return View::make('contacts/delete', compact('contact'));
   }

   public function handleDelete()
   {
      // Handle the delete confirmation.
      $id = Input::get('contact');
      $contact = Contact::findOrFail($id);
      $contact->delete();

      return Redirect::action('ContactsController@index');
   }
}
