<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\ContactRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    /**
     * @var ContactRepository
     */
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository){

        $this->contactRepository = $contactRepository;
    }

    public function index() {
        $contacts = $this->contactRepository->getContacts();

        return view('backend.contacts.list', ['contacts' => $contacts]);
    }


}
