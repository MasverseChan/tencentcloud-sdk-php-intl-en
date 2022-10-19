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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateGrafanaNotificationChannel request structure.
 *
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getChannelName() Obtain Channel name
 * @method void setChannelName(string $ChannelName) Set Channel name
 * @method array getReceivers() Obtain Array of notification channel IDs
 * @method void setReceivers(array $Receivers) Set Array of notification channel IDs
 * @method array getExtraOrgIds() Obtain This parameter has been deprecated. Please use `OrganizationIds` instead.
 * @method void setExtraOrgIds(array $ExtraOrgIds) Set This parameter has been deprecated. Please use `OrganizationIds` instead.
 * @method array getOrganizationIds() Obtain Array of valid organization IDs
 * @method void setOrganizationIds(array $OrganizationIds) Set Array of valid organization IDs
 */
class UpdateGrafanaNotificationChannelRequest extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Channel name
     */
    public $ChannelName;

    /**
     * @var array Array of notification channel IDs
     */
    public $Receivers;

    /**
     * @var array This parameter has been deprecated. Please use `OrganizationIds` instead.
     */
    public $ExtraOrgIds;

    /**
     * @var array Array of valid organization IDs
     */
    public $OrganizationIds;

    /**
     * @param string $ChannelId Channel ID
     * @param string $InstanceId Instance ID.
     * @param string $ChannelName Channel name
     * @param array $Receivers Array of notification channel IDs
     * @param array $ExtraOrgIds This parameter has been deprecated. Please use `OrganizationIds` instead.
     * @param array $OrganizationIds Array of valid organization IDs
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("ExtraOrgIds",$param) and $param["ExtraOrgIds"] !== null) {
            $this->ExtraOrgIds = $param["ExtraOrgIds"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
