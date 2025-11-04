<?php
class TravelOffer
{
    private ?int $id;
    private ?string $title;
    private ?string $destination;
    private ?DateTime $departure_date;
    private ?DateTime $return_date;
    private ?float $price;
    private ?bool $disponibility;
    private ?string $category;

    public function __constructor(?int $id,?string $title,?string $destination,?DateTime $departure_date,?DateTime $return_date,?float $price,?bool $disponibility,?string $category)
    {
        $this->id=$id;
        $this->title=$title;
        $this->destination=$destination;
        $this->departure_date=$departure_date;
        $this->return_date=$return_date;
        $this->price=$price;
        $this->disponibility=$disponibility;
        $this->category=$category;

    }
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(?string $title): void {
        $this->title = $title;
    }

    public function getDestination(): ?string {
        return $this->destination;
    }

    public function setDestination(?string $destination): void {
        $this->destination = $destination;
    }

    public function getDepartureDate(): ?DateTime {
        return $this->departure_date;
    }

    public function setDepartureDate(?DateTime $departure_date): void {
        $this->departure_date = $departure_date;
    }

    public function getReturnDate(): ?DateTime {
        return $this->return_date;
    }

    public function setReturnDate(?DateTime $return_date): void {
        $this->return_date = $return_date;
    }

    public function getPrice(): ?float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function isDisponible(): bool {
        return $this->disponibility;
    }

    public function setDisponible(bool $disponible): void {
        $this->disponibility = $disponible;
    }

    public function getCategory(): string {
        return $this->category;
    }

    public function setCategory(string $category): void {
        $this->category = $category;
    }
}





?>