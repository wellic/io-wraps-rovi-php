<?php
/*
 * Copyright (c) 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

require_once 'service/apiModel.php';
require_once 'service/apiService.php';
require_once 'service/apiServiceRequest.php';


  /**
   * The "AutocompleteMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $autocompleteapiService = new apiAutocompleteapiService(...);
   *   $AutocompleteMethods = $autocompleteapiService->AutocompleteMethods;
   *  </code>
   */
  class AutocompleteMethodsServiceResource extends apiServiceResource {


    /**
     * Predicts search words or phrases for select areas of Rovi Cloud Services and returns results in
     * order of popularity. Fields in bold are required. (AutocompleteMethods.Autocomplete)
     *
     * @param string $endpoint Database to search
     * @param string $entitytype Type of content to search for
     * @param string $query The search string
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string filter If you specify the clu parameter, filter filters out content that is not found on the television service channel lineup. Specified with a value of availability, like this: filter=availability.
     * @opt_param int size The number of items you want to be returned
     */
    public function Autocomplete($endpoint, $entitytype, $query, $optParams = array()) {
      $params = array('endpoint' => $endpoint, 'entitytype' => $entitytype, 'query' => $query);
      $params = array_merge($params, $optParams);
      $data = $this->__call('Autocomplete', array($params));
      return $data;
    }
  }



/**
 * Service definition for Autocompleteapi (1.0).
 *
 * <p>
 * Predicts search words or phrases for select areas of Rovi Cloud Services and returns results in order of popularity.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiAutocompleteapiService extends apiService {
  public $AutocompleteMethods;
  /**
   * Constructs the internal representation of the Autocompleteapi service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->rpcPath = '/rpc';
    $this->restBasePath = '/search/v2/';
    $this->version = '1.0';
    $this->serviceName = 'autocompleteapi';
    $this->io = $apiClient->getIo();

    $apiClient->addService($this->serviceName, $this->version);
    $this->AutocompleteMethods = new AutocompleteMethodsServiceResource($this, $this->serviceName, 'AutocompleteMethods', json_decode('{"methods": {"Autocomplete": {"path": "{endpoint}/autocomplete", "httpMethod": "GET", "id": "AutocompleteAPI.Autocomplete", "parameters": {"endpoint": {"required": true, "default": "music", "enum": ["music", "amgvideo", "video"], "location": "path", "type": "string"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "entitytype": {"required": true, "default": "", "enum": ["album", "song", "artist", "movie", "tvseries", "credit", "movie", "tvseries", "onetimeonly", "credit"], "location": "query", "type": "string"}, "filter": {"default": "", "required": false, "type": "string", "location": "query"}, "query": {"default": "", "required": true, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}}}', true));
  }
}
