<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response; // Response Components
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Services\Book1Service; // user1 Services

Class Book1Controller extends Controller {
 // use to add your Traits ApiResponser
 use ApiResponser;

 /**
 * The service to consume the User1 Microservice
 * @var Book1Service
 */

 public $book1Service;
 /**
 * Create a new controller instance
 * @return void
 */
 public function __construct(Book1Service $book1Service){
     $this->book1Service = $book1Service;
 }
 /**
 * Return the list of users
 * @return Illuminate\Http\Response
 */
 public function index()
 {
 // 
    return $this->successResponse($this->book1Service->obtainBooks1()); 
 }
 
 public function add(Request $request ){
    return $this->successResponse($this->book1Service->createBook1($request->all(), Response::HTTP_CREATED));
}

public function show($id)
 {
    return $this->successResponse($this->book1Service->obtainBook1($id));
 }

 public function update(Request $request,$id)
 {
    return $this->successResponse($this->book1Service->editBook1($request->all(), $id));
 }

 public function delete($id)
 {
    return $this->successResponse($this->book1Service->deleteBook1($id));
 }
}