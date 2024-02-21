<?php

namespace tbryan24\Huifupay\BsPaySdk\request;

use tbryan24\Huifupay\BsPaySdk\enums\FunctionCodeEnum;

/**
 * 银行大额转账差错申请
 *
 * @author sdk-generator
 * @Description
 */
class V2TradeOnlinepaymentTransferBankmistakeApplyRequest extends BaseRequest
{

    /**
     * 请求流水号
     */
    private $reqSeqId;
    /**
     * 请求日期
     */
    private $reqDate;
    /**
     * 商户号
     */
    private $huifuId;
    /**
     * 交易金额
     */
    private $transAmt;
    /**
     * 订单类型
     */
    private $orderType;
    /**
     * 原请求流水号
     */
    private $orgReqSeqId;
    /**
     * 原请求日期
     */
    private $orgReqDate;
    /**
     * 实际打款日期
     */
    private $remitDate;
    /**
     * 实际付款方姓名
     */
    private $certificateName;
    /**
     * 实际付款方银行卡号
     */
    private $bankCardNo;
    /**
     * 实际付款方银行名称
     */
    private $bankName;
    /**
     * 异步通知地址
     */
    private $notifyUrl;
    /**
     * 商品描述
     */
    private $goodsDesc;
    /**
     * 汇款凭证文件内容
     */
    private $certificateContent;

    public function getFunctionCode() {
        return FunctionCodeEnum::$V2_TRADE_ONLINEPAYMENT_TRANSFER_BANKMISTAKE_APPLY;
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

    public function getHuifuId() {
        return $this->huifuId;
    }

    public function setHuifuId($huifuId) {
        $this->huifuId = $huifuId;
    }

    public function getTransAmt() {
        return $this->transAmt;
    }

    public function setTransAmt($transAmt) {
        $this->transAmt = $transAmt;
    }

    public function getOrderType() {
        return $this->orderType;
    }

    public function setOrderType($orderType) {
        $this->orderType = $orderType;
    }

    public function getOrgReqSeqId() {
        return $this->orgReqSeqId;
    }

    public function setOrgReqSeqId($orgReqSeqId) {
        $this->orgReqSeqId = $orgReqSeqId;
    }

    public function getOrgReqDate() {
        return $this->orgReqDate;
    }

    public function setOrgReqDate($orgReqDate) {
        $this->orgReqDate = $orgReqDate;
    }

    public function getRemitDate() {
        return $this->remitDate;
    }

    public function setRemitDate($remitDate) {
        $this->remitDate = $remitDate;
    }

    public function getCertificateName() {
        return $this->certificateName;
    }

    public function setCertificateName($certificateName) {
        $this->certificateName = $certificateName;
    }

    public function getBankCardNo() {
        return $this->bankCardNo;
    }

    public function setBankCardNo($bankCardNo) {
        $this->bankCardNo = $bankCardNo;
    }

    public function getBankName() {
        return $this->bankName;
    }

    public function setBankName($bankName) {
        $this->bankName = $bankName;
    }

    public function getNotifyUrl() {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl) {
        $this->notifyUrl = $notifyUrl;
    }

    public function getGoodsDesc() {
        return $this->goodsDesc;
    }

    public function setGoodsDesc($goodsDesc) {
        $this->goodsDesc = $goodsDesc;
    }

    public function getCertificateContent() {
        return $this->certificateContent;
    }

    public function setCertificateContent($certificateContent) {
        $this->certificateContent = $certificateContent;
    }

}
