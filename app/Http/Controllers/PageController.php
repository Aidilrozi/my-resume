<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug = null)
    {
        $page = false;
        if(!empty($slug))
        {
            $page = Page::findBySlug($slug);
        }
        
      
        if (!$page)
        {
            if (!$page && empty($slug))
            {
                echo redirect('index');
            }
            else
            {
                abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');

            }
        }
        

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }
}