<?php

namespace App\Services;

use App\Helper\BaseQuery;
use App\Helper\ImageUpload;
use App\Models\Category;

class CategoryService
{
    use BaseQuery, ImageUpload;
    private $_imgPath = 'categories/';

    private $_model = null;

    /**
     * Create a new service instance.
     *
     * @return $reauest, $modal
     */
    public function __construct()
    {
        $this->_model = new Category();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->get_all($this->_model);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($data)
    {
        $category = $this->add($this->_model, $data);

        $imagesToUpload = [];

        if (request()->hasFile('images')) {
            foreach ($data['images'] as $value) {
                $imageUploaded = $this->uploadImage($value, $this->_imgPath);
                // $imageUploaded['imagable_id'] = $category->getKey(); // Use UUID of category
                // $imageUploaded['imagable_type'] = 'App\Models\Category'; // Set the imagable_type to the correct class name
                // $imagesToUpload[] = $imageUploaded;
                $category->Images()->create($imageUploaded);
            }

            // Use createMany() instead of create() within the loop
            $category->Images()->createMany($imagesToUpload);
        }

        return true;
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->get_by_id($this->_model, $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, $data)
    {
        return $this->get_by_id($this->_model, $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return $this->delete($this->_model, $id);
    }

    /**
     * Change status of category to active or inactive
     */
    public function toggleStatus()
    {
        $category = $this->get_by_id($this->_model, request()->category);
        $category->status = $category->status === 'Active' ? 0 : 1;
        $category->update();

        return true;
    }
}
