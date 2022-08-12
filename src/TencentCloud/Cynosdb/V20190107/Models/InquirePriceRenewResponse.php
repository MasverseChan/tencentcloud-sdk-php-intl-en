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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceRenew response structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIds() Obtain Instance ID list
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list
 * @method array getPrices() Obtain Price of instance specification in array
 * @method void setPrices(array $Prices) Set Price of instance specification in array
 * @method integer getInstanceRealTotalPrice() Obtain Total renewal price of compute node
 * @method void setInstanceRealTotalPrice(integer $InstanceRealTotalPrice) Set Total renewal price of compute node
 * @method integer getStorageRealTotalPrice() Obtain Total renewal price of storage node
 * @method void setStorageRealTotalPrice(integer $StorageRealTotalPrice) Set Total renewal price of storage node
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class InquirePriceRenewResponse extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance ID list
     */
    public $InstanceIds;

    /**
     * @var array Price of instance specification in array
     */
    public $Prices;

    /**
     * @var integer Total renewal price of compute node
     */
    public $InstanceRealTotalPrice;

    /**
     * @var integer Total renewal price of storage node
     */
    public $StorageRealTotalPrice;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIds Instance ID list
     * @param array $Prices Price of instance specification in array
     * @param integer $InstanceRealTotalPrice Total renewal price of compute node
     * @param integer $StorageRealTotalPrice Total renewal price of storage node
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Prices",$param) and $param["Prices"] !== null) {
            $this->Prices = [];
            foreach ($param["Prices"] as $key => $value){
                $obj = new TradePrice();
                $obj->deserialize($value);
                array_push($this->Prices, $obj);
            }
        }

        if (array_key_exists("InstanceRealTotalPrice",$param) and $param["InstanceRealTotalPrice"] !== null) {
            $this->InstanceRealTotalPrice = $param["InstanceRealTotalPrice"];
        }

        if (array_key_exists("StorageRealTotalPrice",$param) and $param["StorageRealTotalPrice"] !== null) {
            $this->StorageRealTotalPrice = $param["StorageRealTotalPrice"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
