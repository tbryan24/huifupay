<?php

namespace tbryan24\Huifupay\BsPaySdk\request;

use tbryan24\Huifupay\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 投诉图片下载
 *
 * @author sdk-generator
 * @Description
 */
class V2MerchantComplaintDownloadPictureRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求时间
     */
    private $reqDate;
    /**
     * 下载图片的url
     */
    private $mediaUrl;
    /**
     * 投诉单号
     */
    private $complaintId;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_MERCHANT_COMPLAINT_DOWNLOAD_PICTURE;
    }


    public function getReqSeqId() {
        return $this->reqSeqId;
    }

    public function setReqSeqId($reqSeqId) {
        $this->reqSeqId = $reqSeqId;
    }

    public function getReqDate() {
        return $this->reqDate;
    }

    public function setReqDate($reqDate) {
        $this->reqDate = $reqDate;
    }

    public function getMediaUrl() {
        return $this->mediaUrl;
    }

    public function setMediaUrl($mediaUrl) {
        $this->mediaUrl = $mediaUrl;
    }

    public function getComplaintId() {
        return $this->complaintId;
    }

    public function setComplaintId($complaintId) {
        $this->complaintId = $complaintId;
    }

}
