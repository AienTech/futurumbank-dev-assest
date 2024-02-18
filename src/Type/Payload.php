<?php

namespace App\Type;
use Exception;
use stdClass;

// This is a autogenerated file:Payload

class Payload {
    private string $asset; // json:asset Required
    private string $address; // json:address Required
    private string $timeframeFrom; // json:timeframe-from Required
    private string $timeframeTo; // json:timeframe-to Required
    private string $threshold; // json:threshold Required

    /**
     * @param string $asset
     * @param string $address
     * @param string $timeframeFrom
     * @param string $timeframeTo
     * @param string $threshold
     */
    public function __construct(string $asset, string $address, string $timeframeFrom, string $timeframeTo, string $threshold) {
        $this->asset = $asset;
        $this->address = $address;
        $this->timeframeFrom = $timeframeFrom;
        $this->timeframeTo = $timeframeTo;
        $this->threshold = $threshold;
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromAsset(string|null $value): string {
        if ($value === null) {
            throw new Exception("asset cannot be null");
        }
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toAsset(): string {
        if (Payload::validateAsset($this->asset))  {
            return $this->asset; /*string*/
        }
        throw new Exception('never get to this Payload::asset');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateAsset(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:Payload::asset");
        }
        if (!in_array($value, ['btc', 'eth'])) {
            throw new Exception('Asset ' . $value . ' not recognized');
        }
        return true;
    }

    /**
     * @throws Exception
     * @return string
     */
    public function getAsset(): string {
        if (Payload::validateAsset($this->asset))  {
            return $this->asset;
        }
        throw new Exception('never get to getAsset Payload::asset');
    }

    /**
     * @return string
     */
    public static function sampleAsset(): string {
        return 'Payload::asset::31'; /*31:asset*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromAddress(string|null $value): string {
        if ($value === null) {
            throw new Exception("address cannot be null");
        }
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toAddress(): string {
        if (Payload::validateAddress($this->address))  {
            return $this->address; /*string*/
        }
        throw new Exception('never get to this Payload::address');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateAddress(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:Payload::address");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return string
     */
    public function getAddress(): string {
        if (Payload::validateAddress($this->address))  {
            return $this->address;
        }
        throw new Exception('never get to getAddress Payload::address');
    }

    /**
     * @return string
     */
    public static function sampleAddress(): string {
        return 'Payload::address::32'; /*32:address*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromTimeframeFrom(string|null $value): string {
        if ($value === null) {
            throw new Exception("timeframe-from cannot be null");
        }
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toTimeframeFrom(): string {
        if (Payload::validateTimeframeFrom($this->timeframeFrom))  {
            return $this->timeframeFrom; /*string*/
        }
        throw new Exception('never get to this Payload::timeframeFrom');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateTimeframeFrom(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:Payload::timeframeFrom");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return string
     */
    public function getTimeframeFrom(): string {
        if (Payload::validateTimeframeFrom($this->timeframeFrom))  {
            return $this->timeframeFrom;
        }
        throw new Exception('never get to getTimeframeFrom Payload::timeframeFrom');
    }

    /**
     * @return string
     */
    public static function sampleTimeframeFrom(): string {
        return 'Payload::timeframeFrom::33'; /*33:timeframeFrom*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromTimeframeTo(string|null $value): string {
        if ($value === null) {
            throw new Exception("timeframe-to cannot be null");
        }
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toTimeframeTo(): string {
        if (Payload::validateTimeframeTo($this->timeframeTo))  {
            return $this->timeframeTo; /*string*/
        }
        throw new Exception('never get to this Payload::timeframeTo');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateTimeframeTo(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:Payload::timeframeTo");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return string
     */
    public function getTimeframeTo(): string {
        if (Payload::validateTimeframeTo($this->timeframeTo))  {
            return $this->timeframeTo;
        }
        throw new Exception('never get to getTimeframeTo Payload::timeframeTo');
    }

    /**
     * @return string
     */
    public static function sampleTimeframeTo(): string {
        return 'Payload::timeframeTo::34'; /*34:timeframeTo*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromThreshold(string|null $value): string {
        if ($value === null) {
            throw new Exception("threshold cannot be null");
        }
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toThreshold(): string {
        if (Payload::validateThreshold($this->threshold))  {
            return $this->threshold; /*string*/
        }
        throw new Exception('never get to this Payload::threshold');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateThreshold(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:Payload::threshold");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return string
     */
    public function getThreshold(): string {
        if (Payload::validateThreshold($this->threshold))  {
            return $this->threshold;
        }
        throw new Exception('never get to getThreshold Payload::threshold');
    }

    /**
     * @return string
     */
    public static function sampleThreshold(): string {
        return 'Payload::threshold::35'; /*35:threshold*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function validate(): bool {
        return Payload::validateAsset($this->asset)
        || Payload::validateAddress($this->address)
        || Payload::validateTimeframeFrom($this->timeframeFrom)
        || Payload::validateTimeframeTo($this->timeframeTo)
        || Payload::validateThreshold($this->threshold);
    }

    /**
     * @return stdClass
     * @throws Exception
     */
    public function to(): stdClass  {
        $out = new stdClass();
        $out->{'asset'} = $this->toAsset();
        $out->{'address'} = $this->toAddress();
        $out->{'timeframe-from'} = $this->toTimeframeFrom();
        $out->{'timeframe-to'} = $this->toTimeframeTo();
        $out->{'threshold'} = $this->toThreshold();
        return $out;
    }

    /**
     * @param stdClass $obj
     * @return Payload
     * @throws Exception
     */
    public static function from(stdClass $obj): Payload {
        return new Payload(
         Payload::fromAsset($obj->{'asset'})
        ,Payload::fromAddress($obj->{'address'})
        ,Payload::fromTimeframeFrom($obj->{'timeframe-from'})
        ,Payload::fromTimeframeTo($obj->{'timeframe-to'})
        ,Payload::fromThreshold($obj->{'threshold'})
        );
    }

    /**
     * @return Payload
     */
    public static function sample(): Payload {
        return new Payload(
         Payload::sampleAsset()
        ,Payload::sampleAddress()
        ,Payload::sampleTimeframeFrom()
        ,Payload::sampleTimeframeTo()
        ,Payload::sampleThreshold()
        );
    }
}