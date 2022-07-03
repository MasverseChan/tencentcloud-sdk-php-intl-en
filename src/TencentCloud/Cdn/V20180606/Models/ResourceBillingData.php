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
 * Billing data details
 *
 * @method string getResource() Obtain Resource name, which is classified as follows based on different query filters:
When a domain name is specified: Details of the domain name
`multiDomains`: Aggregated details of multiple domain names
A specific project ID: ID of the specifically queried project
`all`: Details at the account level
 * @method void setResource(string $Resource) Set Resource name, which is classified as follows based on different query filters:
When a domain name is specified: Details of the domain name
`multiDomains`: Aggregated details of multiple domain names
A specific project ID: ID of the specifically queried project
`all`: Details at the account level
 * @method array getBillingData() Obtain Billing data details
 * @method void setBillingData(array $BillingData) Set Billing data details
 */
class ResourceBillingData extends AbstractModel
{
    /**
     * @var string Resource name, which is classified as follows based on different query filters:
When a domain name is specified: Details of the domain name
`multiDomains`: Aggregated details of multiple domain names
A specific project ID: ID of the specifically queried project
`all`: Details at the account level
     */
    public $Resource;

    /**
     * @var array Billing data details
     */
    public $BillingData;

    /**
     * @param string $Resource Resource name, which is classified as follows based on different query filters:
When a domain name is specified: Details of the domain name
`multiDomains`: Aggregated details of multiple domain names
A specific project ID: ID of the specifically queried project
`all`: Details at the account level
     * @param array $BillingData Billing data details
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("BillingData",$param) and $param["BillingData"] !== null) {
            $this->BillingData = [];
            foreach ($param["BillingData"] as $key => $value){
                $obj = new CdnData();
                $obj->deserialize($value);
                array_push($this->BillingData, $obj);
            }
        }
    }
}
