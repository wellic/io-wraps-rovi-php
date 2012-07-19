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
   * The "MovieMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $MovieMethods = $metadataandsearchapiService->MovieMethods;
   *  </code>
   */
  class MovieMethodsServiceResource extends apiServiceResource {


    /**
     * Returns basic information about a movie or TV series. Please set a value for movie, or cosmoid,
     * or movieid. Fields in bold are required. (MovieMethods.Info)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param string include Other Movie Service requests to include in the request. For multiple includes, separate the values with commas like this: crew,images.
     */
    public function Info($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Info', array($params));
      return $data;
    }
    /**
     * Returns data for constructing links to movie trailers. Please set a value for movie, or cosmoid,
     * or movieid. Fields in bold are required. (MovieMethods.Videos)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Videos($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Videos', array($params));
      return $data;
    }
    /**
     * Returns information about DVDs, Blu-rays, and other movie releases. Please set a value for movie,
     * or cosmoid, or movieid. Fields in bold are required. (MovieMethods.Releases)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Releases($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Releases', array($params));
      return $data;
    }
    /**
     * Returns a review of a movie. Please set a value for movie, or cosmoid, or movieid. Fields in bold
     * are required. (MovieMethods.Review)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Review($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Review', array($params));
      return $data;
    }
    /**
     * Returns URLs to images of a movie along with associated image information. Note: Access to images
     * is governed by your subscription level and geographical location. Please set a value for movie,
     * or cosmoid, or movieid. Fields in bold are required. (MovieMethods.Images)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Images($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Images', array($params));
      return $data;
    }
    /**
     * Returns titles of movies that are related to a movie specified in the request. Please set a value
     * for movie, or cosmoid, or movieid. Fields in bold are required. (MovieMethods.Related)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Related($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Related', array($params));
      return $data;
    }
    /**
     * Returns information about crew members with links to images. Please set a value for movie, or
     * cosmoid, or movieid. Fields in bold are required. (MovieMethods.Crew)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Crew($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Crew', array($params));
      return $data;
    }
    /**
     * Returns a list of topics and circumstances that motivate or fit with a movie, along with
     * weightings that reflect the relative importance of each. Please set a value for movie, or
     * cosmoid, or movieid. Fields in bold are required. (MovieMethods.Themes)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Themes($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Themes', array($params));
      return $data;
    }
    /**
     * Returns information about cast members with links to images. Please set a value for movie, or
     * cosmoid, or movieid. Fields in bold are required. (MovieMethods.Cast)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Cast($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Cast', array($params));
      return $data;
    }
    /**
     * Returns a synopsis of the plot and the name of the author. Please set a value for movie, or
     * cosmoid, or movieid. Fields in bold are required. (MovieMethods.Synopsis)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Synopsis($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Synopsis', array($params));
      return $data;
    }
    /**
     * Returns keywords that apply to a movie and weightings that reflect the relative importance of
     * each keyword. Please set a value for movie, or cosmoid, or movieid. Fields in bold are required.
     * (MovieMethods.Moods)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Moods($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Moods', array($params));
      return $data;
    }
    /**
     * Returns a list of feelings that motivate or fit with the movie or TV series, along with
     * weightings that reflect the relative importance of each. Please set a value for movie, or
     * cosmoid, or movieid. Fields in bold are required. (MovieMethods.Tones)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Tones($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Tones', array($params));
      return $data;
    }
    /**
     * Returns keywords that apply to a movie and weightings that reflect the relative importance of
     * each keyword. Please set a value for movie, or cosmoid, or movieid. Fields in bold are required.
     * (MovieMethods.Keywords)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Keywords($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Keywords', array($params));
      return $data;
    }
    /**
     * Returns movie subgenres that apply to the movie, along with weightings that reflect the relative
     * importance of each. Please set a value for movie, or cosmoid, or movieid. Fields in bold are
     * required. (MovieMethods.Types)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string movieid AMG ID of a movie or TV series, consisting of the letter V followed by 9 digits with leading spaces.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string movie Keywords from title of the movie or TV series
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int cosmoid Cosmo database ID for a movie or television series. Cosmo is a database of television information.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Types($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Types', array($params));
      return $data;
    }
  }

  /**
   * The "DescriptorMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $DescriptorMethods = $metadataandsearchapiService->DescriptorMethods;
   *  </code>
   */
  class DescriptorMethodsServiceResource extends apiServiceResource {


    /**
     * Returns the top artists in a musical genre or subgenre. Fields in bold are required.
     * (DescriptorMethods.SignificantArtists)
     *
     * @param string $genreids Genre ID or subgenre ID
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function SignificantArtists($genreids, $optParams = array()) {
      $params = array('genreids' => $genreids);
      $params = array_merge($params, $optParams);
      $data = $this->__call('SignificantArtists', array($params));
      return $data;
    }
    /**
     * Returns descriptions of genres used in Rovi Cloud Services, plus optional lists of subgenres and
     * musical styles. Fields in bold are required. (DescriptorMethods.Genres)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string genreids Specific genre IDs you want information about.
     * @opt_param string format Format of the returned data
     * @opt_param string include Additional information you want to be included about each genre. Valid values: all or subgenres.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     */
    public function Genres($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Genres', array($params));
      return $data;
    }
    /**
     * Returns descriptions of the subgenres recognized by Rovi Music and Rovi DVDs, plus lists of music
     * styles of music subgenres. Fields in bold are required. (DescriptorMethods.Subgenres)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string include Additional information you want to be included about each genre. Valid values: all or subgenres.
     * @opt_param string subgenreids Specific subgenre IDs you want information about
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function Subgenres($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Subgenres', array($params));
      return $data;
    }
    /**
     * Returns the top composers in a classical music subgenre. Fields in bold are required.
     * (DescriptorMethods.SignificantComposers)
     *
     * @param string $genreids Genre ID or subgenre ID
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function SignificantComposers($genreids, $optParams = array()) {
      $params = array('genreids' => $genreids);
      $params = array_merge($params, $optParams);
      $data = $this->__call('SignificantComposers', array($params));
      return $data;
    }
    /**
     * Returns the top albums in a musical genre or subgenre. Fields in bold are required.
     * (DescriptorMethods.SignificantAlbums)
     *
     * @param string $genreids Genre ID or subgenre ID
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function SignificantAlbums($genreids, $optParams = array()) {
      $params = array('genreids' => $genreids);
      $params = array_merge($params, $optParams);
      $data = $this->__call('SignificantAlbums', array($params));
      return $data;
    }
    /**
     * Returns the top compositions in the classical music genre and subgenres. Fields in bold are
     * required. (DescriptorMethods.SignificantCompositions)
     *
     * @param string $genreids Genre ID or subgenre ID
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function SignificantCompositions($genreids, $optParams = array()) {
      $params = array('genreids' => $genreids);
      $params = array_merge($params, $optParams);
      $data = $this->__call('SignificantCompositions', array($params));
      return $data;
    }
    /**
     * Returns the music genres, subgenres, and styles recognized by Rovi Music. Fields in bold are
     * required. (DescriptorMethods.MusicGenres)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string include Additional information you want to be included about each genre. Valid values: all or subgenres.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function MusicGenres($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MusicGenres', array($params));
      return $data;
    }
    /**
     * Returns the top songs in a musical genre or subgenre. Fields in bold are required.
     * (DescriptorMethods.SignificantSongs)
     *
     * @param string $genreids Genre ID or subgenre ID
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function SignificantSongs($genreids, $optParams = array()) {
      $params = array('genreids' => $genreids);
      $params = array_merge($params, $optParams);
      $data = $this->__call('SignificantSongs', array($params));
      return $data;
    }
    /**
     * Returns the top movies and TV shows in a movie genre or subgenre. Fields in bold are required.
     * (DescriptorMethods.SignificantMovies)
     *
     * @param string $genreids Genre ID or subgenre ID
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function SignificantMovies($genreids, $optParams = array()) {
      $params = array('genreids' => $genreids);
      $params = array_merge($params, $optParams);
      $data = $this->__call('SignificantMovies', array($params));
      return $data;
    }
    /**
     * Returns the movie genres and subgenres recognized by Rovi DVDs. Fields in bold are required.
     * (DescriptorMethods.MovieGenres)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string include Currently, the only valid parameter is &quot;subgenres&quot;
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function MovieGenres($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MovieGenres', array($params));
      return $data;
    }
    /**
     * Returns descriptions of music styles recognized by Rovi Cloud Services. Fields in bold are
     * required. (DescriptorMethods.MusicStyles)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string styleids A specific style ID you want the description for
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function MusicStyles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MusicStyles', array($params));
      return $data;
    }
  }

  /**
   * The "RecommendationMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $RecommendationMethods = $metadataandsearchapiService->RecommendationMethods;
   *  </code>
   */
  class RecommendationMethodsServiceResource extends apiServiceResource {


    /**
     * Returns similar items in order of similarity and popularity. Please specify a value for albumid,
     * amgvideoid, cosmoprogramid, or nameid. Fields in bold are required.
     * (RecommendationMethods.Similar)
     *
     * @param string $endpoint Database to search
     * @param string $entitytype Type of content to search for
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string cosmoprogramid Cosmo database ID for a movie or television series. For a request with a Cosmo ID, specify an endpoint of video and an entitytype of movie or tvseries.
     * @opt_param string end If you specify the clu parameter, end specifies the end of the broadcast time window. For example 20120315140000Z.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string start If you specify the clu parameter, start specifies the start of the broadcast time window. For example 20120315140000Z.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int rep If you specify the clu parameter, rep specifies the maximum number of broadcasts to be reported in the availabilities object. For example rep=5 returns up to 5 broadcasts.
     * @opt_param string filter Field content that determines which results are returned. Like a WHERE clause in an SQL statement, this parameter selects only results with fields that meet your criteria. See written docs.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number. For a request with an album ID, specify an endpoint of music and an entitytype of album.
     * @opt_param string amgvideoid AMG database ID for a movie or TV series, consisting of a ten-character string that starts with V and is followed by 9 digits with leading spaces. For a request with an amgvideo ID, specify an endpoint of amgvideo and an entitytype of movie or tvseries.
     * @opt_param string format Format of the returned data
     * @opt_param string clu Service ID of a television service that has upcoming movies or TV series you want to match against. For example 63612.
     * @opt_param string nameid Rovi Music ID for a person or group, consisting of the prefix MN followed by a ten-digit number. For a request with a name ID, specify an endpoint of music and an entitytype of artist.
     * @opt_param int size The number of items you want to be returned
     */
    public function Similar($endpoint, $entitytype, $optParams = array()) {
      $params = array('endpoint' => $endpoint, 'entitytype' => $entitytype);
      $params = array_merge($params, $optParams);
      $data = $this->__call('Similar', array($params));
      return $data;
    }
  }

  /**
   * The "AlbumMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $AlbumMethods = $metadataandsearchapiService->AlbumMethods;
   *  </code>
   */
  class AlbumMethodsServiceResource extends apiServiceResource {


    /**
     * Returns basic information about an album. Please set a value for album, albumid, amgpopid, or
     * amgclassicalid. Fields in bold are required. (AlbumMethods.Info)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     * @opt_param string include Other Album requests to include in the request. For multiple includes, separate the values with commas like this: include=images,tracks.
     */
    public function Info($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Info', array($params));
      return $data;
    }
    /**
     * Returns a list of musical styles that apply to the music on an album along with weightings that
     * reflect the importance of each style in the music. Please set a value for album, albumid,
     * amgpopid, or amgclassicalid. Fields in bold are required. (AlbumMethods.Styles)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Styles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Styles', array($params));
      return $data;
    }
    /**
     * Returns information about the releases of an album, including media type and whether it can be
     * purchased. Please set a value for album, albumid, amgpopid, or amgclassicalid. Fields in bold are
     * required. (AlbumMethods.Releases)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Releases($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Releases', array($params));
      return $data;
    }
    /**
     * Returns an editorial review of a classical music album. Please set a value for album, albumid,
     * amgpopid, or amgclassicalid. Fields in bold are required. (AlbumMethods.ClassicalReview)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     */
    public function ClassicalReview($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('ClassicalReview', array($params));
      return $data;
    }
    /**
     * Returns the most recent major review of an album. Please set a value for album, albumid,
     * amgpopid, or amgclassicalid. Fields in bold are required. (AlbumMethods.PrimaryReview)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     */
    public function PrimaryReview($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('PrimaryReview', array($params));
      return $data;
    }
    /**
     * Returns a list of topics, feelings, and circumstances that motivate or fit with the music on an
     * album. Please set a value for album, albumid, amgpopid, or amgclassicalid. Fields in bold are
     * required. (AlbumMethods.Themes)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Themes($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Themes', array($params));
      return $data;
    }
    /**
     * Returns the production credits for an album, a list of the names and roles of the people and
     * groups that produced the album. Please set a value for album, albumid, amgpopid, or
     * amgclassicalid. Fields in bold are required. (AlbumMethods.Credits)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Credits($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Credits', array($params));
      return $data;
    }
    /**
     * Returns information about the songs on a popular music album and the performances on a classical
     * music album. Popular music songs are identified by track IDs; classical music performances are
     * identified by performance IDs. Please set a value for album, albumid, amgpopid, or
     * amgclassicalid. Fields in bold are required. (AlbumMethods.Tracks)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Tracks($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Tracks', array($params));
      return $data;
    }
    /**
     * Returns a list of terms that describe expressive characteristics of the music, along with
     * weightings that reflect the relative strength of each term. Please set a value for album,
     * albumid, amgpopid, or amgclassicalid. Fields in bold are required. Fields in bold are required.
     * (AlbumMethods.Moods)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Moods($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Moods', array($params));
      return $data;
    }
    /**
     * Returns URLs to pictures of an album along with associated image information. Note: Access to
     * images is governed by your subscription level and geographical location. Photography credits must
     * be displayed with images. Please set a value for album, albumid, amgpopid, or amgclassicalid.
     * Fields in bold are required. (AlbumMethods.Images)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string album Keywords from the album title
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string albumid Rovi Music ID for an album, consisting of the prefix MW followed by a ten-digit number
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces
     */
    public function Images($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Images', array($params));
      return $data;
    }
  }

  /**
   * The "PerformanceMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $PerformanceMethods = $metadataandsearchapiService->PerformanceMethods;
   *  </code>
   */
  class PerformanceMethodsServiceResource extends apiServiceResource {


    /**
     * Returns basic information about a classical music performance. Please set a value for
     * performanceid or amgclassicalid. Fields in bold are required. (PerformanceMethods.Info)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string performanceid Rovi Music ID for a classical music performance, consisting of the prefix MQ followed by a ten-digit number. For example, MQ0001169372.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param string include Other Performance requests to include in the request. For multiple includes, separate the values with commas like this: include=credits,release.
     */
    public function Info($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Info', array($params));
      return $data;
    }
    /**
     * Returns the names and roles of the people, groups, and organizations that contributed to a
     * classical music performance and the album release. Please set a value for performanceid or
     * amgclassicalid. Fields in bold are required. (PerformanceMethods.Credits)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string performanceid Rovi Music ID for a classical music performance, consisting of the prefix MQ followed by a ten-digit number. For example, MQ0001169372.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Credits($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Credits', array($params));
      return $data;
    }
    /**
     * Returns URLs to images of an album that contains the recording a classical music performance,
     * along with associated image information. Note: Access to images is governed by your subscription
     * level and geographical location. Photography credits must be displayed with images. Please set a
     * value for performanceid or amgclassicalid. Fields in bold are required.
     * (PerformanceMethods.Images)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string performanceid Rovi Music ID for a classical music performance, consisting of the prefix MQ followed by a ten-digit number. For example, MQ0001169372.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function Images($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Images', array($params));
      return $data;
    }
    /**
     * Returns information about an album release that contains the recording of a classical music
     * performance. Please set a value for performanceid or amgclassicalid. Fields in bold are required.
     * (PerformanceMethods.Release)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string performanceid Rovi Music ID for a classical music performance, consisting of the prefix MQ followed by a ten-digit number. For example, MQ0001169372.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function Release($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Release', array($params));
      return $data;
    }
    /**
     * Returns information about a composition played in a classical music performance. Please set a
     * value for performanceid or amgclassicalid. Fields in bold are required.
     * (PerformanceMethods.Composition)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string performanceid Rovi Music ID for a classical music performance, consisting of the prefix MQ followed by a ten-digit number. For example, MQ0001169372.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function Composition($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Composition', array($params));
      return $data;
    }
  }

  /**
   * The "SearchMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $SearchMethods = $metadataandsearchapiService->SearchMethods;
   *  </code>
   */
  class SearchMethodsServiceResource extends apiServiceResource {


    /**
     * Searches titles or names in Rovi Cloud Services and returns results in order of popularity and
     * similarity to the search query. Fields in bold are required. (SearchMethods.Search)
     *
     * @param string $endpoint Database to search
     * @param string $entitytype Type of content to search for
     * @param string $query The search string
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Field content that determines which results are returned. Like a WHERE clause in an SQL statement, this parameter selects only results with fields that meet your criteria. See written docs.
     * @opt_param string end If you specify the clu parameter, end specifies the end of the broadcast time window. For example 20120315140000Z.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int rep If you specify the clu parameter, rep specifies the maximum number of broadcasts to be reported in the availabilities object. For example rep=5 returns up to 5 broadcasts.
     * @opt_param int offset Counting from zero as the first item in the returned list, the number of the first item you want.
     * @opt_param string facet Count of items available to be returned.
     * @opt_param string start If you specify the clu parameter, start specifies the start of the broadcast time window. For example 20120315140000Z.
     * @opt_param string clu Service ID of a television service that has upcoming movies or TV series you want to match against. For example 63612.
     * @opt_param string include Additional data to include in each result returned. For multiple include values, separate the values with commas like this: include=movie:moods,crew.
     * @opt_param int size The number of items you want to be returned
     */
    public function Search($endpoint, $entitytype, $query, $optParams = array()) {
      $params = array('endpoint' => $endpoint, 'entitytype' => $entitytype, 'query' => $query);
      $params = array_merge($params, $optParams);
      $data = $this->__call('Search', array($params));
      return $data;
    }
    /**
     * Locates content in Rovi Cloud Services based on field-level criteria and returns results listed
     * in order of relevance. Fields in bold are required. (SearchMethods.FilterBrowse)
     *
     * @param string $endpoint Database to search
     * @param string $entitytype Type of content to search for
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Field content that determines which results are returned. Like a WHERE clause in an SQL statement, this parameter selects only results with fields that meet your criteria. See written docs.
     * @opt_param string end If you specify the clu parameter, end specifies the end of the broadcast time window. For example 20120315140000Z.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int rep If you specify the clu parameter, rep specifies the maximum number of broadcasts to be reported in the availabilities object. For example rep=5 returns up to 5 broadcasts.
     * @opt_param string facet Count of items available to be returned.
     * @opt_param string start If you specify the clu parameter, start specifies the start of the broadcast time window. For example 20120315140000Z.
     * @opt_param int offset Counting from zero as the first item in the returned list, the number of the first item you want.
     * @opt_param string clu Service ID of a television service that has upcoming movies or TV series you want to match against. For example 63612.
     * @opt_param string include Additional data to include in each result returned. For multiple include values, separate the values with commas like this: include=movie:moods,crew.
     * @opt_param int size The number of items you want to be returned
     */
    public function FilterBrowse($endpoint, $entitytype, $optParams = array()) {
      $params = array('endpoint' => $endpoint, 'entitytype' => $entitytype);
      $params = array_merge($params, $optParams);
      $data = $this->__call('FilterBrowse', array($params));
      return $data;
    }
    /**
     * Returns search results for titles or names as a user is typing, sorted in order of popularity and
     * the priorities specified in the request filters. Fields in bold are required.
     * (SearchMethods.SingleStageSearch)
     *
     * @param string $endpoint Database to search
     * @param string $entitytype Type of content to search for
     * @param string $query The search string
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Field content that determines which results are returned. Like a WHERE clause in an SQL statement, this parameter selects only results with fields that meet your criteria. See written docs.
     * @opt_param string end If you specify the clu parameter, end specifies the end of the broadcast time window. For example 20120315140000Z.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int rep If you specify the clu parameter, rep specifies the maximum number of broadcasts to be reported in the availabilities object. For example rep=5 returns up to 5 broadcasts.
     * @opt_param int offset Counting from zero as the first item in the returned list, the number of the first item you want.
     * @opt_param string facet Count of items available to be returned.
     * @opt_param string start If you specify the clu parameter, start specifies the start of the broadcast time window. For example 20120315140000Z.
     * @opt_param string clu Service ID of a television service that has upcoming movies or TV series you want to match against. For example 63612.
     * @opt_param string include Additional data to include in each result returned. For multiple include values, separate the values with commas like this: include=movie:moods,crew.
     * @opt_param int size The number of items you want to be returned
     */
    public function SingleStageSearch($endpoint, $entitytype, $query, $optParams = array()) {
      $params = array('endpoint' => $endpoint, 'entitytype' => $entitytype, 'query' => $query);
      $params = array_merge($params, $optParams);
      $data = $this->__call('SingleStageSearch', array($params));
      return $data;
    }
  }

  /**
   * The "CompositionMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $CompositionMethods = $metadataandsearchapiService->CompositionMethods;
   *  </code>
   */
  class CompositionMethodsServiceResource extends apiServiceResource {


    /**
     * Returns basic information about a classical music composition. Please set a value for
     * compositionid or amgclassicalid. Fields in bold are required. (CompositionMethods.Info)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string compositionid Rovi Music ID for a classical music composition, consisting of the prefix MC followed by a ten-digit number. For example: MC0002369165.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param string include Other requests to include in the request. For multiple includes, separate the values with commas like this: include=parts,description.
     */
    public function Info($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Info', array($params));
      return $data;
    }
    /**
     * Returns the names of the parts or movements of a classical music composition, each of which is
     * recorded as a single track. Please set a value for compositionid or amgclassicalid. Fields in
     * bold are required. (CompositionMethods.Parts)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string compositionid Rovi Music ID for a classical music composition, consisting of the prefix MC followed by a ten-digit number. For example: MC0002369165.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Parts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Parts', array($params));
      return $data;
    }
    /**
     * Returns a description of a classical music composition. Please set a value for compositionid or
     * amgclassicalid. Fields in bold are required. (CompositionMethods.Description)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string compositionid Rovi Music ID for a classical music composition, consisting of the prefix MC followed by a ten-digit number. For example: MC0002369165.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function Description($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Description', array($params));
      return $data;
    }
    /**
     * Returns a list of album releases that feature a performance of a composition. Please set a value
     * for compositionid or amgclassicalid. Fields in bold are required. (CompositionMethods.Releases)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string compositionid Rovi Music ID for a classical music composition, consisting of the prefix MC followed by a ten-digit number. For example: MC0002369165.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgclassicalid AMG ID for a classical music composition, consisting of a ten-character string that starts with C and is followed by nine digits with leading spaces. For example: C    43235.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Releases($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Releases', array($params));
      return $data;
    }
  }

  /**
   * The "SongMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $SongMethods = $metadataandsearchapiService->SongMethods;
   *  </code>
   */
  class SongMethodsServiceResource extends apiServiceResource {


    /**
     * Returns basic information about a song. Please set a value for track, trackid, isrcid, muzeid,
     * amgpoptrackid, or amgclassicaltrackid. Fields in bold are required. (SongMethods.Info)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string track Title of the song
     * @opt_param string trackid Rovi Music ID for a popular song, consisting of the prefix MT followed by a ten-digit number. For example: MT0009472348.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgpoptrackid AMG ID for a track on a popular music album, consisting of a ten-character string that starts with T and is followed by 9 digits with leading spaces.
     * @opt_param string isrcid International Standard Recording Code (ISRC) for a song recording.
     * @opt_param string amgclassicaltrackid AMG ID for a track on a classical music album, consisting of a ten-character string that starts with Y and is followed by 9 digits with leading spaces.
     * @opt_param string include Other Song requests to include in the request. For multiple includes, separate the values with commas like this: include=appearances,review.
     * @opt_param string muzeid Legacy ID from the Muze database.
     */
    public function Info($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Info', array($params));
      return $data;
    }
    /**
     * Returns a list of albums and videos a song track appears on. Please set a value for track,
     * trackid, isrcid, muzeid, amgpoptrackid, or amgclassicaltrackid. Fields in bold are required.
     * (SongMethods.Appearances)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string track Title of the song
     * @opt_param string trackid Rovi Music ID for a popular song, consisting of the prefix MT followed by a ten-digit number. For example: MT0009472348.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string amgpoptrackid AMG ID for a track on a popular music album, consisting of a ten-character string that starts with T and is followed by 9 digits with leading spaces.
     * @opt_param string isrcid International Standard Recording Code (ISRC) for a song recording.
     * @opt_param string amgclassicaltrackid AMG ID for a track on a classical music album, consisting of a ten-character string that starts with Y and is followed by 9 digits with leading spaces.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string muzeid Legacy ID from the Muze database.
     */
    public function Appearances($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Appearances', array($params));
      return $data;
    }
    /**
     * Returns the most recent major review of a song. Please set a value for track, trackid, isrcid,
     * muzeid, amgpoptrackid, or amgclassicaltrackid. Fields in bold are required. (SongMethods.Review)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string track Title of the song
     * @opt_param string trackid Rovi Music ID for a popular song, consisting of the prefix MT followed by a ten-digit number. For example: MT0009472348.
     * @opt_param string amgpoptrackid AMG ID for a track on a popular music album, consisting of a ten-character string that starts with T and is followed by 9 digits with leading spaces.
     * @opt_param string isrcid International Standard Recording Code (ISRC) for a song recording.
     * @opt_param string amgclassicaltrackid AMG ID for a track on a classical music album, consisting of a ten-character string that starts with Y and is followed by 9 digits with leading spaces.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string muzeid Legacy ID from the Muze database.
     */
    public function Review($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Review', array($params));
      return $data;
    }
  }

  /**
   * The "ReleaseMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $ReleaseMethods = $metadataandsearchapiService->ReleaseMethods;
   *  </code>
   */
  class ReleaseMethodsServiceResource extends apiServiceResource {


    /**
     * Returns basic information about an LP, CD, DVD, cassette, download, or other release of an album.
     * Please set a value for eanid, upcid, releaseid, amgpopid, or amgclassicalid. Fields in bold are
     * required. (ReleaseMethods.Info)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     * @opt_param string include Other Release requests to include in the request. For multiple includes, separate the values with commas like this: include=credits,tracks.
     */
    public function Info($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Info', array($params));
      return $data;
    }
    /**
     * Returns a list of musical styles relevant to the music on an album release along with weightings
     * that reflect the importance of each style in the music. Please set a value for eanid, upcid,
     * releaseid, amgpopid, or amgclassicalid. Fields in bold are required. (ReleaseMethods.Styles)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Styles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Styles', array($params));
      return $data;
    }
    /**
     * Returns information about the performances on a release of a classical music album. Please set a
     * value for eanid, upcid, releaseid, amgpopid, or amgclassicalid. Fields in bold are required.
     * (ReleaseMethods.Performances)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Performances($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Performances', array($params));
      return $data;
    }
    /**
     * Returns an editorial review of a classical music album. Please set a value for eanid, upcid,
     * releaseid, amgpopid, or amgclassicalid. Fields in bold are required.
     * (ReleaseMethods.ClassicalReview)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     */
    public function ClassicalReview($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('ClassicalReview', array($params));
      return $data;
    }
    /**
     * Returns the most recent major review of a release of an album. Please set a value for eanid,
     * upcid, releaseid, amgpopid, or amgclassicalid. Fields in bold are required.
     * (ReleaseMethods.PrimaryReview)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     */
    public function PrimaryReview($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('PrimaryReview', array($params));
      return $data;
    }
    /**
     * Returns a list of topics, feelings, and circumstances that motivate or fit with the music on an
     * album release, along with weightings that reflect the relative importance of each. Please set a
     * value for eanid, upcid, releaseid, amgpopid, or amgclassicalid. Fields in bold are required.
     * (ReleaseMethods.Themes)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Themes($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Themes', array($params));
      return $data;
    }
    /**
     * Returns the names and roles of the people, groups, and organizations that contributed to a
     * release. Please set a value for eanid, upcid, releaseid, amgpopid, or amgclassicalid. Fields in
     * bold are required. (ReleaseMethods.Credits)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Credits($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Credits', array($params));
      return $data;
    }
    /**
     * Returns information about the tracks on a release of an album. Please set a value for eanid,
     * upcid, releaseid, amgpopid, or amgclassicalid. Fields in bold are required.
     * (ReleaseMethods.Tracks)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Tracks($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Tracks', array($params));
      return $data;
    }
    /**
     * Returns a list of terms that describe expressive characteristics of the music, along with
     * weightings that reflect the relative strength of each term. Please set a value for eanid, upcid,
     * releaseid, amgpopid, or amgclassicalid. Fields in bold are required. (ReleaseMethods.Moods)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     */
    public function Moods($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Moods', array($params));
      return $data;
    }
    /**
     * Returns URLs to pictures of the album release along with associated image information. Note:
     * Access to images is governed by your subscription level and geographical location. Photography
     * credits must be displayed with images. Please set a value for eanid, upcid, releaseid, amgpopid,
     * or amgclassicalid. Fields in bold are required. (ReleaseMethods.Images)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string amgpopid AMG ID for a popular music album, consisting of a ten-character string that starts with R and is followed by nine digits with leading spaces. For example: R  1805889
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string eanid EAN code of the release
     * @opt_param string releaseid Rovi Music ID for the release, consisting of the prefix MR followed by a ten-digit number.
     * @opt_param string amgclassicalid AMG ID for a classical music album, consisting of a ten-character string that starts with W and is followed by nine digits with leading spaces. For example: W   180317
     */
    public function Images($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Images', array($params));
      return $data;
    }
  }

  /**
   * The "NameMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $NameMethods = $metadataandsearchapiService->NameMethods;
   *  </code>
   */
  class NameMethodsServiceResource extends apiServiceResource {


    /**
     * Returns internet information resources about a person or group. Please specify name, nameid,
     * cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.Web)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Web($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Web', array($params));
      return $data;
    }
    /**
     * Returns names of groups that a person has been a member of. Please specify name, nameid, cosmoid,
     * amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.MemberOf)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function MemberOf($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MemberOf', array($params));
      return $data;
    }
    /**
     * Returns the names of members of a group. Please specify name, nameid, cosmoid, amgpopid,
     * amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.GroupMembers)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function GroupMembers($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('GroupMembers', array($params));
      return $data;
    }
    /**
     * Returns a list of people who followed a person or group and were influenced by them. Please
     * specify name, nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are
     * required. (NameMethods.Followers)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Followers($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Followers', array($params));
      return $data;
    }
    /**
     * Returns names of people and groups who collaborated with a person or group. Please specify name,
     * nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required.
     * (NameMethods.CollaboratorWith)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function CollaboratorWith($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('CollaboratorWith', array($params));
      return $data;
    }
    /**
     * Returns names of people doing comparable work and living during the same time as a person or
     * group. Please specify name, nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in
     * bold are required. (NameMethods.Contemporaries)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Contemporaries($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Contemporaries', array($params));
      return $data;
    }
    /**
     * Returns names of similar people or groups. Please specify name, nameid, cosmoid, amgpopid,
     * amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.Similars)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Similars($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Similars', array($params));
      return $data;
    }
    /**
     * Returns names of people and groups who participated in the work of a person or group. Please
     * specify name, nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are
     * required. (NameMethods.ClassicalBio)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function ClassicalBio($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('ClassicalBio', array($params));
      return $data;
    }
    /**
     * Returns information about the films a person or group contributed to. Please specify name,
     * nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required.
     * (NameMethods.Filmography)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Filmography($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Filmography', array($params));
      return $data;
    }
    /**
     * Returns a list of terms that describe expressive characteristics of the work of a person or
     * group, along with weightings that reflect the relative strength of each term. Please specify
     * name, nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required.
     * (NameMethods.Moods)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Moods($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Moods', array($params));
      return $data;
    }
    /**
     * Returns a biography of a person or group involved in movies. Please specify name, nameid,
     * cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required.
     * (NameMethods.MovieBio)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function MovieBio($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MovieBio', array($params));
      return $data;
    }
    /**
     * Returns a list of classical compositions by a person or group. Please specify name, nameid,
     * cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required.
     * (NameMethods.Compositions)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Compositions($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Compositions', array($params));
      return $data;
    }
    /**
     * Returns basic information about a person, group, or organization. Please specify name, nameid,
     * cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.Info)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string sourceid If you specify serviceid for a schedule of broadcasts the person appears in, sourceid determines which channels will appear on the schedule
     * @opt_param string type If you request All or Discography in the include parameter, type specifies what types of discography to return. For multiple include values, separate the values with commas. Valid values: main, video, singles, compilations, others.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string sourceinclude If you specify sourceid to select the television sources to be returned, sourceinclude specifies an attribute of the channels in the source ID list that you want to include in the list of channels returned
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string formatid If you specify All or Images in the include parameter, formatid specifies the size and file format of returned images
     * @opt_param string serviceid Database ID of a television service for an area. Must specify an include of All or Schedule
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param string starttime If you specify serviceid for a schedule of broadcasts the person appears in, starttime determines the starting time of the schedule
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int duration If you specify a serviceid for a schedule of broadcasts the person appears in, duration determines the number of minutes the schedule will cover
     * @opt_param bool inprogress If you specify serviceid for a schedule of broadcasts the person appears in, inprogress determines whether shows that are in progress at starttime are included in the schedule
     * @opt_param string include Any content to include from other Name API requests. For multiple include values, separate the values with commas like this: include=songs,musiccredits.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string sourceexclude If you specify sourceid to select the television sources to be returned, sourceexclude specifies attributes of the channels in the source ID list that you want to eliminate from the channels returned
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Info($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Info', array($params));
      return $data;
    }
    /**
     * Returns a list of the music production credits of a person or group. Please specify name, nameid,
     * cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required.
     * (NameMethods.MusicCredits)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function MusicCredits($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MusicCredits', array($params));
      return $data;
    }
    /**
     * Returns a biography of a person or group involved in music. Please specify name, nameid, cosmoid,
     * amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.MusicBio)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function MusicBio($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MusicBio', array($params));
      return $data;
    }
    /**
     * Returns names of people and groups who participated in the work of a person or group. Please
     * specify name, nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are
     * required. (NameMethods.AssociatedWith)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function AssociatedWith($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('AssociatedWith', array($params));
      return $data;
    }
    /**
     * Returns a list of the musical styles of a person or group, along with weightings that reflect the
     * importance of each style. Please specify name, nameid, cosmoid, amgpopid, amgmovieid, or
     * amgclassicalid. Fields in bold are required. (NameMethods.MusicStyles)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function MusicStyles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MusicStyles', array($params));
      return $data;
    }
    /**
     * Returns information about the songs a person or group contributed to. Please specify name,
     * nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required.
     * (NameMethods.Songs)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Songs($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Songs', array($params));
      return $data;
    }
    /**
     * Returns a list of styles relevant to the work of a person or group in movies, along with
     * weightings that reflect the importance of each style. Please specify name, nameid, cosmoid,
     * amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.MovieStyles)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function MovieStyles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('MovieStyles', array($params));
      return $data;
    }
    /**
     * Returns data for constructing links to music videos and movie trailers that are associated with a
     * person or group. Please specify name, nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid.
     * Fields in bold are required. (NameMethods.Videos)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Videos($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Videos', array($params));
      return $data;
    }
    /**
     * Returns a list of those who influenced a person or group. Please specify name, nameid, cosmoid,
     * amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.Influencers)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Influencers($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Influencers', array($params));
      return $data;
    }
    /**
     * Returns a list of topics, feelings, and circumstances that motivate or fit with a person, group,
     * or organization, along with weightings that reflect the relative importance of each. Please
     * specify name, nameid, cosmoid, amgpopid, amgmovieid, or amgclassicalid. Fields in bold are
     * required. (NameMethods.Themes)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Themes($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Themes', array($params));
      return $data;
    }
    /**
     * Returns a list of albums that a person, group, or organization contributed to. The response can
     * by filtered by type of album. Please specify name, nameid, cosmoid, amgpopid, amgmovieid, or
     * amgclassicalid. Fields in bold are required. (NameMethods.Discography)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string type Specifies what types of discography to return. Separate the values with commas like this: type=video,singles.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Discography($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Discography', array($params));
      return $data;
    }
    /**
     * Returns URLs to images of a person or group. Note: Access to images is governed by your
     * subscription level and geographical location. Please specify name, nameid, cosmoid, amgpopid,
     * amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.Images)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string formatid Size and file format of returned images, as specified by format ID
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Images($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Images', array($params));
      return $data;
    }
    /**
     * Returns other names a person or group has been known by. Please specify name, nameid, cosmoid,
     * amgpopid, amgmovieid, or amgclassicalid. Fields in bold are required. (NameMethods.Aliases)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string name Name of the person or group
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param string amgmovieid AMG ID for a person who works in movies, consisting of a seven-character string that starts with P and is followed by 6 digits with leading spaces
     * @opt_param string cosmoid Cosmo database ID for a person, group, or organization
     * @opt_param string amgclassicalid AMG ID for a classical music artist, consisting of a ten-character string that starts with Q and is followed by nine digits with leading spaces
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param string nameid Rovi Music ID for a person, group, or organization, consisting of the prefix MN followed by a ten-digit number
     * @opt_param string amgpopid AMG ID for a popular music artist, consisting of a ten-character string that starts with P and is followed by 9 digits with leading spaces
     */
    public function Aliases($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Aliases', array($params));
      return $data;
    }
  }

  /**
   * The "MatchMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $MatchMethods = $metadataandsearchapiService->MatchMethods;
   *  </code>
   */
  class MatchMethodsServiceResource extends apiServiceResource {


    /**
     * Locates information in Rovi Cloud Services that is related to the song, movie, or TV series files
     * on your CDs, DVDs, and other entertainment media. Fields in bold are required.
     * (MatchMethods.MatchFilename)
     *
     * @param string $name URL-encoded name of the file.
     * @param string $catalog Database to match against.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string format Format of the returned data
     * @opt_param string entitytype For a catalog type of video, categories that further narrow the type of content to match against.
     * @opt_param string include Additional data to include in each result returned. To include cast members in movie results, for example, specify include=movie:cast.
     * @opt_param int size The number of items you want to be returned
     */
    public function MatchFilename($name, $catalog, $optParams = array()) {
      $params = array('name' => $name, 'catalog' => $catalog);
      $params = array_merge($params, $optParams);
      $data = $this->__call('MatchFilename', array($params));
      return $data;
    }
    /**
     * Matches title and field-level criteria against movies, TV series, and TV programs in Rovi Cloud
     * Services and returns results in order of match. Fields in bold are required.
     * (MatchMethods.MatchVideo)
     *
     * @param string $title Title of a movie, television program, or television series, or keywords from the title.
     * @param string $catalog Database to match against.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string rating MPAA movie rating or US TV rating.
     * @opt_param string include Additional data to include in each result returned. For multiple include values, separate the values with commas like this: include=movie:moods,crew.
     * @opt_param string format Format of the returned data
     * @opt_param string entitytype Type of content to search for
     * @opt_param int releaseyear Year the title was released.
     * @opt_param int runtime Length of the title in minutes.
     * @opt_param int size The number of items you want to be returned
     */
    public function MatchVideo($title, $catalog, $optParams = array()) {
      $params = array('title' => $title, 'catalog' => $catalog);
      $params = array_merge($params, $optParams);
      $data = $this->__call('MatchVideo', array($params));
      return $data;
    }
    /**
     * Matches title and field-level criteria against albums in Rovi Cloud Services and returns results
     * in order of match. Fields in bold are required. (MatchMethods.MatchAlbum)
     *
     * @param string $name Keywords from the album title
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string ean EAN code of the release.
     * @opt_param string format Format of the returned data
     * @opt_param int numtracks Number of tracks on the album.
     * @opt_param string upc Universal Product Code (UPC) for an item.
     * @opt_param string releasedate Date the album was released in YYYYMMDD format.
     * @opt_param string performername Name of a performer on the song.
     * @opt_param string labelname Record company that released the album.
     * @opt_param string include Additional data to include in each result returned. To include images of the album in the response, for example, add include=images.
     * @opt_param int size The number of items you want to be returned
     */
    public function MatchAlbum($name, $optParams = array()) {
      $params = array('name' => $name);
      $params = array_merge($params, $optParams);
      $data = $this->__call('MatchAlbum', array($params));
      return $data;
    }
    /**
     * Matches title and field-level criteria against songs in Rovi Cloud Services and returns results
     * in order of match. Fields in bold are required. (MatchMethods.MatchTrack)
     *
     * @param string $name Keywords from the song title.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int sequencenumber Number of the track on the album.
     * @opt_param string albumtitle Keywords from the album title.
     * @opt_param int seconds Playing time in seconds.
     * @opt_param string format Format of the returned data
     * @opt_param string performername Name of a performer on the song.
     * @opt_param string isrc International Standard Recording Code (ISRC) for a song recording.
     * @opt_param string include Additional data to include in each result returned. To include album appearances in the response, for example, add include=appearances.
     * @opt_param int medianumber Number of the disc in the series that the track is on.
     * @opt_param int size The number of items you want to be returned
     */
    public function MatchTrack($name, $optParams = array()) {
      $params = array('name' => $name);
      $params = array_merge($params, $optParams);
      $data = $this->__call('MatchTrack', array($params));
      return $data;
    }
    /**
     * Matches name and field-level criteria against people and groups in Rovi Cloud Services and
     * returns results in order of match. Fields in bold are required. (MatchMethods.MatchName)
     *
     * @param string $name Name of the person or group
     * @param string $catalog Database to match against.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string deathdate Date of death in YYYYMMDD format.
     * @opt_param string format Format of the returned data
     * @opt_param string birthdate Date of birth in YYYYMMDD format.
     * @opt_param string include Additional data to include in each result returned. To include images of a person, for example, specify include=images.
     * @opt_param int size The number of items you want to be returned
     */
    public function MatchName($name, $catalog, $optParams = array()) {
      $params = array('name' => $name, 'catalog' => $catalog);
      $params = array_merge($params, $optParams);
      $data = $this->__call('MatchName', array($params));
      return $data;
    }
  }

  /**
   * The "MovieReleaseMethods" collection of methods.
   * Typical usage is:
   *  <code>
   *   $metadataandsearchapiService = new apiMetadataandsearchapiService(...);
   *   $MovieReleaseMethods = $metadataandsearchapiService->MovieReleaseMethods;
   *  </code>
   */
  class MovieReleaseMethodsServiceResource extends apiServiceResource {


    /**
     * Returns basic information about a movie release. Please set a value for upcid or moviereleaseid.
     * Fields in bold are required. (MovieReleaseMethods.Info)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param int upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int moviereleaseid ID of a movie release
     * @opt_param string include Any other Movie Release requests to include in the request. For multiple includes, separate the values with commas like this: description,images.
     */
    public function Info($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Info', array($params));
      return $data;
    }
    /**
     * Returns URLs to images of a movie release along with associated image information. Note: Access
     * to images is governed by your subscription level and geographical location. Please set a value
     * for upcid or moviereleaseid. Fields in bold are required. (MovieReleaseMethods.Images)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param int upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int moviereleaseid ID of a movie release
     */
    public function Images($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Images', array($params));
      return $data;
    }
    /**
     * Returns the description of a movie release. Please set a value for upcid or moviereleaseid.
     * Fields in bold are required. (MovieReleaseMethods.Description)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int moviereleaseid ID of a movie release
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function Description($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Description', array($params));
      return $data;
    }
    /**
     * Returns data for constructing links to trailers of a movie release. Please set a value for upcid
     * or moviereleaseid. Fields in bold are required. (MovieReleaseMethods.Videos)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int count Number of items you want to be returned. The default is zero, which returns all items after the offset.
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     * @opt_param int upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int offset Counting from zero as the first item in the list of items, the number of the first item you want.
     * @opt_param int moviereleaseid ID of a movie release
     */
    public function Videos($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Videos', array($params));
      return $data;
    }
    /**
     * Returns the description of a movie release. Please set a value for upcid or moviereleaseid.
     * Fields in bold are required. Fields in bold are required. (MovieReleaseMethods.Features)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int upcid Universal Product Code for an item
     * @opt_param string country Country of the language of the response. The current release of the API only supports US.
     * @opt_param int moviereleaseid ID of a movie release
     * @opt_param string language Language of the response data. This request only supports en (English).
     * @opt_param string format Format of the returned data
     */
    public function Features($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('Features', array($params));
      return $data;
    }
  }



/**
 * Service definition for Metadataandsearchapi (1.0).
 *
 * <p>
 * World-class entertainment metadata provides rich information about TV, music, and movies.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiMetadataandsearchapiService extends apiService {
  public $MovieMethods;
  public $DescriptorMethods;
  public $RecommendationMethods;
  public $AlbumMethods;
  public $PerformanceMethods;
  public $SearchMethods;
  public $CompositionMethods;
  public $SongMethods;
  public $ReleaseMethods;
  public $NameMethods;
  public $MatchMethods;
  public $MovieReleaseMethods;
  /**
   * Constructs the internal representation of the Metadataandsearchapi service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->rpcPath = '/rpc';
    $this->restBasePath = '/';
    $this->version = '1.0';
    $this->serviceName = 'metadataandsearchapi';
    $this->io = $apiClient->getIo();

    $apiClient->addService($this->serviceName, $this->version);
    $this->MovieMethods = new MovieMethodsServiceResource($this, $this->serviceName, 'MovieMethods', json_decode('{"methods": {"Info": {"path": "data/v1/movie/info", "httpMethod": "GET", "id": "Movie.Info", "parameters": {"movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Videos": {"path": "data/v1/movie/videos", "httpMethod": "GET", "id": "Movie.Videos", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Releases": {"path": "data/v1/movie/releases", "httpMethod": "GET", "id": "Movie.Releases", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Review": {"path": "data/v1/movie/review", "httpMethod": "GET", "id": "Movie.Review", "parameters": {"movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Keywords": {"path": "data/v1/movie/keywords", "httpMethod": "GET", "id": "Movie.Keywords", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Related": {"path": "data/v1/movie/related", "httpMethod": "GET", "id": "Movie.Related", "parameters": {"movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Crew": {"path": "data/v1/movie/crew", "httpMethod": "GET", "id": "Movie.Crew", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Themes": {"path": "data/v1/movie/themes", "httpMethod": "GET", "id": "Movie.Themes", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Cast": {"path": "data/v1/movie/cast", "httpMethod": "GET", "id": "Movie.Cast", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Synopsis": {"path": "data/v1/movie/synopsis", "httpMethod": "GET", "id": "Movie.Synopsis", "parameters": {"movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Moods": {"path": "data/v1/movie/moods", "httpMethod": "GET", "id": "Movie.Moods", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Tones": {"path": "data/v1/movie/tones", "httpMethod": "GET", "id": "Movie.Tones", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Images": {"path": "data/v1/movie/images", "httpMethod": "GET", "id": "Movie.Images", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}, "Types": {"path": "data/v1/movie/types", "httpMethod": "GET", "id": "Movie.Types", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "movieid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "movie": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "integer", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}}}}}', true));
    $this->DescriptorMethods = new DescriptorMethodsServiceResource($this, $this->serviceName, 'DescriptorMethods', json_decode('{"methods": {"SignificantArtists": {"path": "data/v1/descriptor/significantartists", "httpMethod": "GET", "id": "Descriptor.SignificantArtists", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "genreids": {"default": "", "required": true, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Genres": {"path": "data/v1/descriptor/genres", "httpMethod": "GET", "id": "Descriptor.Genres", "parameters": {"country": {"default": "US", "required": false, "type": "string", "location": "query"}, "genreids": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "Subgenres": {"path": "data/v1/descriptor/subgenres", "httpMethod": "GET", "id": "Descriptor.Subgenres", "parameters": {"country": {"default": "US", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "subgenreids": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "SignificantComposers": {"path": "data/v1/descriptor/significantcomposers", "httpMethod": "GET", "id": "Descriptor.SignificantComposers", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "genreids": {"default": "", "required": true, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "MusicStyles": {"path": "data/v1/descriptor/styles", "httpMethod": "GET", "id": "Descriptor.MusicStyles", "parameters": {"country": {"default": "US", "required": false, "type": "string", "location": "query"}, "styleids": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "SignificantCompositions": {"path": "data/v1/descriptor/significantcompositions", "httpMethod": "GET", "id": "Descriptor.SignificantCompositions", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "genreids": {"default": "", "required": true, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "MusicGenres": {"path": "data/v1/descriptor/musicgenres", "httpMethod": "GET", "id": "Descriptor.MusicGenres", "parameters": {"country": {"default": "US", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "SignificantSongs": {"path": "data/v1/descriptor/significantsongs", "httpMethod": "GET", "id": "Descriptor.SignificantSongs", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "genreids": {"default": "", "required": true, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "SignificantMovies": {"path": "data/v1/descriptor/significantmovies", "httpMethod": "GET", "id": "Descriptor.SignificantMovies", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "genreids": {"default": "", "required": true, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "MovieGenres": {"path": "data/v1/descriptor/moviegenres", "httpMethod": "GET", "id": "Descriptor.MovieGenres", "parameters": {"country": {"default": "US", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "SignificantAlbums": {"path": "data/v1/descriptor/significantalbums", "httpMethod": "GET", "id": "Descriptor.SignificantAlbums", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "genreids": {"default": "", "required": true, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}}}', true));
    $this->RecommendationMethods = new RecommendationMethodsServiceResource($this, $this->serviceName, 'RecommendationMethods', json_decode('{"methods": {"Similar": {"path": "recs/v2.1{endpoint}/similar", "httpMethod": "GET", "id": "Recommendations.Similar", "parameters": {"cosmoprogramid": {"default": "", "required": false, "type": "string", "location": "query"}, "endpoint": {"required": true, "default": "", "enum": ["music", "amgvideo", "video"], "location": "path", "type": "string"}, "end": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "rep": {"default": 1, "required": false, "type": "integer", "location": "query"}, "entitytype": {"required": true, "default": "", "enum": ["album", "artist", "movie", "tvseries", "movie", "tvseries"], "location": "query", "type": "string"}, "filter": {"default": "", "required": false, "type": "string", "location": "query"}, "start": {"default": "", "required": false, "type": "string", "location": "query"}, "amgvideoid": {"default": "", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "clu": {"default": "", "required": false, "type": "string", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}}}', true));
    $this->AlbumMethods = new AlbumMethodsServiceResource($this, $this->serviceName, 'AlbumMethods', json_decode('{"methods": {"Info": {"path": "data/v1/album/info", "httpMethod": "GET", "id": "Album.Info", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Styles": {"path": "data/v1/album/styles", "httpMethod": "GET", "id": "Album.Styles", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Releases": {"path": "data/v1/album/releases", "httpMethod": "GET", "id": "Album.Releases", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "ClassicalReview": {"path": "data/v1/album/classicalreview", "httpMethod": "GET", "id": "Album.ClassicalReview", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "PrimaryReview": {"path": "data/v1/album/primaryreview", "httpMethod": "GET", "id": "Album.PrimaryReview", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Themes": {"path": "data/v1/album/themes", "httpMethod": "GET", "id": "Album.Themes", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Credits": {"path": "data/v1/album/credits", "httpMethod": "GET", "id": "Album.Credits", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Tracks": {"path": "data/v1/album/tracks", "httpMethod": "GET", "id": "Album.Tracks", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Moods": {"path": "data/v1/album/moods", "httpMethod": "GET", "id": "Album.Moods", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Images": {"path": "data/v1/album/images", "httpMethod": "GET", "id": "Album.Images", "parameters": {"album": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "albumid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}}}}}', true));
    $this->PerformanceMethods = new PerformanceMethodsServiceResource($this, $this->serviceName, 'PerformanceMethods', json_decode('{"methods": {"Info": {"path": "data/v1/performance/info", "httpMethod": "GET", "id": "Performance.Info", "parameters": {"language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "performanceid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Credits": {"path": "data/v1/performance/credits", "httpMethod": "GET", "id": "Performance.Credits", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "performanceid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Release": {"path": "data/v1/performance/release", "httpMethod": "GET", "id": "Performance.Release", "parameters": {"country": {"default": "US", "required": false, "type": "string", "location": "query"}, "performanceid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "Images": {"path": "data/v1/performance/images", "httpMethod": "GET", "id": "Performance.Images", "parameters": {"country": {"default": "US", "required": false, "type": "string", "location": "query"}, "performanceid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "Composition": {"path": "data/v1/performance/composition", "httpMethod": "GET", "id": "Performance.Composition", "parameters": {"country": {"default": "US", "required": false, "type": "string", "location": "query"}, "performanceid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}}}', true));
    $this->SearchMethods = new SearchMethodsServiceResource($this, $this->serviceName, 'SearchMethods', json_decode('{"methods": {"Search": {"path": "search/v2.1/{endpoint}/search", "httpMethod": "GET", "id": "Search.Search", "parameters": {"facet": {"required": false, "default": "", "enum": ["", "type", "genre"], "location": "query", "type": "string"}, "endpoint": {"required": true, "default": "", "enum": ["music", "amgvideo", "video"], "location": "path", "type": "string"}, "end": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "rep": {"default": 1, "required": false, "type": "integer", "location": "query"}, "entitytype": {"required": true, "default": "", "enum": ["album", "song", "artist", "movie", "tvseries", "credit", "movie", "tvseries", "onetimeonly", "credit"], "location": "query", "type": "string"}, "filter": {"default": "", "required": false, "type": "string", "location": "query"}, "start": {"default": "", "required": false, "type": "string", "location": "query"}, "query": {"default": "", "required": true, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "clu": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}, "FilterBrowse": {"path": "search/v2.1{endpoint}/filterbrowse", "httpMethod": "GET", "id": "Search.FilterBrowse", "parameters": {"facet": {"required": false, "default": "", "enum": ["", "type", "genre"], "location": "query", "type": "string"}, "endpoint": {"required": true, "default": "", "enum": ["music", "amgvideo", "video"], "location": "path", "type": "string"}, "end": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "rep": {"default": 1, "required": false, "type": "integer", "location": "query"}, "entitytype": {"required": true, "default": "", "enum": ["album", "song", "artist", "movie", "tvseries", "credit", "movie", "tvseries", "onetimeonly", "credit"], "location": "query", "type": "string"}, "filter": {"default": "", "required": false, "type": "string", "location": "query"}, "start": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "clu": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}, "SingleStageSearch": {"path": "search/v2.1{endpoint}/singlestagesearch", "httpMethod": "GET", "id": "Search.SingleStageSearch", "parameters": {"facet": {"required": false, "default": "", "enum": ["", "type", "genre"], "location": "query", "type": "string"}, "endpoint": {"required": true, "default": "", "enum": ["music", "amgvideo", "video"], "location": "path", "type": "string"}, "end": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "rep": {"default": 1, "required": false, "type": "integer", "location": "query"}, "entitytype": {"required": true, "default": "", "enum": ["album", "song", "artist", "movie", "tvseries", "credit", "movie", "tvseries", "onetimeonly", "credit"], "location": "query", "type": "string"}, "filter": {"default": "", "required": false, "type": "string", "location": "query"}, "start": {"default": "", "required": false, "type": "string", "location": "query"}, "query": {"default": "", "required": true, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "clu": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}}}', true));
    $this->CompositionMethods = new CompositionMethodsServiceResource($this, $this->serviceName, 'CompositionMethods', json_decode('{"methods": {"Info": {"path": "data/v1/composition/info", "httpMethod": "GET", "id": "Composition.Info", "parameters": {"language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "compositionid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Parts": {"path": "data/v1/composition/parts", "httpMethod": "GET", "id": "Composition.Parts", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "compositionid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Description": {"path": "data/v1/composition/description", "httpMethod": "GET", "id": "Composition.Description", "parameters": {"compositionid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "Releases": {"path": "data/v1/composition/releases", "httpMethod": "GET", "id": "Composition.Releases", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "compositionid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}}}', true));
    $this->SongMethods = new SongMethodsServiceResource($this, $this->serviceName, 'SongMethods', json_decode('{"methods": {"Info": {"path": "data/v1/song/info", "httpMethod": "GET", "id": "Song.Info", "parameters": {"language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "track": {"default": "", "required": false, "type": "string", "location": "query"}, "trackid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicaltrackid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "isrcid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpoptrackid": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "muzeid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Appearances": {"path": "data/v1/song/appearances", "httpMethod": "GET", "id": "Song.Appearances", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "track": {"default": "", "required": false, "type": "string", "location": "query"}, "trackid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicaltrackid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "isrcid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpoptrackid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "muzeid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Review": {"path": "data/v1/song/review", "httpMethod": "GET", "id": "Song.Review", "parameters": {"language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "track": {"default": "", "required": false, "type": "string", "location": "query"}, "trackid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicaltrackid": {"default": "", "required": false, "type": "string", "location": "query"}, "isrcid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpoptrackid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "muzeid": {"default": "", "required": false, "type": "string", "location": "query"}}}}}', true));
    $this->ReleaseMethods = new ReleaseMethodsServiceResource($this, $this->serviceName, 'ReleaseMethods', json_decode('{"methods": {"Info": {"path": "data/v1/release/info", "httpMethod": "GET", "id": "Release.Info", "parameters": {"amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Styles": {"path": "data/v1/release/styles", "httpMethod": "GET", "id": "Release.Styles", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Performances": {"path": "data/v1/release/performances", "httpMethod": "GET", "id": "Release.Performances", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "ClassicalReview": {"path": "data/v1/release/classicalreview", "httpMethod": "GET", "id": "Release.ClassicalReview", "parameters": {"amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "PrimaryReview": {"path": "data/v1/release/primaryreview", "httpMethod": "GET", "id": "Release.PrimaryReview", "parameters": {"amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Themes": {"path": "data/v1/release/themes", "httpMethod": "GET", "id": "Release.Themes", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Credits": {"path": "data/v1/release/credits", "httpMethod": "GET", "id": "Release.Credits", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Tracks": {"path": "data/v1/release/tracks", "httpMethod": "GET", "id": "Release.Tracks", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Moods": {"path": "data/v1/release/moods", "httpMethod": "GET", "id": "Release.Moods", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}}}, "Images": {"path": "data/v1/release/images", "httpMethod": "GET", "id": "Release.Images", "parameters": {"amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "eanid": {"default": "", "required": false, "type": "string", "location": "query"}, "releaseid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}}}}}', true));
    $this->NameMethods = new NameMethodsServiceResource($this, $this->serviceName, 'NameMethods', json_decode('{"methods": {"Web": {"path": "data/v1/name/web", "httpMethod": "GET", "id": "Name.Web", "parameters": {"name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "MemberOf": {"path": "data/v1/name/memberof", "httpMethod": "GET", "id": "Name.MemberOf", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "GroupMembers": {"path": "data/v1/name/groupmembers", "httpMethod": "GET", "id": "Name.GroupMembers", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Followers": {"path": "data/v1/name/followers", "httpMethod": "GET", "id": "Name.Followers", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "CollaboratorWith": {"path": "data/v1/name/collaboratorwith", "httpMethod": "GET", "id": "Name.CollaboratorWith", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Contemporaries": {"path": "data/v1/name/contemporaries", "httpMethod": "GET", "id": "Name.Contemporaries", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Similars": {"path": "data/v1/name/similars", "httpMethod": "GET", "id": "Name.Similars", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "ClassicalBio": {"path": "data/v1/name/classicalbio", "httpMethod": "GET", "id": "Name.ClassicalBio", "parameters": {"name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Filmography": {"path": "data/v1/name/filmography", "httpMethod": "GET", "id": "Name.Filmography", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Moods": {"path": "data/v1/name/moods", "httpMethod": "GET", "id": "Name.Moods", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "MovieBio": {"path": "data/v1/name/moviebio", "httpMethod": "GET", "id": "Name.MovieBio", "parameters": {"name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Compositions": {"path": "data/v1/name/compositions", "httpMethod": "GET", "id": "Name.Compositions", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Info": {"path": "data/v1/name/info", "httpMethod": "GET", "id": "Name.Info", "parameters": {"name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "sourceid": {"default": "", "required": false, "type": "string", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "sourceinclude": {"required": false, "default": "", "enum": ["", "HD", "PPV", "Music"], "location": "query", "type": "string"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "formatid": {"default": "", "required": false, "type": "string", "location": "query"}, "serviceid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "starttime": {"default": "", "required": false, "type": "string", "location": "query"}, "duration": {"default": 10080, "required": false, "type": "integer", "location": "query"}, "inprogress": {"required": false, "default": false, "enum": ["true", "false"], "location": "query", "type": "boolean"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "type": {"default": "", "required": false, "type": "string", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "sourceexclude": {"required": false, "default": "", "enum": ["", "HD", "PPV", "Music"], "location": "query", "type": "string"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "MusicCredits": {"path": "data/v1/name/musiccredits", "httpMethod": "GET", "id": "Name.MusicCredits", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "MusicBio": {"path": "data/v1/name/musicbio", "httpMethod": "GET", "id": "Name.MusicBio", "parameters": {"name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "AssociatedWith": {"path": "data/v1/name/associatedwith", "httpMethod": "GET", "id": "Name.AssociatedWith", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "MusicStyles": {"path": "data/v1/name/musicstyles", "httpMethod": "GET", "id": "Name.MusicStyles", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Songs": {"path": "data/v1/name/songs", "httpMethod": "GET", "id": "Name.Songs", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "MovieStyles": {"path": "data/v1/name/moviestyles", "httpMethod": "GET", "id": "Name.MovieStyles", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Videos": {"path": "data/v1/name/videos", "httpMethod": "GET", "id": "Name.Videos", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Influencers": {"path": "data/v1/name/influencers", "httpMethod": "GET", "id": "Name.Influencers", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Themes": {"path": "data/v1/name/themes", "httpMethod": "GET", "id": "Name.Themes", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Discography": {"path": "data/v1/name/discography", "httpMethod": "GET", "id": "Name.Discography", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "type": {"required": false, "default": "", "enum": ["", "main", "video", "singles", "compilations", "others"], "location": "query", "type": "string"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Images": {"path": "data/v1/name/images", "httpMethod": "GET", "id": "Name.Images", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "formatid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Aliases": {"path": "data/v1/name/aliases", "httpMethod": "GET", "id": "Name.Aliases", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "name": {"default": "", "required": false, "type": "string", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "amgmovieid": {"default": "", "required": false, "type": "string", "location": "query"}, "cosmoid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgclassicalid": {"default": "", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "nameid": {"default": "", "required": false, "type": "string", "location": "query"}, "amgpopid": {"default": "", "required": false, "type": "string", "location": "query"}}}}}', true));
    $this->MatchMethods = new MatchMethodsServiceResource($this, $this->serviceName, 'MatchMethods', json_decode('{"methods": {"MatchFilename": {"path": "recognition/v2.1/{catalog}/match/filename", "httpMethod": "GET", "id": "Match.MatchFilename", "parameters": {"name": {"default": "", "required": true, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "entitytype": {"required": false, "default": "", "enum": ["tvseries", "movie"], "location": "query", "type": "string"}, "catalog": {"required": true, "default": "", "enum": ["music", "video"], "location": "path", "type": "string"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}, "MatchVideo": {"path": "recognition/v2.1/{catalog}/match/video", "httpMethod": "GET", "id": "Match.MatchVideo", "parameters": {"rating": {"required": false, "default": "", "enum": ["None", "TV-Y", "TV-Y7", "TV-G", "TV-PG", "TV-14", "TV-MA", "NR", "G", "PG", "PG-13", "R", "NC-17", "X"], "location": "query", "type": "string"}, "runtime": {"default": "", "required": false, "type": "integer", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "entitytype": {"required": false, "default": "", "enum": ["movie", "tvseries", "movie", "tvseries", "onetimeonly"], "location": "query", "type": "string"}, "catalog": {"required": true, "default": "", "enum": ["amgvideo", "video"], "location": "path", "type": "string"}, "releaseyear": {"default": "", "required": false, "type": "integer", "location": "query"}, "title": {"default": "", "required": true, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}, "MatchTrack": {"path": "recognition/v2.1/music/match/track", "httpMethod": "GET", "id": "Match.MatchTrack", "parameters": {"name": {"default": "", "required": true, "type": "string", "location": "query"}, "sequencenumber": {"default": "", "required": false, "type": "integer", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "seconds": {"default": "", "required": false, "type": "integer", "location": "query"}, "albumtitle": {"default": "", "required": false, "type": "string", "location": "query"}, "performername": {"default": "", "required": false, "type": "string", "location": "query"}, "isrc": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "medianumber": {"default": "", "required": false, "type": "integer", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}, "MatchAlbum": {"path": "recognition/v2.1/music/match/album", "httpMethod": "GET", "id": "Match.MatchAlbum", "parameters": {"name": {"default": "", "required": true, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "ean": {"default": "", "required": false, "type": "string", "location": "query"}, "upc": {"default": "", "required": false, "type": "string", "location": "query"}, "numtracks": {"default": "", "required": false, "type": "integer", "location": "query"}, "releasedate": {"default": "", "required": false, "type": "string", "location": "query"}, "performername": {"default": "", "required": false, "type": "string", "location": "query"}, "labelname": {"default": "", "required": false, "type": "string", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}, "MatchName": {"path": "recognition/v2.1/{catalog}/match/name", "httpMethod": "GET", "id": "Match.MatchName", "parameters": {"deathdate": {"default": "", "required": false, "type": "string", "location": "query"}, "name": {"default": "", "required": true, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "birthdate": {"default": "", "required": false, "type": "string", "location": "query"}, "catalog": {"required": true, "default": "", "enum": ["music", "amgvideo", "video"], "location": "path", "type": "string"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}, "size": {"default": 20, "required": false, "type": "integer", "location": "query"}}}}}', true));
    $this->MovieReleaseMethods = new MovieReleaseMethodsServiceResource($this, $this->serviceName, 'MovieReleaseMethods', json_decode('{"methods": {"Info": {"path": "data/v1/movierelease/info", "httpMethod": "GET", "id": "MovieRelease.Info", "parameters": {"language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "moviereleaseid": {"default": "", "required": false, "type": "integer", "location": "query"}, "include": {"default": "", "required": false, "type": "string", "location": "query"}}}, "Images": {"path": "data/v1/movierelease/images", "httpMethod": "GET", "id": "MovieRelease.Images", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "moviereleaseid": {"default": "", "required": false, "type": "integer", "location": "query"}}}, "Description": {"path": "data/v1/movierelease/description", "httpMethod": "GET", "id": "MovieRelease.Description", "parameters": {"upcid": {"default": "", "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "moviereleaseid": {"default": "", "required": false, "type": "integer", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}, "Videos": {"path": "data/v1/movierelease/videos", "httpMethod": "GET", "id": "MovieRelease.Videos", "parameters": {"count": {"default": 0, "required": false, "type": "integer", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}, "upcid": {"default": "", "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "offset": {"default": 0, "required": false, "type": "integer", "location": "query"}, "moviereleaseid": {"default": "", "required": false, "type": "integer", "location": "query"}}}, "Features": {"path": "data/v1/movierelease/features", "httpMethod": "GET", "id": "MovieRelease.Features", "parameters": {"upcid": {"default": "", "required": false, "type": "integer", "location": "query"}, "country": {"default": "US", "required": false, "type": "string", "location": "query"}, "moviereleaseid": {"default": "", "required": false, "type": "integer", "location": "query"}, "language": {"default": "en", "required": false, "type": "string", "location": "query"}, "format": {"required": false, "default": "json", "enum": ["json", "xml"], "location": "query", "type": "string"}}}}}', true));
  }
}
