<?php

/**
 * Swagger Petstore - OpenAPI 3.0
 * PHP version 7.4
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This is a sample Pet Store Server based on the OpenAPI 3.0 specification.  You can find out more about Swagger at [https://swagger.io](https://swagger.io). In the third iteration of the pet store, we've switched to the design first approach! You can now help us improve the API whether it's by making changes to the definition itself or to the code. That way, with time, we can improve the API in general, and expose some of the new features in OAS3.  _If you're looking for the Swagger 2.0/OAS 2.0 version of Petstore, then click [here](https://editor.swagger.io/?url=https://petstore.swagger.io/v2/swagger.yaml). Alternatively, you can load via the `Edit > Load Petstore OAS 2.0` menu option!_  Some useful links: - [The Pet Store repository](https://github.com/swagger-api/swagger-petstore) - [The source API definition for the Pet Store](https://github.com/swagger-api/swagger-petstore/blob/master/src/main/resources/openapi.yaml)
 * The version of the OpenAPI document: 1.0.11
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

declare(strict_types=1);

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer\App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpNotImplementedException;

/**
 * RegisterRoutes Class Doc Comment
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class RegisterRoutes
{
    /** @var array[] list of all api operations */
    private $operations = [
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/pet',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'addPet',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "Successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Pet"
      }
    },
    "application/xml" : {
      "schema" : {
        "$ref" : "#/components/schemas/Pet"
      }
    }
  }
}',
                ],
                '405' => [
                    'jsonSchema' => '{
  "description" : "Invalid input"
}',
                ],
            ],
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/pet/findByStatus',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'findPetsByStatus',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "type" : "array",
        "items" : {
          "$ref" : "#/components/schemas/Pet"
        }
      }
    },
    "application/xml" : {
      "schema" : {
        "type" : "array",
        "items" : {
          "$ref" : "#/components/schemas/Pet"
        }
      }
    }
  }
}',
                ],
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid status value"
}',
                ],
            ],
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/pet/findByTags',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'findPetsByTags',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "type" : "array",
        "items" : {
          "$ref" : "#/components/schemas/Pet"
        }
      }
    },
    "application/xml" : {
      "schema" : {
        "type" : "array",
        "items" : {
          "$ref" : "#/components/schemas/Pet"
        }
      }
    }
  }
}',
                ],
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid tag value"
}',
                ],
            ],
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/pet',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'updatePet',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "Successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Pet"
      }
    },
    "application/xml" : {
      "schema" : {
        "$ref" : "#/components/schemas/Pet"
      }
    }
  }
}',
                ],
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid ID supplied"
}',
                ],
                '404' => [
                    'jsonSchema' => '{
  "description" : "Pet not found"
}',
                ],
                '405' => [
                    'jsonSchema' => '{
  "description" : "Validation exception"
}',
                ],
            ],
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'deletePet',
            'responses' => [
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid pet value"
}',
                ],
            ],
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'getPetById',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Pet"
      }
    },
    "application/xml" : {
      "schema" : {
        "$ref" : "#/components/schemas/Pet"
      }
    }
  }
}',
                ],
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid ID supplied"
}',
                ],
                '404' => [
                    'jsonSchema' => '{
  "description" : "Pet not found"
}',
                ],
            ],
            'authMethods' => [
                // apiKey security schema named 'api_key'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'api_key',
                    'isKeyInHeader' => true,
                    'isKeyInQuery' => false,
                    'isKeyInCookie' => false,
                ],
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'updatePetWithForm',
            'responses' => [
                '405' => [
                    'jsonSchema' => '{
  "description" : "Invalid input"
}',
                ],
            ],
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/pet/{petId}/uploadImage',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'uploadFile',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/ApiResponse"
      }
    }
  }
}',
                ],
            ],
            'authMethods' => [
                // oauth2 security schema named 'petstore_auth'
                [
                    'type' => 'oauth2',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => false,
                    'isOAuth' => true,
                    'scopes' => [
                        'write:pets', // modify pets in your account
                        'read:pets', // read your pets
                    ],
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/store/inventory',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'getInventory',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "type" : "object",
        "additionalProperties" : {
          "type" : "integer",
          "format" : "int32"
        }
      }
    }
  }
}',
                ],
            ],
            'authMethods' => [
                // apiKey security schema named 'api_key'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'api_key',
                    'isKeyInHeader' => true,
                    'isKeyInQuery' => false,
                    'isKeyInCookie' => false,
                ],
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/store/order',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'placeOrder',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Order"
      }
    }
  }
}',
                ],
                '405' => [
                    'jsonSchema' => '{
  "description" : "Invalid input"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/store/order/{orderId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'deleteOrder',
            'responses' => [
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid ID supplied"
}',
                ],
                '404' => [
                    'jsonSchema' => '{
  "description" : "Order not found"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/store/order/{orderId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'getOrderById',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Order"
      }
    },
    "application/xml" : {
      "schema" : {
        "$ref" : "#/components/schemas/Order"
      }
    }
  }
}',
                ],
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid ID supplied"
}',
                ],
                '404' => [
                    'jsonSchema' => '{
  "description" : "Order not found"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/user',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'createUser',
            'responses' => [
                'default' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/User"
      }
    },
    "application/xml" : {
      "schema" : {
        "$ref" : "#/components/schemas/User"
      }
    }
  }
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/user/createWithList',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'createUsersWithListInput',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "Successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/User"
      }
    },
    "application/xml" : {
      "schema" : {
        "$ref" : "#/components/schemas/User"
      }
    }
  }
}',
                ],
                'default' => [
                    'jsonSchema' => '{
  "description" : "successful operation"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/user/login',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'loginUser',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "headers" : {
    "X-Rate-Limit" : {
      "description" : "calls per hour allowed by the user",
      "style" : "simple",
      "explode" : false,
      "schema" : {
        "type" : "integer",
        "format" : "int32"
      }
    },
    "X-Expires-After" : {
      "description" : "date in UTC when token expires",
      "style" : "simple",
      "explode" : false,
      "schema" : {
        "type" : "string",
        "format" : "date-time"
      }
    }
  },
  "content" : {
    "application/xml" : {
      "schema" : {
        "type" : "string"
      }
    },
    "application/json" : {
      "schema" : {
        "type" : "string"
      }
    }
  }
}',
                ],
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid username/password supplied"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/user/logout',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'logoutUser',
            'responses' => [
                'default' => [
                    'jsonSchema' => '{
  "description" : "successful operation"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'deleteUser',
            'responses' => [
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid username supplied"
}',
                ],
                '404' => [
                    'jsonSchema' => '{
  "description" : "User not found"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'getUserByName',
            'responses' => [
                '200' => [
                    'jsonSchema' => '{
  "description" : "successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/User"
      }
    },
    "application/xml" : {
      "schema" : {
        "$ref" : "#/components/schemas/User"
      }
    }
  }
}',
                ],
                '400' => [
                    'jsonSchema' => '{
  "description" : "Invalid username supplied"
}',
                ],
                '404' => [
                    'jsonSchema' => '{
  "description" : "User not found"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/api/v3',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'updateUser',
            'responses' => [
                'default' => [
                    'jsonSchema' => '{
  "description" : "successful operation"
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
    ];

    /**
     * Add routes to Slim app.
     *
     * @param \Slim\App $app Pre-configured Slim application instance
     *
     * @throws HttpNotImplementedException When implementation class doesn't exists
     */
    public function __invoke(\Slim\App $app): void
    {
        $app->options('/{routes:.*}', function (ServerRequestInterface $request, ResponseInterface $response) {
            // CORS Pre-Flight OPTIONS Request Handler
            return $response;
        });

        // create mock middleware factory
        /** @var \Psr\Container\ContainerInterface */
        $container = $app->getContainer();
        /** @var \OpenAPIServer\Mock\OpenApiDataMockerRouteMiddlewareFactory|null */
        $mockMiddlewareFactory = null;
        if ($container->has(\OpenAPIServer\Mock\OpenApiDataMockerRouteMiddlewareFactory::class)) {
            // I know, anti-pattern. Don't retrieve dependency directly from container
            $mockMiddlewareFactory = $container->get(\OpenAPIServer\Mock\OpenApiDataMockerRouteMiddlewareFactory::class);
        }

        foreach ($this->operations as $operation) {
            $callback = function (ServerRequestInterface $request) use ($operation) {
                $message = "How about extending {$operation['classname']} by {$operation['apiPackage']}\\{$operation['userClassname']} class implementing {$operation['operationId']} as a {$operation['httpMethod']} method?";
                throw new HttpNotImplementedException($request, $message);
            };
            $middlewares = [];

            if (class_exists("\\{$operation['apiPackage']}\\{$operation['userClassname']}")) {
                // Notice how we register the controller using the class name?
                // PHP-DI will instantiate the class for us only when it's actually necessary
                $callback = ["\\{$operation['apiPackage']}\\{$operation['userClassname']}", $operation['operationId']];
            }

            if ($mockMiddlewareFactory) {
                $mockSchemaResponses = array_map(function ($item) {
                    return json_decode($item['jsonSchema'], true);
                }, $operation['responses']);
                $middlewares[] = $mockMiddlewareFactory->create($mockSchemaResponses);
            }

            $route = $app->map(
                [$operation['httpMethod']],
                "{$operation['basePathWithoutHost']}{$operation['path']}",
                $callback
            )->setName($operation['operationId']);

            foreach ($middlewares as $middleware) {
                $route->add($middleware);
            }
        }
    }
}
