<?php
/**
 * BSeller Platform | B2W - Companhia Digital
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  ${MAGENTO_MODULE_NAMESPACE}
 * @package   ${MAGENTO_MODULE_NAMESPACE}_${MAGENTO_MODULE}
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br)
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */

namespace SkyHub\Api\Service;

use SkyHub\Api\Handler\Response\HandlerInterfaceException;
use SkyHub\Api\Handler\Response\HandlerInterfaceSuccess;

interface ServiceInterface
{
    
    /**
     * ServiceInterface constructor.
     *
     * @param string $baseUri
     * @param array  $headers
     * @param array  $options
     */
    public function __construct($baseUri, array $headers = [], array $options = []);
    
    
    /**
     * @param string $uri
     * @param string $body
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function post($uri, $body = null, array $options = []);
    
    
    /**
     * @param string $uri
     * @param string $body
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function put($uri, $body = null, array $options = []);


    /**
     * @param string $uri
     * @param string $body
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function patch($uri, $body = null, array $options = []);
    
    
    /**
     * @param string $uri
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function get($uri, array $options = []);


    /**
     * @param string $uri
     * @param string $body
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function delete($uri, $body = null, array $options = []);
    
    
    /**
     * @param string $uri
     * @param array  $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function head($uri, array $options = []);
    
    
    /**
     * @param string       $method
     * @param string       $uri
     * @param string|array $body
     * @param array        $options
     *
     * @return HandlerInterfaceException|HandlerInterfaceSuccess
     */
    public function request($method, $uri, $body = null, $options = []);
}
