<?php
/**
 * RequestType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * App Center Client
 *
 * Microsoft Visual Studio App Center API
 *
 * OpenAPI spec version: v0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * RequestType Class Doc Comment
 *
 * @category Class
 * @description Request type
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestType
{
    /**
     * Possible values of this enum
     */
    const UNSUPPORTED = 'Unsupported';
    const DELETE = 'Delete';
    const PURGE = 'Purge';
    const UNDO_DELETE = 'UndoDelete';
    const SCHEDULED = 'Scheduled';
    const APP_DELETE = 'AppDelete';
    const APP_PURGE = 'AppPurge';
    const APP_UNDO_DELETE = 'AppUndoDelete';
    const EXPORT = 'Export';
    const CUSTOMER_ACCOUNT_DELETE = 'CustomerAccountDelete';
    const CUSTOMER_ACCOUNT_EXPORT = 'CustomerAccountExport';
    const CUSTOMER_USER_DELETE = 'CustomerUserDelete';
    const CUSTOMER_USER_EXPORT = 'CustomerUserExport';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSUPPORTED,
            self::DELETE,
            self::PURGE,
            self::UNDO_DELETE,
            self::SCHEDULED,
            self::APP_DELETE,
            self::APP_PURGE,
            self::APP_UNDO_DELETE,
            self::EXPORT,
            self::CUSTOMER_ACCOUNT_DELETE,
            self::CUSTOMER_ACCOUNT_EXPORT,
            self::CUSTOMER_USER_DELETE,
            self::CUSTOMER_USER_EXPORT,
        ];
    }
}


