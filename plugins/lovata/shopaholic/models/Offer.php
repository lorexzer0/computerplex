<?php namespace Lovata\Shopaholic\Models;

use Backend\Models\ImportModel;

use October\Rain\Database\Traits\Validation;
use October\Rain\Database\Traits\SoftDelete;
use October\Rain\Database\Traits\Purgeable;

use Kharanenka\Scope\ActiveField;
use Kharanenka\Scope\CodeField;
use Kharanenka\Scope\ExternalIDField;
use Kharanenka\Scope\NameField;

use Lovata\Toolbox\Traits\Helpers\TraitCached;
use Lovata\Toolbox\Traits\Helpers\PriceHelperTrait;

use Lovata\Shopaholic\Classes\Item\OfferItem;
use Lovata\Shopaholic\Classes\Helper\CurrencyHelper;
use Lovata\Shopaholic\Classes\Import\ImportOfferModelFromCSV;

/**
 * Class Offer
 * @package Lovata\Shopaholic\Models
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * @mixin \October\Rain\Database\Builder
 * @mixin \Eloquent
 *
 * @property                                                                                               $id
 * @property bool                                                                                          $active
 * @property string                                                                                        $name
 * @property string                                                                                        $code
 * @property string                                                                                        $external_id
 * @property string                                                                                        $preview_text
 * @property string                                                                                        $description
 * @property string                                                                                        $price
 * @property float                                                                                         $price_value
 * @property string                                                                                        $discount_price
 * @property float                                                                                         $discount_price_value
 * @property string                                                                                        $old_price
 * @property float                                                                                         $old_price_value
 * @property integer                                                                                       $quantity
 * @property int                                                                                           $product_id
 * @property \October\Rain\Argon\Argon                                                                     $created_at
 * @property \October\Rain\Argon\Argon                                                                     $updated_at
 * @property \October\Rain\Argon\Argon                                                                     $deleted_at
 *
 * @property float                                                                                         $tax_percent
 *
 * Relations
 * @property \System\Models\File                                                                           $preview_image
 * @property \October\Rain\Database\Collection|\System\Models\File[]                                       $images
 *
 * @property \October\Rain\Database\Collection|\Lovata\Shopaholic\Models\Price[]                           $price_link
 * @method \October\Rain\Database\Relations\MorphMany|Price price_link()
 * @property \Lovata\Shopaholic\Models\Price                                                               $main_price
 * @method \October\Rain\Database\Relations\MorphOne|Price main_price()
 *
 * @property \Lovata\Shopaholic\Models\Product                                                             $product
 * @method \October\Rain\Database\Relations\BelongsTo|Product product()
 *
 * @method static $this getByProduct(int $iProductID)
 * @method static $this getByQuantity(int $iCount, string $sCondition = '=')
 * @method static $this getByPrice(int $fPrice, string $sCondition = '=')
 * @method static $this getByOldPrice(int $fPrice, string $sCondition = '=')
 *
 * Properties for Shopaholic
 * @see     \Lovata\PropertiesShopaholic\Classes\Event\OfferModelHandler::addPropertyMethods
 * @property array                                                                                         $property
 *
 * @property \October\Rain\Database\Collection|\Lovata\PropertiesShopaholic\Models\PropertyValueLink[]     $property_value
 * @method static \October\Rain\Database\Relations\MorphMany|\Lovata\PropertiesShopaholic\Models\PropertyValueLink property_value()
 *
 * Discounts for Shopaholic
 * @property int                                                                                           $discount_id
 * @property float                                                                                         $discount_value
 * @property string                                                                                        $discount_type
 *
 * Discounts for Shopaholic
 * @property \Lovata\DiscountsShopaholic\Models\Discount                                                   $active_discount
 * @method \October\Rain\Database\Relations\BelongsTo|\Lovata\DiscountsShopaholic\Models\Discount active_discount()
 *
 * @property \October\Rain\Database\Collection|\Lovata\DiscountsShopaholic\Models\Discount[]               $discount
 * @method static \October\Rain\Database\Relations\BelongsToMany|\Lovata\DiscountsShopaholic\Models\Discount discount()
 *
 * Coupons for Shopaholic
 * @property \October\Rain\Database\Collection|\Lovata\CouponsShopaholic\Models\CouponGroup[]              $coupon_group
 * @method static \October\Rain\Database\Relations\BelongsToMany|\Lovata\CouponsShopaholic\Models\CouponGroup coupon_group()
 *
 * Campaign for Shopaholic
 * @property \October\Rain\Database\Collection|\Lovata\CampaignsShopaholic\Models\Campaign[]               $campaign
 * @method static \October\Rain\Database\Relations\BelongsToMany|\Lovata\CampaignsShopaholic\Models\Campaign campaign()
 *
 * Digital product for Shopaholic
 * @property int                                                                                           $digital_product_period_id
 * @property \Lovata\DigitalProductsShopaholic\Models\DigitalProductPeriod                                 $digital_product_period
 * @method static \October\Rain\Database\Relations\BelongsTo|\Lovata\DigitalProductsShopaholic\Models\DigitalProductPeriod digital_product_period()
 *
 * YandexMarket for Shopaholic
 * @property \System\Models\File                                                                           $preview_image_yandex
 * @property \October\Rain\Database\Collection|\System\Models\File[]                                       $images_yandex
 *
 * Facebook for Shopaholic
 * @property \System\Models\File                                                                           $preview_image_facebook
 * @property \October\Rain\Database\Collection|\System\Models\File[]                                       $images_facebook
 *
 * VKontakte for Shopaholic
 * @property \System\Models\File                                                                           $preview_image_vkontakte
 * @property \October\Rain\Database\Collection|\System\Models\File[]                                       $images_vkontakte
 */
class Offer extends ImportModel
{
    use Validation;
    use SoftDelete;
    use Purgeable;
    use ActiveField;
    use NameField;
    use CodeField;
    use ExternalIDField;
    use PriceHelperTrait;
    use TraitCached;

    public $table = 'lovata_shopaholic_offers';

    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $translatable = ['name', 'preview_text', 'description'];

    public $rules = ['name' => 'required'];

    public $attributeNames = [
        'name' => 'lovata.toolbox::lang.field.name',
    ];

    public $attachOne = [
        'preview_image' => 'System\Models\File',
        'import_file'   => [\System\Models\File::class, 'public' => false],
    ];
    public $attachMany = ['images' => 'System\Models\File'];
    public $belongsTo = ['product' => [Product::class]];
    public $morphMany = [
        'price_link' => [
            Price::class,
            'name'       => 'item',
            'conditions' => 'price_type_id is NOT NULL',
        ],
    ];
    public $morphOne = [
        'main_price' => [
            Price::class,
            'name'       => 'item',
            'conditions' => 'price_type_id is NULL',
        ],
    ];
    public $belongsToMany = [];

    public $fillable = [
        'active',
        'name',
        'code',
        'product_id',
        'external_id',
        'price',
        'old_price',
        'price_list',
        'quantity',
        'preview_text',
        'description',
    ];

    public $cached = [
        'id',
        'active',
        'product_id',
        'name',
        'code',
        'preview_text',
        'preview_image',
        'description',
        'images',
        'price_list',
        'quantity',
    ];

    public $dates = ['created_at', 'updated_at', 'deleted_at'];
    public $appends = [
        'price',
        'price_value',
        'old_price',
        'old_price_value',
        'discount_price',
        'discount_price_value',
        'price_list',
    ];
    public $purgeable = [];
    public $casts = [];

    public $arPriceField = ['price', 'old_price', 'discount_price'];

    public $visible = [];
    public $hidden = [];

    protected $fSavedPrice = null;
    protected $fSavedOldPrice = null;
    protected $arSavedPriceList = [];
    protected $iActivePriceType = null;
    protected $sActiveCurrency = null;

    /**
     * Set active price type
     * @param int $iPriceTypeID
     * @return Offer
     */
    public function setActivePriceType($iPriceTypeID)
    {
        $this->iActivePriceType = $iPriceTypeID;

        return $this;
    }

    /**
     * Set active currency code
     * @param string $sActiveCurrencyCode
     * @return Offer
     */
    public function setActiveCurrency($sActiveCurrencyCode)
    {
        $this->sActiveCurrency = $sActiveCurrencyCode;

        return $this;
    }

    /**
     * Get price object
     * @param int $iPriceTypeID
     * @return \Illuminate\Database\Eloquent\Model|Price|null
     */
    public function getPriceObject($iPriceTypeID = null)
    {
        if (empty($iPriceTypeID)) {
            $obPriceModel = $this->main_price;
        } else {
            $obPriceModel = $this->price_link->where('price_type_id', $iPriceTypeID)->first();
        }

        return $obPriceModel;
    }

    /**
     * After save model event
     */
    public function afterSave()
    {
        $this->savePriceValue(null, $this->fSavedPrice, $this->fSavedOldPrice);
        $this->savePriceListValue();
    }

    /**
     * Set quantity attribute value
     * @param int $iQuantity
     */
    public function setQuantityAttribute($iQuantity)
    {
        $iQuantity = (int) $iQuantity;
        if (empty($iQuantity) || $iQuantity < 0) {
            $iQuantity = 0;
        }

        $this->attributes['quantity'] = $iQuantity;
    }

    /**
     * Get element by product ID
     * @param Offer  $obQuery
     * @param string $sData
     *
     * @return Offer
     */
    public function scopeGetByProduct($obQuery, $sData)
    {
        if (!empty($sData)) {
            $obQuery->where('product_id', $sData);
        }

        return $obQuery;
    }

    /**
     * Get by quantity
     * @param Offer  $obQuery
     * @param string $sData
     * @param string $sCondition
     *
     * @return Offer
     */
    public function scopeGetByQuantity($obQuery, $sData, $sCondition = '=')
    {
        if (empty($sData)) {
            $sData = 0;
        }

        if (!empty($sCondition)) {
            $obQuery->where('quantity', $sCondition, $sData);
        }

        return $obQuery;
    }

    /**
     * Import item list from CSV file
     * @param array $arElementList
     * @param null  $sSessionKey
     * @throws \Throwable
     */
    public function importData($arElementList, $sSessionKey = null)
    {
        if (empty($arElementList)) {
            return;
        }

        $obImport = new ImportOfferModelFromCSV();
        $obImport->setDeactivateFlag();

        foreach ($arElementList as $iKey => $arImportData) {
            $obImport->import($arImportData);
            $sResultMethod = $obImport->getResultMethod();
            if (in_array($sResultMethod, ['logUpdated', 'logCreated'])) {
                $this->$sResultMethod();
            } else {
                $sErrorMessage = $obImport->getResultError();
                $this->$sResultMethod($iKey, $sErrorMessage);
            }
        }

        $obImport->deactivateElements();
    }

    /**
     * Get active price type
     * @return int|null
     */
    public function getActivePriceType()
    {
        return $this->iActivePriceType;
    }

    /**
     * Get active currency code
     * @return int|null
     */
    public function getActiveCurrency()
    {
        return $this->sActiveCurrency;
    }

    /**
     * Get price_value attribute
     * @return float
     */
    protected function getPriceValueAttribute()
    {
        $obPriceModel = $this->getPriceObject($this->getActivePriceType());
        $this->setActivePriceType(null);

        if (empty($obPriceModel)) {
            return 0;
        }

        $fPrice = $obPriceModel->price_value;
        $fPrice = CurrencyHelper::instance()->convert($fPrice, $this->getActiveCurrency());

        return $fPrice;
    }

    /**
     * Get old_price_value attribute
     * @return float
     */
    protected function getOldPriceValueAttribute()
    {
        $obPriceModel = $this->getPriceObject($this->getActivePriceType());
        $this->setActivePriceType(null);

        if (empty($obPriceModel)) {
            return 0;
        }

        $fPrice = $obPriceModel->old_price_value;
        $fPrice = CurrencyHelper::instance()->convert($fPrice, $this->getActiveCurrency());
        $this->setActiveCurrency(null);

        return $fPrice;
    }

    /**
     * Get discount_price_value attribute
     * @return float
     */
    protected function getDiscountPriceValueAttribute()
    {
        $obPriceModel = $this->getPriceObject($this->getActivePriceType());
        $this->setActivePriceType(null);

        if (empty($obPriceModel)) {
            return 0;
        }

        $fPrice = $obPriceModel->discount_price_value;
        $fPrice = CurrencyHelper::instance()->convert($fPrice, $this->getActiveCurrency());

        return $fPrice;
    }

    /**
     * Get price_list attribute
     * @return array
     */
    protected function getPriceListAttribute()
    {
        $arResult = [];

        foreach ($this->price_link as $obPrice) {
            $arResult[$obPrice->price_type_id] = [
                'price'     => $obPrice->price,
                'old_price' => $obPrice->old_price,
            ];
        }

        return $arResult;
    }

    /**
     * Set price attribute
     * Create or update Price model object
     * @param string|float $sValue
     */
    protected function setPriceAttribute($sValue)
    {
        $this->fSavedPrice = $sValue;
    }

    /**
     * Set old price attribute
     * Create or update Price model object
     * @param string|float $sValue
     */
    protected function setOldPriceAttribute($sValue)
    {
        $this->fSavedOldPrice = $sValue;
    }

    /**
     * Set price list attribute
     * Create or update Price model object
     * @param string|float $arPriceList
     */
    protected function setPriceListAttribute($arPriceList)
    {
        if (empty($arPriceList) || !is_array($arPriceList)) {
            return;
        }

        if (isset($arPriceList[0])) {
            $this->fSavedPrice = array_get($arPriceList[0], 'price');
            $this->fSavedOldPrice = array_get($arPriceList[0], 'old_price');
            unset($arPriceList[0]);
        }

        $this->arSavedPriceList = $arPriceList;
    }

    /**
     * Get tax_percent attribute value
     * @return float
     */
    protected function getTaxPercentAttribute()
    {
        $obOfferItem = OfferItem::make($this->id, $this);

        return $obOfferItem->tax_percent;
    }

    /**
     * Create or update main price object
     * @param int|null $iPriceTypeID
     * @param float    $fPrice
     * @param float    $fOldPrice
     */
    protected function savePriceValue($iPriceTypeID, $fPrice, $fOldPrice)
    {
        $obPriceModel = $this->getPriceObject($iPriceTypeID);
        if (empty($obPriceModel)) {
            $obPriceModel = Price::create([
                'item_id'       => $this->id,
                'item_type'     => static::class,
                'price'         => $fPrice,
                'old_price'     => $fOldPrice,
                'price_type_id' => $iPriceTypeID,
            ]);

            if (empty($iPriceTypeID)) {
                $this->main_price = $obPriceModel;
            } else {
                $this->price_link()->add($obPriceModel);
            }
        } else {
            $obPriceModel->price = $fPrice !== null ? $fPrice : $obPriceModel->price;
            $obPriceModel->old_price = $fOldPrice !== null ? $fOldPrice : $obPriceModel->old_price;
            $obPriceModel->save();
        }
    }

    /**
     * Save additional price list
     */
    protected function savePriceListValue()
    {
        if (empty($this->arSavedPriceList)) {
            return;
        }

        foreach ($this->arSavedPriceList as $iPriceTypeID => $arPriceData) {
            if (empty($iPriceTypeID)) {
                continue;
            }

            $this->savePriceValue($iPriceTypeID, array_get($arPriceData, 'price'), array_get($arPriceData, 'old_price'));
        }
    }
}
