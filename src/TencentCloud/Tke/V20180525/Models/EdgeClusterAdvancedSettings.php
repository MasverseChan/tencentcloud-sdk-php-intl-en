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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Edge cluster advanced settings
 *
 * @method EdgeClusterExtraArgs getExtraArgs() Obtain Custom parameters of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setExtraArgs(EdgeClusterExtraArgs $ExtraArgs) Set Custom parameters of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class EdgeClusterAdvancedSettings extends AbstractModel
{
    /**
     * @var EdgeClusterExtraArgs Custom parameters of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExtraArgs;

    /**
     * @param EdgeClusterExtraArgs $ExtraArgs Custom parameters of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new EdgeClusterExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }
    }
}
