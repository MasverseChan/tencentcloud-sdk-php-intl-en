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
 * DescribeMaintainPeriod response structure.
 *
 * @method array getMaintainWeekDays() Obtain Maintenance days of the week
 * @method void setMaintainWeekDays(array $MaintainWeekDays) Set Maintenance days of the week
 * @method integer getMaintainStartTime() Obtain Maintenance start time in seconds
 * @method void setMaintainStartTime(integer $MaintainStartTime) Set Maintenance start time in seconds
 * @method integer getMaintainDuration() Obtain Maintenance duration in seconds
 * @method void setMaintainDuration(integer $MaintainDuration) Set Maintenance duration in seconds
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeMaintainPeriodResponse extends AbstractModel
{
    /**
     * @var array Maintenance days of the week
     */
    public $MaintainWeekDays;

    /**
     * @var integer Maintenance start time in seconds
     */
    public $MaintainStartTime;

    /**
     * @var integer Maintenance duration in seconds
     */
    public $MaintainDuration;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $MaintainWeekDays Maintenance days of the week
     * @param integer $MaintainStartTime Maintenance start time in seconds
     * @param integer $MaintainDuration Maintenance duration in seconds
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
        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
