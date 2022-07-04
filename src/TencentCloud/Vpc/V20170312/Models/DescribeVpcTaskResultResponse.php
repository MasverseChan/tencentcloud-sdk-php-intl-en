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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcTaskResult response structure.
 *
 * @method string getStatus() Obtain Execution result of an async task Valid values: `SUCCESS`: the task has been successfully executed; `FAILED`: the job execution failed; `RUNNING`: the job is executing.
 * @method void setStatus(string $Status) Set Execution result of an async task Valid values: `SUCCESS`: the task has been successfully executed; `FAILED`: the job execution failed; `RUNNING`: the job is executing.
 * @method string getOutput() Obtain Output of the async task execution result
 * @method void setOutput(string $Output) Set Output of the async task execution result
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVpcTaskResultResponse extends AbstractModel
{
    /**
     * @var string Execution result of an async task Valid values: `SUCCESS`: the task has been successfully executed; `FAILED`: the job execution failed; `RUNNING`: the job is executing.
     */
    public $Status;

    /**
     * @var string Output of the async task execution result
     */
    public $Output;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Execution result of an async task Valid values: `SUCCESS`: the task has been successfully executed; `FAILED`: the job execution failed; `RUNNING`: the job is executing.
     * @param string $Output Output of the async task execution result
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}