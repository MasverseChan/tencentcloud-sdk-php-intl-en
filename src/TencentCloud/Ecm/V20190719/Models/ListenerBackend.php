<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Listener backend
 *
 * @method string getListenerId() Obtain Listener ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set Listener ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Listener protocol
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Listener protocol
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Listener port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Listener port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTargets() Obtain List of real servers bound to the CLB instance
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) Set List of real servers bound to the CLB instance
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ListenerBackend extends AbstractModel
{
    /**
     * @var string Listener ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var string Listener protocol
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var integer Listener port
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var array List of real servers bound to the CLB instance
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Targets;

    /**
     * @param string $ListenerId Listener ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Listener protocol
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Listener port
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Targets List of real servers bound to the CLB instance
Note: this field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Backend();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}