<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response; // Response Components
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Services\Book2Service; // book1 Services

Class Book2Controller extends Controller {
 // use to add your Traits ApiResponser
 use ApiResponser;

 /**
 * The service to consume the User1 Microservice
 * @var Book2Service
 */

 public $book2Service;
 /**
 * Create a new controller instance
 * @return void
 */
 public function __construct(Book2Service $book2Service){
     $this->book2Service = $book2Service;
 }
 /**
 * Return the list of users
 * @return Illuminate\Http\Response
 */
 public function index()
 {
 // 
    return $this->successResponse($this->book2Service->obtainBooks2()); 
 }
 
 public function add(Request $request ){
    return $this->successResponse($this->book2Service->createBook2($request->all(), Response::HTTP_CREATED));
}

public function show($id)
 {
    return $this->successResponse($this->book2Service->obtainBook2($id));
 }

 public function update(Request $request,$id)
 {
    return $this->successResponse($this->book2Service->editBook2($request->all(), $id));
 }

 public function delete($id)
 {
    return $this->successResponse($this->book2Service->deleteBook2($id));
 }
}