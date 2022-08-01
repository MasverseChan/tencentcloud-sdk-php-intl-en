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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainsConfig response structure.
 *
 * @method array getDomains() Obtain List of domain names
 * @method void setDomains(array $Domains) Set List of domain names
 * @method integer getTotalNumber() Obtain Number of domain names that match the specified query conditions
Used for paginated queries
 * @method void setTotalNumber(integer $TotalNumber) Set Number of domain names that match the specified query conditions
Used for paginated queries
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDomainsConfigResponse extends AbstractModel
{
    /**
     * @var array List of domain names
     */
    public $Domains;

    /**
     * @var integer Number of domain names that match the specified query conditions
Used for paginated queries
     */
    public $TotalNumber;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Domains List of domain names
     * @param integer $TotalNumber Number of domain names that match the specified query conditions
Used for paginated queries
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = [];
            foreach ($param["Domains"] as $key => $value){
                $obj = new DetailDomain();
                $obj->deserialize($value);
                array_push($this->Domains, $obj);
            }
        }

        if (array_key_exists("TotalNumber",$param) and $param["TotalNumber"] !== null) {
            $this->TotalNumber = $param["TotalNumber"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
