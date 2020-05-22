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
 * Cluster information struct
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getClusterDescription() Obtain Cluster description
 * @method void setClusterDescription(string $ClusterDescription) Set Cluster description
 * @method string getClusterVersion() Obtain Cluster version. The default value is 1.10.5.
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version. The default value is 1.10.5.
 * @method string getClusterOs() Obtain Cluster operating system. centOS 7.2x86_64 or ubuntu 16.04.1 LTSx86_64. Default value: ubuntu 16.04.1 LTSx86_64
 * @method void setClusterOs(string $ClusterOs) Set Cluster operating system. centOS 7.2x86_64 or ubuntu 16.04.1 LTSx86_64. Default value: ubuntu 16.04.1 LTSx86_64
 * @method string getClusterType() Obtain Cluster type. Managed cluster: MANAGED_CLUSTER; Self-deployed cluster: INDEPENDENT_CLUSTER.
 * @method void setClusterType(string $ClusterType) Set Cluster type. Managed cluster: MANAGED_CLUSTER; Self-deployed cluster: INDEPENDENT_CLUSTER.
 * @method ClusterNetworkSettings getClusterNetworkSettings() Obtain Cluster network-related parameters
 * @method void setClusterNetworkSettings(ClusterNetworkSettings $ClusterNetworkSettings) Set Cluster network-related parameters
 * @method integer getClusterNodeNum() Obtain Current number of nodes in the cluster
 * @method void setClusterNodeNum(integer $ClusterNodeNum) Set Current number of nodes in the cluster
 * @method integer getProjectId() Obtain ID of the project to which the cluster belongs
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the cluster belongs
 * @method array getTagSpecification() Obtain 
 * @method void setTagSpecification(array $TagSpecification) Set 
 * @method string getClusterStatus() Obtain 
 * @method void setClusterStatus(string $ClusterStatus) Set 
 * @method string getProperty() Obtain 
 * @method void setProperty(string $Property) Set 
 * @method integer getClusterMaterNodeNum() Obtain Number of master nodes currently in the cluster
 * @method void setClusterMaterNodeNum(integer $ClusterMaterNodeNum) Set Number of master nodes currently in the cluster
 * @method string getImageId() Obtain ID of the image used by the cluster
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setImageId(string $ImageId) Set ID of the image used by the cluster
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getOsCustomizeType() Obtain OsCustomizeType
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setOsCustomizeType(string $OsCustomizeType) Set OsCustomizeType
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getContainerRuntime() Obtain Runtime environment of the cluster. Values can be `docker` or `containerd`.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setContainerRuntime(string $ContainerRuntime) Set Runtime environment of the cluster. Values can be `docker` or `containerd`.
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getCreatedTime() Obtain Creation time
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
Note: this field may return null, indicating that no valid value is obtained.
 */
class Cluster extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster description
     */
    public $ClusterDescription;

    /**
     * @var string Cluster version. The default value is 1.10.5.
     */
    public $ClusterVersion;

    /**
     * @var string Cluster operating system. centOS 7.2x86_64 or ubuntu 16.04.1 LTSx86_64. Default value: ubuntu 16.04.1 LTSx86_64
     */
    public $ClusterOs;

    /**
     * @var string Cluster type. Managed cluster: MANAGED_CLUSTER; Self-deployed cluster: INDEPENDENT_CLUSTER.
     */
    public $ClusterType;

    /**
     * @var ClusterNetworkSettings Cluster network-related parameters
     */
    public $ClusterNetworkSettings;

    /**
     * @var integer Current number of nodes in the cluster
     */
    public $ClusterNodeNum;

    /**
     * @var integer ID of the project to which the cluster belongs
     */
    public $ProjectId;

    /**
     * @var array 
     */
    public $TagSpecification;

    /**
     * @var string 
     */
    public $ClusterStatus;

    /**
     * @var string 
     */
    public $Property;

    /**
     * @var integer Number of master nodes currently in the cluster
     */
    public $ClusterMaterNodeNum;

    /**
     * @var string ID of the image used by the cluster
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $ImageId;

    /**
     * @var string OsCustomizeType
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $OsCustomizeType;

    /**
     * @var string Runtime environment of the cluster. Values can be `docker` or `containerd`.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $ContainerRuntime;

    /**
     * @var string Creation time
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $CreatedTime;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $ClusterDescription Cluster description
     * @param string $ClusterVersion Cluster version. The default value is 1.10.5.
     * @param string $ClusterOs Cluster operating system. centOS 7.2x86_64 or ubuntu 16.04.1 LTSx86_64. Default value: ubuntu 16.04.1 LTSx86_64
     * @param string $ClusterType Cluster type. Managed cluster: MANAGED_CLUSTER; Self-deployed cluster: INDEPENDENT_CLUSTER.
     * @param ClusterNetworkSettings $ClusterNetworkSettings Cluster network-related parameters
     * @param integer $ClusterNodeNum Current number of nodes in the cluster
     * @param integer $ProjectId ID of the project to which the cluster belongs
     * @param array $TagSpecification 
     * @param string $ClusterStatus 
     * @param string $Property 
     * @param integer $ClusterMaterNodeNum Number of master nodes currently in the cluster
     * @param string $ImageId ID of the image used by the cluster
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $OsCustomizeType OsCustomizeType
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $ContainerRuntime Runtime environment of the cluster. Values can be `docker` or `containerd`.
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $CreatedTime Creation time
Note: this field may return null, indicating that no valid value is obtained.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterNetworkSettings",$param) and $param["ClusterNetworkSettings"] !== null) {
            $this->ClusterNetworkSettings = new ClusterNetworkSettings();
            $this->ClusterNetworkSettings->deserialize($param["ClusterNetworkSettings"]);
        }

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }

        if (array_key_exists("ClusterMaterNodeNum",$param) and $param["ClusterMaterNodeNum"] !== null) {
            $this->ClusterMaterNodeNum = $param["ClusterMaterNodeNum"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}