<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = ['Populer', 'Olahraga', 'Politik', 'Teknologi'];

        return view('index', compact('categories'));
    }

    public function category($category)
    {
        $categories = ['Populer', 'Olahraga', 'Politik', 'Teknologi'];
        
        // Convert the first character of each word to uppercase
        $category = ucwords($category);
    
        // Check if the requested category exists in the categories array
        if (!in_array($category, $categories)) {
            // If the category does not exist, redirect to a default page or show an error message
            return redirect('/')->with('error', 'Category not found.');
        }
    
        // If the category exists, proceed to show the category view
        return view('category', compact('categories', 'category'));
    }

    public function showTerms()
    {
        $path = resource_path('./markdown/terms.md');

        if (file_exists($path)) {
            $markdown = file_get_contents($path);
            $terms = (new \Parsedown())->text($markdown);
        } else {
            $terms = "Terms and conditions not found.";
        }
    
        return view('page.terms', compact('terms'));
    }

    public function showPolicy()
    {
        $path = resource_path('./markdown/policy.md');

        if (file_exists($path)) {
            $markdown = file_get_contents($path);
            $policy = (new \Parsedown())->text($markdown);
        } else {
            $policy = "Privacy policy not found.";
        }
    
        return view('page.policy', compact('policy'));
    }

    public function showContact()
    {
        $path = resource_path('./markdown/contact.md');
        if (file_exists($path)) {
            $markdown = file_get_contents($path);
            $contact = (new \Parsedown())->text($markdown);
        } else {
            $contact = "Contact not found.";
        }
        return view("page.contact", compact("contact"));
    }

}