<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function list(Request $request)
    {
        // Retrieve the 'search' query parameter if it exists
        $searchTerm = $request->query('search', '');

        if ($searchTerm) {
            // Perform a search if a search term is provided
            // Assuming the search is to be performed on the 'name' field of the users table
            // You can modify the query to fit your specific needs
            
        } else {
            // Retrieve all users if no search term is provided
            
        }

        // Return a view with the users data
        return view('welcome');
    }
}
