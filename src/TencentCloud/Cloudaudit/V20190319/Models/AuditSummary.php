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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tracking set overview
 *
 * @method integer getAuditStatus() Obtain Tracking set status. 1: enabled, 0: disabled
 * @method void setAuditStatus(integer $AuditStatus) Set Tracking set status. 1: enabled, 0: disabled
 * @method string getCosBucketName() Obtain COS bucket name
 * @method void setCosBucketName(string $CosBucketName) Set COS bucket name
 * @method string getAuditName() Obtain Tracking set name
 * @method void setAuditName(string $AuditName) Set Tracking set name
 * @method string getLogFilePrefix() Obtain Log prefix
 * @method void setLogFilePrefix(string $LogFilePrefix) Set Log prefix
 */
class AuditSummary extends AbstractModel
{
    /**
     * @var integer Tracking set status. 1: enabled, 0: disabled
     */
    public $AuditStatus;

    /**
     * @var string COS bucket name
     */
    public $CosBucketName;

    /**
     * @var string Tracking set name
     */
    public $AuditName;

    /**
     * @var string Log prefix
     */
    public $LogFilePrefix;

    /**
     * @param integer $AuditStatus Tracking set status. 1: enabled, 0: disabled
     * @param string $CosBucketName COS bucket name
     * @param string $AuditName Tracking set name
     * @param string $LogFilePrefix Log prefix
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
        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("AuditName",$param) and $param["AuditName"] !== null) {
            $this->AuditName = $param["AuditName"];
        }

        if (array_key_exists("LogFilePrefix",$param) and $param["LogFilePrefix"] !== null) {
            $this->LogFilePrefix = $param["LogFilePrefix"];
        }
    }
}
