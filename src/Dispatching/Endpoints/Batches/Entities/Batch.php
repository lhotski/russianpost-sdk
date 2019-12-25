<?php

namespace Appwilio\RussianPostSDK\Dispatching\Endpoints\Batches\Entities;

use Appwilio\RussianPostSDK\Dispatching\Contracts\Arrayable;
use Appwilio\RussianPostSDK\Dispatching\DataAware;

final class Batch implements Arrayable
{
    use DataAware;

    /**
     * Номер партии.
     *
     * @return string
     */
    public function getBatchName()
    {
        return (string) $this->get('batch-name');
    }

    /**
     * Статус партии.
     *
     * @return string
     */
    public function getBatchStatus()
    {
        return $this->get('batch-status');
    }

    /**
     * Дата обновления статуса.
     *
     * @return string
     */
    public function getBatchStatusDate()
    {
        return $this->get('batch-status-date');
    }

    /**
     * Идентификатор подразделения.
     *
     * @return string
     */
    public function getBranchName()
    {
        return $this->get('branch-name');
    }

    /**
     * Вид РПО.
     *
     * @return string[]
     */
    public function getCombinedBatchMailTypes()
    {
        return $this->get('combined-batch-mail-types');
    }

    /**
     * Плата за услугу "Курьерский сбор" с НДС
     *
     * @return string
     */
    public function getCourierCallRateWithVAT()
    {
        return $this->get('courier-call-rate-with-vat');
    }

    /**
     * Плата за услугу "Курьерский сбор" без НДС
     *
     * @return string
     */
    public function getCourierCallRateWithoutVAT()
    {
        return $this->get('courier-call-rate-wo-vat');
    }

    /**
     * Статусы заявки на вызов курьера.
     *
     * @return string[]
     */
    public function getCourierOrderStatuses()
    {
        return $this->get('courier-order-statuses');
    }

    /**
     * Способ оплаты уведомления о вручении РПО.
     *
     * @return string
     */
    public function getDeliveryNoticePaymentMethod()
    {
        return $this->get('delivery-notice-payment-method');
    }

    /**
     * Признак международной почты.
     *
     * @return bool
     */
    public function getInternational()
    {
        return $this->get('international');
    }

    /**
     * Номер документа для сдачи партии.
     *
     * @return int
     */
    public function getListNumber()
    {
        return (int) $this->get('list-number');
    }

    /**
     * Дата документа для сдачи партии (yyyy-MM-dd).
     *
     * @return string
     */
    public function getListNumberDate()
    {
        return $this->get('list-number-date');
    }

    /**
     * Категория РПО.
     *
     * @return string
     */
    public function getMailCategory()
    {
        return $this->get('mail-category');
    }

    /**
     * Категория РПО (текст).
     *
     * @return string
     */
    public function getMailCategoryText()
    {
        return $this->get('mail-category-text');
    }

    /**
     * Код разряда партии.
     *
     * @return string
     */
    public function getMailRank()
    {
        return $this->get('mail-rank');
    }

    /**
     * Вид РПО.
     *
     * @return string
     */
    public function getMailType()
    {
        return $this->get('mail-type');
    }

    /**
     * Вид РПО (текст).
     *
     * @return string
     */
    public function getMailTypeText()
    {
        return $this->get('mail-type-text');
    }

    /**
     * Способ оплаты.
     *
     * @return string
     */
    public function getNoticePaymentMethod()
    {
        return $this->get('notice-payment-method');
    }

    /**
     * Способ оплаты.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->get('payment-method');
    }

    /**
     * Коды отметок внутренних и международных отправлений.
     *
     * @return string[]
     */
    public function getPostmarks()
    {
        return $this->get('postmarks');
    }

    /**
     * Адрес места приема.
     *
     * @return string
     */
    public function getPostofficeAddress()
    {
        return $this->get('postoffice-address');
    }

    /**
     * Индекс места приема.
     *
     * @return string
     */
    public function getPostofficeCode()
    {
        return $this->get('postoffice-code');
    }

    /**
     * Наименование места приема.
     *
     * @return string
     */
    public function getPostofficeName()
    {
        return $this->get('postoffice-name');
    }

    /**
     * Сумма платы за авиа пересылку в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentAviaRateSum()
    {
        return (int) $this->get('shipment-avia-rate-sum');
    }

    /**
     * НДС от суммы платы за авиа пересылку в копейках.
     *
     * @return int
     */
    public function getShipmentAviaRateVATSum()
    {
        return (int) $this->get('shipment-avia-rate-vat-sum');
    }

    /**
     * Сумма платы за проверку комплектности в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentCompletenessCheckingRateSum()
    {
        return (int) $this->get('shipment-completeness-checking-rate-sum');
    }

    /**
     * НДС от суммы платы за проверку комплектности в копейках.
     *
     * @return int
     */
    public function getShipmentCompletenessCheckingRateVATSum()
    {
        return (int) $this->get('shipment-completeness-checking-rate-vat-sum');
    }

    /**
     * Сумма платы за проверку вложений в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentContentsCheckingRateSum()
    {
        return (int) $this->get('shipment-contents-checking-rate-sum');
    }

    /**
     * НДС от суммы платы за проверку вложений в копейках.
     *
     * @return int
     */
    public function getShipmentContentsCheckingRateVATSum()
    {
        return (int) $this->get('shipment-contents-checking-rate-vat-sum');
    }

    /**
     * Количество заказов в партии.
     *
     * @return int
     */
    public function getShipmentCount()
    {
        return (int) $this->get('shipment-count');
    }

    /**
     * Сумма платы за наземную пересылку в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentGroundRateSum()
    {
        return (int) $this->get('shipment-ground-rate-sum');
    }

    /**
     * НДС от суммы платы за наземную пересылку в копейках.
     *
     * @return int
     */
    public function getShipmentGroundRateVATSum()
    {
        return (int) $this->get('shipment-ground-rate-vat-sum');
    }

    /**
     * Сумма платы за объявленную ценность в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentInsureRateSum()
    {
        return (int) $this->get('shipment-insure-rate-sum');
    }

    /**
     * НДС от суммы платы за объявленную ценность в копейках.
     *
     * @return int
     */
    public function getShipmentInsureRateVATSum()
    {
        return (int) $this->get('shipment-insure-rate-vat-sum');
    }

    /**
     * Сумма платы за опись вложения в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentInventoryRateSum()
    {
        return (int) $this->get('shipment-inventory-rate-sum');
    }

    /**
     * НДС от суммы платы за опись вложения в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentInventoryRateVATSum()
    {
        return (int) $this->get('shipment-inventory-rate-vat-sum');
    }

    /**
     * Общий вес в граммах.
     *
     * @return int
     */
    public function getShipmentMass()
    {
        return (int) $this->get('shipment-mass');
    }

    /**
     * Сумма платы за пересылку в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentMassRateSum()
    {
        return (int) $this->get('shipment-mass-rate-sum');
    }

    /**
     * НДС от суммы платы за пересылку в копейках.
     *
     * @return int
     */
    public function getShipmentMassRateVATSum()
    {
        return (int) $this->get('shipment-mass-rate-vat-sum');
    }

    /**
     * Сумма надбавки за уведомление о вручении в копейках.
     *
     * @return int
     */
    public function getShipmentNoticeRateSum()
    {
        return (int) $this->get('shipment-notice-rate-sum');
    }

    /**
     * НДС от суммы надбавки за уведомление о вручении в копейках.
     *
     * @return int
     */
    public function getShipmentNoticeRateVATSum()
    {
        return (int) $this->get('shipment-notice-rate-vat-sum');
    }

    /**
     * Сумма платы за смс нотификацию в копейках, без НДС
     *
     * @return int
     */
    public function getShipmentSmsRateSum()
    {
        return (int) $this->get('shipment-sms-rate-sum');
    }

    /**
     * НДС от суммы платы за смс нотификацию в копейках.
     *
     * @return int
     */
    public function getShipmentSmsRateVATSum()
    {
        return (int) $this->get('shipment-sms-rate-vat-sum');
    }

    /**
     * Категория уведомления о вручении РПО.
     *
     * @return string
     */
    public function getShippingNoticeType()
    {
        return $this->get('shipping-notice-type');
    }

    /**
     * Вид транспортировки.
     *
     * @return string
     */
    public function getTransportType()
    {
        return $this->get('transport-type');
    }

    /**
     * Признак использования онлайн-баланса.
     *
     * @return bool
     */
    public function getUseOnlineBalance()
    {
        return $this->get('use-online-balance');
    }

    /**
     * Без указания массы.
     *
     * @return bool
     */
    public function getWithoutMass()
    {
        return $this->get('wo-mass');
    }
}
