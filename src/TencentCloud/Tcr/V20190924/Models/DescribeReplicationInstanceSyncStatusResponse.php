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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReplicationInstanceSyncStatus response structure.
 *
 * @method string getReplicationStatus() Obtain Synchronization status
 * @method void setReplicationStatus(string $ReplicationStatus) Set Synchronization status
 * @method string getReplicationTime() Obtain Synchronization completion time
 * @method void setReplicationTime(string $ReplicationTime) Set Synchronization completion time
 * @method ReplicationLog getReplicationLog() Obtain Synchronization log
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setReplicationLog(ReplicationLog $ReplicationLog) Set Synchronization log
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeReplicationInstanceSyncStatusResponse extends AbstractModel
{
    /**
     * @var string Synchronization status
     */
    public $ReplicationStatus;

    /**
     * @var string Synchronization completion time
     */
    public $ReplicationTime;

    /**
     * @var ReplicationLog Synchronization log
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReplicationLog;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ReplicationStatus Synchronization status
     * @param string $ReplicationTime Synchronization completion time
     * @param ReplicationLog $ReplicationLog Synchronization log
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
        if (array_key_exists("ReplicationStatus",$param) and $param["ReplicationStatus"] !== null) {
            $this->ReplicationStatus = $param["ReplicationStatus"];
        }

        if (array_key_exists("ReplicationTime",$param) and $param["ReplicationTime"] !== null) {
            $this->ReplicationTime = $param["ReplicationTime"];
        }

        if (array_key_exists("ReplicationLog",$param) and $param["ReplicationLog"] !== null) {
            $this->ReplicationLog = new ReplicationLog();
            $this->ReplicationLog->deserialize($param["ReplicationLog"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}