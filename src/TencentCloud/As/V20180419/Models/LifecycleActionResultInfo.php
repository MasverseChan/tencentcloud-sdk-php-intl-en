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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result information of the lifecycle hook action
 *
 * @method string getLifecycleHookId() Obtain ID of the lifecycle hook
 * @method void setLifecycleHookId(string $LifecycleHookId) Set ID of the lifecycle hook
 * @method string getInstanceId() Obtain ID of the instance
 * @method void setInstanceId(string $InstanceId) Set ID of the instance
 * @method string getNotificationResult() Obtain Whether the notification is sent to CMQ successfully
 * @method void setNotificationResult(string $NotificationResult) Set Whether the notification is sent to CMQ successfully
 * @method string getLifecycleActionResult() Obtain Result of the lifecyle hook action. Values: CONTINUE, ABANDON
 * @method void setLifecycleActionResult(string $LifecycleActionResult) Set Result of the lifecyle hook action. Values: CONTINUE, ABANDON
 * @method string getResultReason() Obtain Cause of the result
 * @method void setResultReason(string $ResultReason) Set Cause of the result
 */
class LifecycleActionResultInfo extends AbstractModel
{
    /**
     * @var string ID of the lifecycle hook
     */
    public $LifecycleHookId;

    /**
     * @var string ID of the instance
     */
    public $InstanceId;

    /**
     * @var string Whether the notification is sent to CMQ successfully
     */
    public $NotificationResult;

    /**
     * @var string Result of the lifecyle hook action. Values: CONTINUE, ABANDON
     */
    public $LifecycleActionResult;

    /**
     * @var string Cause of the result
     */
    public $ResultReason;

    /**
     * @param string $LifecycleHookId ID of the lifecycle hook
     * @param string $InstanceId ID of the instance
     * @param string $NotificationResult Whether the notification is sent to CMQ successfully
     * @param string $LifecycleActionResult Result of the lifecyle hook action. Values: CONTINUE, ABANDON
     * @param string $ResultReason Cause of the result
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
        if (array_key_exists("LifecycleHookId",$param) and $param["LifecycleHookId"] !== null) {
            $this->LifecycleHookId = $param["LifecycleHookId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NotificationResult",$param) and $param["NotificationResult"] !== null) {
            $this->NotificationResult = $param["NotificationResult"];
        }

        if (array_key_exists("LifecycleActionResult",$param) and $param["LifecycleActionResult"] !== null) {
            $this->LifecycleActionResult = $param["LifecycleActionResult"];
        }

        if (array_key_exists("ResultReason",$param) and $param["ResultReason"] !== null) {
            $this->ResultReason = $param["ResultReason"];
        }
    }
}
