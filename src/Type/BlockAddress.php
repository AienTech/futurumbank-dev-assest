<?php

namespace App\Type;
use stdClass;
use DateTime;
use DateTimeInterface;
use Exception;

// This is a autogenerated file:BtcBlock

class BlockAddress {
    private ?string $address; // json:address Optional
    private ?float $totalReceived; // json:total_received Optional
    private ?float $totalSent; // json:total_sent Optional
    private ?float $balance; // json:balance Optional
    private ?float $unconfirmedBalance; // json:unconfirmed_balance Optional
    private ?float $finalBalance; // json:final_balance Optional
    private ?int $nTx; // json:n_tx Optional
    private ?int $unconfirmedNTx; // json:unconfirmed_n_tx Optional
    private ?int $finalNTx; // json:final_n_tx Optional
    private ?array $txrefs; // json:txrefs Optional
    private ?string $txURL; // json:tx_url Optional

    /**
     * @param string|null $address
     * @param float|null $totalReceived
     * @param float|null $totalSent
     * @param float|null $balance
     * @param float|null $unconfirmedBalance
     * @param float|null $finalBalance
     * @param int|null $nTx
     * @param int|null $unconfirmedNTx
     * @param int|null $finalNTx
     * @param array|null $txrefs
     * @param string|null $txURL
     */
    public function __construct(?string $address, ?float $totalReceived, ?float $totalSent, ?float $balance, ?float $unconfirmedBalance, ?float $finalBalance, ?int $nTx, ?int $unconfirmedNTx, ?int $finalNTx, ?array $txrefs, ?string $txURL) {
        $this->address = $address;
        $this->totalReceived = $totalReceived;
        $this->totalSent = $totalSent;
        $this->balance = $balance;
        $this->unconfirmedBalance = $unconfirmedBalance;
        $this->finalBalance = $finalBalance;
        $this->nTx = $nTx;
        $this->unconfirmedNTx = $unconfirmedNTx;
        $this->finalNTx = $finalNTx;
        $this->txrefs = $txrefs;
        $this->txURL = $txURL;
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromAddress(?string $value): ?string {
        if (!is_null($value)) {
            return $value; /*string*/
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?string
     */
    public function toAddress(): ?string {
        if (BlockAddress::validateAddress($this->address))  {
            if (!is_null($this->address)) {
                return $this->address; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::address');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateAddress(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:BtcAddress::address");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?string
     */
    public function getAddress(): ?string {
        if (BlockAddress::validateAddress($this->address))  {
            return $this->address;
        }
        throw new Exception('never get to getAddress BtcAddress::address');
    }

    /**
     * @return ?string
     */
    public static function sampleAddress(): ?string {
        return 'BtcAddress::address::31'; /*31:address*/
    }

    /**
     * @param ?float $value
     * @throws Exception
     * @return ?float
     */
    public static function fromTotalReceived(?float $value): ?float {
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
    public function toTotalReceived(): ?float {
        if (BlockAddress::validateTotalReceived($this->totalReceived))  {
            if (!is_null($this->totalReceived)) {
                return $this->totalReceived; /*float*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::totalReceived');
    }

    /**
     * @param float|null
     * @return bool
     * @throws Exception
     */
    public static function validateTotalReceived(?float $value): bool {
        if (!is_null($value)) {
            if (!is_float($value)) {
                throw new Exception("Attribute Error:BtcAddress::totalReceived");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getTotalReceived(): ?int {
        if (BlockAddress::validateTotalReceived($this->totalReceived))  {
            return $this->totalReceived;
        }
        throw new Exception('never get to getTotalReceived BtcAddress::totalReceived');
    }

    /**
     * @return ?int
     */
    public static function sampleTotalReceived(): ?int {
        return 32; /*32:totalReceived*/
    }

    /**
     * @param ?float $value
     * @throws Exception
     * @return ?float
     */
    public static function fromTotalSent(?float $value): ?float {
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
    public function toTotalSent(): ?float {
        if (BlockAddress::validateTotalSent($this->totalSent))  {
            if (!is_null($this->totalSent)) {
                return $this->totalSent; /*float*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::totalSent');
    }

    /**
     * @param float|null
     * @return bool
     * @throws Exception
     */
    public static function validateTotalSent(?float $value): bool {
        if (!is_null($value)) {
            if (!is_float($value)) {
                throw new Exception("Attribute Error:BtcAddress::totalSent");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?float
     */
    public function getTotalSent(): ?float {
        if (BlockAddress::validateTotalSent($this->totalSent))  {
            return $this->totalSent;
        }
        throw new Exception('never get to getTotalSent BtcAddress::totalSent');
    }

    /**
     * @return ?float
     */
    public static function sampleTotalSent(): ?float {
        return 33; /*33:totalSent*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromBalance(?int $value): ?int {
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
    public function toBalance(): ?int {
        if (BlockAddress::validateBalance($this->balance))  {
            if (!is_null($this->balance)) {
                return $this->balance; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::balance');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateBalance(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:BtcAddress::balance");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getBalance(): ?int {
        if (BlockAddress::validateBalance($this->balance))  {
            return $this->balance;
        }
        throw new Exception('never get to getBalance BtcAddress::balance');
    }

    /**
     * @return ?int
     */
    public static function sampleBalance(): ?int {
        return 34; /*34:balance*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromUnconfirmedBalance(?int $value): ?int {
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
    public function toUnconfirmedBalance(): ?int {
        if (BlockAddress::validateUnconfirmedBalance($this->unconfirmedBalance))  {
            if (!is_null($this->unconfirmedBalance)) {
                return $this->unconfirmedBalance; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::unconfirmedBalance');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateUnconfirmedBalance(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:BtcAddress::unconfirmedBalance");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getUnconfirmedBalance(): ?int {
        if (BlockAddress::validateUnconfirmedBalance($this->unconfirmedBalance))  {
            return $this->unconfirmedBalance;
        }
        throw new Exception('never get to getUnconfirmedBalance BtcAddress::unconfirmedBalance');
    }

    /**
     * @return ?int
     */
    public static function sampleUnconfirmedBalance(): ?int {
        return 35; /*35:unconfirmedBalance*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromFinalBalance(?int $value): ?int {
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
    public function toFinalBalance(): ?int {
        if (BlockAddress::validateFinalBalance($this->finalBalance))  {
            if (!is_null($this->finalBalance)) {
                return $this->finalBalance; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::finalBalance');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateFinalBalance(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:BtcAddress::finalBalance");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getFinalBalance(): ?int {
        if (BlockAddress::validateFinalBalance($this->finalBalance))  {
            return $this->finalBalance;
        }
        throw new Exception('never get to getFinalBalance BtcAddress::finalBalance');
    }

    /**
     * @return ?int
     */
    public static function sampleFinalBalance(): ?int {
        return 36; /*36:finalBalance*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromNTx(?int $value): ?int {
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
    public function toNTx(): ?int {
        if (BlockAddress::validateNTx($this->nTx))  {
            if (!is_null($this->nTx)) {
                return $this->nTx; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::nTx');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateNTx(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:BtcAddress::nTx");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getNTx(): ?int {
        if (BlockAddress::validateNTx($this->nTx))  {
            return $this->nTx;
        }
        throw new Exception('never get to getNTx BtcAddress::nTx');
    }

    /**
     * @return ?int
     */
    public static function sampleNTx(): ?int {
        return 37; /*37:nTx*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromUnconfirmedNTx(?int $value): ?int {
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
    public function toUnconfirmedNTx(): ?int {
        if (BlockAddress::validateUnconfirmedNTx($this->unconfirmedNTx))  {
            if (!is_null($this->unconfirmedNTx)) {
                return $this->unconfirmedNTx; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::unconfirmedNTx');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateUnconfirmedNTx(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:BtcAddress::unconfirmedNTx");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getUnconfirmedNTx(): ?int {
        if (BlockAddress::validateUnconfirmedNTx($this->unconfirmedNTx))  {
            return $this->unconfirmedNTx;
        }
        throw new Exception('never get to getUnconfirmedNTx BtcAddress::unconfirmedNTx');
    }

    /**
     * @return ?int
     */
    public static function sampleUnconfirmedNTx(): ?int {
        return 38; /*38:unconfirmedNTx*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromFinalNTx(?int $value): ?int {
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
    public function toFinalNTx(): ?int {
        if (BlockAddress::validateFinalNTx($this->finalNTx))  {
            if (!is_null($this->finalNTx)) {
                return $this->finalNTx; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::finalNTx');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateFinalNTx(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:BtcAddress::finalNTx");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getFinalNTx(): ?int {
        if (BlockAddress::validateFinalNTx($this->finalNTx))  {
            return $this->finalNTx;
        }
        throw new Exception('never get to getFinalNTx BtcAddress::finalNTx');
    }

    /**
     * @return ?int
     */
    public static function sampleFinalNTx(): ?int {
        return 39; /*39:finalNTx*/
    }

    /**
     * @param ?array $value
     * @throws Exception
     * @return ?array
     */
    public static function fromTxrefs(?array $value): ?array {
        if (!is_null($value)) {
            return  array_map(function ($value) {
                return Txref::from($value); /*class*/
            }, $value);
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?array
     */
    public function toTxrefs(): ?array {
        if (BlockAddress::validateTxrefs($this->txrefs))  {
            if (!is_null($this->txrefs)) {
                return array_map(function ($value) {
                    return $value->to(); /*class*/
                }, $this->txrefs);
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::txrefs');
    }

    /**
     * @param array|null
     * @return bool
     * @throws Exception
     */
    public static function validateTxrefs(?array $value): bool {
        if (!is_null($value)) {
            if (!is_array($value)) {
                throw new Exception("Attribute Error:BtcAddress::txrefs");
            }
            array_walk($value, function($value_v) {
                $value_v->validate();
            });
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?TxRef[]
     */
    public function getTxrefs(): ?array {
        if (BlockAddress::validateTxrefs($this->txrefs))  {
            return $this->txrefs;
        }
        throw new Exception('never get to getTxrefs BtcAddress::txrefs');
    }

    /**
     * @param TxRef[] $txrefs
     * @return self
     */
    public function addTxrefs(array $txrefs): static {
        $this->txrefs = array_merge($this->txrefs, $txrefs);
        return $this;
    }

    /**
     * @return ?array
     */
    public static function sampleTxrefs(): ?array {
        return  array(
            Txref::sample() /*40:*/
        ); /* 40:txrefs*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromTxURL(?string $value): ?string {
        if (!is_null($value)) {
            return $value; /*string*/
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?string
     */
    public function toTxURL(): ?string {
        if (BlockAddress::validateTxURL($this->txURL))  {
            if (!is_null($this->txURL)) {
                return $this->txURL; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this BtcAddress::txURL');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateTxURL(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:BtcAddress::txURL");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?string
     */
    public function getTxURL(): ?string {
        if (BlockAddress::validateTxURL($this->txURL))  {
            return $this->txURL;
        }
        throw new Exception('never get to getTxURL BtcAddress::txURL');
    }

    /**
     * @return ?string
     */
    public static function sampleTxURL(): ?string {
        return 'BtcAddress::txURL::41'; /*41:txURL*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function validate(): bool {
        return BlockAddress::validateAddress($this->address)
        || BlockAddress::validateTotalReceived($this->totalReceived)
        || BlockAddress::validateTotalSent($this->totalSent)
        || BlockAddress::validateBalance($this->balance)
        || BlockAddress::validateUnconfirmedBalance($this->unconfirmedBalance)
        || BlockAddress::validateFinalBalance($this->finalBalance)
        || BlockAddress::validateNTx($this->nTx)
        || BlockAddress::validateUnconfirmedNTx($this->unconfirmedNTx)
        || BlockAddress::validateFinalNTx($this->finalNTx)
        || BlockAddress::validateTxrefs($this->txrefs)
        || BlockAddress::validateTxURL($this->txURL);
    }

    /**
     * @return stdClass
     * @throws Exception
     */
    public function to(): stdClass  {
        $out = new stdClass();
        $out->{'address'} = $this->toAddress();
        $out->{'total_received'} = $this->toTotalReceived();
        $out->{'total_sent'} = $this->toTotalSent();
        $out->{'balance'} = $this->toBalance();
        $out->{'unconfirmed_balance'} = $this->toUnconfirmedBalance();
        $out->{'final_balance'} = $this->toFinalBalance();
        $out->{'n_tx'} = $this->toNTx();
        $out->{'unconfirmed_n_tx'} = $this->toUnconfirmedNTx();
        $out->{'final_n_tx'} = $this->toFinalNTx();
        $out->{'txrefs'} = $this->toTxrefs();
        $out->{'tx_url'} = $this->toTxURL();
        return $out;
    }

    /**
     * @param stdClass $obj
     * @return BlockAddress
     * @throws Exception
     */
    public static function from(stdClass $obj): BlockAddress {
        return new BlockAddress(
         BlockAddress::fromAddress($obj->{'address'})
        ,BlockAddress::fromTotalReceived($obj->{'total_received'})
        ,BlockAddress::fromTotalSent($obj->{'total_sent'})
        ,BlockAddress::fromBalance($obj->{'balance'})
        ,BlockAddress::fromUnconfirmedBalance($obj->{'unconfirmed_balance'})
        ,BlockAddress::fromFinalBalance($obj->{'final_balance'})
        ,BlockAddress::fromNTx($obj->{'n_tx'})
        ,BlockAddress::fromUnconfirmedNTx($obj->{'unconfirmed_n_tx'})
        ,BlockAddress::fromFinalNTx($obj->{'final_n_tx'})
        ,BlockAddress::fromTxrefs($obj->{'txrefs'})
        ,BlockAddress::fromTxURL($obj->{'tx_url'})
        );
    }

    /**
     * @return BlockAddress
     */
    public static function sample(): BlockAddress {
        return new BlockAddress(
         BlockAddress::sampleAddress()
        ,BlockAddress::sampleTotalReceived()
        ,BlockAddress::sampleTotalSent()
        ,BlockAddress::sampleBalance()
        ,BlockAddress::sampleUnconfirmedBalance()
        ,BlockAddress::sampleFinalBalance()
        ,BlockAddress::sampleNTx()
        ,BlockAddress::sampleUnconfirmedNTx()
        ,BlockAddress::sampleFinalNTx()
        ,BlockAddress::sampleTxrefs()
        ,BlockAddress::sampleTxURL()
        );
    }
}

// This is a autogenerated file:Txref

class Txref {
    private ?string $txHash; // json:tx_hash Optional
    private ?int $blockHeight; // json:block_height Optional
    private ?int $txInputN; // json:tx_input_n Optional
    private ?int $txOutputN; // json:tx_output_n Optional
    private ?int $value; // json:value Optional
    private ?int $refBalance; // json:ref_balance Optional
    private ?int $confirmations; // json:confirmations Optional
    private DateTime $confirmed; // json:confirmed Optional
    private ?bool $doubleSpend; // json:double_spend Optional

    /**
     * @param string|null $txHash
     * @param int|null $blockHeight
     * @param int|null $txInputN
     * @param int|null $txOutputN
     * @param int|null $value
     * @param int|null $refBalance
     * @param int|null $confirmations
     * @param DateTime $confirmed
     * @param bool|null $doubleSpend
     */
    public function __construct(?string $txHash, ?int $blockHeight, ?int $txInputN, ?int $txOutputN, ?int $value, ?int $refBalance, ?int $confirmations, DateTime $confirmed, ?bool $doubleSpend) {
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
     * @param ?string $value
     * @throws Exception
     * @return ?string
     */
    public static function fromTxHash(?string $value): ?string {
        if (!is_null($value)) {
            return $value; /*string*/
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?string
     */
    public function toTxHash(): ?string {
        if (Txref::validateTxHash($this->txHash))  {
            if (!is_null($this->txHash)) {
                return $this->txHash; /*string*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::txHash');
    }

    /**
     * @param string|null
     * @return bool
     * @throws Exception
     */
    public static function validateTxHash(?string $value): bool {
        if (!is_null($value)) {
            if (!is_string($value)) {
                throw new Exception("Attribute Error:Txref::txHash");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?string
     */
    public function getTxHash(): ?string {
        if (Txref::validateTxHash($this->txHash))  {
            return $this->txHash;
        }
        throw new Exception('never get to getTxHash Txref::txHash');
    }

    /**
     * @return ?string
     */
    public static function sampleTxHash(): ?string {
        return 'Txref::txHash::31'; /*31:txHash*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromBlockHeight(?int $value): ?int {
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
    public function toBlockHeight(): ?int {
        if (Txref::validateBlockHeight($this->blockHeight))  {
            if (!is_null($this->blockHeight)) {
                return $this->blockHeight; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::blockHeight');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateBlockHeight(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:Txref::blockHeight");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getBlockHeight(): ?int {
        if (Txref::validateBlockHeight($this->blockHeight))  {
            return $this->blockHeight;
        }
        throw new Exception('never get to getBlockHeight Txref::blockHeight');
    }

    /**
     * @return ?int
     */
    public static function sampleBlockHeight(): ?int {
        return 32; /*32:blockHeight*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromTxInputN(?int $value): ?int {
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
    public function toTxInputN(): ?int {
        if (Txref::validateTxInputN($this->txInputN))  {
            if (!is_null($this->txInputN)) {
                return $this->txInputN; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::txInputN');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateTxInputN(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:Txref::txInputN");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getTxInputN(): ?int {
        if (Txref::validateTxInputN($this->txInputN))  {
            return $this->txInputN;
        }
        throw new Exception('never get to getTxInputN Txref::txInputN');
    }

    /**
     * @return ?int
     */
    public static function sampleTxInputN(): ?int {
        return 33; /*33:txInputN*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromTxOutputN(?int $value): ?int {
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
    public function toTxOutputN(): ?int {
        if (Txref::validateTxOutputN($this->txOutputN))  {
            if (!is_null($this->txOutputN)) {
                return $this->txOutputN; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::txOutputN');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateTxOutputN(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:Txref::txOutputN");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getTxOutputN(): ?int {
        if (Txref::validateTxOutputN($this->txOutputN))  {
            return $this->txOutputN;
        }
        throw new Exception('never get to getTxOutputN Txref::txOutputN');
    }

    /**
     * @return ?int
     */
    public static function sampleTxOutputN(): ?int {
        return 34; /*34:txOutputN*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromValue(?int $value): ?int {
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
    public function toValue(): ?int {
        if (Txref::validateValue($this->value))  {
            if (!is_null($this->value)) {
                return $this->value; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::value');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateValue(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:Txref::value");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getValue(): ?int {
        if (Txref::validateValue($this->value))  {
            return $this->value;
        }
        throw new Exception('never get to getValue Txref::value');
    }

    /**
     * @return ?int
     */
    public static function sampleValue(): ?int {
        return 35; /*35:value*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromRefBalance(?int $value): ?int {
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
    public function toRefBalance(): ?int {
        if (Txref::validateRefBalance($this->refBalance))  {
            if (!is_null($this->refBalance)) {
                return $this->refBalance; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::refBalance');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateRefBalance(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:Txref::refBalance");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getRefBalance(): ?int {
        if (Txref::validateRefBalance($this->refBalance))  {
            return $this->refBalance;
        }
        throw new Exception('never get to getRefBalance Txref::refBalance');
    }

    /**
     * @return ?int
     */
    public static function sampleRefBalance(): ?int {
        return 36; /*36:refBalance*/
    }

    /**
     * @param ?int $value
     * @throws Exception
     * @return ?int
     */
    public static function fromConfirmations(?int $value): ?int {
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
    public function toConfirmations(): ?int {
        if (Txref::validateConfirmations($this->confirmations))  {
            if (!is_null($this->confirmations)) {
                return $this->confirmations; /*int*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::confirmations');
    }

    /**
     * @param int|null
     * @return bool
     * @throws Exception
     */
    public static function validateConfirmations(?int $value): bool {
        if (!is_null($value)) {
            if (!is_integer($value)) {
                throw new Exception("Attribute Error:Txref::confirmations");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?int
     */
    public function getConfirmations(): ?int {
        if (Txref::validateConfirmations($this->confirmations))  {
            return $this->confirmations;
        }
        throw new Exception('never get to getConfirmations Txref::confirmations');
    }

    /**
     * @return ?int
     */
    public static function sampleConfirmations(): ?int {
        return 38; /*38:confirmations*/
    }

    /**
     * @param ?string $value
     * @throws Exception
     * @return DateTime
     */
    public static function fromConfirmed(?string $value): DateTime {
        if (!is_null($value)) {
            $tmp = DateTime::createFromFormat(DateTimeInterface::ISO8601, $value);
            if (!is_a($tmp, 'DateTime')) {
                throw new Exception('Attribute Error:Txref::');
            }
            return $tmp;
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?string
     */
    public function toConfirmed(): ?string {
        if (Txref::validateConfirmed($this->confirmed))  {
            if (!is_null($this->confirmed)) {
                return $this->confirmed->format(DateTimeInterface::ISO8601);
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::confirmed');
    }

    /**
     * @param DateTime
     * @return bool
     * @throws Exception
     */
    public static function validateConfirmed(DateTime $value): bool {
        if (!is_null($value)) {
            if (!is_a($value, 'DateTime')) {
                throw new Exception('Attribute Error:Txref::confirmed');
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return DateTime
     */
    public function getConfirmed(): DateTime {
        if (Txref::validateConfirmed($this->confirmed))  {
            return $this->confirmed;
        }
        throw new Exception('never get to getConfirmed Txref::confirmed');
    }

    /**
     * @return DateTime
     */
    public static function sampleConfirmed(): DateTime {
        return DateTime::createFromFormat(DateTimeInterface::ISO8601, '2020-12-90T12:90:90+00:00');
    }

    /**
     * @param ?bool $value
     * @throws Exception
     * @return ?bool
     */
    public static function fromDoubleSpend(?bool $value): ?bool {
        if (!is_null($value)) {
            return $value; /*bool*/
        } else {
            return null;
        }
    }

    /**
     * @throws Exception
     * @return ?bool
     */
    public function toDoubleSpend(): ?bool {
        if (Txref::validateDoubleSpend($this->doubleSpend))  {
            if (!is_null($this->doubleSpend)) {
                return $this->doubleSpend; /*bool*/
            } else {
                return  null;
            }
        }
        throw new Exception('never get to this Txref::doubleSpend');
    }

    /**
     * @param bool|null
     * @return bool
     * @throws Exception
     */
    public static function validateDoubleSpend(?bool $value): bool {
        if (!is_null($value)) {
            if (!is_bool($value)) {
                throw new Exception("Attribute Error:Txref::doubleSpend");
            }
        }
        return true;
    }

    /**
     * @throws Exception
     * @return ?bool
     */
    public function getDoubleSpend(): ?bool {
        if (Txref::validateDoubleSpend($this->doubleSpend))  {
            return $this->doubleSpend;
        }
        throw new Exception('never get to getDoubleSpend Txref::doubleSpend');
    }

    /**
     * @return ?bool
     */
    public static function sampleDoubleSpend(): ?bool {
        return true; /*40:doubleSpend*/
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function validate(): bool {
        return Txref::validateTxHash($this->txHash)
        || Txref::validateBlockHeight($this->blockHeight)
        || Txref::validateTxInputN($this->txInputN)
        || Txref::validateTxOutputN($this->txOutputN)
        || Txref::validateValue($this->value)
        || Txref::validateRefBalance($this->refBalance)
        || Txref::validateConfirmations($this->confirmations)
        || Txref::validateConfirmed($this->confirmed)
        || Txref::validateDoubleSpend($this->doubleSpend);
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
     * @return Txref
     * @throws Exception
     */
    public static function from(stdClass $obj): Txref {
        return new Txref(
         Txref::fromTxHash($obj->{'tx_hash'})
        ,Txref::fromBlockHeight($obj->{'block_height'})
        ,Txref::fromTxInputN($obj->{'tx_input_n'})
        ,Txref::fromTxOutputN($obj->{'tx_output_n'})
        ,Txref::fromValue($obj->{'value'})
        ,Txref::fromRefBalance($obj->{'ref_balance'})
        ,Txref::fromConfirmations($obj->{'confirmations'})
        ,Txref::fromConfirmed($obj->{'confirmed'})
        ,Txref::fromDoubleSpend($obj->{'double_spend'})
        );
    }

    /**
     * @return Txref
     */
    public static function sample(): Txref {
        return new Txref(
         Txref::sampleTxHash()
        ,Txref::sampleBlockHeight()
        ,Txref::sampleTxInputN()
        ,Txref::sampleTxOutputN()
        ,Txref::sampleValue()
        ,Txref::sampleRefBalance()
        ,Txref::sampleConfirmations()
        ,Txref::sampleConfirmed()
        ,Txref::sampleDoubleSpend()
        );
    }
}
