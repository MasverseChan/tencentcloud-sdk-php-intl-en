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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancerOverview response structure.
 *
 * @method integer getTotalCount() Obtain Total number of CLB instances
 * @method void setTotalCount(integer $TotalCount) Set Total number of CLB instances
 * @method integer getRunningCount() Obtain Number of CLB instances that are running
 * @method void setRunningCount(integer $RunningCount) Set Number of CLB instances that are running
 * @method integer getIsolationCount() Obtain Number of CLB instances that are isolated
 * @method void setIsolationCount(integer $IsolationCount) Set Number of CLB instances that are isolated
 * @method integer getWillExpireCount() Obtain Number of CLB instances that are about to expire
 * @method void setWillExpireCount(integer $WillExpireCount) Set Number of CLB instances that are about to expire
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeLoadBalancerOverviewResponse extends AbstractModel
{
    /**
     * @var integer Total number of CLB instances
     */
    public $TotalCount;

    /**
     * @var integer Number of CLB instances that are running
     */
    public $RunningCount;

    /**
     * @var integer Number of CLB instances that are isolated
     */
    public $IsolationCount;

    /**
     * @var integer Number of CLB instances that are about to expire
     */
    public $WillExpireCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of CLB instances
     * @param integer $RunningCount Number of CLB instances that are running
     * @param integer $IsolationCount Number of CLB instances that are isolated
     * @param integer $WillExpireCount Number of CLB instances that are about to expire
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

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("IsolationCount",$param) and $param["IsolationCount"] !== null) {
            $this->IsolationCount = $param["IsolationCount"];
        }

        if (array_key_exists("WillExpireCount",$param) and $param["WillExpireCount"] !== null) {
            $this->WillExpireCount = $param["WillExpireCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
