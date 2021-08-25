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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListListener response structure.
 *
 * @method array getLayer4Listeners() Obtain List of layer-4 forwarding listeners
 * @method void setLayer4Listeners(array $Layer4Listeners) Set List of layer-4 forwarding listeners
 * @method array getLayer7Listeners() Obtain List of layer-7 forwarding listeners
 * @method void setLayer7Listeners(array $Layer7Listeners) Set List of layer-7 forwarding listeners
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeListListenerResponse extends AbstractModel
{
    /**
     * @var array List of layer-4 forwarding listeners
     */
    public $Layer4Listeners;

    /**
     * @var array List of layer-7 forwarding listeners
     */
    public $Layer7Listeners;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Layer4Listeners List of layer-4 forwarding listeners
     * @param array $Layer7Listeners List of layer-7 forwarding listeners
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
        if (array_key_exists("Layer4Listeners",$param) and $param["Layer4Listeners"] !== null) {
            $this->Layer4Listeners = [];
            foreach ($param["Layer4Listeners"] as $key => $value){
                $obj = new Layer4Rule();
                $obj->deserialize($value);
                array_push($this->Layer4Listeners, $obj);
            }
        }

        if (array_key_exists("Layer7Listeners",$param) and $param["Layer7Listeners"] !== null) {
            $this->Layer7Listeners = [];
            foreach ($param["Layer7Listeners"] as $key => $value){
                $obj = new Layer7Rule();
                $obj->deserialize($value);
                array_push($this->Layer7Listeners, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}