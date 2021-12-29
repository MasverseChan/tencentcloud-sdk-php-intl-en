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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQNamespace request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespaceId() Obtain Namespace name, which can contain 3–64 letters, digits, hyphens, and underscores
 * @method void setNamespaceId(string $NamespaceId) Set Namespace name, which can contain 3–64 letters, digits, hyphens, and underscores
 * @method integer getTtl() Obtain Retention time of unconsumed messages in milliseconds. Value range: 60 seconds–15 days
 * @method void setTtl(integer $Ttl) Set Retention time of unconsumed messages in milliseconds. Value range: 60 seconds–15 days
 * @method integer getRetentionTime() Obtain Retention time of persisted messages in milliseconds
 * @method void setRetentionTime(integer $RetentionTime) Set Retention time of persisted messages in milliseconds
 * @method string getRemark() Obtain Remarks (up to 128 characters)
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters)
 */
class CreateRocketMQNamespaceRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace name, which can contain 3–64 letters, digits, hyphens, and underscores
     */
    public $NamespaceId;

    /**
     * @var integer Retention time of unconsumed messages in milliseconds. Value range: 60 seconds–15 days
     */
    public $Ttl;

    /**
     * @var integer Retention time of persisted messages in milliseconds
     */
    public $RetentionTime;

    /**
     * @var string Remarks (up to 128 characters)
     */
    public $Remark;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NamespaceId Namespace name, which can contain 3–64 letters, digits, hyphens, and underscores
     * @param integer $Ttl Retention time of unconsumed messages in milliseconds. Value range: 60 seconds–15 days
     * @param integer $RetentionTime Retention time of persisted messages in milliseconds
     * @param string $Remark Remarks (up to 128 characters)
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("RetentionTime",$param) and $param["RetentionTime"] !== null) {
            $this->RetentionTime = $param["RetentionTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
