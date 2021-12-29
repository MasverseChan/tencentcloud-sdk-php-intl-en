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
 * PublishCmqMsg request structure.
 *
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getMsgContent() Obtain Message content
 * @method void setMsgContent(string $MsgContent) Set Message content
 * @method array getMsgTag() Obtain Message tag
 * @method void setMsgTag(array $MsgTag) Set Message tag
 */
class PublishCmqMsgRequest extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Message content
     */
    public $MsgContent;

    /**
     * @var array Message tag
     */
    public $MsgTag;

    /**
     * @param string $TopicName Topic name
     * @param string $MsgContent Message content
     * @param array $MsgTag Message tag
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MsgContent",$param) and $param["MsgContent"] !== null) {
            $this->MsgContent = $param["MsgContent"];
        }

        if (array_key_exists("MsgTag",$param) and $param["MsgTag"] !== null) {
            $this->MsgTag = $param["MsgTag"];
        }
    }
}
