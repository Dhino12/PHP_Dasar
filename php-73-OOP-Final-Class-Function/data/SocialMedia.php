<?php 

class SocialMedia
{
    public string $name;
}

// Final class adalah class yang sudah final / tidak bisa diwariskan lagi
final class Facebook extends SocialMedia 
{
     
}

// error =============
// class FakeFacbook extends Facebook 
// {

// }

class Twitter extends SocialMedia
{
    // Final Function adalah function yang tidak bisa di override lagi oleh turunannya
    final public function login(string $username, string $password)
    {
        
    }
}


class FakeTwitter extends Twitter
{
    // error =============
    // public function login(string $username, string $password)
    // {
        
    // }
}