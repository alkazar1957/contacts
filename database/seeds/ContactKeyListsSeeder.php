<?php

use Illuminate\Database\Seeder;
use Delatbabel\SiteConfig\Models\Config as ConfigModel;
use Delatbabel\Keylists\Models\Keytype;
use Delatbabel\Keylists\Models\Keyvalue;

class ContactKeyListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Base configuration data
        ConfigModel::create([
            'group'         => 'config',
            'key'           => 'geocode_api_key',
            'value'         => 'GET-YOUR-OWN-API-KEY',
            'type'          => 'string',
        ]);

        //
        // Create all of the address types
        //
        /** @var Keytype $keytype */
        $keytype = Keytype::create([
            'name'          => 'address-types',
            'description'   => 'Address Types',
        ]);

        Keyvalue::create([
            'keytype_id'    => $keytype->id,
            'keyvalue'      => 'billing',
            'keyname'       => 'Billing Address',
        ]);
        Keyvalue::create([
            'keytype_id'    => $keytype->id,
            'keyvalue'      => 'shipping',
            'keyname'       => 'Shipping Address',
        ]);
        Keyvalue::create([
            'keytype_id'    => $keytype->id,
            'keyvalue'      => 'contact',
            'keyname'       => 'Contact Address',
        ]);
        Keyvalue::create([
            'keytype_id'    => $keytype->id,
            'keyvalue'      => 'head-office',
            'keyname'       => 'Head Office Address',
        ]);
        Keyvalue::create([
            'keytype_id'    => $keytype->id,
            'keyvalue'      => 'branch-office',
            'keyname'       => 'Branch Office Address',
        ]);

        //
        // Create all of the address statuses
        //
        /** @var Keytype $keytype */
        $keytype = Keytype::create([
            'name'          => 'address-statuses',
            'description'   => 'Address Statuses',
        ]);

        Keyvalue::create([
            'keytype_id'    => $keytype->id,
            'keyvalue'      => 'current',
            'keyname'       => 'Current Address',
        ]);
        Keyvalue::create([
            'keytype_id'    => $keytype->id,
            'keyvalue'      => 'previous',
            'keyname'       => 'Previous Address',
        ]);
        Keyvalue::create([
            'keytype_id'    => $keytype->id,
            'keyvalue'      => 'future',
            'keyname'       => 'Future Address',
        ]);
    }
}