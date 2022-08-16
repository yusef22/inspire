<?php
namespace Yusef22\Inspire\Controllers;

use Illuminate\Http\Request;
use Yusef22\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
