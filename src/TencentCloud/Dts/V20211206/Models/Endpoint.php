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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the source and target databases in data sync
 *
 * @method string getRegion() Obtain Region name, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region name, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbKernel() Obtain Database kernel type, which is used to distinguish between different kernels in TDSQL. Valid values: `percona`, `mariadb`, `mysql`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbKernel(string $DbKernel) Set Database kernel type, which is used to distinguish between different kernels in TDSQL. Valid values: `percona`, `mariadb`, `mysql`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Database instance ID in the format of `cdb-powiqx8q`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Database instance ID in the format of `cdb-powiqx8q`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIp() Obtain Instance IP address, which is required if the access type is not `cdb`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIp(string $Ip) Set Instance IP address, which is required if the access type is not `cdb`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Instance port, which is required if the access type is not `cdb`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Instance port, which is required if the access type is not `cdb`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUser() Obtain Username, which is required for an instance authenticated by username and password.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUser(string $User) Set Username, which is required for an instance authenticated by username and password.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain Password, which is required for an instance authenticated by username and password.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set Password, which is required for an instance authenticated by username and password.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbName() Obtain Database name, which is required if the database type is `cdwpg`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Database name, which is required if the database type is `cdwpg`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID in the format of `vpc-92jblxto`, which is required if the access type is `vpc`, `dcg`, or `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of `vpc-92jblxto`, which is required if the access type is `vpc`, `dcg`, or `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain ID of the subnet in the VPC in the format of `subnet-3paxmkdz`, which is required if the access type is `vpc`, `dcg`, or `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set ID of the subnet in the VPC in the format of `subnet-3paxmkdz`, which is required if the access type is `vpc`, `dcg`, or `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCvmInstanceId() Obtain Short CVM instance ID in the format of `ins-olgl39y8`, which is required if the access type is `cvm`. It is the same as the instance ID displayed in the CVM console.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvmInstanceId(string $CvmInstanceId) Set Short CVM instance ID in the format of `ins-olgl39y8`, which is required if the access type is `cvm`. It is the same as the instance ID displayed in the CVM console.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqDcgId() Obtain Direct Connect gateway ID in the format of `dcg-0rxtqqxb`, which is required if the access type is `dcg`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqDcgId(string $UniqDcgId) Set Direct Connect gateway ID in the format of `dcg-0rxtqqxb`, which is required if the access type is `dcg`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqVpnGwId() Obtain VPN gateway ID in the format of `vpngw-9ghexg7q`, which is required if the access type is `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqVpnGwId(string $UniqVpnGwId) Set VPN gateway ID in the format of `vpngw-9ghexg7q`, which is required if the access type is `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCcnId() Obtain CCN instance ID in the format of `ccn-afp6kltc`, which is required if the access type is `ccn`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCcnId(string $CcnId) Set CCN instance ID in the format of `ccn-afp6kltc`, which is required if the access type is `ccn`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSupplier() Obtain Cloud vendor type. For Alibaba Cloud ApsaraDB for RDS instances, enter `aliyun`; otherwise, enter `others`. Default value: `others`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupplier(string $Supplier) Set Cloud vendor type. For Alibaba Cloud ApsaraDB for RDS instances, enter `aliyun`; otherwise, enter `others`. Default value: `others`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineVersion() Obtain Database version in the format of `5.6` or `5.7`, which takes effect only if the instance is an RDS instance. Default value: `5.6`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineVersion(string $EngineVersion) Set Database version in the format of `5.6` or `5.7`, which takes effect only if the instance is an RDS instance. Default value: `5.6`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccountMode() Obtain The account to which the resource belongs. Valid values: empty or `self` (the current account); `other` (another account).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountMode(string $AccountMode) Set The account to which the resource belongs. Valid values: empty or `self` (the current account); `other` (another account).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccount() Obtain Instance account, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccount(string $Account) Set Instance account, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccountRole() Obtain The role used for cross-account sync, which can contain [a-zA-Z0-9\-\_]+ and is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountRole(string $AccountRole) Set The role used for cross-account sync, which can contain [a-zA-Z0-9\-\_]+ and is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTmpSecretId() Obtain ID of the temporary key, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTmpSecretId(string $TmpSecretId) Set ID of the temporary key, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTmpSecretKey() Obtain Key of the temporary key, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTmpSecretKey(string $TmpSecretKey) Set Key of the temporary key, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTmpToken() Obtain Temporary token, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTmpToken(string $TmpToken) Set Temporary token, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Endpoint extends AbstractModel
{
    /**
     * @var string Region name, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Database kernel type, which is used to distinguish between different kernels in TDSQL. Valid values: `percona`, `mariadb`, `mysql`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbKernel;

    /**
     * @var string Database instance ID in the format of `cdb-powiqx8q`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Instance IP address, which is required if the access type is not `cdb`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ip;

    /**
     * @var integer Instance port, which is required if the access type is not `cdb`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Username, which is required for an instance authenticated by username and password.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $User;

    /**
     * @var string Password, which is required for an instance authenticated by username and password.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @var string Database name, which is required if the database type is `cdwpg`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var string VPC ID in the format of `vpc-92jblxto`, which is required if the access type is `vpc`, `dcg`, or `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string ID of the subnet in the VPC in the format of `subnet-3paxmkdz`, which is required if the access type is `vpc`, `dcg`, or `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Short CVM instance ID in the format of `ins-olgl39y8`, which is required if the access type is `cvm`. It is the same as the instance ID displayed in the CVM console.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvmInstanceId;

    /**
     * @var string Direct Connect gateway ID in the format of `dcg-0rxtqqxb`, which is required if the access type is `dcg`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqDcgId;

    /**
     * @var string VPN gateway ID in the format of `vpngw-9ghexg7q`, which is required if the access type is `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqVpnGwId;

    /**
     * @var string CCN instance ID in the format of `ccn-afp6kltc`, which is required if the access type is `ccn`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CcnId;

    /**
     * @var string Cloud vendor type. For Alibaba Cloud ApsaraDB for RDS instances, enter `aliyun`; otherwise, enter `others`. Default value: `others`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Supplier;

    /**
     * @var string Database version in the format of `5.6` or `5.7`, which takes effect only if the instance is an RDS instance. Default value: `5.6`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineVersion;

    /**
     * @var string The account to which the resource belongs. Valid values: empty or `self` (the current account); `other` (another account).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountMode;

    /**
     * @var string Instance account, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Account;

    /**
     * @var string The role used for cross-account sync, which can contain [a-zA-Z0-9\-\_]+ and is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountRole;

    /**
     * @var string ID of the temporary key, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TmpSecretId;

    /**
     * @var string Key of the temporary key, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TmpSecretKey;

    /**
     * @var string Temporary token, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TmpToken;

    /**
     * @param string $Region Region name, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbKernel Database kernel type, which is used to distinguish between different kernels in TDSQL. Valid values: `percona`, `mariadb`, `mysql`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Database instance ID in the format of `cdb-powiqx8q`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Ip Instance IP address, which is required if the access type is not `cdb`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Instance port, which is required if the access type is not `cdb`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $User Username, which is required for an instance authenticated by username and password.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Password Password, which is required for an instance authenticated by username and password.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbName Database name, which is required if the database type is `cdwpg`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID in the format of `vpc-92jblxto`, which is required if the access type is `vpc`, `dcg`, or `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId ID of the subnet in the VPC in the format of `subnet-3paxmkdz`, which is required if the access type is `vpc`, `dcg`, or `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CvmInstanceId Short CVM instance ID in the format of `ins-olgl39y8`, which is required if the access type is `cvm`. It is the same as the instance ID displayed in the CVM console.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqDcgId Direct Connect gateway ID in the format of `dcg-0rxtqqxb`, which is required if the access type is `dcg`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqVpnGwId VPN gateway ID in the format of `vpngw-9ghexg7q`, which is required if the access type is `vpncloud`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CcnId CCN instance ID in the format of `ccn-afp6kltc`, which is required if the access type is `ccn`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Supplier Cloud vendor type. For Alibaba Cloud ApsaraDB for RDS instances, enter `aliyun`; otherwise, enter `others`. Default value: `others`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineVersion Database version in the format of `5.6` or `5.7`, which takes effect only if the instance is an RDS instance. Default value: `5.6`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccountMode The account to which the resource belongs. Valid values: empty or `self` (the current account); `other` (another account).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Account Instance account, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccountRole The role used for cross-account sync, which can contain [a-zA-Z0-9\-\_]+ and is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TmpSecretId ID of the temporary key, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TmpSecretKey Key of the temporary key, which is required if the operation is performed across accounts.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TmpToken Temporary token, which is required if the operation is performed across accounts.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DbKernel",$param) and $param["DbKernel"] !== null) {
            $this->DbKernel = $param["DbKernel"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("UniqDcgId",$param) and $param["UniqDcgId"] !== null) {
            $this->UniqDcgId = $param["UniqDcgId"];
        }

        if (array_key_exists("UniqVpnGwId",$param) and $param["UniqVpnGwId"] !== null) {
            $this->UniqVpnGwId = $param["UniqVpnGwId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Supplier",$param) and $param["Supplier"] !== null) {
            $this->Supplier = $param["Supplier"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("AccountRole",$param) and $param["AccountRole"] !== null) {
            $this->AccountRole = $param["AccountRole"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("TmpToken",$param) and $param["TmpToken"] !== null) {
            $this->TmpToken = $param["TmpToken"];
        }
    }
}