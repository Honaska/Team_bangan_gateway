<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;


class Author1Service{
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
 $this->baseUri = config('services.authors1.base_uri');
 $this->secret = config('services.authors1.secret');
 }

 public function obtainAuthors1()
 {
 return $this->performRequest('GET','/authors'); 
 }

 public function createAuthor1($data)
 {
 return $this->performRequest('POST', '/authors', $data);
 }

 public function obtainAuthor1($id)
 {
 return $this->performRequest('GET', "/authors/{$id}");
 }

 public function editAuthor1($data, $id)
 {
 return $this->performRequest('PUT', "/authors/{$id}", $data);
 }
 public function editAuthor_1($data, $id)
 {
 return $this->performRequest('PATCH', "/authors/{$id}", $data);
 }

 public function deleteAuthor1($id)
 {
 return $this->performRequest('DELETE', "/authors/{$id}");
 }
}
