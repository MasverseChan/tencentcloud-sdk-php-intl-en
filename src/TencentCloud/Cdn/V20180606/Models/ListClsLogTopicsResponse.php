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
 * ListClsLogTopics response structure.
 *
 * @method LogSetInfo getLogset() Obtain Information of logsets in the Shanghai region
 * @method void setLogset(LogSetInfo $Logset) Set Information of logsets in the Shanghai region
 * @method array getTopics() Obtain Information of log topics in the Shanghai region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTopics(array $Topics) Set Information of log topics in the Shanghai region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getExtraLogset() Obtain Information on logsets in regions except Shanghai
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setExtraLogset(array $ExtraLogset) Set Information on logsets in regions except Shanghai
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListClsLogTopicsResponse extends AbstractModel
{
    /**
     * @var LogSetInfo Information of logsets in the Shanghai region
     */
    public $Logset;

    /**
     * @var array Information of log topics in the Shanghai region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Topics;

    /**
     * @var array Information on logsets in regions except Shanghai
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExtraLogset;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param LogSetInfo $Logset Information of logsets in the Shanghai region
     * @param array $Topics Information of log topics in the Shanghai region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $ExtraLogset Information on logsets in regions except Shanghai
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Logset",$param) and $param["Logset"] !== null) {
            $this->Logset = new LogSetInfo();
            $this->Logset->deserialize($param["Logset"]);
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new TopicInfo();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("ExtraLogset",$param) and $param["ExtraLogset"] !== null) {
            $this->ExtraLogset = [];
            foreach ($param["ExtraLogset"] as $key => $value){
                $obj = new ExtraLogset();
                $obj->deserialize($value);
                array_push($this->ExtraLogset, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
