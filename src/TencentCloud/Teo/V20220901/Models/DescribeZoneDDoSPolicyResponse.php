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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneDDoSPolicy response structure.
 *
 * @method array getShieldAreas() Obtain DDoS mitigation configuration.
 * @method void setShieldAreas(array $ShieldAreas) Set DDoS mitigation configuration.
 * @method array getDDoSHosts() Obtain Information of the proxied subdomain names.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSHosts(array $DDoSHosts) Set Information of the proxied subdomain names.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeZoneDDoSPolicyResponse extends AbstractModel
{
    /**
     * @var array DDoS mitigation configuration.
     */
    public $ShieldAreas;

    /**
     * @var array Information of the proxied subdomain names.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSHosts;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $ShieldAreas DDoS mitigation configuration.
     * @param array $DDoSHosts Information of the proxied subdomain names.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ShieldAreas",$param) and $param["ShieldAreas"] !== null) {
            $this->ShieldAreas = [];
            foreach ($param["ShieldAreas"] as $key => $value){
                $obj = new ShieldArea();
                $obj->deserialize($value);
                array_push($this->ShieldAreas, $obj);
            }
        }

        if (array_key_exists("DDoSHosts",$param) and $param["DDoSHosts"] !== null) {
            $this->DDoSHosts = [];
            foreach ($param["DDoSHosts"] as $key => $value){
                $obj = new DDoSHost();
                $obj->deserialize($value);
                array_push($this->DDoSHosts, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}