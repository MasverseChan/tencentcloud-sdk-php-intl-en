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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetFlag request structure.
 *
 * @method integer getOpUin() Obtain Set user UIN
 * @method void setOpUin(integer $OpUin) Set Set user UIN
 * @method LoginActionFlag getLoginFlag() Obtain Login settings
 * @method void setLoginFlag(LoginActionFlag $LoginFlag) Set Login settings
 * @method LoginActionFlag getActionFlag() Obtain Sensitive operation settings
 * @method void setActionFlag(LoginActionFlag $ActionFlag) Set Sensitive operation settings
 * @method OffsiteFlag getOffsiteFlag() Obtain Remote login settings
 * @method void setOffsiteFlag(OffsiteFlag $OffsiteFlag) Set Remote login settings
 * @method integer getNeedResetMfa() Obtain Whether or not to reset MFA
 * @method void setNeedResetMfa(integer $NeedResetMfa) Set Whether or not to reset MFA
 */
class SetFlagRequest extends AbstractModel
{
    /**
     * @var integer Set user UIN
     */
    public $OpUin;

    /**
     * @var LoginActionFlag Login settings
     */
    public $LoginFlag;

    /**
     * @var LoginActionFlag Sensitive operation settings
     */
    public $ActionFlag;

    /**
     * @var OffsiteFlag Remote login settings
     */
    public $OffsiteFlag;

    /**
     * @var integer Whether or not to reset MFA
     */
    public $NeedResetMfa;

    /**
     * @param integer $OpUin Set user UIN
     * @param LoginActionFlag $LoginFlag Login settings
     * @param LoginActionFlag $ActionFlag Sensitive operation settings
     * @param OffsiteFlag $OffsiteFlag Remote login settings
     * @param integer $NeedResetMfa Whether or not to reset MFA
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
        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = new LoginActionFlag();
            $this->LoginFlag->deserialize($param["LoginFlag"]);
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = new LoginActionFlag();
            $this->ActionFlag->deserialize($param["ActionFlag"]);
        }

        if (array_key_exists("OffsiteFlag",$param) and $param["OffsiteFlag"] !== null) {
            $this->OffsiteFlag = new OffsiteFlag();
            $this->OffsiteFlag->deserialize($param["OffsiteFlag"]);
        }

        if (array_key_exists("NeedResetMfa",$param) and $param["NeedResetMfa"] !== null) {
            $this->NeedResetMfa = $param["NeedResetMfa"];
        }
    }
}