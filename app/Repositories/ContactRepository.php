<?php
/**
 * Created by PhpStorm.
 * User: anish
 * Date: 7/20/17
 * Time: 8:19 PM
 */

namespace App\Repositories;


use App\Contact;

class ContactRepository
{
    /**
     * @var Contact
     */
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function getContacts() {
        return $this->contact->orderBy('created_at', 'DESC')->paginate(10);
    }
}