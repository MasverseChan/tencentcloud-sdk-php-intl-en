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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchLogTopicTask request structure.
 *
 * @method string getTopicId() Obtain Topic ID of the shipping task.
 * @method void setTopicId(string $TopicId) Set Topic ID of the shipping task.
 * @method boolean getIsOpen() Obtain Whether to enable the shipping task. Values:
<li>`true`: Enable the shipping task;</li>
<li>`false`: Disable the shipping task.</li>
 * @method void setIsOpen(boolean $IsOpen) Set Whether to enable the shipping task. Values:
<li>`true`: Enable the shipping task;</li>
<li>`false`: Disable the shipping task.</li>
 */
class SwitchLogTopicTaskRequest extends AbstractModel
{
    /**
     * @var string Topic ID of the shipping task.
     */
    public $TopicId;

    /**
     * @var boolean Whether to enable the shipping task. Values:
<li>`true`: Enable the shipping task;</li>
<li>`false`: Disable the shipping task.</li>
     */
    public $IsOpen;

    /**
     * @param string $TopicId Topic ID of the shipping task.
     * @param boolean $IsOpen Whether to enable the shipping task. Values:
<li>`true`: Enable the shipping task;</li>
<li>`false`: Disable the shipping task.</li>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }
    }
}