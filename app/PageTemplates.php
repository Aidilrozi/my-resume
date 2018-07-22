<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function services()
    {
        $this->crud->addField([   // CustomHTML
                        'name' => 'metas_separator',
                        'type' => 'custom_html',
                        'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_title',
                        'label' => trans('backpack::pagemanager.meta_title'),
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_description',
                        'label' => trans('backpack::pagemanager.meta_description'),
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_keywords',
                        'type' => 'textarea',
                        'label' => trans('backpack::pagemanager.meta_keywords'),
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name' => 'content_separator',
                        'type' => 'custom_html',
                        'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name' => 'content',
                        'label' => trans('backpack::pagemanager.content'),
                        'type' => 'wysiwyg',
                        'placeholder' => trans('backpack::pagemanager.content_placeholder'),
                    ]);
    }

    private function about_us()
    {
        $this->crud->addField([
                        'name' => 'content',
                        'label' => trans('backpack::pagemanager.content'),
                        'type' => 'wysiwyg',
                        'placeholder' => trans('backpack::pagemanager.content_placeholder'),
                    ]);
    }
    private function resume()
    {
        $this->crud->addField([
            'name' => 'firstname',
            'label' => trans('firstname'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'lastname',
            'label' => trans('lastname'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'content',
            'label' => trans('page content'),
            'type' => 'wysiwyg',
            'placeholder' => trans('content'),
        ]);

        $this->crud->addField([
            'name' => 'address',
            'label' => trans('Address'),
            'type' => 'text',
            'placeholder' => trans('Address'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'mobileno',
            'label' => trans('mobile'),
            'type' => 'text',
            'placeholder' => trans('mobile'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'email',
            'label' => trans('email'),
            'type' => 'text',
            'placeholder' => trans('email'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'experience',
            'label' => trans('Experience'),
            'type' => 'wysiwyg',
            'placeholder' => trans('Experience'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'education',
            'label' => trans('Education'),
            'type' => 'wysiwyg',
            'placeholder' => trans('Education'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'interest',
            'label' => trans('interest'),
            'type' => 'textarea',
            'placeholder' => trans('interest'),
            'fake' => true,
            'store_in' => 'extras',
        ]);


    }

}
