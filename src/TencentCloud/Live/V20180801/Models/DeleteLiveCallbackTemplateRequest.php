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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLiveCallbackTemplate request structure.
 *
 * @method integer getTemplateId() Obtain Template ID.
1. Get the template ID in the returned value of the [CreateLiveCallbackTemplate](/document/product/267/32637) API call.
2. You can query the list of created templates through the [DescribeLiveCallbackTemplates](/document/product/267/32632) API.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
1. Get the template ID in the returned value of the [CreateLiveCallbackTemplate](/document/product/267/32637) API call.
2. You can query the list of created templates through the [DescribeLiveCallbackTemplates](/document/product/267/32632) API.
 */
class DeleteLiveCallbackTemplateRequest extends AbstractModel
{
    /**
     * @var integer Template ID.
1. Get the template ID in the returned value of the [CreateLiveCallbackTemplate](/document/product/267/32637) API call.
2. You can query the list of created templates through the [DescribeLiveCallbackTemplates](/document/product/267/32632) API.
     */
    public $TemplateId;

    /**
     * @param integer $TemplateId Template ID.
1. Get the template ID in the returned value of the [CreateLiveCallbackTemplate](/document/product/267/32637) API call.
2. You can query the list of created templates through the [DescribeLiveCallbackTemplates](/document/product/267/32632) API.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}