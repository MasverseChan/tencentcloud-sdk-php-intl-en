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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchSendEmail request structure.
 *
 * @method string getFromEmailAddress() Obtain Sender address. Enter a sender address, for example, noreply@mail.qcloud.com. To display the sender name, enter the address in the following format:
Sender <email address>, for example:
Tencent Cloud team <noreply@mail.qcloud.com>
 * @method void setFromEmailAddress(string $FromEmailAddress) Set Sender address. Enter a sender address, for example, noreply@mail.qcloud.com. To display the sender name, enter the address in the following format:
Sender <email address>, for example:
Tencent Cloud team <noreply@mail.qcloud.com>
 * @method integer getReceiverId() Obtain Recipient group ID
 * @method void setReceiverId(integer $ReceiverId) Set Recipient group ID
 * @method string getSubject() Obtain Email subject
 * @method void setSubject(string $Subject) Set Email subject
 * @method integer getTaskType() Obtain Task type. `1`: immediate; `2`: scheduled; `3`: recurring
 * @method void setTaskType(integer $TaskType) Set Task type. `1`: immediate; `2`: scheduled; `3`: recurring
 * @method string getReplyToAddresses() Obtain Reply-to address. You can enter a valid personal email address that can receive emails. If this parameter is left empty, reply emails will fail to be sent.
 * @method void setReplyToAddresses(string $ReplyToAddresses) Set Reply-to address. You can enter a valid personal email address that can receive emails. If this parameter is left empty, reply emails will fail to be sent.
 * @method Template getTemplate() Obtain Template when emails are sent using a template
 * @method void setTemplate(Template $Template) Set Template when emails are sent using a template
 * @method Simple getSimple() Obtain Disused
 * @method void setSimple(Simple $Simple) Set Disused
 * @method array getAttachments() Obtain Attachment parameters to set when you need to send attachments. This parameter is currently unavailable.
 * @method void setAttachments(array $Attachments) Set Attachment parameters to set when you need to send attachments. This parameter is currently unavailable.
 * @method CycleEmailParam getCycleParam() Obtain Parameter required for a recurring sending task
 * @method void setCycleParam(CycleEmailParam $CycleParam) Set Parameter required for a recurring sending task
 * @method TimedEmailParam getTimedParam() Obtain Parameter required for a scheduled sending task
 * @method void setTimedParam(TimedEmailParam $TimedParam) Set Parameter required for a scheduled sending task
 * @method string getUnsubscribe() Obtain Unsubscribe option. `1`: provides an unsubscribe link; `0`: does not provide an unsubscribe link
 * @method void setUnsubscribe(string $Unsubscribe) Set Unsubscribe option. `1`: provides an unsubscribe link; `0`: does not provide an unsubscribe link
 * @method integer getADLocation() Obtain Whether to add an ad tag. `0`: Add no tag; `1`: Add before the subject; `2`: Add after the subject.
 * @method void setADLocation(integer $ADLocation) Set Whether to add an ad tag. `0`: Add no tag; `1`: Add before the subject; `2`: Add after the subject.
 */
class BatchSendEmailRequest extends AbstractModel
{
    /**
     * @var string Sender address. Enter a sender address, for example, noreply@mail.qcloud.com. To display the sender name, enter the address in the following format:
Sender <email address>, for example:
Tencent Cloud team <noreply@mail.qcloud.com>
     */
    public $FromEmailAddress;

    /**
     * @var integer Recipient group ID
     */
    public $ReceiverId;

    /**
     * @var string Email subject
     */
    public $Subject;

    /**
     * @var integer Task type. `1`: immediate; `2`: scheduled; `3`: recurring
     */
    public $TaskType;

    /**
     * @var string Reply-to address. You can enter a valid personal email address that can receive emails. If this parameter is left empty, reply emails will fail to be sent.
     */
    public $ReplyToAddresses;

    /**
     * @var Template Template when emails are sent using a template
     */
    public $Template;

    /**
     * @var Simple Disused
     */
    public $Simple;

    /**
     * @var array Attachment parameters to set when you need to send attachments. This parameter is currently unavailable.
     */
    public $Attachments;

    /**
     * @var CycleEmailParam Parameter required for a recurring sending task
     */
    public $CycleParam;

    /**
     * @var TimedEmailParam Parameter required for a scheduled sending task
     */
    public $TimedParam;

    /**
     * @var string Unsubscribe option. `1`: provides an unsubscribe link; `0`: does not provide an unsubscribe link
     */
    public $Unsubscribe;

    /**
     * @var integer Whether to add an ad tag. `0`: Add no tag; `1`: Add before the subject; `2`: Add after the subject.
     */
    public $ADLocation;

    /**
     * @param string $FromEmailAddress Sender address. Enter a sender address, for example, noreply@mail.qcloud.com. To display the sender name, enter the address in the following format:
Sender <email address>, for example:
Tencent Cloud team <noreply@mail.qcloud.com>
     * @param integer $ReceiverId Recipient group ID
     * @param string $Subject Email subject
     * @param integer $TaskType Task type. `1`: immediate; `2`: scheduled; `3`: recurring
     * @param string $ReplyToAddresses Reply-to address. You can enter a valid personal email address that can receive emails. If this parameter is left empty, reply emails will fail to be sent.
     * @param Template $Template Template when emails are sent using a template
     * @param Simple $Simple Disused
     * @param array $Attachments Attachment parameters to set when you need to send attachments. This parameter is currently unavailable.
     * @param CycleEmailParam $CycleParam Parameter required for a recurring sending task
     * @param TimedEmailParam $TimedParam Parameter required for a scheduled sending task
     * @param string $Unsubscribe Unsubscribe option. `1`: provides an unsubscribe link; `0`: does not provide an unsubscribe link
     * @param integer $ADLocation Whether to add an ad tag. `0`: Add no tag; `1`: Add before the subject; `2`: Add after the subject.
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
        if (array_key_exists("FromEmailAddress",$param) and $param["FromEmailAddress"] !== null) {
            $this->FromEmailAddress = $param["FromEmailAddress"];
        }

        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ReplyToAddresses",$param) and $param["ReplyToAddresses"] !== null) {
            $this->ReplyToAddresses = $param["ReplyToAddresses"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new Template();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("Simple",$param) and $param["Simple"] !== null) {
            $this->Simple = new Simple();
            $this->Simple->deserialize($param["Simple"]);
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = [];
            foreach ($param["Attachments"] as $key => $value){
                $obj = new Attachment();
                $obj->deserialize($value);
                array_push($this->Attachments, $obj);
            }
        }

        if (array_key_exists("CycleParam",$param) and $param["CycleParam"] !== null) {
            $this->CycleParam = new CycleEmailParam();
            $this->CycleParam->deserialize($param["CycleParam"]);
        }

        if (array_key_exists("TimedParam",$param) and $param["TimedParam"] !== null) {
            $this->TimedParam = new TimedEmailParam();
            $this->TimedParam->deserialize($param["TimedParam"]);
        }

        if (array_key_exists("Unsubscribe",$param) and $param["Unsubscribe"] !== null) {
            $this->Unsubscribe = $param["Unsubscribe"];
        }

        if (array_key_exists("ADLocation",$param) and $param["ADLocation"] !== null) {
            $this->ADLocation = $param["ADLocation"];
        }
    }
}
