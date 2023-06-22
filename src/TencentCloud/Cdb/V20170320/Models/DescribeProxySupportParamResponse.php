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
 * DescribeProxySupportParam response structure.
 *
 * @method string getProxyVersion() Obtain The supported maximum proxy version Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyVersion(string $ProxyVersion) Set The supported maximum proxy version Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportPool() Obtain Whether to support the connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportPool(boolean $SupportPool) Set Whether to support the connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPoolMin() Obtain Minimum connections in the connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPoolMin(integer $PoolMin) Set Minimum connections in the connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPoolMax() Obtain Maximum connections in the connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPoolMax(integer $PoolMax) Set Maximum connections in the connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportTransSplit() Obtain Whether to support transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportTransSplit(boolean $SupportTransSplit) Set Whether to support transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSupportPoolMinVersion() Obtain Minimum proxy version supporting connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportPoolMinVersion(string $SupportPoolMinVersion) Set Minimum proxy version supporting connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSupportTransSplitMinVersion() Obtain Minimum proxy version supporting transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportTransSplitMinVersion(string $SupportTransSplitMinVersion) Set Minimum proxy version supporting transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportReadOnly() Obtain Whether read-only mode is supported Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportReadOnly(boolean $SupportReadOnly) Set Whether read-only mode is supported Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeProxySupportParamResponse extends AbstractModel
{
    /**
     * @var string The supported maximum proxy version Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyVersion;

    /**
     * @var boolean Whether to support the connection pool Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportPool;

    /**
     * @var integer Minimum connections in the connection pool Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PoolMin;

    /**
     * @var integer Maximum connections in the connection pool Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PoolMax;

    /**
     * @var boolean Whether to support transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportTransSplit;

    /**
     * @var string Minimum proxy version supporting connection pool Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportPoolMinVersion;

    /**
     * @var string Minimum proxy version supporting transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportTransSplitMinVersion;

    /**
     * @var boolean Whether read-only mode is supported Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportReadOnly;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ProxyVersion The supported maximum proxy version Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportPool Whether to support the connection pool Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PoolMin Minimum connections in the connection pool Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PoolMax Maximum connections in the connection pool Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportTransSplit Whether to support transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SupportPoolMinVersion Minimum proxy version supporting connection pool Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SupportTransSplitMinVersion Minimum proxy version supporting transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportReadOnly Whether read-only mode is supported Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("SupportPool",$param) and $param["SupportPool"] !== null) {
            $this->SupportPool = $param["SupportPool"];
        }

        if (array_key_exists("PoolMin",$param) and $param["PoolMin"] !== null) {
            $this->PoolMin = $param["PoolMin"];
        }

        if (array_key_exists("PoolMax",$param) and $param["PoolMax"] !== null) {
            $this->PoolMax = $param["PoolMax"];
        }

        if (array_key_exists("SupportTransSplit",$param) and $param["SupportTransSplit"] !== null) {
            $this->SupportTransSplit = $param["SupportTransSplit"];
        }

        if (array_key_exists("SupportPoolMinVersion",$param) and $param["SupportPoolMinVersion"] !== null) {
            $this->SupportPoolMinVersion = $param["SupportPoolMinVersion"];
        }

        if (array_key_exists("SupportTransSplitMinVersion",$param) and $param["SupportTransSplitMinVersion"] !== null) {
            $this->SupportTransSplitMinVersion = $param["SupportTransSplitMinVersion"];
        }

        if (array_key_exists("SupportReadOnly",$param) and $param["SupportReadOnly"] !== null) {
            $this->SupportReadOnly = $param["SupportReadOnly"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
