<?php namespace Lorex\Computerplexoverride;

use System\Classes\PluginBase;
use Lorex\Computerplexoverride\Models\StorageStatus as StorageStatus;
use Lovata\Shopaholic\Models\Product as Product;
use Lovata\Shopaholic\Classes\Item\ProductItem as ProductItem;
use Lovata\Shopaholic\Controllers\Products as ProductController;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        Product::extend(function ($model) {
            $model->hasOne['storagestatus'] = ['Lorex\Computerplexoverride\Models\StorageStatus'];
        });

        // ProductItem::extend(function ($model) {
        //     $object = [
        //         "storagestatus" => [
        //             'class' => StorageStatus::class,
        //             'field' => 'id',
        //         ]
        //     ];
        //     $model->arRelationList['storagestatus'] = $object['storagestatus'];
        // });
        
        ProductController::extendFormFields(function ($form, $model, $context) {
            if(!$model->exists)
                return;

            if (!$model->storagestatus) {
                $storagestatus = new StorageStatus;
                $model->storagestatus = $storagestatus;
                $model->save();
            }

            $form->addFields([
                'storagestatus[option1]' => [
                    'tab' => 'Raktár Státusz',
                    'label' => 'Raktáron',
                    'type' => 'switch',
                    'comment' => 'Van-e helyileg raktáron?'
                ],
                'storagestatus[option2]' => [
                    'tab' => 'Raktár Státusz',
                    'label' => 'Átvehető a boltban',
                    'type' => 'switch',
                    'comment' => 'Átvehető a boltban?'
                ],
                'storagestatus[option3]' => [
                    'tab' => 'Vaterafutár (FORCE)',
                    'label' => 'Csak vaterafutárral való szállítás!',
                    'type' => 'switch',
                    'comment' => 'Kizárólag akkor lesz eredménye ha a kosárban lévő minden termék rendelkezik a tulajdonsággal.'
                ]
            ]);

            // $form->addTabFields([
            //     'storagestatus[option1]' => [
            //         'tab' => 'Raktár Státusz',
            //         'label' => 'Raktáron',
            //         'type' => 'switch',
            //         'comment' => 'Van-e helyileg raktáron?'
            //     ],
            //     'storagestatus[option2]' => [
            //         'tab' => 'Raktár Státusz',
            //         'label' => 'Átvehető a boltban',
            //         'type' => 'switch',
            //         'comment' => 'Átvehető a boltban?'
            //     ]
            // ]);
        });
    }
}
