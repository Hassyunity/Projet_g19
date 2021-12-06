<?php
/*
 * Copyright 2014 Google Inc.
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

namespace Google\Service\CloudFilestore;

class NetworkConfig extends \Google\Collection
{
  protected $collection_key = 'modes';
  public $connectMode;
  public $ipAddresses;
  public $modes;
  public $network;
  public $reservedIpRange;

  public function setConnectMode($connectMode)
  {
    $this->connectMode = $connectMode;
  }
  public function getConnectMode()
  {
    return $this->connectMode;
  }
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  public function setModes($modes)
  {
    $this->modes = $modes;
  }
  public function getModes()
  {
    return $this->modes;
  }
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  public function getNetwork()
  {
    return $this->network;
  }
  public function setReservedIpRange($reservedIpRange)
  {
    $this->reservedIpRange = $reservedIpRange;
  }
  public function getReservedIpRange()
  {
    return $this->reservedIpRange;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkConfig::class, 'Google_Service_CloudFilestore_NetworkConfig');
