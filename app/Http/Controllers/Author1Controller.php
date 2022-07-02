<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response; // Response Components
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Services\Author1Service; // user1 Services

Class Author1Controller extends Controller {
 // use to add your Traits ApiResponser
 use ApiResponser;

 /**
 * The service to consume the User1 Microservice
 * @var Author1Service
 */

 public $author1Service;
 /**
 * Create a new controller instance
 * @return void
 */
 public function __construct(Author1Service $author1Service){
     $this->author1Service = $author1Service;
 }
 /**
 * Return the list of users
 * @return Illuminate\Http\Response
 */
 public function index()
 {
 // 
    return $this->successResponse($this->author1Service->obtainAuthors1()); 
 }
 
 public function add(Request $request ){
    return $this->successResponse($this->author1Service->createAuthor1($request->all(), Response::HTTP_CREATED));
}

public function show($id)
 {
    return $this->successResponse($this->author1Service->obtainAuthor1($id));
 }

 public function update(Request $request,$id)
 {
    return $this->successResponse($this->author1Service->editAuthor1($request->all(), $id));
 }

 public function delete($id)
 {
    return $this->successResponse($this->author1Service->deleteAuthor1($id));
 }
}