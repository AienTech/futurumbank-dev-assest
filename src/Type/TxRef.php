<?php

namespace App\Type;

use DateTime;
use DateTimeInterface;
use Exception;
use stdClass;

// This is a autogenerated file:TxRef

class TxRef {
    private string $txHash; // json:tx_hash Required
    private int $blockHeight; // json:block_height Required
    private int $txInputN; // json:tx_input_n Required
    private int $txOutputN; // json:tx_output_n Required
    private int $value; // json:value Required
    private int $refBalance; // json:ref_balance Required
    private int $confirmations; // json:confirmations Required
    private DateTime $confirmed; // json:confirmed Required
    private bool $doubleSpend; // json:double_spend Required

    /**
     * @param string $txHash
     * @param int $blockHeight
     * @param int $txInputN
     * @param int $txOutputN
     * @param int $value
     * @param int $refBalance
     * @param bool $spent
     * @param int $confirmations
     * @param DateTime $confirmed
     * @param bool $doubleSpend
     */
    public function __construct(string $txHash, int $blockHeight, int $txInputN, int $txOutputN, int $value, int $refBalance, int $confirmations, DateTime $confirmed, bool $doubleSpend) {
        $this->txHash = $txHash;
        $this->blockHeight = $blockHeight;
        $this->txInputN = $txInputN;
        $this->txOutputN = $txOutputN;
        $this->value = $value;
        $this->refBalance = $refBalance;
        $this->confirmations = $confirmations;
        $this->confirmed = $confirmed;
        $this->doubleSpend = $doubleSpend;
    }

    /**
     * @param string $value
     * @throws Exception
     * @return string
     */
    public static function fromTxHash(string $value): string {
        return $value; /*string*/
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toTxHash(): string {
        if (TxRef::validateTxHash($this->txHash))  {
            return $this->txHash; /*string*/
        }
        throw new Exception('never get to this TxRef::txHash');
    }

    /**
     * @param string
     * @return bool
     * @throws Exception
     */
    public static function validateTxHash(string $value): bool {
        if (!is_string($value)) {
            throw new Exception("Attribute Error:TxRef::txHash");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return string
     */
    public function getTxHash(): string {
        if (TxRef::validateTxHash($this->txHash))  {
            return $this->txHash;
        }
        throw new Exception('never get to getTxHash TxRef::txHash');
    }

    /**
     * @return string
     */
    public static function sampleTxHash(): string {
        return 'TxRef::txHash::31'; /*31:txHash*/
    }

    /**
     * @param int $value
     * @throws Exception
     * @return int
     */
    public static function fromBlockHeight(int $value): int {
        return $value; /*int*/
    }

    /**
     * @throws Exception
     * @return int
     */
    public function toBlockHeight(): int {
        if (TxRef::validateBlockHeight($this->blockHeight))  {
            return $this->blockHeight; /*int*/
        }
        throw new Exception('never get to this TxRef::blockHeight');
    }

    /**
     * @param int
     * @return bool
     * @throws Exception
     */
    public static function validateBlockHeight(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:TxRef::blockHeight");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return int
     */
    public function getBlockHeight(): int {
        if (TxRef::validateBlockHeight($this->blockHeight))  {
            return $this->blockHeight;
        }
        throw new Exception('never get to getBlockHeight TxRef::blockHeight');
    }

    /**
     * @return int
     */
    public static function sampleBlockHeight(): int {
        return 32; /*32:blockHeight*/
    }

    /**
     * @param int $value
     * @throws Exception
     * @return int
     */
    public static function fromTxInputN(int $value): int {
        return $value; /*int*/
    }

    /**
     * @throws Exception
     * @return int
     */
    public function toTxInputN(): int {
        if (TxRef::validateTxInputN($this->txInputN))  {
            return $this->txInputN; /*int*/
        }
        throw new Exception('never get to this TxRef::txInputN');
    }

    /**
     * @param int
     * @return bool
     * @throws Exception
     */
    public static function validateTxInputN(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:TxRef::txInputN");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return int
     */
    public function getTxInputN(): int {
        if (TxRef::validateTxInputN($this->txInputN))  {
            return $this->txInputN;
        }
        throw new Exception('never get to getTxInputN TxRef::txInputN');
    }

    /**
     * @return int
     */
    public static function sampleTxInputN(): int {
        return 33; /*33:txInputN*/
    }

    /**
     * @param int $value
     * @throws Exception
     * @return int
     */
    public static function fromTxOutputN(int $value): int {
        return $value; /*int*/
    }

    /**
     * @throws Exception
     * @return int
     */
    public function toTxOutputN(): int {
        if (TxRef::validateTxOutputN($this->txOutputN))  {
            return $this->txOutputN; /*int*/
        }
        throw new Exception('never get to this TxRef::txOutputN');
    }

    /**
     * @param int
     * @return bool
     * @throws Exception
     */
    public static function validateTxOutputN(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:TxRef::txOutputN");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return int
     */
    public function getTxOutputN(): int {
        if (TxRef::validateTxOutputN($this->txOutputN))  {
            return $this->txOutputN;
        }
        throw new Exception('never get to getTxOutputN TxRef::txOutputN');
    }

    /**
     * @return int
     */
    public static function sampleTxOutputN(): int {
        return 34; /*34:txOutputN*/
    }

    /**
     * @param int $value
     * @throws Exception
     * @return int
     */
    public static function fromValue(int $value): int {
        return $value; /*int*/
    }

    /**
     * @throws Exception
     * @return int
     */
    public function toValue(): int {
        if (TxRef::validateValue($this->value))  {
            return $this->value; /*int*/
        }
        throw new Exception('never get to this TxRef::value');
    }

    /**
     * @param int
     * @return bool
     * @throws Exception
     */
    public static function validateValue(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:TxRef::value");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return int
     */
    public function getValue(): int {
        if (TxRef::validateValue($this->value))  {
            return $this->value;
        }
        throw new Exception('never get to getValue TxRef::value');
    }

    /**
     * @return int
     */
    public static function sampleValue(): int {
        return 35; /*35:value*/
    }

    /**
     * @param int $value
     * @throws Exception
     * @return int
     */
    public static function fromRefBalance(int $value): int {
        return $value; /*int*/
    }

    /**
     * @throws Exception
     * @return int
     */
    public function toRefBalance(): int {
        if (TxRef::validateRefBalance($this->refBalance))  {
            return $this->refBalance; /*int*/
        }
        throw new Exception('never get to this TxRef::refBalance');
    }

    /**
     * @param int
     * @return bool
     * @throws Exception
     */
    public static function validateRefBalance(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:TxRef::refBalance");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return int
     */
    public function getRefBalance(): int {
        if (TxRef::validateRefBalance($this->refBalance))  {
            return $this->refBalance;
        }
        throw new Exception('never get to getRefBalance TxRef::refBalance');
    }

    /**
     * @return int
     */
    public static function sampleRefBalance(): int {
        return 36; /*36:refBalance*/
    }

    /**
     * @param bool $value
     * @throws Exception
     * @return bool
     */
    public static function fromSpent(bool $value): bool {
        return $value; /*bool*/
    }

    /**
     * @return bool
     */
    public static function sampleSpent(): bool {
        return true; /*37:spent*/
    }

    /**
     * @param int $value
     * @throws Exception
     * @return int
     */
    public static function fromConfirmations(int $value): int {
        return $value; /*int*/
    }

    /**
     * @throws Exception
     * @return int
     */
    public function toConfirmations(): int {
        if (TxRef::validateConfirmations($this->confirmations))  {
            return $this->confirmations; /*int*/
        }
        throw new Exception('never get to this TxRef::confirmations');
    }

    /**
     * @param int
     * @return bool
     * @throws Exception
     */
    public static function validateConfirmations(int $value): bool {
        if (!is_integer($value)) {
            throw new Exception("Attribute Error:TxRef::confirmations");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return int
     */
    public function getConfirmations(): int {
        if (TxRef::validateConfirmations($this->confirmations))  {
            return $this->confirmations;
        }
        throw new Exception('never get to getConfirmations TxRef::confirmations');
    }

    /**
     * @return int
     */
    public static function sampleConfirmations(): int {
        return 38; /*38:confirmations*/
    }

    /**
     * @param string $value
     * @throws Exception
     * @return DateTime
     */
    public static function fromConfirmed(string $value): DateTime {
        $tmp = DateTime::createFromFormat(DateTimeInterface::ISO8601, $value);
        if (!is_a($tmp, 'DateTime')) {
            throw new Exception('Attribute Error:TxRef::');
        }
        return $tmp;
    }

    /**
     * @throws Exception
     * @return string
     */
    public function toConfirmed(): string {
        if (TxRef::validateConfirmed($this->confirmed))  {
            return $this->confirmed->format(DateTimeInterface::ISO8601);
        }
        throw new Exception('never get to this TxRef::confirmed');
    }

    /**
     * @param DateTime
     * @return bool
     * @throws Exception
     */
    public static function validateConfirmed(DateTime $value): bool {
        if (!is_a($value, 'DateTime')) {
            throw new Exception('Attribute Error:TxRef::confirmed');
        }
        return true;
    }

    /**
     * @throws Exception
     * @return DateTime
     */
    public function getConfirmed(): DateTime {
        if (TxRef::validateConfirmed($this->confirmed))  {
            return $this->confirmed;
        }
        throw new Exception('never get to getConfirmed TxRef::confirmed');
    }

    /**
     * @return DateTime
     */
    public static function sampleConfirmed(): DateTime {
        return DateTime::createFromFormat(DateTimeInterface::ISO8601, '2020-12-90T12:90:90+00:00');
    }

    /**
     * @param bool $value
     * @throws Exception
     * @return bool
     */
    public static function fromDoubleSpend(bool $value): bool {
        return $value; /*bool*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function toDoubleSpend(): bool {
        if (TxRef::validateDoubleSpend($this->doubleSpend))  {
            return $this->doubleSpend; /*bool*/
        }
        throw new Exception('never get to this TxRef::doubleSpend');
    }

    /**
     * @param bool
     * @return bool
     * @throws Exception
     */
    public static function validateDoubleSpend(bool $value): bool {
        if (!is_bool($value)) {
            throw new Exception("Attribute Error:TxRef::doubleSpend");
        }
        return true;
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function getDoubleSpend(): bool {
        if (TxRef::validateDoubleSpend($this->doubleSpend))  {
            return $this->doubleSpend;
        }
        throw new Exception('never get to getDoubleSpend TxRef::doubleSpend');
    }

    /**
     * @return bool
     */
    public static function sampleDoubleSpend(): bool {
        return true; /*40:doubleSpend*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function validate(): bool {
        return TxRef::validateTxHash($this->txHash)
        || TxRef::validateBlockHeight($this->blockHeight)
        || TxRef::validateTxInputN($this->txInputN)
        || TxRef::validateTxOutputN($this->txOutputN)
        || TxRef::validateValue($this->value)
        || TxRef::validateRefBalance($this->refBalance)
        || TxRef::validateConfirmations($this->confirmations)
        || TxRef::validateConfirmed($this->confirmed)
        || TxRef::validateDoubleSpend($this->doubleSpend);
    }

    /**
     * @return stdClass
     * @throws Exception
     */
    public function to(): stdClass  {
        $out = new stdClass();
        $out->{'tx_hash'} = $this->toTxHash();
        $out->{'block_height'} = $this->toBlockHeight();
        $out->{'tx_input_n'} = $this->toTxInputN();
        $out->{'tx_output_n'} = $this->toTxOutputN();
        $out->{'value'} = $this->toValue();
        $out->{'ref_balance'} = $this->toRefBalance();
        $out->{'confirmations'} = $this->toConfirmations();
        $out->{'confirmed'} = $this->toConfirmed();
        $out->{'double_spend'} = $this->toDoubleSpend();
        return $out;
    }

    /**
     * @param stdClass $obj
     * @return TxRef
     * @throws Exception
     */
    public static function from(stdClass $obj): TxRef {
        return new TxRef(
         TxRef::fromTxHash($obj->{'tx_hash'})
        ,TxRef::fromBlockHeight($obj->{'block_height'})
        ,TxRef::fromTxInputN($obj->{'tx_input_n'})
        ,TxRef::fromTxOutputN($obj->{'tx_output_n'})
        ,TxRef::fromValue($obj->{'value'})
        ,TxRef::fromRefBalance($obj->{'ref_balance'})
        ,TxRef::fromConfirmations($obj->{'confirmations'})
        ,TxRef::fromConfirmed($obj->{'confirmed'})
        ,TxRef::fromDoubleSpend($obj->{'double_spend'})
        );
    }

    /**
     * @return TxRef
     */
    public static function sample(): TxRef {
        return new TxRef(
         TxRef::sampleTxHash()
        ,TxRef::sampleBlockHeight()
        ,TxRef::sampleTxInputN()
        ,TxRef::sampleTxOutputN()
        ,TxRef::sampleValue()
        ,TxRef::sampleRefBalance()
        ,TxRef::sampleConfirmations()
        ,TxRef::sampleConfirmed()
        ,TxRef::sampleDoubleSpend()
        );
    }
}
