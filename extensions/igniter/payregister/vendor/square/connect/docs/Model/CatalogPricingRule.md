# CatalogPricingRule

### Description

Defines how prices are modified or set for items that match the pricing rule during the active time period.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | User-defined name for the pricing rule. For example, \&quot;Buy one get one free\&quot; or \&quot;10% off\&quot;. | [optional] 
**time_period_ids** | getTimePeriodIds() | setTimePeriodIds($value) | **string[]** | A list of unique IDs for the catalog time periods when this pricing rule is in effect. If left unset, the pricing rule is always in effect. | [optional] 
**discount_id** | getDiscountId() | setDiscountId($value) | **string** | Unique ID for the &#x60;CatalogDiscount&#x60; to take off the price of all matched items. | [optional] 
**match_products_id** | getMatchProductsId() | setMatchProductsId($value) | **string** | Unique ID for the &#x60;CatalogProductSet&#x60; that will be matched by this rule. A match rule matches within the entire cart. A match rule can match multiple times in the cart. If no &#x60;ProductSet&#x60; is present, the rule will match all products. | [optional] 
**apply_products_id** | getApplyProductsId() | setApplyProductsId($value) | **string** | __Deprecated__: Please use the &#x60;exclude_products_id&#x60; field to apply an exclude set instead. Exclude sets allow better control over quantity ranges and offer more flexibility for which matched items receive a discount.  &#x60;CatalogProductSet&#x60; to apply the pricing to. An apply rule matches within the subset of the cart that fits the match rules (the match set). An apply rule can only match once in the match set. If not supplied, the pricing will be applied to all products in the match set. Other products retain their base price, or a price generated by other rules. | [optional] [deprecated]
**exclude_products_id** | getExcludeProductsId() | setExcludeProductsId($value) | **string** | &#x60;CatalogProductSet&#x60; to exclude from the pricing rule. An exclude rule matches within the subset of the cart that fits the match rules (the match set). An exclude rule can only match once in the match set. If not supplied, the pricing will be applied to all products in the match set. Other products retain their base price, or a price generated by other rules. | [optional] 
**valid_from_date** | getValidFromDate() | setValidFromDate($value) | **string** | Represents the date the Pricing Rule is valid from. Represented in RFC3339 full-date format (YYYY-MM-DD). | [optional] 
**valid_from_local_time** | getValidFromLocalTime() | setValidFromLocalTime($value) | **string** | Represents the local time the pricing rule should be valid from. Represented in RFC3339 partial-time format (HH:MM:SS). Partial seconds will be truncated. | [optional] 
**valid_until_date** | getValidUntilDate() | setValidUntilDate($value) | **string** | Represents the date the Pricing Rule is valid until. Represented in RFC3339 full-date format (YYYY-MM-DD). | [optional] 
**valid_until_local_time** | getValidUntilLocalTime() | setValidUntilLocalTime($value) | **string** | Represents the local time the pricing rule should be valid until. Represented in RFC3339 partial-time format (HH:MM:SS). Partial seconds will be truncated. | [optional] 
**exclude_strategy** | getExcludeStrategy() | setExcludeStrategy($value) | **string** | If an &#x60;exclude_products_id&#x60; was given, controls which subset of matched products is excluded from any discounts.  Default value: &#x60;LEAST_EXPENSIVE&#x60; See [ExcludeStrategy](#type-excludestrategy) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

