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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParamRecords request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://cloud.tencent.com/document/api/236/15872) to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://cloud.tencent.com/document/api/236/15872) to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 */
class DescribeInstanceParamRecordsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://cloud.tencent.com/document/api/236/15872) to query the ID, whose value is the `InstanceId` value in output parameters.
     */
    public $InstanceId;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://cloud.tencent.com/document/api/236/15872) to query the ID, whose value is the `InstanceId` value in output parameters.
     * @param integer $Offset Pagination offset.
     * @param integer $Limit Number of entries per page.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}