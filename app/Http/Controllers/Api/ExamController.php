<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExamResource;
use App\Models\Exam;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

        $validator = Validator::make($request->all(),[
            'name'=> 'required|unique:exams|max:255',
            'describe' =>'required',
            'user_id' =>'required',
            'categry_id' =>'required',
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors('The Exam Not Save'),400);
        }

        $exam = Exam::create($request->all());
        if($exam){
            return $this->apiResponse(new ExamResource($exam), 'ok', 201);
        }
        return $this->apiResponse(null,'this Exam not Add',400);
    }
    public function update(Request $request, $id){

        $validator = Validator::make($request->all(),[
                    'name'=> 'required|unique:exams|max:255',
                    'describe' =>'required',
                    'user_id' =>'required',
                    'categry_id' =>'required',
                ]);

                if($validator->fails()){
                    return $this->apiResponse(null,$validator->errors('The Exam Not Save'),400);
                }

                $exam = Exam::find($id);

                if(!$exam){
                    return $this->apiResponse(null,'The Exam Not Found',404);
                }

                $exam->update($request->all());

                if($exam){
                    return $this->apiResponse(new ExamResource($exam), 'ok', 201);
                }

                return $this->apiResponse(null,'this Exam not Update',404);
        }

    
}
