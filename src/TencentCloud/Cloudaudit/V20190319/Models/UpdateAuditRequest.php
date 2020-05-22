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
 * Request parameter structure of UpdateAudit
 *
 * @method string getAuditName() Obtain Tracking set name
 * @method void setAuditName(string $AuditName) Set Tracking set name
 * @method string getCmqQueueName() Obtain Queue name, which must begin with a letter and can contain up to 64 letters, digits, and dashes (-). This field is required if the value of IsEnableCmqNotify is 1. If a queue is not newly created, CloudAudit will not verify whether it actually exists. Please enter the name with caution so as to avoid log delivery failure and consequent data loss.
 * @method void setCmqQueueName(string $CmqQueueName) Set Queue name, which must begin with a letter and can contain up to 64 letters, digits, and dashes (-). This field is required if the value of IsEnableCmqNotify is 1. If a queue is not newly created, CloudAudit will not verify whether it actually exists. Please enter the name with caution so as to avoid log delivery failure and consequent data loss.
 * @method string getCmqRegion() Obtain Region where the queue is located. Supported CMQ regions can be queried using the ListCmqEnableRegion API. This field is required if the value of IsEnableCmqNotify is 1.
 * @method void setCmqRegion(string $CmqRegion) Set Region where the queue is located. Supported CMQ regions can be queried using the ListCmqEnableRegion API. This field is required if the value of IsEnableCmqNotify is 1.
 * @method string getCosBucketName() Obtain User-defined COS bucket name, which can only contain 1-40 lowercase letters (a-z), digits (0-9), and dashes (-) and cannot begin or end with "-". If a bucket is not newly created, CloudAudit will not verify whether it actually exists. Please enter the name with caution so as to avoid log delivery failure and consequent data loss.
 * @method void setCosBucketName(string $CosBucketName) Set User-defined COS bucket name, which can only contain 1-40 lowercase letters (a-z), digits (0-9), and dashes (-) and cannot begin or end with "-". If a bucket is not newly created, CloudAudit will not verify whether it actually exists. Please enter the name with caution so as to avoid log delivery failure and consequent data loss.
 * @method string getCosRegion() Obtain COS region. Supported regions can be queried using the ListCosEnableRegion API.
 * @method void setCosRegion(string $CosRegion) Set COS region. Supported regions can be queried using the ListCosEnableRegion API.
 * @method integer getIsCreateNewBucket() Obtain Whether to create a COS bucket. 1: yes; 0: no.
 * @method void setIsCreateNewBucket(integer $IsCreateNewBucket) Set Whether to create a COS bucket. 1: yes; 0: no.
 * @method integer getIsCreateNewQueue() Obtain Whether to create a queue. 1: yes; 0: no. This field is required if the value of IsEnableCmqNotify is 1.
 * @method void setIsCreateNewQueue(integer $IsCreateNewQueue) Set Whether to create a queue. 1: yes; 0: no. This field is required if the value of IsEnableCmqNotify is 1.
 * @method integer getIsEnableCmqNotify() Obtain Whether to enable CMQ message notification. 1: yes; 0: no. Only CMQ queue service is currently supported. If CMQ message notification is enabled, CloudAudit will deliver your log contents to the designated queue in the specified region in real time.
 * @method void setIsEnableCmqNotify(integer $IsEnableCmqNotify) Set Whether to enable CMQ message notification. 1: yes; 0: no. Only CMQ queue service is currently supported. If CMQ message notification is enabled, CloudAudit will deliver your log contents to the designated queue in the specified region in real time.
 * @method string getLogFilePrefix() Obtain Prefix of a log file, which can only contain 3-40 ASCII letters (a-z; A-Z) and digits (0-9).
 * @method void setLogFilePrefix(string $LogFilePrefix) Set Prefix of a log file, which can only contain 3-40 ASCII letters (a-z; A-Z) and digits (0-9).
 * @method integer getReadWriteAttribute() Obtain Manages the read/write attribute of an event. Value range: 1 (read-only), 2 (write-only), 3 (read/write).
 * @method void setReadWriteAttribute(integer $ReadWriteAttribute) Set Manages the read/write attribute of an event. Value range: 1 (read-only), 2 (write-only), 3 (read/write).
 */
class UpdateAuditRequest extends AbstractModel
{
    /**
     * @var string Tracking set name
     */
    public $AuditName;

    /**
     * @var string Queue name, which must begin with a letter and can contain up to 64 letters, digits, and dashes (-). This field is required if the value of IsEnableCmqNotify is 1. If a queue is not newly created, CloudAudit will not verify whether it actually exists. Please enter the name with caution so as to avoid log delivery failure and consequent data loss.
     */
    public $CmqQueueName;

    /**
     * @var string Region where the queue is located. Supported CMQ regions can be queried using the ListCmqEnableRegion API. This field is required if the value of IsEnableCmqNotify is 1.
     */
    public $CmqRegion;

    /**
     * @var string User-defined COS bucket name, which can only contain 1-40 lowercase letters (a-z), digits (0-9), and dashes (-) and cannot begin or end with "-". If a bucket is not newly created, CloudAudit will not verify whether it actually exists. Please enter the name with caution so as to avoid log delivery failure and consequent data loss.
     */
    public $CosBucketName;

    /**
     * @var string COS region. Supported regions can be queried using the ListCosEnableRegion API.
     */
    public $CosRegion;

    /**
     * @var integer Whether to create a COS bucket. 1: yes; 0: no.
     */
    public $IsCreateNewBucket;

    /**
     * @var integer Whether to create a queue. 1: yes; 0: no. This field is required if the value of IsEnableCmqNotify is 1.
     */
    public $IsCreateNewQueue;

    /**
     * @var integer Whether to enable CMQ message notification. 1: yes; 0: no. Only CMQ queue service is currently supported. If CMQ message notification is enabled, CloudAudit will deliver your log contents to the designated queue in the specified region in real time.
     */
    public $IsEnableCmqNotify;

    /**
     * @var string Prefix of a log file, which can only contain 3-40 ASCII letters (a-z; A-Z) and digits (0-9).
     */
    public $LogFilePrefix;

    /**
     * @var integer Manages the read/write attribute of an event. Value range: 1 (read-only), 2 (write-only), 3 (read/write).
     */
    public $ReadWriteAttribute;

    /**
     * @param string $AuditName Tracking set name
     * @param string $CmqQueueName Queue name, which must begin with a letter and can contain up to 64 letters, digits, and dashes (-). This field is required if the value of IsEnableCmqNotify is 1. If a queue is not newly created, CloudAudit will not verify whether it actually exists. Please enter the name with caution so as to avoid log delivery failure and consequent data loss.
     * @param string $CmqRegion Region where the queue is located. Supported CMQ regions can be queried using the ListCmqEnableRegion API. This field is required if the value of IsEnableCmqNotify is 1.
     * @param string $CosBucketName User-defined COS bucket name, which can only contain 1-40 lowercase letters (a-z), digits (0-9), and dashes (-) and cannot begin or end with "-". If a bucket is not newly created, CloudAudit will not verify whether it actually exists. Please enter the name with caution so as to avoid log delivery failure and consequent data loss.
     * @param string $CosRegion COS region. Supported regions can be queried using the ListCosEnableRegion API.
     * @param integer $IsCreateNewBucket Whether to create a COS bucket. 1: yes; 0: no.
     * @param integer $IsCreateNewQueue Whether to create a queue. 1: yes; 0: no. This field is required if the value of IsEnableCmqNotify is 1.
     * @param integer $IsEnableCmqNotify Whether to enable CMQ message notification. 1: yes; 0: no. Only CMQ queue service is currently supported. If CMQ message notification is enabled, CloudAudit will deliver your log contents to the designated queue in the specified region in real time.
     * @param string $LogFilePrefix Prefix of a log file, which can only contain 3-40 ASCII letters (a-z; A-Z) and digits (0-9).
     * @param integer $ReadWriteAttribute Manages the read/write attribute of an event. Value range: 1 (read-only), 2 (write-only), 3 (read/write).
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
        if (array_key_exists("AuditName",$param) and $param["AuditName"] !== null) {
            $this->AuditName = $param["AuditName"];
        }

        if (array_key_exists("CmqQueueName",$param) and $param["CmqQueueName"] !== null) {
            $this->CmqQueueName = $param["CmqQueueName"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("IsCreateNewBucket",$param) and $param["IsCreateNewBucket"] !== null) {
            $this->IsCreateNewBucket = $param["IsCreateNewBucket"];
        }

        if (array_key_exists("IsCreateNewQueue",$param) and $param["IsCreateNewQueue"] !== null) {
            $this->IsCreateNewQueue = $param["IsCreateNewQueue"];
        }

        if (array_key_exists("IsEnableCmqNotify",$param) and $param["IsEnableCmqNotify"] !== null) {
            $this->IsEnableCmqNotify = $param["IsEnableCmqNotify"];
        }

        if (array_key_exists("LogFilePrefix",$param) and $param["LogFilePrefix"] !== null) {
            $this->LogFilePrefix = $param["LogFilePrefix"];
        }

        if (array_key_exists("ReadWriteAttribute",$param) and $param["ReadWriteAttribute"] !== null) {
            $this->ReadWriteAttribute = $param["ReadWriteAttribute"];
        }
    }
}