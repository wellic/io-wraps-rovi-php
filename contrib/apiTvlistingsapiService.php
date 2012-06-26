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
   * The "TVListingsMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $tvlistingsapiService = new apiTvlistingsapiService(...);
   *   $TVListingsMethods = $tvlistingsapiService->TVListingsMethods;
   *  </code>
   */
  class TVListingsMethodsServiceResource extends apiServiceResource {


    /**
     * TV listings with detailed program information. Fields in bold are required.
     * (TVListingsMethods.LinearSchedule)
     *
     * @param string $locale Language and country code of the television service (case-sensitive)
     * @param int $serviceId Service ID of the television service
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string startdate Beginning of the time period covered by the schedule, specified in a DateTime format.
     * @opt_param string format Format of the returned data
     * @opt_param bool oneairingpersourceid Whether to return only the next show on each channel that is not in progress at the time specified by startdate. Note: Setting this parameter to true overrides the inprogress and duration parameters.
     * @opt_param string sourceid The channel or channels that will appear on the schedule.
     * @opt_param int duration Number of minutes the schedule will cover, from 1 to 240 (4 hours)
     * @opt_param bool inprogress Whether shows in progress at the time specified for startdate are included in the schedule
     */
    public function LinearSchedule($locale, $serviceId, $optParams = array()) {
      $params = array('locale' => $locale, 'serviceId' => $serviceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('LinearSchedule', array($params));
      return $data;
    }
    /**
     * Returns the channel lineup offered by a television service, plus information about the source of
     * programming on a channel. Fields in bold are required. (TVListingsMethods.ServiceDetails)
     *
     * @param string $locale Language and country code of the television service (case-sensitive)
     * @param int $serviceId Service ID of the television service
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string format Format of the returned data
     * @opt_param int imageformatid Determines the size and file format of channel logos returned in the response. Choose the ID from the Format ID table.
     * @opt_param int imagehorizontalresolution Determines the exact horizontal resolution of the images returned in the response (in pixels)
     * @opt_param int imageverticalresolution Determines the exact vertical resolution of the images returned in the response (in pixels)
     * @opt_param bool includechannelimages Include channel logos in the response
     */
    public function ServiceDetails($locale, $serviceId, $optParams = array()) {
      $params = array('locale' => $locale, 'serviceId' => $serviceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('ServiceDetails', array($params));
      return $data;
    }
    /**
     * Information about a series, episode, or program, plus a schedule of upcoming broadcasts. Fields
     * in bold are required. (TVListingsMethods.ProgramDetails)
     *
     * @param string $locale Language and country code of the television service (case-sensitive)
     * @param int $programId A series, episode, or program identifier
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string sourceid If you specify a serviceid to include a schedule of broadcasts of the show, sourceid determines the channel or channels that will appear on the schedule
     * @opt_param string startdate The date and time must be specified as a DateTime value
     * @opt_param int pagesize If you specify a serviceid to include a schedule of broadcasts of the show, pagesize specifies the maximum number of rows to be returned in the broadcast schedule
     * @opt_param string format Format of the returned data
     * @opt_param string startindex If you specify a serviceid to include a schedule of broadcasts of the show, startindex specifies the number of the first row you want, counting from zero as the first row in the schedule
     * @opt_param int copytype Type of description you want returned for the program, movie, or TV series
     * @opt_param int imageformatid If you request Image in the include parameter, imageformatid determines the format ID of images returned in the ProgramImages element
     * @opt_param int imagehorizontalresolution If you request Image in the include parameter, imagehorizontalresolution determines the exact horizontal resolution (in pixels) of the images returned in the ProgramImages element
     * @opt_param int serviceId Service ID of the television service
     * @opt_param int imageverticalresolution If you request Image in the include parameter, imageverticalresolution determines the exact vertical resolution (in pixels) of the images returned in the ProgramImages element
     * @opt_param string imageformat If you request Image in the include parameter, imageformat specifies the preferred file format for images returned in the ProgramImages element
     * @opt_param int duration Determines the number of minutes the schedule will cover
     * @opt_param string copytextformat Format of the description of the program, movie, or TV series
     * @opt_param string imagetype If you request Image in the include parameter, imagetype determines the type of images returned in the ProgramImages element
     * @opt_param string include Data to include in the response: Award, Credit, Image, Keyword, Program, Seasons (case-senstive)
     * @opt_param bool inprogress If you specify a serviceid to include a schedule of broadcasts of the show, inprogress determines whether shows that are in progress at startdate are included in the schedule
     * @opt_param int imagecount Number of images returned in the ProgramImages element
     */
    public function ProgramDetails($locale, $programId, $optParams = array()) {
      $params = array('locale' => $locale, 'programId' => $programId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('ProgramDetails', array($params));
      return $data;
    }
    /**
     * TV listings designed for the space limitations of a grid. Fields in bold are required.
     * (TVListingsMethods.GridSchedule)
     *
     * @param string $locale Language and country code of the television service (case-sensitive)
     * @param int $serviceId Service ID of the television service
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string startdate Beginning of the time period covered by the schedule, specified in a DateTime format
     * @opt_param int titletype Type of title to return for each program.
     * @opt_param string sourcefilterinclude Include certain types of programs in listings: HD, PPV, Music (case-senstive)
     * @opt_param string format Format of the returned data
     * @opt_param int imageformatid If you set includechannelimages to true, imageformatid determines the width, height, and file format of the channel logos returned in the response
     * @opt_param string sourceid Channel sources to include on the schedule, specified as a comma-separated list
     * @opt_param int duration Number of minutes of program schedule to return, from 1 to 240 minutes (4 hours)
     * @opt_param string sourcefilterexclude Exclude certain types of programs from listings: HD, PPV, Music (case-sensitive)
     * @opt_param bool includechannelimages Whether to include channel logos in the response
     */
    public function GridSchedule($locale, $serviceId, $optParams = array()) {
      $params = array('locale' => $locale, 'serviceId' => $serviceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('GridSchedule', array($params));
      return $data;
    }
    /**
     * Returns a list of the television service offerings for an area. Fields in bold are required.
     * (TVListingsMethods.Services)
     *
     * @param string $postalCode Your postal code
     * @param string $locale Language and country code of the television service (case-sensitive)
     * @param string $countrycode Two-letter (uppercase) country code
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string format Format of the returned data
     * @opt_param int msoid ID of a cable or satellite operator
     */
    public function Services($postalCode, $locale, $countrycode, $optParams = array()) {
      $params = array('postalCode' => $postalCode, 'locale' => $locale, 'countrycode' => $countrycode);
      $params = array_merge($params, $optParams);
      $data = $this->__call('Services', array($params));
      return $data;
    }
    /**
     * Returns information about a celebrity and can optionally include a schedule of upcoming
     * broadcasts the celebrity appears in. Fields in bold are required.
     * (TVListingsMethods.CelebrityDetails)
     *
     * @param string $locale Language and country code of the television service (case-sensitive)
     * @param string $include Data to include in the response: AKAs, All, Awards, Biography, Credits, Factsheets, Images, None, Relations (case-senstive)
     * @param int $nameid Database ID of the celebrity
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool includecreditsforepisodes If you request Credits in the include parameter, includecreditsforepisodes determines whether credits for each episode in a series are returned in the response
     * @opt_param string startdate The date and time must be specified as a DateTime value
     * @opt_param string format Format of the returned data
     * @opt_param int copytype Type of description you want returned for the program, movie, or TV series
     * @opt_param int imageformatid If you request Image in the include parameter, imageformatid determines the format ID of images returned in the ProgramImages element
     * @opt_param int imagehorizontalresolution If you request Image in the include parameter, imagehorizontalresolution determines the exact horizontal resolution (in pixels) of the images returned in the ProgramImages element
     * @opt_param int serviceid The television service ID. This must be specified if you want to return a schedule of upcoming broadcasts the celebrity appears in
     * @opt_param int imageverticalresolution If you request Image in the include parameter, imageverticalresolution determines the exact vertical resolution (in pixels) of the images returned in the ProgramImages element
     * @opt_param string imageformat If you request Image in the include parameter, imageformat specifies the preferred file format for images returned in the ProgramImages element
     * @opt_param string sourceid If you specify a serviceid to include a schedule of broadcasts of the show, sourceid determines the channel or channels that will appear on the schedule
     * @opt_param int duration Determines the number of minutes the schedule will cover
     * @opt_param string copytextformat Format of the description of the program, movie, or TV series
     * @opt_param string imagetype If you request Image in the include parameter, imagetype determines the type of images returned in the ProgramImages element
     * @opt_param bool inprogress If you specify a serviceid to include a schedule of broadcasts of the show, inprogress determines whether shows that are in progress at startdate are included in the schedule
     * @opt_param int imagecount Number of images returned in the ProgramImages element
     */
    public function CelebrityDetails($locale, $include, $nameid, $optParams = array()) {
      $params = array('locale' => $locale, 'include' => $include, 'nameid' => $nameid);
      $params = array_merge($params, $optParams);
      $data = $this->__call('CelebrityDetails', array($params));
      return $data;
    }
  }



/**
 * Service definition for Tvlistingsapi (1.0).
 *
 * <p>
 * International television listings plus program and celebrity data and images.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiTvlistingsapiService extends apiService {
  public $TVListingsMethods;
  /**
   * Constructs the internal representation of the Tvlistingsapi service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->rpcPath = '/rpc';
    $this->restBasePath = '/TVlistings/v9/listings/';
    $this->version = '1.0';
    $this->serviceName = 'tvlistingsapi';
    $this->io = $apiClient->getIo();

    $apiClient->addService($this->serviceName, $this->version);
    $this->TVListingsMethods = new TVListingsMethodsServiceResource($this, $this->serviceName, 'TVListingsMethods', json_decode('{"methods": {"LinearSchedule": {"path": "linearschedule/{serviceId}/info", "httpMethod": "GET", "id": "TVListingsMethods.LinearSchedule", "parameters": {"startdate": {"default": "", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "locale": {"required": true, "default": "en-US", "enum": ["en-US", "da-DK", "no-NO", "nl-BE", "pl-PL", "nl-NL", "pt-BR", "en-BM", "pt-PT", "en-CA", "es-AR", "en-IE", "es-BO", "en-JM", "es-CL", "en-GB", "es-CO", "es-CR", "fi-FI", "es-DO", "fl-BE", "es-EC", "fr-BE", "es-SV", "fr-CA", "es-GT", "fr-FR", "es-HN", "fr-LU", "es-MX", "fr-CH", "es-NI", "de-AT", "es-PA", "de-DE", "es-PE", "de-LU", "es-ES", "de-CH", "es-US", "it-IT", "es-VE", "it-CH", "sv-SE"], "location": "query", "type": "string"}, "oneairingpersourceid": {"default": false, "required": false, "type": "boolean", "location": "query"}, "sourceid": {"default": "", "required": false, "type": "string", "location": "query"}, "serviceId": {"default": "", "required": true, "type": "integer", "location": "path"}, "duration": {"default": 1, "required": false, "type": "integer", "location": "query"}, "inprogress": {"default": false, "required": false, "type": "boolean", "location": "query"}}}, "ServiceDetails": {"path": "servicedetails/serviceid/{serviceId}/info", "httpMethod": "GET", "id": "TVListingsMethods.ServiceDetails", "parameters": {"format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "locale": {"required": true, "default": "en-US", "enum": ["en-US", "da-DK", "no-NO", "nl-BE", "pl-PL", "nl-NL", "pt-BR", "en-BM", "pt-PT", "en-CA", "es-AR", "en-IE", "es-BO", "en-JM", "es-CL", "en-GB", "es-CO", "es-CR", "fi-FI", "es-DO", "fl-BE", "es-EC", "fr-BE", "es-SV", "fr-CA", "es-GT", "fr-FR", "es-HN", "fr-LU", "es-MX", "fr-CH", "es-NI", "de-AT", "es-PA", "de-DE", "es-PE", "de-LU", "es-ES", "de-CH", "es-US", "it-IT", "es-VE", "it-CH", "sv-SE"], "location": "query", "type": "string"}, "imageformatid": {"default": "", "required": false, "type": "integer", "location": "query"}, "imagehorizontalresolution": {"default": "", "required": false, "type": "integer", "location": "query"}, "serviceId": {"default": "", "required": true, "type": "integer", "location": "path"}, "imageverticalresolution": {"default": "", "required": false, "type": "integer", "location": "query"}, "includechannelimages": {"default": false, "required": false, "type": "boolean", "location": "query"}}}, "ProgramDetails": {"path": "programdetails/{serviceId}/{programId}/info", "httpMethod": "GET", "id": "TVListingsMethods.ProgramDetails", "parameters": {"startdate": {"default": "", "required": false, "type": "string", "location": "query"}, "imagehorizontalresolution": {"default": "", "required": false, "type": "integer", "location": "query"}, "pagesize": {"default": 0, "required": false, "type": "integer", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "sourceid": {"default": "", "required": false, "type": "string", "location": "query"}, "imagecount": {"default": 5, "required": false, "type": "integer", "location": "query"}, "programId": {"default": "", "required": true, "type": "integer", "location": "path"}, "copytype": {"default": "", "required": false, "type": "integer", "location": "query"}, "imageformatid": {"default": "", "required": false, "type": "integer", "location": "query"}, "locale": {"required": true, "default": "en-US", "enum": ["en-US", "da-DK", "no-NO", "nl-BE", "pl-PL", "nl-NL", "pt-BR", "en-BM", "pt-PT", "en-CA", "es-AR", "en-IE", "es-BO", "en-JM", "es-CL", "en-GB", "es-CO", "es-CR", "fi-FI", "es-DO", "fl-BE", "es-EC", "fr-BE", "es-SV", "fr-CA", "es-GT", "fr-FR", "es-HN", "fr-LU", "es-MX", "fr-CH", "es-NI", "de-AT", "es-PA", "de-DE", "es-PE", "de-LU", "es-ES", "de-CH", "es-US", "it-IT", "es-VE", "it-CH", "sv-SE"], "location": "query", "type": "string"}, "startindex": {"default": "", "required": false, "type": "string", "location": "query"}, "serviceId": {"default": "", "required": false, "type": "integer", "location": "path"}, "imageverticalresolution": {"default": "", "required": false, "type": "integer", "location": "query"}, "imageformat": {"required": false, "default": "", "enum": ["", "gif", "jpg", "png", "bmp"], "location": "query", "type": "string"}, "duration": {"default": 10080, "required": false, "type": "integer", "location": "query"}, "copytextformat": {"required": false, "default": "PlainText", "enum": ["PlainText", "HTML"], "location": "query", "type": "string"}, "inprogress": {"default": false, "required": false, "type": "boolean", "location": "query"}, "include": {"default": "Program", "required": false, "type": "string", "location": "query"}, "imagetype": {"default": "", "required": false, "type": "string", "location": "query"}}}, "GridSchedule": {"path": "gridschedule/{serviceId}/info", "httpMethod": "GET", "id": "TVListingsMethods.GridSchedule", "parameters": {"startdate": {"default": "", "required": false, "type": "string", "location": "query"}, "includechannelimages": {"default": false, "required": false, "type": "boolean", "location": "query"}, "sourcefilterinclude": {"default": "", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "locale": {"required": true, "default": "en-US", "enum": ["en-US", "da-DK", "no-NO", "nl-BE", "pl-PL", "nl-NL", "pt-BR", "en-BM", "pt-PT", "en-CA", "es-AR", "en-IE", "es-BO", "en-JM", "es-CL", "en-GB", "es-CO", "es-CR", "fi-FI", "es-DO", "fl-BE", "es-EC", "fr-BE", "es-SV", "fr-CA", "es-GT", "fr-FR", "es-HN", "fr-LU", "es-MX", "fr-CH", "es-NI", "de-AT", "es-PA", "de-DE", "es-PE", "de-LU", "es-ES", "de-CH", "es-US", "it-IT", "es-VE", "it-CH", "sv-SE"], "location": "query", "type": "string"}, "imageformatid": {"default": "", "required": false, "type": "integer", "location": "query"}, "sourceid": {"default": "", "required": false, "type": "string", "location": "query"}, "serviceId": {"default": "", "required": true, "type": "integer", "location": "path"}, "duration": {"default": 30, "required": false, "type": "integer", "location": "query"}, "sourcefilterexclude": {"default": "", "required": false, "type": "string", "location": "query"}, "titletype": {"default": "", "required": false, "type": "integer", "location": "query"}}}, "Services": {"path": "services/postalcode/{postalCode}/info", "httpMethod": "GET", "id": "TVListingsMethods.Services", "parameters": {"postalCode": {"default": "", "required": true, "type": "string", "location": "path"}, "locale": {"required": true, "default": "en-US", "enum": ["en-US", "da-DK", "no-NO", "nl-BE", "pl-PL", "nl-NL", "pt-BR", "en-BM", "pt-PT", "en-CA", "es-AR", "en-IE", "es-BO", "en-JM", "es-CL", "en-GB", "es-CO", "es-CR", "fi-FI", "es-DO", "fl-BE", "es-EC", "fr-BE", "es-SV", "fr-CA", "es-GT", "fr-FR", "es-HN", "fr-LU", "es-MX", "fr-CH", "es-NI", "de-AT", "es-PA", "de-DE", "es-PE", "de-LU", "es-ES", "de-CH", "es-US", "it-IT", "es-VE", "it-CH", "sv-SE"], "location": "query", "type": "string"}, "msoid": {"required": false, "type": "integer", "location": "query"}, "countrycode": {"required": true, "default": "US", "enum": ["US", "AR", "AT", "BE", "BM", "BO", "BR", "CA", "CL", "CO", "CR", "DK", "DO", "EC", "SV", "FI", "FR", "DE", "GT", "HN", "IE", "IT", "JM", "LU", "MX", "NL", "NI", "NO", "PA", "PE", "PL", "PT", "ES", "SE", "CH", "GB", "VE"], "location": "query", "type": "string"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "CelebrityDetails": {"path": "celebritydetails/info", "httpMethod": "GET", "id": "TVListingsMethods.CelebrityDetails", "parameters": {"includecreditsforepisodes": {"default": false, "required": false, "type": "boolean", "location": "query"}, "startdate": {"default": "", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "locale": {"required": true, "default": "en-US", "enum": ["en-US", "da-DK", "no-NO", "nl-BE", "pl-PL", "nl-NL", "pt-BR", "en-BM", "pt-PT", "en-CA", "es-AR", "en-IE", "es-BO", "en-JM", "es-CL", "en-GB", "es-CO", "es-CR", "fi-FI", "es-DO", "fl-BE", "es-EC", "fr-BE", "es-SV", "fr-CA", "es-GT", "fr-FR", "es-HN", "fr-LU", "es-MX", "fr-CH", "es-NI", "de-AT", "es-PA", "de-DE", "es-PE", "de-LU", "es-ES", "de-CH", "es-US", "it-IT", "es-VE", "it-CH", "sv-SE"], "location": "query", "type": "string"}, "imagecount": {"default": 5, "required": false, "type": "integer", "location": "query"}, "copytype": {"default": "", "required": false, "type": "integer", "location": "query"}, "imageformatid": {"default": "", "required": false, "type": "integer", "location": "query"}, "imagehorizontalresolution": {"default": "", "required": false, "type": "integer", "location": "query"}, "serviceid": {"default": "", "required": false, "type": "integer", "location": "query"}, "imageverticalresolution": {"default": "", "required": false, "type": "integer", "location": "query"}, "imageformat": {"required": false, "default": "", "enum": ["", "gif", "jpg", "png", "bmp"], "location": "query", "type": "string"}, "sourceid": {"default": "", "required": false, "type": "string", "location": "query"}, "duration": {"default": 10080, "required": false, "type": "integer", "location": "query"}, "copytextformat": {"required": false, "default": "PlainText", "enum": ["PlainText", "HTML"], "location": "query", "type": "string"}, "inprogress": {"default": "false", "required": false, "type": "boolean", "location": "query"}, "include": {"default": "", "required": true, "type": "string", "location": "query"}, "nameid": {"default": "", "required": true, "type": "integer", "location": "query"}, "imagetype": {"default": "", "required": false, "type": "string", "location": "query"}}}}}', true));
  }
}
