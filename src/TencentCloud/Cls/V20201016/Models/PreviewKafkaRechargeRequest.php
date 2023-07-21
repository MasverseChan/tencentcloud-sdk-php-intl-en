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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewKafkaRecharge request structure.
 *
 * @method integer getPreviewType() Obtain Preview type. Valid values: 1 (source data preview) and 2 (result preview).
 * @method void setPreviewType(integer $PreviewType) Set Preview type. Valid values: 1 (source data preview) and 2 (result preview).
 * @method integer getKafkaType() Obtain Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka)
 * @method void setKafkaType(integer $KafkaType) Set Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka)
 * @method string getUserKafkaTopics() Obtain List of Kafka topics to import data from. Separate multiple topics with commas (,).
 * @method void setUserKafkaTopics(string $UserKafkaTopics) Set List of Kafka topics to import data from. Separate multiple topics with commas (,).
 * @method integer getOffset() Obtain Position for data import. Valid values: -2 (earliest, default) and -1 (latest).
 * @method void setOffset(integer $Offset) Set Position for data import. Valid values: -2 (earliest, default) and -1 (latest).
 * @method string getKafkaInstance() Obtain CKafka instance ID, which is required when `KafkaType` is set to `0`
 * @method void setKafkaInstance(string $KafkaInstance) Set CKafka instance ID, which is required when `KafkaType` is set to `0`
 * @method string getServerAddr() Obtain Service address
 * @method void setServerAddr(string $ServerAddr) Set Service address
 * @method boolean getIsEncryptionAddr() Obtain Whether the service address uses an encrypted connection
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) Set Whether the service address uses an encrypted connection
 * @method KafkaProtocolInfo getProtocol() Obtain Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
 * @method void setProtocol(KafkaProtocolInfo $Protocol) Set Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
 * @method string getConsumerGroupName() Obtain Kafka consumer group name
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Kafka consumer group name
 * @method LogRechargeRuleInfo getLogRechargeRule() Obtain Log import rule
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) Set Log import rule
 */
class PreviewKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var integer Preview type. Valid values: 1 (source data preview) and 2 (result preview).
     */
    public $PreviewType;

    /**
     * @var integer Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka)
     */
    public $KafkaType;

    /**
     * @var string List of Kafka topics to import data from. Separate multiple topics with commas (,).
     */
    public $UserKafkaTopics;

    /**
     * @var integer Position for data import. Valid values: -2 (earliest, default) and -1 (latest).
     */
    public $Offset;

    /**
     * @var string CKafka instance ID, which is required when `KafkaType` is set to `0`
     */
    public $KafkaInstance;

    /**
     * @var string Service address
     */
    public $ServerAddr;

    /**
     * @var boolean Whether the service address uses an encrypted connection
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
     */
    public $Protocol;

    /**
     * @var string Kafka consumer group name
     */
    public $ConsumerGroupName;

    /**
     * @var LogRechargeRuleInfo Log import rule
     */
    public $LogRechargeRule;

    /**
     * @param integer $PreviewType Preview type. Valid values: 1 (source data preview) and 2 (result preview).
     * @param integer $KafkaType Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka)
     * @param string $UserKafkaTopics List of Kafka topics to import data from. Separate multiple topics with commas (,).
     * @param integer $Offset Position for data import. Valid values: -2 (earliest, default) and -1 (latest).
     * @param string $KafkaInstance CKafka instance ID, which is required when `KafkaType` is set to `0`
     * @param string $ServerAddr Service address
     * @param boolean $IsEncryptionAddr Whether the service address uses an encrypted connection
     * @param KafkaProtocolInfo $Protocol Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
     * @param string $ConsumerGroupName Kafka consumer group name
     * @param LogRechargeRuleInfo $LogRechargeRule Log import rule
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
        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("KafkaType",$param) and $param["KafkaType"] !== null) {
            $this->KafkaType = $param["KafkaType"];
        }

        if (array_key_exists("UserKafkaTopics",$param) and $param["UserKafkaTopics"] !== null) {
            $this->UserKafkaTopics = $param["UserKafkaTopics"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("KafkaInstance",$param) and $param["KafkaInstance"] !== null) {
            $this->KafkaInstance = $param["KafkaInstance"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("IsEncryptionAddr",$param) and $param["IsEncryptionAddr"] !== null) {
            $this->IsEncryptionAddr = $param["IsEncryptionAddr"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = new KafkaProtocolInfo();
            $this->Protocol->deserialize($param["Protocol"]);
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
        }
    }
}
