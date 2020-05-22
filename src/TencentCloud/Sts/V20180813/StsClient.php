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

namespace TencentCloud\Sts\V20180813;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Sts\V20180813\Models as Models;

/**
 * @method Models\AssumeRoleResponse AssumeRole(Models\AssumeRoleRequest $req) This API is used to request for the temporary security credentials of a role.
 * @method Models\AssumeRoleWithSAMLResponse AssumeRoleWithSAML(Models\AssumeRoleWithSAMLRequest $req) This API is used to request for the temporary credentials for a role that has been authenticated via a SAML assertion.
 * @method Models\GetFederationTokenResponse GetFederationToken(Models\GetFederationTokenRequest $req) This API is used to get temporary credentials for a federated user.
 */

class StsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "sts.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2018-08-13";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("sts")."\\"."V20180813\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}