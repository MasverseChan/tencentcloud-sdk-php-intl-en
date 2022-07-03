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
 * DescribeBillingData response structure.
 *
 * @method string getInterval() Obtain Time granularity, which is specified by the parameter passed in during the query:
`min`: 1 minute
`5min`: 5 minutes
`hour`: 1 hour
`day`: 1 day
 * @method void setInterval(string $Interval) Set Time granularity, which is specified by the parameter passed in during the query:
`min`: 1 minute
`5min`: 5 minutes
`hour`: 1 hour
`day`: 1 day
 * @method array getData() Obtain Data details
 * @method void setData(array $Data) Set Data details
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBillingDataResponse extends AbstractModel
{
    /**
     * @var string Time granularity, which is specified by the parameter passed in during the query:
`min`: 1 minute
`5min`: 5 minutes
`hour`: 1 hour
`day`: 1 day
     */
    public $Interval;

    /**
     * @var array Data details
     */
    public $Data;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Interval Time granularity, which is specified by the parameter passed in during the query:
`min`: 1 minute
`5min`: 5 minutes
`hour`: 1 hour
`day`: 1 day
     * @param array $Data Data details
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ResourceBillingData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
