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
 * The client IP header configuration
 *
 * @method string getSwitch() Obtain Whether to enable the configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable the configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method string getHeaderName() Obtain The name of the HTTP header that contains the client IP, which is used for forwarding.
If this field is not specified, the default value `X-Forwarded-IP` will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeaderName(string $HeaderName) Set The name of the HTTP header that contains the client IP, which is used for forwarding.
If this field is not specified, the default value `X-Forwarded-IP` will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClientIpHeader extends AbstractModel
{
    /**
     * @var string Whether to enable the configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var string The name of the HTTP header that contains the client IP, which is used for forwarding.
If this field is not specified, the default value `X-Forwarded-IP` will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HeaderName;

    /**
     * @param string $Switch Whether to enable the configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param string $HeaderName The name of the HTTP header that contains the client IP, which is used for forwarding.
If this field is not specified, the default value `X-Forwarded-IP` will be used.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }
    }
}