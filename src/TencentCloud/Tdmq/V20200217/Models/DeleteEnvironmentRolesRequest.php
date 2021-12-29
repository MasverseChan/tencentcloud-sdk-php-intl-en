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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEnvironmentRoles request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method array getRoleNames() Obtain Array of role names.
 * @method void setRoleNames(array $RoleNames) Set Array of role names.
 * @method string getClusterId() Obtain Cluster ID (required)
 * @method void setClusterId(string $ClusterId) Set Cluster ID (required)
 */
class DeleteEnvironmentRolesRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var array Array of role names.
     */
    public $RoleNames;

    /**
     * @var string Cluster ID (required)
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId Environment (namespace) name.
     * @param array $RoleNames Array of role names.
     * @param string $ClusterId Cluster ID (required)
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("RoleNames",$param) and $param["RoleNames"] !== null) {
            $this->RoleNames = $param["RoleNames"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
