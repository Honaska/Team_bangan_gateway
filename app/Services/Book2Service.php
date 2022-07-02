<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;


class Book2Service{
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
 $this->baseUri = config('services.books2.base_uri');
 $this->secret = config('services.books2.secret');
 }

 public function obtainBooks2()
 {
 return $this->performRequest('GET','/books'); 
 }

 public function createBook2($data)
 {
 return $this->performRequest('POST', '/books', $data);
 }

 public function obtainBook2($id)
 {
 return $this->performRequest('GET', "/books/{$id}");
 }

 public function editBook2($data, $id)
 {
 return $this->performRequest('PUT', "/books/{$id}", $data);
 }
 public function editBook_2($data, $id)
 {
 return $this->performRequest('PATCH', "/books/{$id}", $data);
 }

 public function deleteBook2($id)
 {
 return $this->performRequest('DELETE', "/books/{$id}");
 }
}
