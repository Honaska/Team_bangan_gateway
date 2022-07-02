<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;


class Author2Service{
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
 $this->baseUri = config('services.authors2.base_uri');
 $this->secret = config('services.authors2.secret');
 }

 public function obtainAuthors2()
 {
 return $this->performRequest('GET','/authors'); 
 }

 public function createAuthor2($data)
 {
 return $this->performRequest('POST', '/authors', $data);
 }

 public function obtainAuthor2($id)
 {
 return $this->performRequest('GET', "/authors/{$id}");
 }

 public function editAuthor2($data, $id)
 {
 return $this->performRequest('PUT', "/authors/{$id}", $data);
 }
 public function editAuthor_2($data, $id)
 {
 return $this->performRequest('PATCH', "/authors/{$id}", $data);
 }

 public function deleteAuthor2($id)
 {
 return $this->performRequest('DELETE', "/authors/{$id}");
 }
}
