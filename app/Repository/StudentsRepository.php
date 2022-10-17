<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Student;
use App\Repository\Common\StudentsRepositoryInterface;

class StudentsRepository implements StudentsRepositoryInterface
{

    public function index()
    {
        return Student::with('information')->get();
    }

    public function indexProduct()
    {
        return Brand::with('products')->get();
    }

    public function indexLast()
    {
        return Category::with('item')->get();
    }
}
