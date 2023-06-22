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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCdbProxyInfo response structure.
 *
 * @method integer getCount() Obtain Number of proxy groups Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Number of proxy groups Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProxyInfos() Obtain Proxy group information Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyInfos(array $ProxyInfos) Set Proxy group information Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCdbProxyInfoResponse extends AbstractModel
{
    /**
     * @var integer Number of proxy groups Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @var array Proxy group information Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Count Number of proxy groups Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ProxyInfos Proxy group information Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProxyInfos",$param) and $param["ProxyInfos"] !== null) {
            $this->ProxyInfos = [];
            foreach ($param["ProxyInfos"] as $key => $value){
                $obj = new ProxyGroupInfo();
                $obj->deserialize($value);
                array_push($this->ProxyInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
