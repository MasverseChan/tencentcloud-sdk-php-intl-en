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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetNodePoolNodeProtection response structure.
 *
 * @method array getSucceedInstanceIds() Obtain ID of the node that has successfully set the removal protection
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSucceedInstanceIds(array $SucceedInstanceIds) Set ID of the node that has successfully set the removal protection
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getFailedInstanceIds() Obtain ID of the node that fails to set the removal protection
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFailedInstanceIds(array $FailedInstanceIds) Set ID of the node that fails to set the removal protection
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SetNodePoolNodeProtectionResponse extends AbstractModel
{
    /**
     * @var array ID of the node that has successfully set the removal protection
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SucceedInstanceIds;

    /**
     * @var array ID of the node that fails to set the removal protection
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FailedInstanceIds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SucceedInstanceIds ID of the node that has successfully set the removal protection
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $FailedInstanceIds ID of the node that fails to set the removal protection
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("SucceedInstanceIds",$param) and $param["SucceedInstanceIds"] !== null) {
            $this->SucceedInstanceIds = $param["SucceedInstanceIds"];
        }

        if (array_key_exists("FailedInstanceIds",$param) and $param["FailedInstanceIds"] !== null) {
            $this->FailedInstanceIds = $param["FailedInstanceIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
