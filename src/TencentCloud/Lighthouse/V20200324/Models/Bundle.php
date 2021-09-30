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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Package information.
 *
 * @method string getBundleId() Obtain Package ID.
 * @method void setBundleId(string $BundleId) Set Package ID.
 * @method integer getMemory() Obtain Memory size in GB.
 * @method void setMemory(integer $Memory) Set Memory size in GB.
 * @method string getSystemDiskType() Obtain System disk type.
Valid values: 
<li> LOCAL_BASIC: local disk</li><li> LOCAL_SSD: local SSD disk</li><li> CLOUD_BASIC: HDD cloud disk</li><li> CLOUD_SSD: SSD cloud disk</li><li> CLOUD_PREMIUM: Premium Cloud Storage</li>
 * @method void setSystemDiskType(string $SystemDiskType) Set System disk type.
Valid values: 
<li> LOCAL_BASIC: local disk</li><li> LOCAL_SSD: local SSD disk</li><li> CLOUD_BASIC: HDD cloud disk</li><li> CLOUD_SSD: SSD cloud disk</li><li> CLOUD_PREMIUM: Premium Cloud Storage</li>
 * @method integer getSystemDiskSize() Obtain System disk size.
 * @method void setSystemDiskSize(integer $SystemDiskSize) Set System disk size.
 * @method integer getMonthlyTraffic() Obtain Monthly network traffic in Gb.
 * @method void setMonthlyTraffic(integer $MonthlyTraffic) Set Monthly network traffic in Gb.
 * @method boolean getSupportLinuxUnixPlatform() Obtain Whether Linux/Unix is supported.
 * @method void setSupportLinuxUnixPlatform(boolean $SupportLinuxUnixPlatform) Set Whether Linux/Unix is supported.
 * @method boolean getSupportWindowsPlatform() Obtain Whether Windows is supported.
 * @method void setSupportWindowsPlatform(boolean $SupportWindowsPlatform) Set Whether Windows is supported.
 * @method Price getPrice() Obtain Current package unit price information.
 * @method void setPrice(Price $Price) Set Current package unit price information.
 * @method integer getCPU() Obtain Number of CPU cores.
 * @method void setCPU(integer $CPU) Set Number of CPU cores.
 * @method integer getInternetMaxBandwidthOut() Obtain Peak bandwidth in Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Peak bandwidth in Mbps.
 * @method string getInternetChargeType() Obtain Network billing mode.
 * @method void setInternetChargeType(string $InternetChargeType) Set Network billing mode.
 * @method string getBundleSalesState() Obtain Package sale status. Valid values: AVAILABLE, SOLD_OUT
 * @method void setBundleSalesState(string $BundleSalesState) Set Package sale status. Valid values: AVAILABLE, SOLD_OUT
 * @method string getBundleType() Obtain Package type.
Valid values:
<li> GENERAL_BUNDLE: general</li><li> STORAGE_BUNDLE: Storage</li>
 * @method void setBundleType(string $BundleType) Set Package type.
Valid values:
<li> GENERAL_BUNDLE: general</li><li> STORAGE_BUNDLE: Storage</li>
 * @method string getBundleDisplayLabel() Obtain Package tag.
Valid values:
"ACTIVITY": promotional package
"NORMAL": regular package
"CAREFREE": carefree package
 * @method void setBundleDisplayLabel(string $BundleDisplayLabel) Set Package tag.
Valid values:
"ACTIVITY": promotional package
"NORMAL": regular package
"CAREFREE": carefree package
 */
class Bundle extends AbstractModel
{
    /**
     * @var string Package ID.
     */
    public $BundleId;

    /**
     * @var integer Memory size in GB.
     */
    public $Memory;

    /**
     * @var string System disk type.
Valid values: 
<li> LOCAL_BASIC: local disk</li><li> LOCAL_SSD: local SSD disk</li><li> CLOUD_BASIC: HDD cloud disk</li><li> CLOUD_SSD: SSD cloud disk</li><li> CLOUD_PREMIUM: Premium Cloud Storage</li>
     */
    public $SystemDiskType;

    /**
     * @var integer System disk size.
     */
    public $SystemDiskSize;

    /**
     * @var integer Monthly network traffic in Gb.
     */
    public $MonthlyTraffic;

    /**
     * @var boolean Whether Linux/Unix is supported.
     */
    public $SupportLinuxUnixPlatform;

    /**
     * @var boolean Whether Windows is supported.
     */
    public $SupportWindowsPlatform;

    /**
     * @var Price Current package unit price information.
     */
    public $Price;

    /**
     * @var integer Number of CPU cores.
     */
    public $CPU;

    /**
     * @var integer Peak bandwidth in Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Network billing mode.
     */
    public $InternetChargeType;

    /**
     * @var string Package sale status. Valid values: AVAILABLE, SOLD_OUT
     */
    public $BundleSalesState;

    /**
     * @var string Package type.
Valid values:
<li> GENERAL_BUNDLE: general</li><li> STORAGE_BUNDLE: Storage</li>
     */
    public $BundleType;

    /**
     * @var string Package tag.
Valid values:
"ACTIVITY": promotional package
"NORMAL": regular package
"CAREFREE": carefree package
     */
    public $BundleDisplayLabel;

    /**
     * @param string $BundleId Package ID.
     * @param integer $Memory Memory size in GB.
     * @param string $SystemDiskType System disk type.
Valid values: 
<li> LOCAL_BASIC: local disk</li><li> LOCAL_SSD: local SSD disk</li><li> CLOUD_BASIC: HDD cloud disk</li><li> CLOUD_SSD: SSD cloud disk</li><li> CLOUD_PREMIUM: Premium Cloud Storage</li>
     * @param integer $SystemDiskSize System disk size.
     * @param integer $MonthlyTraffic Monthly network traffic in Gb.
     * @param boolean $SupportLinuxUnixPlatform Whether Linux/Unix is supported.
     * @param boolean $SupportWindowsPlatform Whether Windows is supported.
     * @param Price $Price Current package unit price information.
     * @param integer $CPU Number of CPU cores.
     * @param integer $InternetMaxBandwidthOut Peak bandwidth in Mbps.
     * @param string $InternetChargeType Network billing mode.
     * @param string $BundleSalesState Package sale status. Valid values: AVAILABLE, SOLD_OUT
     * @param string $BundleType Package type.
Valid values:
<li> GENERAL_BUNDLE: general</li><li> STORAGE_BUNDLE: Storage</li>
     * @param string $BundleDisplayLabel Package tag.
Valid values:
"ACTIVITY": promotional package
"NORMAL": regular package
"CAREFREE": carefree package
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
        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("SystemDiskType",$param) and $param["SystemDiskType"] !== null) {
            $this->SystemDiskType = $param["SystemDiskType"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("MonthlyTraffic",$param) and $param["MonthlyTraffic"] !== null) {
            $this->MonthlyTraffic = $param["MonthlyTraffic"];
        }

        if (array_key_exists("SupportLinuxUnixPlatform",$param) and $param["SupportLinuxUnixPlatform"] !== null) {
            $this->SupportLinuxUnixPlatform = $param["SupportLinuxUnixPlatform"];
        }

        if (array_key_exists("SupportWindowsPlatform",$param) and $param["SupportWindowsPlatform"] !== null) {
            $this->SupportWindowsPlatform = $param["SupportWindowsPlatform"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Price();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("BundleSalesState",$param) and $param["BundleSalesState"] !== null) {
            $this->BundleSalesState = $param["BundleSalesState"];
        }

        if (array_key_exists("BundleType",$param) and $param["BundleType"] !== null) {
            $this->BundleType = $param["BundleType"];
        }

        if (array_key_exists("BundleDisplayLabel",$param) and $param["BundleDisplayLabel"] !== null) {
            $this->BundleDisplayLabel = $param["BundleDisplayLabel"];
        }
    }
}
