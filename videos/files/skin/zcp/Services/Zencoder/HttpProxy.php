<?php
/**
 * Zencoder API client interface.
 *
 * @category Services
 * @package  Services_Zencoder
 * @author   Michael Christopher <m@zencoder.com>
 * @version  Release: 2.1.1
 * @license  //creativecommons.org/licenses/MIT/MIT
 * @link     //github.com/zencoder/zencoder-php
 */

interface Services_Zencoder_HttpProxy
{
  function createData($key, $body = "", array $opts = array());
  function retrieveData($key, array $params = array(), array $opts = array());
  function updateData($key, $body = "", array $opts = array());
  function deleteData($key, array $opts = array());
}
