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
 * ModifyEnvironmentAttributes request structure.
 *
 * @method string getEnvironmentId() Obtain Namespace name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace name.
 * @method integer getMsgTTL() Obtain TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds.
 * @method void setMsgTTL(integer $MsgTTL) Set TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds.
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method RetentionPolicy getRetentionPolicy() Obtain Message retention policy
 * @method void setRetentionPolicy(RetentionPolicy $RetentionPolicy) Set Message retention policy
 */
class ModifyEnvironmentAttributesRequest extends AbstractModel
{
    /**
     * @var string Namespace name.
     */
    public $EnvironmentId;

    /**
     * @var integer TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds.
     */
    public $MsgTTL;

    /**
     * @var string Remarks (up to 128 characters).
     */
    public $Remark;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var RetentionPolicy Message retention policy
     */
    public $RetentionPolicy;

    /**
     * @param string $EnvironmentId Namespace name.
     * @param integer $MsgTTL TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds.
     * @param string $Remark Remarks (up to 128 characters).
     * @param string $ClusterId Cluster ID
     * @param RetentionPolicy $RetentionPolicy Message retention policy
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RetentionPolicy",$param) and $param["RetentionPolicy"] !== null) {
            $this->RetentionPolicy = new RetentionPolicy();
            $this->RetentionPolicy->deserialize($param["RetentionPolicy"]);
        }
    }
}
