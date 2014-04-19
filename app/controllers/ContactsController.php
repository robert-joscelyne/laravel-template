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
      $contact->title        = Input::get('title');
      $contact->publisher    = Input::get('publisher');
      $contact->complete     = Input::has('complete');
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
      $contact = Contact::findOrFail(Input::get('id'));
      $contact->title        = Input::get('title');
      $contact->publisher    = Input::get('publisher');
      $contact->complete     = Input::has('complete');
      $contact->save();

      return Redirect::action('ContactsController@index');
   }

   public function delete(Contact $contact)
   {
      // Show delete confirmation page.
      return View::make('delete', compact('contact'));
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
