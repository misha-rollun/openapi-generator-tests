<?php

/**
 * Swagger Petstore - OpenAPI 3.0
 * This is a sample Pet Store Server based on the OpenAPI 3.0 specification.  You can find out more about Swagger at [https://swagger.io](https://swagger.io). In the third iteration of the pet store, we've switched to the design first approach! You can now help us improve the API whether it's by making changes to the definition itself or to the code. That way, with time, we can improve the API in general, and expose some of the new features in OAS3.  _If you're looking for the Swagger 2.0/OAS 2.0 version of Petstore, then click [here](https://editor.swagger.io/?url=https://petstore.swagger.io/v2/swagger.yaml). Alternatively, you can load via the `Edit > Load Petstore OAS 2.0` menu option!_  Some useful links: - [The Pet Store repository](https://github.com/swagger-api/swagger-petstore) - [The source API definition for the Pet Store](https://github.com/swagger-api/swagger-petstore/blob/master/src/main/resources/openapi.yaml)
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.11
 * Contact: apiteam@swagger.io
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * post addPet
 * Summary: Add a new pet to the store
 * Notes: Add a new pet to the store
 * Output-Formats: [application/json, application/xml]
 */
Route::post('/api/v3/pet', 'PetController@addPet');
/**
 * put updatePet
 * Summary: Update an existing pet
 * Notes: Update an existing pet by Id
 * Output-Formats: [application/json, application/xml]
 */
Route::put('/api/v3/pet', 'PetController@updatePet');
/**
 * get findPetsByStatus
 * Summary: Finds Pets by status
 * Notes: Multiple status values can be provided with comma separated strings
 * Output-Formats: [application/json, application/xml]
 */
Route::get('/api/v3/pet/findByStatus', 'PetController@findPetsByStatus');
/**
 * get findPetsByTags
 * Summary: Finds Pets by tags
 * Notes: Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.
 * Output-Formats: [application/json, application/xml]
 */
Route::get('/api/v3/pet/findByTags', 'PetController@findPetsByTags');
/**
 * delete deletePet
 * Summary: Deletes a pet
 * Notes: delete a pet

 */
Route::delete('/api/v3/pet/{petId}', 'PetController@deletePet');
/**
 * get getPetById
 * Summary: Find pet by ID
 * Notes: Returns a single pet
 * Output-Formats: [application/json, application/xml]
 */
Route::get('/api/v3/pet/{petId}', 'PetController@getPetById');
/**
 * post updatePetWithForm
 * Summary: Updates a pet in the store with form data
 * Notes: 

 */
Route::post('/api/v3/pet/{petId}', 'PetController@updatePetWithForm');
/**
 * post uploadFile
 * Summary: uploads an image
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::post('/api/v3/pet/{petId}/uploadImage', 'PetController@uploadFile');
/**
 * get getInventory
 * Summary: Returns pet inventories by status
 * Notes: Returns a map of status codes to quantities
 * Output-Formats: [application/json]
 */
Route::get('/api/v3/store/inventory', 'StoreController@getInventory');
/**
 * post placeOrder
 * Summary: Place an order for a pet
 * Notes: Place a new order in the store
 * Output-Formats: [application/json]
 */
Route::post('/api/v3/store/order', 'StoreController@placeOrder');
/**
 * delete deleteOrder
 * Summary: Delete purchase order by ID
 * Notes: For valid response try integer IDs with value &lt; 1000. Anything above 1000 or nonintegers will generate API errors

 */
Route::delete('/api/v3/store/order/{orderId}', 'StoreController@deleteOrder');
/**
 * get getOrderById
 * Summary: Find purchase order by ID
 * Notes: For valid response try integer IDs with value &lt;&#x3D; 5 or &gt; 10. Other values will generate exceptions.
 * Output-Formats: [application/json, application/xml]
 */
Route::get('/api/v3/store/order/{orderId}', 'StoreController@getOrderById');
/**
 * post createUser
 * Summary: Create user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/json, application/xml]
 */
Route::post('/api/v3/user', 'UserController@createUser');
/**
 * post createUsersWithListInput
 * Summary: Creates list of users with given input array
 * Notes: Creates list of users with given input array
 * Output-Formats: [application/json, application/xml]
 */
Route::post('/api/v3/user/createWithList', 'UserController@createUsersWithListInput');
/**
 * get loginUser
 * Summary: Logs user into the system
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
Route::get('/api/v3/user/login', 'UserController@loginUser');
/**
 * get logoutUser
 * Summary: Logs out current logged in user session
 * Notes: 

 */
Route::get('/api/v3/user/logout', 'UserController@logoutUser');
/**
 * delete deleteUser
 * Summary: Delete user
 * Notes: This can only be done by the logged in user.

 */
Route::delete('/api/v3/user/{username}', 'UserController@deleteUser');
/**
 * get getUserByName
 * Summary: Get user by user name
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
Route::get('/api/v3/user/{username}', 'UserController@getUserByName');
/**
 * put updateUser
 * Summary: Update user
 * Notes: This can only be done by the logged in user.

 */
Route::put('/api/v3/user/{username}', 'UserController@updateUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
