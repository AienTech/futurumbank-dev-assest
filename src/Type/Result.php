<?php

namespace App\Type;

use Exception;
use stdClass;

// This is a autogenerated file:Result

class Result {
    private ?int $count; // json:count Optional
    private ?float $averageQuantity; // json:averageQuantity Optional

    /**
     * @param int|null $count
     * @param float|null $averageQuantity
     */
    public function __construct(?int $count, ?float $averageQuantity) {
        $this->count = $count;
        $this->averageQuantity = $averageQuantity;
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromCount(?int $value): ?int {
        if (!is_null($value)) {
            return $value; /*int*/
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function toCount(): ?int {
        if (Result::validateCount($this->count))  {
            if (!is_null($this->count)) {
                return $this->count; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Result::count');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateCount(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:Result::count");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getCount(): ?int {
        if (Result::validateCount($this->count))  {
            return $this->count;
        }
        throw new Exception('never get to getCount Result::count');
    }

    /**
     * @return ?int
     */
    public static function sampleCount(): ?int {
        return 31; /*31:count*/
    }

    /**
     * @param ?float $value
     * @throws Exception
     * @return ?float
     */
    public static function fromAverageQuantity(?float $value): ?float {
        if (!is_null($value)) {
            return $value; /*float*/
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?float
     */
    public function toAverageQuantity(): ?float {
        if (Result::validateAverageQuantity($this->averageQuantity))  {
            if (!is_null($this->averageQuantity)) {
                return $this->averageQuantity; /*float*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Result::averageQuantity');
    }

    /**
     * @param float|null
     * @return bool
     * @throws Exception
     */
    public static function validateAverageQuantity(?float $value): bool {
        if (!is_null($value)) {
            if (!is_float($value)) {
                throw new Exception("Attribute Error:Result::averageQuantity");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?float
     */
    public function getAverageQuantity(): ?float {
        if (Result::validateAverageQuantity($this->averageQuantity))  {
            return $this->averageQuantity;
        }
        throw new Exception('never get to getAverageQuantity Result::averageQuantity');
    }

    /**
     * @return ?float
     */
    public static function sampleAverageQuantity(): ?float {
        return 32; /*32:averageQuantity*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function validate(): bool {
        return Result::validateCount($this->count)
        || Result::validateAverageQuantity($this->averageQuantity);
    }

    /**
     * @return stdClass
     * @throws Exception
     */
    public function to(): stdClass  {
        $out = new stdClass();
        $out->{'count'} = $this->toCount();
        $out->{'averageQuantity'} = $this->toAverageQuantity();
        return $out;
    }

    /**
     * @param stdClass $obj
     * @return Result
     * @throws Exception
     */
    public static function from(stdClass $obj): Result {
        return new Result(
         Result::fromCount($obj->{'count'})
        ,Result::fromAverageQuantity($obj->{'averageQuantity'})
        );
    }

    /**
     * @return Result
     */
    public static function sample(): Result {
        return new Result(
         Result::sampleCount()
        ,Result::sampleAverageQuantity()
        );
    }
}
