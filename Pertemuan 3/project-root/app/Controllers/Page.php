<?php namespace App\Controllers;
class Page extends BaseController {
public function about()
{
    echo "about page";
}
public function contact()
{
    echo "contact page";
}
public function faqs()
{
    echo "Faqs page";
}
public function tos()
{
    echo "Halaman Term of Service";
}
public function biodata()
    {
        echo "Nama       : Rangga Hermawan";
        echo "<br>NIM    : 4122008";
        echo "<br>Alamat : DukuhKlopo, Peterongan";
        echo "<br>Hobi   : Fotografi";
        echo "<br>E-mail : ranggawan09@gmail.com";
    }
}
