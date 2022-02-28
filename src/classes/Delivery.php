<?php

namespace classes;
use Laravel\ShippingCalculation\interfaces\IFastDelivery;

error_reporting(-1);



class Delivery implements IFastDelivery
{
    protected string $sourceKladr;
    protected string $targetKladr;
    protected float $price = 120;
    protected int $period = 12;
    protected float $weight;
    protected string $type;

    /**
     * @param string $sourceKladr
     * @param string $targetKladr
     * @param float $weight
     * @param string $type
     */
    public function __construct(string $sourceKladr, string $targetKladr, float $weight, string $type)
    {
        $this->sourceKladr = $sourceKladr;
        $this->targetKladr = $targetKladr;
        $this->weight = $weight;
        $this->type = $type;
    }
    public function addDelivery(IFastDelivery $fastDelivery)
    {
        $data =[
            $this->type => [
                'откуда' =>  $this->sourceKladr,
                'куда' =>   $this->targetKladr,
                'вес отправления в кг' => $this->weight,
                'цена' => $this->basePrice(),
                'период' => $this->getPeriod()
            ],
        ];
        return json_encode($data);
    }

    public function basePrice(): float
    {

        if ($this->type == 'slow'){
            return $this->getPrice();
        }
        // TODO: Implement basePrice() method.
        return self::BASE_PRICE;
    }

    /**
     * @return float|int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(IFastDelivery $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getPeriod(): int
    {
        return $this->period;
    }






}