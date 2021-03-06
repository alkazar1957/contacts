<?php

class ContactCategoriesSeeder extends CategoriesTableBaseArraySeeder
{
    /**
     * Return an array of nodes.
     *
     * Over-ride this function in your real seeder class.
     *
     * @return array
     */
    protected function getNodes()
    {
        /**
         * The types of categories in your site, e.g. Products, Blog etc.
         *
         * Replace this with whatever you want in your initial seeder.  Note
         * the structure of each node -- node_name => children where children
         * must be an array.
         */
        return [
            'Contact Types' => [
                'Main'              => [],
                'Extra'             => [],
                'Lead'              => [],
                'Potential'         => [],
                'Account'           => [],
                'Contact'           => [],
                'Member'            => [],
                'Customer'          => [],
                'Vendor'            => [],
            ],
        ];
    }
}
