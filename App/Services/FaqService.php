<?php

namespace App\Services;

use App\Models\Faq;

class FaqService {

    public function get($id = null){
        if($id){
            return Faq::select($id);
        } else {
            return Faq::selectAll();
        }
    }
}