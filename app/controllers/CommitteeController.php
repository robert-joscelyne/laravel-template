<?php

class CommitteeController extends BaseController
{
   public function index()
   {
      // Show a list of committee members
      return View::make('index');
   }

   public function create()
   {
      // Show the create committee member form
      return View::make('create');
   }

   public function handleCreate()
   {
      // Handle create form submission
      return Response::make('handleCreate');
   }

   public funciton edit(Committee $committee)
   {
      return View::make('edit');
   }

   public function handleEdit()
   {
      // Handle edit form submission
   }

   public function delete()
   {
         // Show delete confirmation page
      return View::make('delete');
   }

   public function handleDelete()
   {
      // Handle Delete Confirmation
   }

}