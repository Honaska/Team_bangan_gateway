<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response; // Response Components
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Services\Author2Service; // user1 Services

Class Author2Controller extends Controller {
 // use to add your Traits ApiResponser
 use ApiResponser;

 /**
 * The service to consume the User1 Microservice
 * @var Author2Service
 */

 public $author2Service;
 /**
 * Create a new controller instance
 * @return void
 */
 public function __construct(Author2Service $author2Service){
     $this->author2Service = $author2Service;
 }
 /**
 * Return the list of users
 * @return Illuminate\Http\Response
 */
 public function index()
 {
 // 
    return $this->successResponse($this->author2Service->obtainAuthors2()); 
 }
 
 public function add(Request $request ){
    return $this->successResponse($this->author2Service->createAuthor2($request->all(), Response::HTTP_CREATED));
}

public function show($id)
 {
    return $this->successResponse($this->author2Service->obtainAuthor2($id));
 }

 public function update(Request $request,$id)
 {
    return $this->successResponse($this->author2Service->editAuthor2($request->all(), $id));
 }

 public function delete($id)
 {
    return $this->successResponse($this->author2Service->deleteAuthor2($id));
 }
}