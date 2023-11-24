<?php 
class Producer{
    private int $ID;
    private string $name;
    private int $wallet; //stored in number of cents
    private string $logo_url;
    private string $address;
    private string $email;
    private string $phone;

    function getID(): int{  return $this->ID;}
    function getName(): string{return $this->name;}
    function getWallet(): int{return $this->wallet;}
    function getLogoUrl(): string{return $this->logo_url;}
    function getAddress(): string{return $this->address;}
    function getEmail(): string{return $this->email;}
    function getPhone(): string{return $this->phone;}
    function __construct(int $ID,string $name,int $wallet,string $logo_url,string $address, string $email, string $phone){
        $this->ID = $ID;
        $this->name = $name;
        $this->wallet = $wallet;
        $this->logo_url = $logo_url;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
    }


}

?>