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
 * Custom HTTPS forwarding configuration
 *
 * @method string getCustomTlsStatus() Obtain Custom TLS data switch
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCustomTlsStatus(string $CustomTlsStatus) Set Custom TLS data switch
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getTlsVersion() Obtain Specifies the TLS version. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTlsVersion(array $TlsVersion) Set Specifies the TLS version. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCipher() Obtain Custom encryption suite
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCipher(string $Cipher) Set Custom encryption suite
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVerifyOriginType() Obtain Origin authentication type
`off`: disable authentication
`oneWay`: authenticate the origin 
`twoWay`: two-way authentication
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVerifyOriginType(string $VerifyOriginType) Set Origin authentication type
`off`: disable authentication
`oneWay`: authenticate the origin 
`twoWay`: two-way authentication
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method ServerCert getCertInfo() Obtain Information of the origin-pull certificate
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCertInfo(ServerCert $CertInfo) Set Information of the origin-pull certificate
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method ClientCert getOriginCertInfo() Obtain Information of the origin server certificate
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOriginCertInfo(ClientCert $OriginCertInfo) Set Information of the origin server certificate
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AdvanceHttps extends AbstractModel
{
    /**
     * @var string Custom TLS data switch
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CustomTlsStatus;

    /**
     * @var array Specifies the TLS version. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TlsVersion;

    /**
     * @var string Custom encryption suite
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Cipher;

    /**
     * @var string Origin authentication type
`off`: disable authentication
`oneWay`: authenticate the origin 
`twoWay`: two-way authentication
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VerifyOriginType;

    /**
     * @var ServerCert Information of the origin-pull certificate
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CertInfo;

    /**
     * @var ClientCert Information of the origin server certificate
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $OriginCertInfo;

    /**
     * @param string $CustomTlsStatus Custom TLS data switch
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $TlsVersion Specifies the TLS version. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Cipher Custom encryption suite
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $VerifyOriginType Origin authentication type
`off`: disable authentication
`oneWay`: authenticate the origin 
`twoWay`: two-way authentication
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param ServerCert $CertInfo Information of the origin-pull certificate
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param ClientCert $OriginCertInfo Information of the origin server certificate
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("CustomTlsStatus",$param) and $param["CustomTlsStatus"] !== null) {
            $this->CustomTlsStatus = $param["CustomTlsStatus"];
        }

        if (array_key_exists("TlsVersion",$param) and $param["TlsVersion"] !== null) {
            $this->TlsVersion = $param["TlsVersion"];
        }

        if (array_key_exists("Cipher",$param) and $param["Cipher"] !== null) {
            $this->Cipher = $param["Cipher"];
        }

        if (array_key_exists("VerifyOriginType",$param) and $param["VerifyOriginType"] !== null) {
            $this->VerifyOriginType = $param["VerifyOriginType"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = new ServerCert();
            $this->CertInfo->deserialize($param["CertInfo"]);
        }

        if (array_key_exists("OriginCertInfo",$param) and $param["OriginCertInfo"] !== null) {
            $this->OriginCertInfo = new ClientCert();
            $this->OriginCertInfo->deserialize($param["OriginCertInfo"]);
        }
    }
}
