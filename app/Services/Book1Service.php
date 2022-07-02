<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;


class Book1Service{
    use ConsumesExternalService;
 /**
 * The base uri to consume the User1 Service
 * @var string
 */
 public $baseUri;
 /**
 * The secret to consume the User1 Service
 * @var string
 */
 public $secret;

 public function __construct()
 {
 $this->baseUri = config('services.books1.base_uri');
 $this->secret = config('services.books1.secret');
 }

 public function obtainBooks1()
 {
 return $this->performRequest('GET','/books'); 
 }

 public function createBook1($data)
 {
 return $this->performRequest('POST', '/books', $data);
 }

 public function obtainBook1($id)
 {
 return $this->performRequest('GET', "/books/{$id}");
 }

 public function editBook1($data, $id)
 {
 return $this->performRequest('PUT', "/books/{$id}", $data);
 }
 public function editBook_1($data, $id)
 {
 return $this->performRequest('PATCH', "/books/{$id}", $data);
 }

 public function deleteBook1($id)
 {
 return $this->performRequest('DELETE', "/books/{$id}");
 }
}
