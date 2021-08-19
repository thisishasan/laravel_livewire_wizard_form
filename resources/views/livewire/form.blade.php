<form wire:submit.prevent="save">
    <div class="row">
        <div class="col-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        @if($step_no == 1)
            <div class="col-12"><h2>Sender Information</h2></div>
            <div class="form-group col-6">
                <label for="sender_name">Sender Name</label>
                <input type="text" class="form-control" id="sender_name" wire:model="sender_name">
                @error('sender_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="sender_company">Sender Company</label>
                <input type="text" class="form-control" id="sender_company" wire:model="sender_company">
                @error('sender_company') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="sender_address">Sender Address</label>
                <input type="text" class="form-control" id="sender_address" wire:model="sender_address">
                @error('sender_address') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="sender_city">Sender City</label>
                <input type="text" class="form-control" id="sender_city" wire:model="sender_city">
                @error('sender_city') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="sender_state">Sender State</label>
                <input type="text" class="form-control" id="sender_state" wire:model="sender_state">
                @error('sender_state') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="sender_country">Sender Country</label>
                <input type="text" class="form-control" id="sender_country" wire:model="sender_country">
                @error('sender_country') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="sender_phone">Sender Phone</label>
                <input type="text" class="form-control" id="sender_phone" wire:model="sender_phone">
                @error('sender_phone') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="sender_zipcode">Sender Zip Code</label>
                <input type="text" class="form-control" id="sender_zipcode" wire:model="sender_zipcode">
                @error('sender_zipcode') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="sender_email">Sender Email</label>
                <input type="text" class="form-control" id="sender_email" wire:model="sender_email">
                @error('sender_email') <span class="error">{{ $message }}</span> @enderror
            </div>
        @endif

        @if($step_no == 2)
            <div class="col-12"><h2>Consignee Information</h2></div>
            <div class="form-group col-6">
                <label for="consignee_name">Consignee Name</label>
                <input type="text" class="form-control" id="consignee_name" wire:model="consignee_name">
                @error('consignee_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="consignee_company">Consignee Company</label>
                <input type="text" class="form-control" id="consignee_company" wire:model="consignee_company">
                @error('consignee_company') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="consignee_address">Consignee Address</label>
                <input type="text" class="form-control" id="consignee_address" wire:model="consignee_address">
                @error('consignee_address') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="consignee_city">Consignee City</label>
                <input type="text" class="form-control" id="consignee_city" wire:model="consignee_city">
                @error('consignee_city') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="consignee_state">Consignee State</label>
                <input type="text" class="form-control" id="consignee_state" wire:model="consignee_state">
                @error('consignee_state') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="consignee_country">Consignee Country</label>
                <input type="text" class="form-control" id="consignee_country" wire:model="consignee_country">
                @error('consignee_country') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="consignee_phone">Consignee Phone</label>
                <input type="text" class="form-control" id="consignee_phone" wire:model="consignee_phone">
                @error('consignee_phone') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="consignee_zipcode">Consignee Zip Code</label>
                <input type="text" class="form-control" id="consignee_zipcode" wire:model="consignee_zipcode">
                @error('consignee_zipcode') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="consignee_email">Consignee Email</label>
                <input type="text" class="form-control" id="consignee_email" wire:model="consignee_email">
                @error('consignee_email') <span class="error">{{ $message }}</span> @enderror
            </div>
        @endif

        @if($step_no == 3)
            <div class="col-12"><h2>Package Information</h2></div>
            <div class="form-group col-6">
                <label for="packages">Packages</label>
                <input type="text" class="form-control" id="packages" wire:model="packages">
                @error('packages') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="packaging">Packaging</label>
                <input type="text" class="form-control" id="packaging" wire:model="packaging">
                @error('packaging') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="service_type">Service Type</label>
                <input type="text" class="form-control" id="service_type" wire:model="service_type">
                @error('service_type') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" wire:model="description">
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="value">Value</label>
                <input type="text" class="form-control" id="value" wire:model="value">
                @error('value') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" id="weight" wire:model="weight">
                @error('weight') <span class="error">{{ $message }}</span> @enderror
            </div>
        @endif

        @if($step_no == 4)
            <div class="col-12"><h2>Overview</h2></div>
            <div class="col-12"><h3>Sender Information</h3></div>
            <div class="form-group col-6">
                <label for="sender_name">Sender Name</label>
                <input type="text" class="form-control" id="sender_name" wire:model="sender_name">
            </div>
            <div class="form-group col-6">
                <label for="sender_company">Sender Company</label>
                <input type="text" class="form-control" id="sender_company" wire:model="sender_company">
            </div>
            <div class="form-group col-6">
                <label for="sender_address">Sender Address</label>
                <input type="text" class="form-control" id="sender_address" wire:model="sender_address">
            </div>
            <div class="form-group col-6">
                <label for="sender_city">Sender City</label>
                <input type="text" class="form-control" id="sender_city" wire:model="sender_city">
            </div>
            <div class="form-group col-6">
                <label for="sender_state">Sender State</label>
                <input type="text" class="form-control" id="sender_state" wire:model="sender_state">
            </div>
            <div class="form-group col-6">
                <label for="sender_country">Sender Country</label>
                <input type="text" class="form-control" id="sender_country" wire:model="sender_country">
            </div>
            <div class="form-group col-6">
                <label for="sender_phone">Sender Phone</label>
                <input type="text" class="form-control" id="sender_phone" wire:model="sender_phone">
            </div>
            <div class="form-group col-6">
                <label for="sender_zipcode">Sender Zip Code</label>
                <input type="text" class="form-control" id="sender_zipcode" wire:model="sender_zipcode">

            </div>
            <div class="form-group col-6">
                <label for="sender_email">Sender Email</label>
                <input type="text" class="form-control" id="sender_email" wire:model="sender_email">
            </div>
            <div class="col-12"><h3>Consignee Information</h3></div>
            <div class="form-group col-6">
                <label for="consignee_name">Consignee Name</label>
                <input type="text" class="form-control" id="consignee_name" wire:model="consignee_name">
            </div>
            <div class="form-group col-6">
                <label for="consignee_company">Consignee Company</label>
                <input type="text" class="form-control" id="consignee_company" wire:model="consignee_company">
            </div>
            <div class="form-group col-6">
                <label for="consignee_address">Consignee Address</label>
                <input type="text" class="form-control" id="consignee_address" wire:model="consignee_address">
            </div>
            <div class="form-group col-6">
                <label for="consignee_city">Consignee City</label>
                <input type="text" class="form-control" id="consignee_city" wire:model="consignee_city">
            </div>
            <div class="form-group col-6">
                <label for="consignee_state">Consignee State</label>
                <input type="text" class="form-control" id="consignee_state" wire:model="consignee_state">
            </div>
            <div class="form-group col-6">
                <label for="consignee_country">Consignee Country</label>
                <input type="text" class="form-control" id="consignee_country" wire:model="consignee_country">
            </div>
            <div class="form-group col-6">
                <label for="consignee_phone">Consignee Phone</label>
                <input type="text" class="form-control" id="consignee_phone" wire:model="consignee_phone">
            </div>
            <div class="form-group col-6">
                <label for="consignee_zipcode">Consignee Zip Code</label>
                <input type="text" class="form-control" id="consignee_zipcode" wire:model="consignee_zipcode">
            </div>
            <div class="form-group col-6">
                <label for="consignee_email">Consignee Email</label>
                <input type="text" class="form-control" id="consignee_email" wire:model="consignee_email">
            </div>
            <div class="col-12"><h3>Package Information</h3></div>
            <div class="form-group col-6">
                <label for="packages">Packages</label>
                <input type="text" class="form-control" id="packages" wire:model="packages">
            </div>
            <div class="form-group col-6">
                <label for="packaging">Packaging</label>
                <input type="text" class="form-control" id="packaging" wire:model="packaging">
            </div>
            <div class="form-group col-6">
                <label for="service_type">Service Type</label>
                <input type="text" class="form-control" id="service_type" wire:model="service_type">
            </div>
            <div class="form-group col-6">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" wire:model="description">
            </div>
            <div class="form-group col-6">
                <label for="value">Value</label>
                <input type="text" class="form-control" id="value" wire:model="value">
            </div>
            <div class="form-group col-6">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" id="weight" wire:model="weight">
            </div>
        @endif


        <div class="form-group col-12">
            @if($step_no != 1)
                <button class="btn btn-primary" type="button" wire:click="back">Back</button>
            @endif

            @if($step_no >= 1 && $step_no < 4)
                <button class="btn btn-primary" type="submit">Next</button>
            @endif

            @if($step_no == 4)
                <button class="btn btn-primary" type="submit">Save</button>
            @endif
        </div>
    </div>
</form>
