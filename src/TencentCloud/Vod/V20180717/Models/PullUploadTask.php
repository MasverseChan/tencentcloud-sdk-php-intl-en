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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a pull and upload task.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getStatus() Obtain Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method void setStatus(string $Status) Set Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method integer getErrCode() Obtain Error code. 0: success; other values: failure.
<li>40000: invalid input parameter. Please check it;</li>
<li>60000: invalid source file (e.g., video data is corrupted). Please check whether the source file is normal;</li>
<li>70000: internal service error. Please try again.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code. 0: success; other values: failure.
<li>40000: invalid input parameter. Please check it;</li>
<li>60000: invalid source file (e.g., video data is corrupted). Please check whether the source file is normal;</li>
<li>70000: internal service error. Please try again.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getFileId() Obtain The ID of the uploaded file.
 * @method void setFileId(string $FileId) Set The ID of the uploaded file.
 * @method MediaBasicInfo getMediaBasicInfo() Obtain The basic information of the uploaded file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMediaBasicInfo(MediaBasicInfo $MediaBasicInfo) Set The basic information of the uploaded file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaMetaData getMetaData() Obtain The metadata of the output video.
 * @method void setMetaData(MediaMetaData $MetaData) Set The metadata of the output video.
 * @method string getFileUrl() Obtain The playback address of the uploaded file.
 * @method void setFileUrl(string $FileUrl) Set The playback address of the uploaded file.
 * @method string getProcedureTaskId() Obtain The task ID for the task type `Procedure`. If a task flow is specified by [PullUpload](https://intl.cloud.tencent.com/document/api/266/35575?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set The task ID for the task type `Procedure`. If a task flow is specified by [PullUpload](https://intl.cloud.tencent.com/document/api/266/35575?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
 * @method string getReviewAudioVideoTaskId() Obtain The task ID for the task type `ReviewAudioVideo`. If a task flow is specified by [PullUpload](https://intl.cloud.tencent.com/document/api/266/35575?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set The task ID for the task type `ReviewAudioVideo`. If a task flow is specified by [PullUpload](https://intl.cloud.tencent.com/document/api/266/35575?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
 * @method string getSessionContext() Obtain The source context, which is used to pass through user request information. The [PullComplete](https://intl.cloud.tencent.com/document/product/266/7831?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context, which is used to pass through user request information. The [PullComplete](https://intl.cloud.tencent.com/document/product/266/7831?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
 * @method integer getProgress() Obtain The progress of the pull and upload task. Value range: 1-100.
 * @method void setProgress(integer $Progress) Set The progress of the pull and upload task. Value range: 1-100.
 */
class PullUploadTask extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     */
    public $Status;

    /**
     * @var integer Error code. 0: success; other values: failure.
<li>40000: invalid input parameter. Please check it;</li>
<li>60000: invalid source file (e.g., video data is corrupted). Please check whether the source file is normal;</li>
<li>70000: internal service error. Please try again.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string The ID of the uploaded file.
     */
    public $FileId;

    /**
     * @var MediaBasicInfo The basic information of the uploaded file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MediaBasicInfo;

    /**
     * @var MediaMetaData The metadata of the output video.
     */
    public $MetaData;

    /**
     * @var string The playback address of the uploaded file.
     */
    public $FileUrl;

    /**
     * @var string The task ID for the task type `Procedure`. If a task flow is specified by [PullUpload](https://intl.cloud.tencent.com/document/api/266/35575?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
     */
    public $ProcedureTaskId;

    /**
     * @var string The task ID for the task type `ReviewAudioVideo`. If a task flow is specified by [PullUpload](https://intl.cloud.tencent.com/document/api/266/35575?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var string The source context, which is used to pass through user request information. The [PullComplete](https://intl.cloud.tencent.com/document/product/266/7831?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var integer The progress of the pull and upload task. Value range: 1-100.
     */
    public $Progress;

    /**
     * @param string $TaskId The task ID.
     * @param string $Status Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     * @param integer $ErrCode Error code. 0: success; other values: failure.
<li>40000: invalid input parameter. Please check it;</li>
<li>60000: invalid source file (e.g., video data is corrupted). Please check whether the source file is normal;</li>
<li>70000: internal service error. Please try again.</li>
     * @param string $Message Error message.
     * @param string $FileId The ID of the uploaded file.
     * @param MediaBasicInfo $MediaBasicInfo The basic information of the uploaded file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaMetaData $MetaData The metadata of the output video.
     * @param string $FileUrl The playback address of the uploaded file.
     * @param string $ProcedureTaskId The task ID for the task type `Procedure`. If a task flow is specified by [PullUpload](https://intl.cloud.tencent.com/document/api/266/35575?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
     * @param string $ReviewAudioVideoTaskId The task ID for the task type `ReviewAudioVideo`. If a task flow is specified by [PullUpload](https://intl.cloud.tencent.com/document/api/266/35575?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
     * @param string $SessionContext The source context, which is used to pass through user request information. The [PullComplete](https://intl.cloud.tencent.com/document/product/266/7831?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 1,000 characters.
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
     * @param integer $Progress The progress of the pull and upload task. Value range: 1-100.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaBasicInfo",$param) and $param["MediaBasicInfo"] !== null) {
            $this->MediaBasicInfo = new MediaBasicInfo();
            $this->MediaBasicInfo->deserialize($param["MediaBasicInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
