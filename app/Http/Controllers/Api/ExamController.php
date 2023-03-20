<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExamResource;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    use ApiResponseTrait;

    public function index(){
        // $exams = Exam::get();
        $exams = ExamResource::collection( Exam::get());
        return $this->apiResponse($exams,'ok',200);
    }
    public function show($id){
        $exam = Exam::find($id);
        // $exam = new ExamResource(Exam::find($id));
        if($exam){
            return $this->apiResponse( new ExamResource($exam),'ok',200);
        }
        return $this->apiResponse(null,'this Exam not Found',404);
    }
    public function store(Request $request){
        $exam = Exam::create($request->all());
        if($exam){
            return $this->apiResponse(new ExamResource($exam), 'ok', 201);
        }
        return $this->apiResponse(null,'this Exam not Add',400);
    }
}
