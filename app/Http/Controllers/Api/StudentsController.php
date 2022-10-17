<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResourceCollection;
use App\Http\Resources\CategoriesResourceCollection;
use App\Http\Resources\StudentsResourceCollection;
use App\Repository\StudentsRepository;
use Illuminate\Http\Request;

class StudentsController extends BaseController
{

    private $studentsRepository;

    public function __construct(StudentsRepository $studentsRepository)
    {
        $this->studentsRepository = $studentsRepository;
    }


    public function index()
    {
        return new StudentsResourceCollection($this->studentsRepository->index());
    }

    public function indexProducts()
    {
        return new BrandResourceCollection($this->studentsRepository->indexProduct());
    }

    public function indexLast()
    {
        return new CategoriesResourceCollection($this->studentsRepository->indexLast());
    }
}
