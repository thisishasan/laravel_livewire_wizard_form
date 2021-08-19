<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ship;

class Form extends Component
{
    public $ship;
    public $step_no = 1;

    public $sender_name,
        $sender_company,
        $sender_address,
        $sender_city,
        $sender_state,
        $sender_country,
        $sender_phone,
        $sender_zipcode,
        $sender_email,
        $consignee_name,
        $consignee_company,
        $consignee_address,
        $consignee_city,
        $consignee_state,
        $consignee_country,
        $consignee_phone,
        $consignee_zipcode,
        $consignee_email,
        $packages,
        $packaging,
        $service_type,
        $description,
        $value,
        $weight;

    public function render()
    {
        return view('livewire.form');
    }

    public function save()
    {
        if ($this->step_no == 1) {
            $rules = [
                'sender_name' => ['required'],
                'sender_company' => ['required'],
                'sender_address' => ['required'],
                'sender_city' => ['required'],
                'sender_state' => ['required'],
                'sender_country' => ['required'],
                'sender_phone' => ['required'],
                'sender_zipcode' => ['required'],
                'sender_email' => ['required','email'],
            ];
        }

        if ($this->step_no == 2) {
            $rules = [
                'consignee_name' => ['required'],
                'consignee_company' => ['required'],
                'consignee_address' => ['required'],
                'consignee_city' => ['required'],
                'consignee_state' => ['required'],
                'consignee_country' => ['required'],
                'consignee_phone' => ['required'],
                'consignee_zipcode' => ['required'],
                'consignee_email' => ['required','email'],
            ];
        }

        if ($this->step_no == 3) {
            $rules = [
                'packages' => ['required'],
                'packaging' => ['required'],
                'service_type' => ['required'],
                'description' => ['required'],
                'value' => ['required'],
                'weight' => ['required'],
            ];
        }

        if (isset($rules)) {
            $this->validate($rules);
        }


        if ($this->step_no >= 1 && $this->step_no < 5) {
            $this->step_no++;
        }

        if ($this->step_no == 5) {
            $this->ship = Ship::create([
                'sender_name' => $this->sender_name,
                'sender_company' => $this->sender_company,
                'sender_address' => $this->sender_address,
                'sender_city' => $this->sender_city,
                'sender_state' => $this->sender_state,
                'sender_country' => $this->sender_country,
                'sender_phone' => $this->sender_phone,
                'sender_zipcode' => $this->sender_zipcode,
                'sender_email' => $this->sender_email,
                'consignee_name' => $this->consignee_name,
                'consignee_company' => $this->consignee_company,
                'consignee_address' => $this->consignee_address,
                'consignee_city' => $this->consignee_city,
                'consignee_state' => $this->consignee_state,
                'consignee_country' => $this->consignee_country,
                'consignee_phone' => $this->consignee_phone,
                'consignee_zipcode' => $this->consignee_zipcode,
                'consignee_email' => $this->consignee_email,
                'packages' => $this->packages,
                'packaging' => $this->packaging,
                'service_type' => $this->service_type,
                'description' => $this->description,
                'value' => $this->value,
                'weight' => $this->weight,
            ]);

            $this->resetInput();
            $this->step_no = 1;
            session()->flash('message', 'Success');
        }

    }

    public function resetInput()
    {
        $this->sender_name = null;
        $this->sender_company = null;
        $this->sender_address = null;
        $this->sender_city = null;
        $this->sender_state = null;
        $this->sender_country = null;
        $this->sender_phone = null;
        $this->sender_zipcode = null;
        $this->sender_email = null;
        $this->consignee_name = null;
        $this->consignee_company = null;
        $this->consignee_address = null;
        $this->consignee_city = null;
        $this->consignee_state = null;
        $this->consignee_country = null;
        $this->consignee_phone = null;
        $this->consignee_zipcode = null;
        $this->consignee_email = null;
        $this->packages = null;
        $this->packaging = null;
        $this->service_type = null;
        $this->description = null;
        $this->value = null;
        $this->weight = null;
    }

    public function back(){
        if($this->step_no > 1){
            $this->step_no = $this->step_no - 1;
        }
    }
}
