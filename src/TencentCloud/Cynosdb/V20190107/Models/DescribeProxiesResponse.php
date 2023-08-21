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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxies response structure.
 *
 * @method integer getTotalCount() Obtain Number of database proxy groups
 * @method void setTotalCount(integer $TotalCount) Set Number of database proxy groups
 * @method array getProxyGroupInfos() Obtain List of database proxy groups
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
 * @method void setProxyGroupInfos(array $ProxyGroupInfos) Set List of database proxy groups
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
 * @method array getProxyNodeInfos() Obtain Database proxy node
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
 * @method void setProxyNodeInfos(array $ProxyNodeInfos) Set Database proxy node
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeProxiesResponse extends AbstractModel
{
    /**
     * @var integer Number of database proxy groups
     */
    public $TotalCount;

    /**
     * @var array List of database proxy groups
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
     */
    public $ProxyGroupInfos;

    /**
     * @var array Database proxy node
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
     */
    public $ProxyNodeInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Number of database proxy groups
     * @param array $ProxyGroupInfos List of database proxy groups
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
     * @param array $ProxyNodeInfos Database proxy node
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ProxyGroupInfos",$param) and $param["ProxyGroupInfos"] !== null) {
            $this->ProxyGroupInfos = [];
            foreach ($param["ProxyGroupInfos"] as $key => $value){
                $obj = new ProxyGroupInfo();
                $obj->deserialize($value);
                array_push($this->ProxyGroupInfos, $obj);
            }
        }

        if (array_key_exists("ProxyNodeInfos",$param) and $param["ProxyNodeInfos"] !== null) {
            $this->ProxyNodeInfos = [];
            foreach ($param["ProxyNodeInfos"] as $key => $value){
                $obj = new ProxyNodeInfo();
                $obj->deserialize($value);
                array_push($this->ProxyNodeInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
