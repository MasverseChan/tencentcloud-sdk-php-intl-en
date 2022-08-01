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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListClsTopicDomains response structure.
 *
 * @method integer getAppId() Obtain Developer ID
 * @method void setAppId(integer $AppId) Set Developer ID
 * @method string getChannel() Obtain Channel
 * @method void setChannel(string $Channel) Set Channel
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method array getDomainAreaConfigs() Obtain Domain name region configuration, which may contain deleted domain names. If this is to be used in `ManageClsTopicDomains` API, you need to exclude deleted domain names by using the `ListCdnDomains` API.
 * @method void setDomainAreaConfigs(array $DomainAreaConfigs) Set Domain name region configuration, which may contain deleted domain names. If this is to be used in `ManageClsTopicDomains` API, you need to exclude deleted domain names by using the `ListCdnDomains` API.
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method string getUpdateTime() Obtain Last modified time of log topic
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of log topic
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListClsTopicDomainsResponse extends AbstractModel
{
    /**
     * @var integer Developer ID
     */
    public $AppId;

    /**
     * @var string Channel
     */
    public $Channel;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var array Domain name region configuration, which may contain deleted domain names. If this is to be used in `ManageClsTopicDomains` API, you need to exclude deleted domain names by using the `ListCdnDomains` API.
     */
    public $DomainAreaConfigs;

    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var string Last modified time of log topic
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AppId Developer ID
     * @param string $Channel Channel
     * @param string $LogsetId Logset ID
     * @param string $TopicId Log topic ID
     * @param array $DomainAreaConfigs Domain name region configuration, which may contain deleted domain names. If this is to be used in `ManageClsTopicDomains` API, you need to exclude deleted domain names by using the `ListCdnDomains` API.
     * @param string $TopicName Log topic name
     * @param string $UpdateTime Last modified time of log topic
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("DomainAreaConfigs",$param) and $param["DomainAreaConfigs"] !== null) {
            $this->DomainAreaConfigs = [];
            foreach ($param["DomainAreaConfigs"] as $key => $value){
                $obj = new DomainAreaConfig();
                $obj->deserialize($value);
                array_push($this->DomainAreaConfigs, $obj);
            }
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
