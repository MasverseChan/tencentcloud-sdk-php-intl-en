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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModifyCheckSyncJobResult response structure.
 *
 * @method string getStatus() Obtain Execution status of the check task Valid values: `notStarted` (Not started), `running` (Running), `failed` (Failed), `success` (Successful).
 * @method void setStatus(string $Status) Set Execution status of the check task Valid values: `notStarted` (Not started), `running` (Running), `failed` (Failed), `success` (Successful).
 * @method integer getStepCount() Obtain Number of check steps Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepCount(integer $StepCount) Set Number of check steps Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStepCur() Obtain Current step Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepCur(integer $StepCur) Set Current step Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Overall progress. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(integer $Progress) Set Overall progress. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getStepInfos() Obtain Step details Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepInfos(array $StepInfos) Set Step details Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeModifyCheckSyncJobResultResponse extends AbstractModel
{
    /**
     * @var string Execution status of the check task Valid values: `notStarted` (Not started), `running` (Running), `failed` (Failed), `success` (Successful).
     */
    public $Status;

    /**
     * @var integer Number of check steps Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepCount;

    /**
     * @var integer Current step Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepCur;

    /**
     * @var integer Overall progress. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var array Step details Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Execution status of the check task Valid values: `notStarted` (Not started), `running` (Running), `failed` (Failed), `success` (Successful).
     * @param integer $StepCount Number of check steps Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StepCur Current step Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Overall progress. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $StepInfos Step details Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("StepCount",$param) and $param["StepCount"] !== null) {
            $this->StepCount = $param["StepCount"];
        }

        if (array_key_exists("StepCur",$param) and $param["StepCur"] !== null) {
            $this->StepCur = $param["StepCur"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StepInfos",$param) and $param["StepInfos"] !== null) {
            $this->StepInfos = [];
            foreach ($param["StepInfos"] as $key => $value){
                $obj = new StepInfo();
                $obj->deserialize($value);
                array_push($this->StepInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
