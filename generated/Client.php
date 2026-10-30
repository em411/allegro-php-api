<?php

declare(strict_types=1);

/*
 * This file is part of em411's Allegro PHP API project.
 *
 * (c) em411 <contact@em411.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Em411\Allegro\Api;

class Client extends Runtime\Client\Client
{
    /**
     * Use this resource to create offer based on product. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-oferte-powiazana-z-produktem" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-list-product-offer" target="_blank">EN</a>. Note that requests may be limited.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleProductOfferResponseV1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateProductOffersBadRequestException
     * @throws Exception\CreateProductOffersUnauthorizedException
     * @throws Exception\CreateProductOffersForbiddenException
     * @throws Exception\CreateProductOffersUnprocessableEntityException
     */
    public function createProductOffers(?Model\SaleProductOfferRequestV1 $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateProductOffers($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve all data of the particular product-offer. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#procesowanie-oferty" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-processing" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleProductOfferResponseV1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetProductOfferBadRequestException
     * @throws Exception\GetProductOfferUnauthorizedException
     * @throws Exception\GetProductOfferForbiddenException
     * @throws Exception\GetProductOfferNotFoundException
     */
    public function getProductOffer(string $offerId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetProductOffer($offerId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to edit offer. This resource allows you to edit each field independently, so use it if you want to change only, for example, the price or the quantity in an offer. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-pojedynczej-oferty" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-single-offer" target="_blank">EN</a>. Note that requests may be limited.
     *
     * @param string $offerId the offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleProductOfferResponseV1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\EditProductOffersBadRequestException
     * @throws Exception\EditProductOffersUnauthorizedException
     * @throws Exception\EditProductOffersForbiddenException
     * @throws Exception\EditProductOffersNotFoundException
     * @throws Exception\EditProductOffersConflictException
     * @throws Exception\EditProductOffersUnprocessableEntityException
     */
    public function editProductOffers(string $offerId, ?Model\SaleProductOfferPatchRequestV1 $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\EditProductOffers($offerId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve selected data of the particular product-offer. The model and functionality is a subset of the full product offer get endpoint (`GET /sale/product-offers/{offerId}`), but it is faster and more reliable. Read more: <a href="../../news/get-sale-product-offers-offerid-parts-pobierz-wybrane-elementy-oferty-aMoB3nZk3Iv" target="_blank">PL</a> / <a href="../../news/get-sale-product-offers-offerid-parts-retrieve-selected-parts-of-the-offer-Pg51yzeAPf3" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "include": array, //Selection of parts intended to retrieve. Multiple parts can be specified at the same time.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SalePartialProductOfferResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPartialProductOfferBadRequestException
     * @throws Exception\GetPartialProductOfferUnauthorizedException
     * @throws Exception\GetPartialProductOfferForbiddenException
     * @throws Exception\GetPartialProductOfferNotFoundException
     */
    public function getPartialProductOffer(string $offerId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPartialProductOffer($offerId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The URI for the resource given by Location header of POST /sale/product-offers and PATCH /sale/product-offers/{offerId}. Use this resource to check processing status of a POST or PATCH request. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#procesowanie-oferty" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-processing" target="_blank">EN</a>.
     *
     * @param string $offerId     offer identifier
     * @param string $operationId operation identifier provided in location header of POST or PATCH request
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleProductOfferStatusResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetProductOfferProcessingStatusBadRequestException
     * @throws Exception\GetProductOfferProcessingStatusUnauthorizedException
     * @throws Exception\GetProductOfferProcessingStatusForbiddenException
     * @throws Exception\GetProductOfferProcessingStatusNotFoundException
     * @throws Exception\GetProductOfferProcessingStatusUnprocessableEntityException
     */
    public function getProductOfferProcessingStatus(string $offerId, string $operationId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetProductOfferProcessingStatus($offerId, $operationId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the list of the seller's offers. You can use different query parameters to filter the list. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-moje-oferty-w-rest-api" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#list-of-offers" target="_blank">EN</a>.
     *
     * @param array{
     *    "offer.id"?: array, //Offer ID.
     *    "name"?: string, //The text to search in the offer title.
     *    "sellingMode.price.amount.gte"?: int, //The lower threshold of price.
     *
     * If additionally a `publication.marketplace` is provided, searches using the price on the given marketplace.
     *    "sellingMode.price.amount.lte"?: int, //The upper threshold of price.
     *
     * If additionally a `publication.marketplace` is provided, searches using the price on the given marketplace.
     *    "sellingMode.priceAutomation.rule.id"?: string, //The ID of price automation rule. Returns offers with given price automation rule ID.
     *
     * If additionally a `publication.marketplace` is provided, searches using the price automation rule on the given marketplace.
     *    "sellingMode.priceAutomation.rule.id.empty"?: bool, //Allows to filter offers by existence of price automation rule ID. Passing 'false' will return offers with any price automation rule, passing 'true' will return offers without any price automation rules.
     *
     * If additionally a `publication.marketplace` is provided, searches using the price automation rule on the given marketplace.
     *    "publication.status"?: array, //The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: `publication.status=INACTIVE&publication.status=ACTIVE` - returns offers with status `INACTIVE` or `ACTIVE`.
     *    "publication.marketplace"?: string, //Either the base marketplace or an additional marketplace of the offer.
     *
     * When passing the parameter `publication.marketplace`, searches for offers with the given marketplace as either its base marketplace or one of its additional marketplaces. When the parameter is omitted, searches for offers with all marketplaces.
     *
     * In addition to searching, passing the parameter also influences the functionality of other query parameter by searching and sorting by data (e.g. price) on the given marketplace.
     *    "sellingMode.format"?: array, //The offer's selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: `sellingMode.format=BUY_NOW&sellingMode.format=ADVERTISEMENT` - returns offers with with format `BUY_NOW` or `ADVERTISEMENT`.
     *    "external.id"?: array, //The ID from the client's external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: `external.id=1233&external.id=1234` - returns offers with ID `1233` or `1234`. Single ID length shouldn't exceed 100 characters.
     *    "delivery.shippingRates.id"?: string, //The ID of shipping rates. Returns offers with given shipping rates ID.
     *    "delivery.shippingRates.id.empty"?: bool, //Allows to filter offers by existence of shipping rates ID.
     *    "sort"?: string, //The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by offer creation time, descending.
     *
     * If additionally a `publication.marketplace` is provided, sorts by price and `stock.sold` using the data on the given marketplace.
     *    "limit"?: int, //The maximum number of offers returned in the response.
     *    "offset"?: int, //Index of the first returned offer from all search results. Maximum sum of offset and limit is 10 000 000.
     *    "category.id"?: string, //The identifier of the category, where you want to search for offers.
     *    "product.id.empty"?: bool, //Allows to filter offers by existence of product ID.
     *    "productizationRequired"?: bool, //Allows to search for offers from categories where productization is required.
     *    "b2b.buyableOnlyByBusiness"?: bool, //Allows to search for offers buyable only by businesses.
     *    "fundraisingCampaign.id"?: string, //ID of the charity fundraising campaign that benefits from this offer.
     *    "fundraisingCampaign.id.empty"?: bool, //Allows to search for charity or commercial offers.
     *    "afterSalesServices.returnPolicy.id"?: string, //The ID of return policy. Returns offers with given return policy ID.
     *    "isFulfillment"?: bool, //Allows to search for offers handled by the Allegro Warehouse (One Fulfillment).
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OffersSearchResultDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\SearchOffersUsingGETBadRequestException
     * @throws Exception\SearchOffersUsingGETForbiddenException
     */
    public function searchOffersUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SearchOffersUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to delete a draft offer. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#szkic-oferty" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#inactive-status" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteOfferUsingDELETEUnauthorizedException
     * @throws Exception\DeleteOfferUsingDELETEForbiddenException
     * @throws Exception\DeleteOfferUsingDELETENotFoundException
     */
    public function deleteOfferUsingDELETE(string $offerId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteOfferUsingDELETE($offerId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to change the Buy Now price in a single offer. Read more: <a href="../../news/mozliwosc-zmiany-ceny-kup-teraz-2YzrKRrr3Sl" target="_blank">PL</a> / <a href="../../news/possibility-to-change-the-buy-it-now-price-q018mq8D2hW" target="_blank">EN</a>.
     *
     * @param string $offerId   the offer identifier
     * @param string $commandId the unique command id generated by you
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ChangePrice|Model\ErrorsHolder|null : \Psr\Http\Message\ResponseInterface)
     */
    public function createChangePriceCommandUsingPUT(string $offerId, string $commandId, ?Model\ChangePriceWithoutOutput $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateChangePriceCommandUsingPUT($offerId, $commandId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Get offer translation for given language or all present. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "language"?: string, //Language for translation to retrieve. If not provided, all translations as well as base content for offer will be returned.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferTranslations|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOfferTranslationUsingGETUnauthorizedException
     * @throws Exception\GetOfferTranslationUsingGETForbiddenException
     * @throws Exception\GetOfferTranslationUsingGETNotFoundException
     */
    public function getOfferTranslationUsingGET(string $offerId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOfferTranslationUsingGET($offerId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Delete single element or entire manual translation. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations" target="_blank">EN</a>.
     *
     * @param string $language language of the translation to delete
     * @param string $offerId  offer identifier
     * @param array{
     *    "element"?: string, //Offer element for which translation should be deleted. If not provided, translations for all elements will be deleted.
     *    "products.id"?: string, //ProductId for which safety information translation should be deleted. If not provided, safety information translations for all products in offer will be deleted.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteManualTranslationUsingDELETEUnauthorizedException
     * @throws Exception\DeleteManualTranslationUsingDELETEForbiddenException
     */
    public function deleteManualTranslationUsingDELETE(string $language, string $offerId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteManualTranslationUsingDELETE($language, $offerId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Update manual translation for offer. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-ofert" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#offer-translations" target="_blank">EN</a>.
     *
     * @param string $language language of the provided translation
     * @param string $offerId  offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateOfferTranslationUsingPATCHUnauthorizedException
     * @throws Exception\UpdateOfferTranslationUsingPATCHForbiddenException
     * @throws Exception\UpdateOfferTranslationUsingPATCHUnprocessableEntityException
     */
    public function updateOfferTranslationUsingPATCH(string $language, string $offerId, ?Model\ManualTranslationUpdateRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateOfferTranslationUsingPATCH($language, $offerId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * This endpoint returns daily statistics collected for a list of advertisements in a given date range for logged user. Read more: <a href="../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#statystyki-wszystkich-ogloszen-sprzedawcy" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#statistics-of-seller-s-classified-ads" target="_blank">EN</a>.
     *
     * @param array{
     *    "date.gte"?: string, //The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months.
     *    "date.lte"?: string, //The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SellerOfferStatsResponseDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ClassifiedSellerOfferStatsGETBadRequestException
     * @throws Exception\ClassifiedSellerOfferStatsGETUnauthorizedException
     * @throws Exception\ClassifiedSellerOfferStatsGETForbiddenException
     * @throws Exception\ClassifiedSellerOfferStatsGETNotFoundException
     * @throws Exception\ClassifiedSellerOfferStatsGETUnprocessableEntityException
     */
    public function classifiedSellerOfferStatsGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ClassifiedSellerOfferStatsGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * This endpoint returns daily statistics collected for a list of advertisements in a given date range. Read more: <a href="../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#statystyki-wybranych-ogloszen" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#statistics-of-selected-classified-ads" target="_blank">EN</a>.
     *
     * @param array{
     *    "offer.id": array, //List of offer Ids, maximum 50 values.
     *    "date.gte"?: string, //The maximum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time. The difference between date.gte and date.lte should be less than 3 months.
     *    "date.lte"?: string, //The minimum date and time from which the events will be fetched in ISO 8601 format. The value should be less than the current date time and greater than date.lte. The difference between date.gte and date.lte should be less than 3 months.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferStatsResponseDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ClassifiedOffersStatsGETBadRequestException
     * @throws Exception\ClassifiedOffersStatsGETUnauthorizedException
     * @throws Exception\ClassifiedOffersStatsGETForbiddenException
     * @throws Exception\ClassifiedOffersStatsGETNotFoundException
     * @throws Exception\ClassifiedOffersStatsGETUnprocessableEntityException
     */
    public function classifiedOffersStatsGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ClassifiedOffersStatsGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve information about the offer listing statuses. You will receive a summary with a number of correctly listed offers and errors. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zestawienie-zadan" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#task-list" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPublicationReportUsingGETUnauthorizedException
     * @throws Exception\GetPublicationReportUsingGETForbiddenException
     * @throws Exception\GetPublicationReportUsingGETNotFoundException
     */
    public function getPublicationReportUsingGET(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPublicationReportUsingGET($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify multiple offers publication at once. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zakonczyc-oferte" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#ending-offers" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ChangePublicationStatusUsingPUTBadRequestException
     * @throws Exception\ChangePublicationStatusUsingPUTUnauthorizedException
     * @throws Exception\ChangePublicationStatusUsingPUTForbiddenException
     * @throws Exception\ChangePublicationStatusUsingPUTNotFoundException
     * @throws Exception\ChangePublicationStatusUsingPUTConflictException
     * @throws Exception\ChangePublicationStatusUsingPUTUnprocessableEntityException
     */
    public function changePublicationStatusUsingPUT(string $commandId, ?Model\PublicationChangeCommandDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ChangePublicationStatusUsingPUT($commandId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve information about the offer statuses on the site (Defaults: limit = 100, offset = 0). Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#asynchroniczne-procesowanie" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#asynchronous-processing" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TaskReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPublicationTasksUsingGETBadRequestException
     * @throws Exception\GetPublicationTasksUsingGETUnauthorizedException
     * @throws Exception\GetPublicationTasksUsingGETForbiddenException
     * @throws Exception\GetPublicationTasksUsingGETNotFoundException
     * @throws Exception\GetPublicationTasksUsingGETUnprocessableEntityException
     */
    public function getPublicationTasksUsingGET(string $commandId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPublicationTasksUsingGET($commandId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve classified packages currently assigned to an offer. Read more: <a href="../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#dodatkowe-opcje-promowania" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#additional-promo-options" target="_blank">EN</a>.
     *
     * @param string $offerId offer ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ClassifiedResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetClassifiedPackagesUsingGETBadRequestException
     * @throws Exception\GetClassifiedPackagesUsingGETUnauthorizedException
     * @throws Exception\GetClassifiedPackagesUsingGETForbiddenException
     * @throws Exception\GetClassifiedPackagesUsingGETNotFoundException
     */
    public function getClassifiedPackagesUsingGET(string $offerId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetClassifiedPackagesUsingGET($offerId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to assign classified packages to an offer. Read more: <a href="../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#dodatkowe-opcje-promowania" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#additional-promo-options" target="_blank">EN</a>.
     *
     * @param string $offerId the offer ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\AssignClassifiedPackagesUsingPUTBadRequestException
     * @throws Exception\AssignClassifiedPackagesUsingPUTUnauthorizedException
     * @throws Exception\AssignClassifiedPackagesUsingPUTForbiddenException
     * @throws Exception\AssignClassifiedPackagesUsingPUTNotFoundException
     * @throws Exception\AssignClassifiedPackagesUsingPUTUnprocessableEntityException
     */
    public function assignClassifiedPackagesUsingPUT(string $offerId, ?Model\ClassifiedPackages $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AssignClassifiedPackagesUsingPUT($offerId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve configurations of classifieds packages for a category. Read more: <a href="../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#lista-pakietow-i-opcji-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#list-of-promo-options" target="_blank">EN</a>.
     *
     * @param array{
     *    "category.id": string, //The category ID.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ClassifiedPackageConfigs|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetClassifiedPackageConfigurationsForCategoryUsingGETBadRequestException
     * @throws Exception\GetClassifiedPackageConfigurationsForCategoryUsingGETUnauthorizedException
     */
    public function getClassifiedPackageConfigurationsForCategoryUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetClassifiedPackageConfigurationsForCategoryUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve the configuration of a classifieds package. Read more: <a href="../../tutorials/jak-wystawic-i-zarzadzac-ogloszeniem-K6r3Z47dKcy#lista-pakietow-i-opcji-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-classified-ads-5Ln0r6wkWs7#list-of-promo-options" target="_blank">EN</a>.
     *
     * @param string $packageId the classifieds package ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ClassifiedPackageConfig|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetClassifiedPackageConfigurationUsingGETBadRequestException
     * @throws Exception\GetClassifiedPackageConfigurationUsingGETUnauthorizedException
     * @throws Exception\GetClassifiedPackageConfigurationUsingGETNotFoundException
     */
    public function getClassifiedPackageConfigurationUsingGET(string $packageId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetClassifiedPackageConfigurationUsingGET($packageId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to receive feedback statistics. Read more: <a href="../../news/nowe-zasoby-ktorymi-pobierzesz-informacje-o-ocenach-ZM9L1WPBbUb" target="_blank">PL</a> / <a href="../../news/new-resources-to-download-sales-feedback-d2VYERBMRiz" target="_blank">EN</a>.
     *
     * @param string $userId the ID of the user
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\UserRatingSummaryResponseV2|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetUserSummaryUsingGETUnauthorizedException
     * @throws Exception\GetUserSummaryUsingGETForbiddenException
     * @throws Exception\GetUserSummaryUsingGETNotFoundException
     */
    public function getUserSummaryUsingGET(string $userId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetUserSummaryUsingGET($userId, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to receive your sales ratings sorted by last change date, starting from the latest. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-informacje-o-ocenie-sprzedazy" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-user-s-ratings-data" target="_blank">EN</a>.
     *
     * @param array{
     *    "recommended"?: string, //Filter by recommended.
     *    "lastChangedAt.gte"?: string, //Last change (creation or latest edition) date time in ISO 8601 format. The lower bound of date time range from which ratings will be fetched.
     *    "lastChangedAt.lte"?: string, //Last change (creation or latest edition) date time in ISO 8601 format. The upper bound of date time range from which ratings will be fetched.
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //The limit of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages. The header is available only for content version 'application/vnd.allegro.beta.v1+json'.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\UserRatingListResponse|Model\UserRatingListResponseVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetUserRatingsUsingGETUnauthorizedException
     * @throws Exception\GetUserRatingsUsingGETForbiddenException
     * @throws Exception\GetUserRatingsUsingGETNotFoundException
     */
    public function getUserRatingsUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetUserRatingsUsingGET($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to receive your sales rating by given rating id. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-informacje-o-ocenie-sprzedazy" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-user-s-ratings-data" target="_blank">EN</a>.
     *
     * @param string $ratingId the ID of the rating
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages. The header is available only for content version 'application/vnd.allegro.beta.v1+json'.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\UserRating|Model\UserRatingVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetUserRatingUsingGETUnauthorizedException
     * @throws Exception\GetUserRatingUsingGETForbiddenException
     * @throws Exception\GetUserRatingUsingGETNotFoundException
     */
    public function getUserRatingUsingGET(string $ratingId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetUserRatingUsingGET($ratingId, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to answer for received rating. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-odpowiedz-na-ocene" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-answer-for-user-rating" target="_blank">EN</a>.
     *
     * @param string $ratingId ID of the rating
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Answer|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\AnswerUserRatingUsingPUTBadRequestException
     * @throws Exception\AnswerUserRatingUsingPUTUnauthorizedException
     * @throws Exception\AnswerUserRatingUsingPUTForbiddenException
     * @throws Exception\AnswerUserRatingUsingPUTNotFoundException
     */
    public function answerUserRatingUsingPUT(string $ratingId, ?Model\UserRatingAnswerRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AnswerUserRatingUsingPUT($ratingId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to request removal of received rating. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-wyslac-prosbe-o-usuniecie-oceny" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-send-a-request-to-remove-user-rating" target="_blank">EN</a>.
     *
     * @param string $ratingId ID of the rating
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Removal|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UserRatingRemovalUsingPUTBadRequestException
     * @throws Exception\UserRatingRemovalUsingPUTUnauthorizedException
     * @throws Exception\UserRatingRemovalUsingPUTForbiddenException
     * @throws Exception\UserRatingRemovalUsingPUTNotFoundException
     */
    public function userRatingRemovalUsingPUT(string $ratingId, ?Model\UserRatingRemovalRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UserRatingRemovalUsingPUT($ratingId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get current sales quality with at most 30 days history. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jakosc-sprzedazy" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#sales-quality" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SalesQualityHistoryResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetSaleQualityUsingGETUnauthorizedException
     * @throws Exception\GetSaleQualityUsingGETForbiddenException
     */
    public function getSaleQualityUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSaleQualityUsingGET($headerParameters), $fetch);
    }

    /**
     * Use this resource when you need basic information about authenticated user. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#informacje-o-uzytkowniku" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#information-about-user" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MeResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\MeGETUnauthorizedException
     * @throws Exception\MeGETForbiddenException
     */
    public function meGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MeGET($headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve a list of groups with additional services available to a given user which you may assign to offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-liste-grup-uslug-dodatkowych-na-koncie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-a-list-of-additional-services-groups-for-the-account" target="_blank">EN</a>.
     *
     * @param array{
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //The limit of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalServicesGroups|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetListOfAdditionalServicesGroupsUsingGETUnauthorizedException
     * @throws Exception\GetListOfAdditionalServicesGroupsUsingGETForbiddenException
     */
    public function getListOfAdditionalServicesGroupsUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetListOfAdditionalServicesGroupsUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a group of additional services. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-nowa-grupe-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-a-new-additional-service-group" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalServicesGroupResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateAdditionalServicesGroupUsingPOSTUnauthorizedException
     * @throws Exception\CreateAdditionalServicesGroupUsingPOSTUnprocessableEntityException
     */
    public function createAdditionalServicesGroupUsingPOST(?Model\AdditionalServicesGroupRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateAdditionalServicesGroupUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * You can fetch page of seller's offer bundles using this endpoint.
     * <br> Paging: <br> To move to next page, specify `page.id` parameter with value obtained in response from previous request. Number of offer bundles on single page can be specified using `limit` parameter.
     * <br> Filtering: <br> Offer bundles can be filtered to bundles which contain offer specified in `offer.id` parameter. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-liste-zestawow-ofert" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-offer-bundles-list" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //Limit of bundles per page.
     *    "offer.id"?: string, //Filter bundles which contains offer.
     *    "page.id"?: string, //ID of page which will be retrieved.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferBundlesDTO|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ListSellersOfferBundlesUsingGETBadRequestException
     * @throws Exception\ListSellersOfferBundlesUsingGETUnauthorizedException
     * @throws Exception\ListSellersOfferBundlesUsingGETForbiddenException
     * @throws Exception\ListSellersOfferBundlesUsingGETUnprocessableEntityException
     */
    public function listSellersOfferBundlesUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListSellersOfferBundlesUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to delete offer bundle by its unique identifier. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-wybrany-zestaw" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-the-selected-offer-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId bundle ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteOfferBundleUsingGETUnauthorizedException
     * @throws Exception\DeleteOfferBundleUsingGETNotFoundException
     */
    public function deleteOfferBundleUsingGET(string $bundleId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteOfferBundleUsingGET($bundleId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve offer bundle by its unique identifier. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-szczegoly-wybranego-zestawu" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-details-of-the-selected-offer-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId bundle ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferBundleDTO|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOfferBundleUsingGETUnauthorizedException
     * @throws Exception\GetOfferBundleUsingGETNotFoundException
     */
    public function getOfferBundleUsingGET(string $bundleId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOfferBundleUsingGET($bundleId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to update discount per marketplaces associated with bundle specified by its unique identifier. This will override currently set discounts for all marketplaces, so the unchanged discounts also must be specified in request. In case discount for marketplace is not specified in request it will be deleted. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#zmien-rabat-przypisany-do-wybranego-zestawu" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#change-the-discount-for-the-selected-offer-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId bundle ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferBundleDTO|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateOfferBundleDiscountUsingPUTBadRequestException
     * @throws Exception\UpdateOfferBundleDiscountUsingPUTUnauthorizedException
     * @throws Exception\UpdateOfferBundleDiscountUsingPUTForbiddenException
     * @throws Exception\UpdateOfferBundleDiscountUsingPUTUnprocessableEntityException
     */
    public function updateOfferBundleDiscountUsingPUT(string $bundleId, ?Model\UpdateOfferBundleDiscountDTO $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateOfferBundleDiscountUsingPUT($bundleId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * You can fetch page of seller's flexible bundles using this endpoint.
     * <br> Paging: <br> To move to next page, specify `page.id` parameter with value obtained in response from previous request. Number of offer bundles on single page can be specified using `limit` parameter.
     * <br> Filtering: <br> Offer bundles can be filtered to bundles which contain offer specified in `offer.id` parameter. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-liste-zestawow-elastycznych" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#list-seller-s-flexible-bundles" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //Limit of bundles per page.
     *    "offer.id"?: string, //Filter bundles which contains offer.
     *    "page.id"?: string, //ID of page which will be retrieved.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FlexibleBundlesListingDTO|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ListSellersFlexibleBundlesUsingGETBadRequestException
     * @throws Exception\ListSellersFlexibleBundlesUsingGETUnauthorizedException
     * @throws Exception\ListSellersFlexibleBundlesUsingGETForbiddenException
     * @throws Exception\ListSellersFlexibleBundlesUsingGETUnprocessableEntityException
     */
    public function listSellersFlexibleBundlesUsingGET(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListSellersFlexibleBundlesUsingGET($queryParameters), $fetch);
    }

    /**
     * You can create flexible bundle using this resource. <br> Requirements: <ul> <li> there are max 6 slots in bundle;</li> <li> order value for each slot must be unique (ranging from 0 to 5);</li> <li> each slot can contain up to 30 offers;</li> <li> all offers in slot must be from the same category leaf (based on assortment's tree);</li> <li> at least one slot has to be marked as entrypoint;</li> <li> offer can be used in bundle only once (cannot be used in multiple slots);</li> <li> only offers active on at least one marketplace can be used;</li> <li> B2B offers cannot be used;</li> <li> age-restricted offers (eg. alcohol) cannot be used;</li> <li> cannot use multiple offers which are representing same product;</li> <li> all offers in bundle have to be 1F or not 1F.</li> </ul> Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#zestawy-elastyczne" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#flexible-bundles" target="_blank">EN</a>.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FlexibleBundleGetDTO|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateFlexibleBundleUsingPOSTBadRequestException
     * @throws Exception\CreateFlexibleBundleUsingPOSTUnauthorizedException
     * @throws Exception\CreateFlexibleBundleUsingPOSTForbiddenException
     * @throws Exception\CreateFlexibleBundleUsingPOSTUnprocessableEntityException
     */
    public function createFlexibleBundleUsingPOST(?Model\FlexibleBundleCreateDTO $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateFlexibleBundleUsingPOST($requestBody), $fetch);
    }

    /**
     * Use this resource to delete flexible bundle by its unique identifier. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-wybrany-zestaw" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#delete-a-selected-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId bundle ID
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteFlexibleBundleUsingDELETEUnauthorizedException
     * @throws Exception\DeleteFlexibleBundleUsingDELETENotFoundException
     */
    public function deleteFlexibleBundleUsingDELETE(string $bundleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteFlexibleBundleUsingDELETE($bundleId), $fetch);
    }

    /**
     * Use this resource to retrieve flexible bundle by its unique identifier. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-szczegoly-wybranego-zestawu" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#get-details-of-a-selected-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId bundle ID
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FlexibleBundleGetDTO|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetFlexibleBundleUsingGETUnauthorizedException
     * @throws Exception\GetFlexibleBundleUsingGETNotFoundException
     */
    public function getFlexibleBundleUsingGET(string $bundleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFlexibleBundleUsingGET($bundleId), $fetch);
    }

    /**
     * You can update flexible bundle using this resource.
     * <br> Requirements: <ul> <li> there are max 6 slots in bundle;</li> <li> order value for each slot must be unique (ranging from 0 to 5);</li> <li> each slot can contain up to 30 offers;</li> <li> all offers in slot must be from the same category leaf (based on assortment's tree);</li> <li> at least one slot has to be marked as entrypoint;</li> <li> offer can be used in bundle only once (cannot be used in multiple slots);</li> <li> only offers active on at least one marketplace can be used;</li> <li> B2B offers cannot be used;</li> <li> age-restricted offers (eg. alcohol) cannot be used;</li> <li> cannot use multiple offers which are representing same product;</li> <li> all offers in bundle have to be 1F or not 1F.</li> </ul> Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#aktualizuj-wybrany-zestaw-elastyczny" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#update-a-selected-flexible-bundle" target="_blank">EN</a>.
     *
     * @param string $bundleId bundle ID
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FlexibleBundleGetDTO|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateFlexibleBundleUsingPUTBadRequestException
     * @throws Exception\UpdateFlexibleBundleUsingPUTUnauthorizedException
     * @throws Exception\UpdateFlexibleBundleUsingPUTForbiddenException
     * @throws Exception\UpdateFlexibleBundleUsingPUTUnprocessableEntityException
     */
    public function updateFlexibleBundleUsingPUT(string $bundleId, ?Model\FlexibleBundleUpdateDTO $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateFlexibleBundleUsingPUT($bundleId, $requestBody), $fetch);
    }

    /**
     * Get a list of promotions defined by the authorized user and filtered by promotion type.
     * <p>Restrictions:</p> <p>Filtering by promotion type is required.</p>
     * <p>Sum of limit and offset must be equal to or lower than 50000. Limit must be equal to or lower than 5000.</p> <p>Example:</p> <p>offset = 49950 and limit = 50 will return promotions</p> <p>offset = 49950 and limit = 51 will return 422 http error</p> <p>offset = 0 and limit = 5000 will return promotions</p> <p>offset = 0 and limit = 5001 will return 422 http error</p>
     * <p>Read more about: Large order discount <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-rabaty" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-large-order-discount" target="_blank">EN</a>, Wholesale price list <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-cenniki" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-wholesale-price-lists" target="_blank">EN</a>, Multipack <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-dostepne-rabaty-ilosciowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-promotional-sets" target="_blank">EN</a>.</p>.
     *
     * @param array{
     *    "limit"?: int, //Limit of promotions per page.
     *    "offset"?: int, //Distance between the beginning of the document and the point from which promotions are returned.
     *    "offer.id"?: string, //Filter by offer id. No promotions with `OFFERS_ASSIGNED_EXTERNALLY` or `ALL_OFFERS` criteria will be returned if this parameter is present.
     *    "promotionType": string, //Filter by promotion type.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SellerRebatesDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ListSellerPromotionsUsingGET1BadRequestException
     * @throws Exception\ListSellerPromotionsUsingGET1UnauthorizedException
     * @throws Exception\ListSellerPromotionsUsingGET1UnprocessableEntityException
     */
    public function listSellerPromotionsUsingGET1(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListSellerPromotionsUsingGET1($queryParameters, $headerParameters), $fetch);
    }

    /**
     * This endpoint creates a new promotion. You can create promotions only if your base marketplace is `allegro-pl`. Created promotions are visible only on the `allegro-pl` marketplace. You can define the following types of promotions:
     * 1. Large order discount <br> Only company users will see and be eligible for this type of promotion. In order to create a large order discount, you also have to be a company user. Furthermore, you are allowed to have only one active order discount at a time. Define a promotion with a single benefit of type **LARGE_ORDER_DISCOUNT** and a single criterion of type **ALL_OFFERS**. The benefit specification should contain a list of order value based discount thresholds. Threshold's order value defines the minimum total value of an order for which the threshold is applicable (`lowerBound`). Threshold's discount defines the discount percentage applied when the threshold is applied. The percentage's fractional part must be equal to 0. Only the highest applicable threshold (if any) will be applied to the total value of the order. A threshold with a higher order value than another threshold in the order discount must also have a higher discount. Large order discount is assigned automatically to all seller's offers. Moreover, it will be assigned to all newly added seller's offers once activated. Please note that it may take some time to propagate this type of promotion to all of your offers. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-rabat" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-large-order-discount" target="_blank">EN</a>.
     * 2. Wholesale price list <br> Only company users will see and be eligible for this type of promotion. In order to create a wholesale price list, you also have to be a company user. Define a promotion with a single benefit of type **WHOLESALE_PRICE_LIST** and a single criterion of type **OFFERS_ASSIGNED_EXTERNALLY**. The benefit specification should contain a name (it will be visible to you only) and a list of quantity based discount thresholds. Threshold's quantity defines the minimum number of units of an offer for which the threshold is applicable (`lowerBound`). Threshold's discount defines the discount percentage applied when the threshold is applied. The percentage's fractional part must be equal to 0. Only the highest applicable threshold (if any) will be applied to the total price of units of the offer bought. A threshold with a higher quantity than another threshold in the price list must also have a higher discount. In order to assign offers to a wholesale price list, use `discounts` field in <a href="#operation/modificationCommandUsingPUT">batch offer modification</a>. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-cennik-hurtowy" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-wholesale-price-list" target="_blank">EN</a>.
     * 3. Multipack <br> In order to create a new multipack, you have to define a promotion with a single benefit of type **UNIT_PERCENTAGE_DISCOUNT** and a single criterion of type **CONTAINS_OFFERS**. The benefit specification should contain a configuration section with a percentage which indicates the specific discount for the discounted offer. This percentage should be an integer value greater than 15 for quantity 2, greater than 30 for quantity 3, greater than 40 for quantity 4, greater than 50 for quantity 5 and lower than or equal to 100. The specification should also contain a trigger section with a field forEachQuantity that defines the amount of items in the multipack which is necessary to trigger the benefit. Additionally, the discountedNumber field must be set to 1 by default as you can only discount one unit in a multipack. Finally, the offer criterion specifies the offer for which the multipack promotion will take effect. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#dodaj-rabat-ilosciowy" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#add-quantitative-discount" target="_blank">EN</a>
     * 4. Cross-offer multipack <br> A cross-offer multipack is created in the same fashion as a standard multipack. The only difference is that you need to pass more than 1 offer in the offer criterion section. This group of offers is then considered as a pool from which users can pick and choose forEachQuantity offers and the cheapest of them gets a discount.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SellerRebateDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreatePromotionUsingPOST1BadRequestException
     * @throws Exception\CreatePromotionUsingPOST1UnauthorizedException
     * @throws Exception\CreatePromotionUsingPOST1ForbiddenException
     * @throws Exception\CreatePromotionUsingPOST1NotFoundException
     * @throws Exception\CreatePromotionUsingPOST1PreconditionFailedException
     * @throws Exception\CreatePromotionUsingPOST1UnprocessableEntityException
     */
    public function createPromotionUsingPOST1(?Model\SellerCreateRebateRequestDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreatePromotionUsingPOST1($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to deactivate the requested promotion. You need to use its unique id. <br> Read more about: Large order discount <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-rabat" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-large-order-discount" target="_blank">EN</a>, Wholesale price list <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-cennik" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-wholesale-price-list" target="_blank">EN</a>, Multipack <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#usun-rabat-ilosciowy" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#remove-an-quantitative-discount" target="_blank">EN</a>.
     *
     * @param string $promotionId promotion identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeactivatePromotionUsingDELETEUnauthorizedException
     */
    public function deactivatePromotionUsingDELETE(string $promotionId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\DeactivatePromotionUsingDELETE($promotionId, $headerParameters, $accept), $fetch);
    }

    /**
     * <br> Use this resource to return the requested promotion. You need to use its unique id. <br> Read more about: Large order discount <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-rabacie" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-information-about-large-order-discount" target="_blank">EN</a>, Wholesale price list <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-cenniku" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-information-about-wholesale-price-list" target="_blank">EN</a>, Multipack <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-informacje-o-rabacie-ilosciowym" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#information-about-an-quantitative-discount" target="_blank">EN</a>.
     *
     * @param string $promotionId promotion identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SellerRebateDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPromotionUsingGETUnauthorizedException
     * @throws Exception\GetPromotionUsingGETNotFoundException
     */
    public function getPromotionUsingGET(string $promotionId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPromotionUsingGET($promotionId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to update a promotion by its unique id. <br> It supports editing bundle's discount, wholesale price lists and large order discounts. Read more about: Large order discount <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#edytuj-progi-rabatowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#edit-discount-thresholds" target="_blank">EN</a>, Wholesale price list <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#edytuj-cennik" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#edit-wholesale-price-list" target="_blank">EN</a>.
     *
     * @param string $promotionId promotion identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SellerRebateDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdatePromotionUsingPUTBadRequestException
     * @throws Exception\UpdatePromotionUsingPUTUnauthorizedException
     * @throws Exception\UpdatePromotionUsingPUTForbiddenException
     * @throws Exception\UpdatePromotionUsingPUTNotFoundException
     * @throws Exception\UpdatePromotionUsingPUTUnprocessableEntityException
     */
    public function updatePromotionUsingPUT(string $promotionId, ?Model\SellerCreateRebateRequestDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdatePromotionUsingPUT($promotionId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * You cannot create or modify a turnover-based discount. Turnover-based discounts are about to be withdrawn from the platform. Any existing discounts will be removed automatically. This resource is deprecated and will be removed on November 2, 2026.
     *
     * @param string $marketplaceId marketplace identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TurnoverDiscountDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateOrModifyTurnoverDiscountUsingPUTBadRequestException
     * @throws Exception\CreateOrModifyTurnoverDiscountUsingPUTUnauthorizedException
     * @throws Exception\CreateOrModifyTurnoverDiscountUsingPUTForbiddenException
     * @throws Exception\CreateOrModifyTurnoverDiscountUsingPUTNotFoundException
     * @throws Exception\CreateOrModifyTurnoverDiscountUsingPUTUnprocessableEntityException
     */
    public function createOrModifyTurnoverDiscountUsingPUT(string $marketplaceId, ?Model\TurnoverDiscountRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateOrModifyTurnoverDiscountUsingPUT($marketplaceId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Get a list of turnover discounts for all supported marketplaces. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#pobierz-liste-rabatow-obrotowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#retrieve-the-list-of-turnover-discounts" target="_blank">EN</a>. Currently, the only supported marketplace is `allegro-business-cz`. This resource is deprecated and will be removed on November 2, 2026. <br/> Turnover discount for the marketplace can have one of the three statuses:
     * 1. `ACTIVATING` - neither accumulation of the turnover, nor applying of the discount has started yet. Turnover will be being accumulated from the beginning of the next month.
     * 2. `ACTIVE` - there is ongoing accumulation of the turnover and/or applying of the discount. The latest discount definition does not have fields `cumulatingToDate` and `spendingToDate` set to a specific date. There may be multiple (up to 3) definitions of the discount returned for each marketplace. Only one definition can be accumulated against, and only one definition can be applied at the same time - appropriate periods from different definitions will not overlap.
     * 3. `DEACTIVATING` - there is ongoing accumulation of the turnover and/or applying of the discount. Accumulation of the turnover will be continued until `cumulatingToDate` of the last definition. Applying of the discount will be continued until `spendingToDate` of the last definition.
     *
     * @param array{
     *    "marketplaceId"?: array, //List of marketplace identifiers. Only turnover discounts for specified marketplaces are returned. <br/> Currently, only `allegro-business-cz` is supported.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\NullableTurnoverDiscountDto[]|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetTurnoverDiscountsUsingGETUnauthorizedException
     * @throws Exception\GetTurnoverDiscountsUsingGETForbiddenException
     */
    public function getTurnoverDiscountsUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetTurnoverDiscountsUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Deactivate turnover discount for a given marketplace. Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#deaktywuj-rabat-obrotowy" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#deactivate-turnover-discount" target="_blank">EN</a>. Currently, the only supported marketplace is `allegro-business-cz`. This resource is deprecated and will be removed on November 2, 2026. <br/> Turnover discount will stop being cumulated with the end of the current month. Discount based on cumulated turnover will stop being applied with the end of the next month. After that, the discount will be completely deactivated. <br/> When deactivating the discount that still has `ACTIVATING` status, turnover discount is deactivated immediately. In that case, no turnover discount will start being cumulated with the new month.
     *
     * @param string $marketplaceId marketplace identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TurnoverDiscountDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeactivateTurnoverDiscountsUsingPUTUnauthorizedException
     * @throws Exception\DeactivateTurnoverDiscountsUsingPUTForbiddenException
     * @throws Exception\DeactivateTurnoverDiscountsUsingPUTNotFoundException
     */
    public function deactivateTurnoverDiscountsUsingPUT(string $marketplaceId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeactivateTurnoverDiscountsUsingPUT($marketplaceId, $headerParameters), $fetch);
    }

    /**
     * Provides information about fee and commission for an offer. This resource is limited to 25 requests per second for a single user. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#kalkulator-oplat" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#fee-calculator" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FeePreviewResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CalculateFeePreviewUsingPOSTBadRequestException
     * @throws Exception\CalculateFeePreviewUsingPOSTUnauthorizedException
     * @throws Exception\CalculateFeePreviewUsingPOSTUnprocessableEntityException
     */
    public function calculateFeePreviewUsingPOST(?Model\PublicOfferPreviewRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CalculateFeePreviewUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetGeneralReportUsingGETUnauthorizedException
     * @throws Exception\GetGeneralReportUsingGETForbiddenException
     * @throws Exception\GetGeneralReportUsingGETNotFoundException
     */
    public function getGeneralReportUsingGET(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetGeneralReportUsingGET($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify multiple offers at once. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute - limit applies to a single user of the application.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ModificationCommandUsingPUTBadRequestException
     * @throws Exception\ModificationCommandUsingPUTUnauthorizedException
     * @throws Exception\ModificationCommandUsingPUTForbiddenException
     * @throws Exception\ModificationCommandUsingPUTNotFoundException
     * @throws Exception\ModificationCommandUsingPUTConflictException
     * @throws Exception\ModificationCommandUsingPUTUnprocessableEntityException
     */
    public function modificationCommandUsingPUT(string $commandId, ?Model\OfferChangeCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ModificationCommandUsingPUT($commandId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve a detailed summary of changes introduced within one {commandId} (defaults: limit = 100, offset = 0). Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TaskReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetTasksUsingGETBadRequestException
     * @throws Exception\GetTasksUsingGETUnauthorizedException
     * @throws Exception\GetTasksUsingGETForbiddenException
     * @throws Exception\GetTasksUsingGETNotFoundException
     * @throws Exception\GetTasksUsingGETUnprocessableEntityException
     */
    public function getTasksUsingGET(string $commandId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetTasksUsingGET($commandId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns status and summary of particular command execution. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPriceModificationCommandStatusUsingGETUnauthorizedException
     * @throws Exception\GetPriceModificationCommandStatusUsingGETNotFoundException
     */
    public function getPriceModificationCommandStatusUsingGET(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPriceModificationCommandStatusUsingGET($commandId, $headerParameters), $fetch);
    }

    /**
     * Change price of offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price" target="_blank">EN</a>. This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute - limit applies to a single user of the application.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\PriceModificationCommandUsingPUTBadRequestException
     * @throws Exception\PriceModificationCommandUsingPUTUnauthorizedException
     * @throws Exception\PriceModificationCommandUsingPUTConflictException
     * @throws Exception\PriceModificationCommandUsingPUTUnprocessableEntityException
     */
    public function priceModificationCommandUsingPUT(string $commandId, ?Model\OfferPriceChangeCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PriceModificationCommandUsingPUT($commandId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Defaults: limit = 100, offset = 0. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TaskReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPriceModificationCommandTasksStatusesUsingGETBadRequestException
     * @throws Exception\GetPriceModificationCommandTasksStatusesUsingGETUnauthorizedException
     * @throws Exception\GetPriceModificationCommandTasksStatusesUsingGETNotFoundException
     * @throws Exception\GetPriceModificationCommandTasksStatusesUsingGETUnprocessableEntityException
     */
    public function getPriceModificationCommandTasksStatusesUsingGET(string $commandId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPriceModificationCommandTasksStatusesUsingGET($commandId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Bulk price and stock modification. Contrary to standard batch price or stock modification, it lets you modify both price and stock modification across multiple offers, or within the same offer but in a separate modification unit. <br> Change price and stock of offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena-i-liczba-przedmiotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price-and-stock" target="_blank">EN</a>. <br> This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute - limit applies to a single user of the application.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\BatchOfferModificationUsingPOSTBadRequestException
     * @throws Exception\BatchOfferModificationUsingPOSTUnauthorizedException
     * @throws Exception\BatchOfferModificationUsingPOSTConflictException
     * @throws Exception\BatchOfferModificationUsingPOSTUnprocessableEntityException
     */
    public function batchOfferModificationUsingPOST(?Model\OfferBulkChangeCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BatchOfferModificationUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns status and summary of particular command execution. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena-i-liczba-przedmiotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price-and-stock" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\BatchOfferModificationCommandStatusUsingGETUnauthorizedException
     * @throws Exception\BatchOfferModificationCommandStatusUsingGETNotFoundException
     */
    public function batchOfferModificationCommandStatusUsingGET(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BatchOfferModificationCommandStatusUsingGET($commandId, $headerParameters), $fetch);
    }

    /**
     * Defaults: limit = 100, offset = 0. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena-i-liczba-przedmiotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price-and-stock" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TaskWithSubjectReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\BatchOfferModificationCommandTaskStatusesUsingGETBadRequestException
     * @throws Exception\BatchOfferModificationCommandTaskStatusesUsingGETUnauthorizedException
     * @throws Exception\BatchOfferModificationCommandTaskStatusesUsingGETNotFoundException
     * @throws Exception\BatchOfferModificationCommandTaskStatusesUsingGETUnprocessableEntityException
     */
    public function batchOfferModificationCommandTaskStatusesUsingGET(string $commandId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BatchOfferModificationCommandTaskStatusesUsingGET($commandId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns status and summary of the command. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetQuantityModificationCommandStatusUsingGETUnauthorizedException
     * @throws Exception\GetQuantityModificationCommandStatusUsingGETNotFoundException
     */
    public function getQuantityModificationCommandStatusUsingGET(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetQuantityModificationCommandStatusUsingGET($commandId, $headerParameters), $fetch);
    }

    /**
     * Change quantity of multiple offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute - limit applies to a single user of the application.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\QuantityModificationCommandUsingPUTBadRequestException
     * @throws Exception\QuantityModificationCommandUsingPUTUnauthorizedException
     * @throws Exception\QuantityModificationCommandUsingPUTConflictException
     * @throws Exception\QuantityModificationCommandUsingPUTUnprocessableEntityException
     */
    public function quantityModificationCommandUsingPUT(string $commandId, ?Model\OfferQuantityChangeCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\QuantityModificationCommandUsingPUT($commandId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Defaults: limit = 100, offset = 0. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TaskReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetQuantityModificationCommandTasksStatusesUsingGETBadRequestException
     * @throws Exception\GetQuantityModificationCommandTasksStatusesUsingGETUnauthorizedException
     * @throws Exception\GetQuantityModificationCommandTasksStatusesUsingGETNotFoundException
     * @throws Exception\GetQuantityModificationCommandTasksStatusesUsingGETUnprocessableEntityException
     */
    public function getQuantityModificationCommandTasksStatusesUsingGET(string $commandId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetQuantityModificationCommandTasksStatusesUsingGET($commandId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify the automatic pricing rules of multiple offers at the same time. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules" target="_blank">EN</a>. This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute - limit applies to a single user of the application.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\OfferAutomaticPricingModificationCommandUsingPOSTBadRequestException
     * @throws Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnauthorizedException
     * @throws Exception\OfferAutomaticPricingModificationCommandUsingPOSTForbiddenException
     * @throws Exception\OfferAutomaticPricingModificationCommandUsingPOSTConflictException
     * @throws Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnprocessableEntityException
     */
    public function offerAutomaticPricingModificationCommandUsingPOST(?Model\OfferAutomaticPricingCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\OfferAutomaticPricingModificationCommandUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns status and summary of the offer-price-automation-command. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetofferAutomaticPricingModificationCommandStatusUsingGETUnauthorizedException
     * @throws Exception\GetofferAutomaticPricingModificationCommandStatusUsingGETForbiddenException
     * @throws Exception\GetofferAutomaticPricingModificationCommandStatusUsingGETNotFoundException
     */
    public function getofferAutomaticPricingModificationCommandStatusUsingGET(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetofferAutomaticPricingModificationCommandStatusUsingGET($commandId, $headerParameters), $fetch);
    }

    /**
     * Defaults: limit = 100, offset = 0. Returns status and report of the offer-price-automation-command. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules" target="_blank">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TaskReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETBadRequestException
     * @throws Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETUnauthorizedException
     * @throws Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETForbiddenException
     * @throws Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETNotFoundException
     * @throws Exception\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGETUnprocessableEntityException
     */
    public function getofferAutomaticPricingModificationCommandTasksStatusesUsingGET(string $commandId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetofferAutomaticPricingModificationCommandTasksStatusesUsingGET($commandId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get automatic pricing rules. Rules with property **default** set to **true** are default rules created by Allegro for each merchant. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-dostepne-reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-pricing-rules" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AutomaticPricingRulesResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAutomaticPricingRulesUsingGETUnauthorizedException
     * @throws Exception\GetAutomaticPricingRulesUsingGETForbiddenException
     */
    public function getAutomaticPricingRulesUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAutomaticPricingRulesUsingGET($headerParameters), $fetch);
    }

    /**
     * Use this resource to create automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-utworzyc-wlasne-reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-create-own-pricing-rules" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AutomaticPricingRuleResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateAutomaticPricingRulesUsingPostBadRequestException
     * @throws Exception\CreateAutomaticPricingRulesUsingPostUnauthorizedException
     * @throws Exception\CreateAutomaticPricingRulesUsingPostForbiddenException
     * @throws Exception\CreateAutomaticPricingRulesUsingPostNotFoundException
     * @throws Exception\CreateAutomaticPricingRulesUsingPostConflictException
     */
    public function createAutomaticPricingRulesUsingPost(?Model\AutomaticPricingRulePostRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateAutomaticPricingRulesUsingPost($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to delete automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-usunac-regule-cenowa" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-delete-a-pricing-rule" target="_blank">EN</a>.
     *
     * @param string $ruleId the rule identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteAutomaticPricingRuleUsingDeleteUnauthorizedException
     * @throws Exception\DeleteAutomaticPricingRuleUsingDeleteForbiddenException
     * @throws Exception\DeleteAutomaticPricingRuleUsingDeleteNotFoundException
     */
    public function deleteAutomaticPricingRuleUsingDelete(string $ruleId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteAutomaticPricingRuleUsingDelete($ruleId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get automatic pricing rule by id. Rules with property **default** set to **true** are default rules created by Allegro for each merchant and cannot be modified. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-dostepne-reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-pricing-rules" target="_blank">EN</a>.
     *
     * @param string $ruleId the rule identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AutomaticPricingRuleResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAutomaticPricingRuleByIdUsingGETUnauthorizedException
     * @throws Exception\GetAutomaticPricingRuleByIdUsingGETNotFoundException
     */
    public function getAutomaticPricingRuleByIdUsingGET(string $ruleId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAutomaticPricingRuleByIdUsingGET($ruleId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to update automatic pricing rule. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-regule-cenowa" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-modify-a-pricing-rule" target="_blank">EN</a>.
     *
     * @param string $ruleId the rule identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AutomaticPricingRuleResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateAutomaticPricingRuleUsingPutBadRequestException
     * @throws Exception\UpdateAutomaticPricingRuleUsingPutUnauthorizedException
     * @throws Exception\UpdateAutomaticPricingRuleUsingPutForbiddenException
     * @throws Exception\UpdateAutomaticPricingRuleUsingPutNotFoundException
     * @throws Exception\UpdateAutomaticPricingRuleUsingPutConflictException
     */
    public function updateAutomaticPricingRuleUsingPut(string $ruleId, ?Model\AutomaticPricingRulePutRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateAutomaticPricingRuleUsingPut($ruleId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get automatic pricing rules for offer. This resource is rate limited to 5 requests per second. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-aktualnie-przypisane-reguly-przelicznika-cen-w-ofercie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-price-automation-rules-currently-assigned-to-offer" target="_blank">EN</a>.
     *
     * @param string $offerId the offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferRules|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAutomaticPricingRulesForOfferUsingGETUnauthorizedException
     * @throws Exception\GetAutomaticPricingRulesForOfferUsingGETForbiddenException
     * @throws Exception\GetAutomaticPricingRulesForOfferUsingGETNotFoundException
     */
    public function getAutomaticPricingRulesForOfferUsingGET(string $offerId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAutomaticPricingRulesForOfferUsingGET($offerId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to traverse the Allegro categories tree. It returns the list of the given category's children or a list of the main Allegro categories. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#kategorie-oraz-parametry" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#categories-and-parameters" target="_blank">EN</a>.
     *
     * @param array{
     *    "parent.id"?: string, //The ID of the category which children should be returned. If omitted, the list of main Allegro categories will be returned.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategoriesDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCategoriesUsingGETNotFoundException
     */
    public function getCategoriesUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCategoriesUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the details of a specific category. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product" target="_blank">EN</a>.
     *
     * @param string $categoryId the category ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategoryDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCategoryUsingGET1NotFoundException
     */
    public function getCategoryUsingGET1(string $categoryId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCategoryUsingGET1($categoryId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the list of parameters that are supported by the given category. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#parametry-ofertowe" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-parameters" target="_blank">EN</a>.
     *
     * @param string $categoryId the category ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategoryParameterList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetFlatParametersUsingGET2NotFoundException
     */
    public function getFlatParametersUsingGET2(string $categoryId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFlatParametersUsingGET2($categoryId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the list of product parameters available in given category. You can use these parameters to create a new product. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product" target="_blank">EN</a>.
     *
     * @param string $categoryId the category ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategoryProductParameterList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetFlatProductParametersUsingGETNotFoundException
     */
    public function getFlatProductParametersUsingGET(string $categoryId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFlatProductParametersUsingGET($categoryId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get information about planned changes in category parameters. Please note that in some cases, the returned events may finally not happen in the future.
     * At present we support the following changes: - REQUIREMENT_CHANGE - the parameter will be required in the category. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-przyszle-zmiany-w-parametrach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-future-changes-in-parameters" target="_blank">EN</a>.
     *
     * @param array{
     *    "scheduledFor.gte"?: string, //The minimum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date.
     *    "scheduledFor.lte"?: string, //The maximum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date.
     *    "scheduledAt.gte"?: string, //The minimum date and time at which the change was scheduled in ISO 8601 format.
     *    "scheduledAt.lte"?: string, //The maximum date and time at which the change was scheduled in ISO 8601 format.
     *    "type"?: array, //The types of changes that will be returned in the response. All types of changes are returned by default.
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //The limit of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategoryParametersScheduledChangesResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCategoryParametersScheduledChangesUsingGET1BadRequestException
     * @throws Exception\GetCategoryParametersScheduledChangesUsingGET1UnauthorizedException
     */
    public function getCategoryParametersScheduledChangesUsingGET1(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetCategoryParametersScheduledChangesUsingGET1($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get information about changes in categories. It returns changes that occurred in the last 3 months.
     * At present we support the following changes:
     *   - CATEGORY_CREATED - new category was created.
     *   - CATEGORY_RENAMED - category name has been changed.
     *   - CATEGORY_MOVED - category has been moved to a different place in category tree, category parent id field is changed.
     *   - CATEGORY_DELETED - category is no longer available, category from redirectCategory field should be used instead.
     *
     *   Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#dziennik-zmian-w-kategoriach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#event-journal-in-categories" target="_blank">EN</a>.
     *
     * @param array{
     *    "from"?: string, //The ID of the last seen event. Changes that occurred after the given event will be returned.
     *    "limit"?: int, //The number of events that will be returned in the response.
     *    "type"?: array, //The types of events that will be returned in the response. All types of events are returned by default.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategoryEventsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCategoryEventsUsingGET1BadRequestException
     * @throws Exception\GetCategoryEventsUsingGET1UnauthorizedException
     */
    public function getCategoryEventsUsingGET1(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetCategoryEventsUsingGET1($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get additional services definitions, grouped by additional services categories, available on given marketplace. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-liste-dostepnych-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-a-list-of-available-additional-services" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategoriesResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetListOfAdditionalServicesDefinitionsCategoriesUsingGETUnauthorizedException
     * @throws Exception\GetListOfAdditionalServicesDefinitionsCategoriesUsingGETForbiddenException
     */
    public function getListOfAdditionalServicesDefinitionsCategoriesUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetListOfAdditionalServicesDefinitionsCategoriesUsingGET($headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of seller's shipping rates. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-cennik-dostaw" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-shipping-rates" target="_blank">EN</a>.
     *
     * @param array{
     *    "marketplace"?: string, //Allows to filter shipping rates by marketplace that they are qualified for.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleShippingRatesGetResponse200|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetListOfShippingRatestUsingGETUnauthorizedException
     * @throws Exception\GetListOfShippingRatestUsingGETForbiddenException
     */
    public function getListOfShippingRatestUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetListOfShippingRatestUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a new seller's shipping rates set. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-cennik-dostaw" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-add-shipping-rates" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ShippingRatesSet|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateShippingRatesSetUsingPOSTBadRequestException
     * @throws Exception\CreateShippingRatesSetUsingPOSTUnauthorizedException
     * @throws Exception\CreateShippingRatesSetUsingPOSTUnprocessableEntityException
     */
    public function createShippingRatesSetUsingPOST(?Model\ShippingRatesSet $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateShippingRatesSetUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get details of the given shipping rates set. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-cennik-dostaw" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-shipping-rates" target="_blank">EN</a>.
     *
     * @param string $id shipping rates set identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleShippingRatesIdGetResponse200|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetShippingRatesSetUsingGETUnauthorizedException
     * @throws Exception\GetShippingRatesSetUsingGETForbiddenException
     * @throws Exception\GetShippingRatesSetUsingGETNotFoundException
     */
    public function getShippingRatesSetUsingGET(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetShippingRatesSetUsingGET($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to edit a new seller's shipping rates set. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-edytowac-cennik-dostaw" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-modify-shipping-rates" target="_blank">EN</a>.
     *
     * @param string $id shipping rates set identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ShippingRatesSet|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ModifyShippingRatesSetUsingPUTBadRequestException
     * @throws Exception\ModifyShippingRatesSetUsingPUTUnauthorizedException
     * @throws Exception\ModifyShippingRatesSetUsingPUTForbiddenException
     * @throws Exception\ModifyShippingRatesSetUsingPUTNotFoundException
     * @throws Exception\ModifyShippingRatesSetUsingPUTUnprocessableEntityException
     */
    public function modifyShippingRatesSetUsingPUT(string $id, ?Model\ShippingRatesSet $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ModifyShippingRatesSetUsingPUT($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the delivery settings declared by the seller. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-ustawienia-dostawy" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-get-delivery-settings" target="_blank">EN</a>.
     *
     * @param array{
     *    "marketplace.id"?: string, //Marketplace for which delivery settings will be returned. By default (if the marketplace parameter is not set) the marketplace on which the seller has registered is used. However, we recommend that the marketplace.id query parameter should always be explicitly set.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\DeliverySettingsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetSaleDeliverySettingsUnauthorizedException
     * @throws Exception\GetSaleDeliverySettingsForbiddenException
     * @throws Exception\GetSaleDeliverySettingsUnprocessableEntityException
     */
    public function getSaleDeliverySettings(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSaleDeliverySettings($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify the delivery settings declared by the seller. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-edytowac-ustawienia-dostawy" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-edit-delivery-settings" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\DeliverySettingsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\PutSaleDeliverySettingsUnauthorizedException
     * @throws Exception\PutSaleDeliverySettingsForbiddenException
     * @throws Exception\PutSaleDeliverySettingsUnprocessableEntityException
     */
    public function putSaleDeliverySettings(?Model\DeliverySettingsRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutSaleDeliverySettings($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of points of service by seller ID. Read more: <a href="../../news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="../../news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param array{
     *    "seller.id": string, //User identifier.
     *    "countryCode"?: string, //Country code identifier in ISO format. In case of incorrect or unsupported country code, empty list is returned. If missing, list of all defined points is returned. If present, correct and supported, list of all points with given country code for the user is returned.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SearchResult|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPOSListUsingGETUnauthorizedException
     * @throws Exception\GetPOSListUsingGETNotFoundException
     */
    public function getPOSListUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPOSListUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a point of service. Read more: <a href="../../news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="../../news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Pos|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreatePOSUsingPOSTBadRequestException
     * @throws Exception\CreatePOSUsingPOSTUnauthorizedException
     * @throws Exception\CreatePOSUsingPOSTForbiddenException
     * @throws Exception\CreatePOSUsingPOSTNotFoundException
     * @throws Exception\CreatePOSUsingPOSTConflictException
     * @throws Exception\CreatePOSUsingPOSTUnprocessableEntityException
     */
    public function createPOSUsingPOST(?Model\Pos $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreatePOSUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to delete a point of service. Read more: <a href="../../news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="../../news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param string $id point of service ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeletePOSUsingDELETEUnauthorizedException
     * @throws Exception\DeletePOSUsingDELETEForbiddenException
     * @throws Exception\DeletePOSUsingDELETENotFoundException
     */
    public function deletePOSUsingDELETE(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeletePOSUsingDELETE($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a details of a point of service for a given ID. Read more: <a href="../../news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="../../news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param string $id point of service ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Pos|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPOSDataUsingGETUnauthorizedException
     * @throws Exception\GetPOSDataUsingGETForbiddenException
     * @throws Exception\GetPOSDataUsingGETNotFoundException
     */
    public function getPOSDataUsingGET(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPOSDataUsingGET($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify a point of service. Read more: <a href="../../news/punkty-odbioru-osobistego-8dmlj8qk7ik" target="_blank">PL</a> / <a href="../../news/points-of-service-Rdoz09ZE7sW" target="_blank">EN</a>.
     *
     * @param string $id Point of service ID. Must match values with 'id' property from the body.
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Pos|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ModifyPOSUsingPUTBadRequestException
     * @throws Exception\ModifyPOSUsingPUTUnauthorizedException
     * @throws Exception\ModifyPOSUsingPUTForbiddenException
     * @throws Exception\ModifyPOSUsingPUTNotFoundException
     * @throws Exception\ModifyPOSUsingPUTConflictException
     * @throws Exception\ModifyPOSUsingPUTUnprocessableEntityException
     */
    public function modifyPOSUsingPUT(string $id, ?Model\Pos $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ModifyPOSUsingPUT($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get details of many contacts. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-liste-kontaktow" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-a-list-of-contacts" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ContactResponseList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetListOfContactsUsingGETBadRequestException
     * @throws Exception\GetListOfContactsUsingGETUnauthorizedException
     * @throws Exception\GetListOfContactsUsingGETForbiddenException
     */
    public function getListOfContactsUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetListOfContactsUsingGET($headerParameters), $fetch);
    }

    /**
     * Use this resource to create a new contact. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-utworzyc-nowy-kontakt" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-create-new-contact" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ContactResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateContactUsingPOSTBadRequestException
     * @throws Exception\CreateContactUsingPOSTUnauthorizedException
     * @throws Exception\CreateContactUsingPOSTForbiddenException
     * @throws Exception\CreateContactUsingPOSTUnprocessableEntityException
     */
    public function createContactUsingPOST(?Model\ContactRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateContactUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get contact details. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-szczegoly-danego-kontaktu" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-contact-details" target="_blank">EN</a>.
     *
     * @param string $id contact identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ContactResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetContactUsingGETBadRequestException
     * @throws Exception\GetContactUsingGETUnauthorizedException
     * @throws Exception\GetContactUsingGETForbiddenException
     * @throws Exception\GetContactUsingGETNotFoundException
     */
    public function getContactUsingGET(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetContactUsingGET($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify contact details. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-zmienic-dane-kontaktu" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-change-contact-data" target="_blank">EN</a>.
     *
     * @param string $id contact identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ContactResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ModifyContactUsingPUTBadRequestException
     * @throws Exception\ModifyContactUsingPUTUnauthorizedException
     * @throws Exception\ModifyContactUsingPUTForbiddenException
     * @throws Exception\ModifyContactUsingPUTNotFoundException
     * @throws Exception\ModifyContactUsingPUTUnprocessableEntityException
     */
    public function modifyContactUsingPUT(string $id, ?Model\ContactRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ModifyContactUsingPUT($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of responsible persons for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations" target="_blank">EN</a>.
     *
     * @param array{
     *    "offset"?: int, //Index of first returned responsible persons data from all search results.
     *    "limit"?: int, //Number of returned responsible persons data.
     * } $queryParameters
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleResponsiblePersonsGetResponse200|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsiblePersonsGETBadRequestException
     * @throws Exception\ResponsiblePersonsGETUnauthorizedException
     * @throws Exception\ResponsiblePersonsGETForbiddenException
     * @throws Exception\ResponsiblePersonsGETUnprocessableEntityException
     */
    public function responsiblePersonsGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ResponsiblePersonsGET($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to create a new responsible person for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Content-Type": string, //Content type of the request body.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ResponsiblePersonResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsiblePersonsPOSTBadRequestException
     * @throws Exception\ResponsiblePersonsPOSTUnauthorizedException
     * @throws Exception\ResponsiblePersonsPOSTForbiddenException
     * @throws Exception\ResponsiblePersonsPOSTUnprocessableEntityException
     */
    public function responsiblePersonsPOST(?Model\CreateResponsiblePersonRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ResponsiblePersonsPOST($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get a responsible person for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations" target="_blank">EN</a>.
     *
     * @param string $id responsible person ID
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ResponsiblePersonResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsiblePersonGETUnauthorizedException
     * @throws Exception\ResponsiblePersonGETForbiddenException
     * @throws Exception\ResponsiblePersonGETNotFoundException
     * @throws Exception\ResponsiblePersonGETUnprocessableEntityException
     */
    public function responsiblePersonGET(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ResponsiblePersonGET($id, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to update the responsible person for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations" target="_blank">EN</a>.
     *
     * @param string $id responsible person ID
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Content-Type": string, //Content type of the request body.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ResponsiblePersonResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsiblePersonsPUTBadRequestException
     * @throws Exception\ResponsiblePersonsPUTUnauthorizedException
     * @throws Exception\ResponsiblePersonsPUTForbiddenException
     * @throws Exception\ResponsiblePersonsPUTUnprocessableEntityException
     */
    public function responsiblePersonsPUT(string $id, ?Model\UpdateResponsiblePersonRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ResponsiblePersonsPUT($id, $requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get a list of responsible producers for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param array{
     *    "offset"?: int, //Index of first returned responsible producers data from all search results.
     *    "limit"?: int, //Number of returned responsible producers data.
     * } $queryParameters
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleResponsibleProducersGetResponse200|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsibleProducersGETBadRequestException
     * @throws Exception\ResponsibleProducersGETUnauthorizedException
     * @throws Exception\ResponsibleProducersGETForbiddenException
     * @throws Exception\ResponsibleProducersGETUnprocessableEntityException
     */
    public function responsibleProducersGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ResponsibleProducersGET($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to create a new responsible producer for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Content-Type": string, //Content type of the request body.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ResponsibleProducerResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsibleProducersPOSTBadRequestException
     * @throws Exception\ResponsibleProducersPOSTUnauthorizedException
     * @throws Exception\ResponsibleProducersPOSTForbiddenException
     * @throws Exception\ResponsibleProducersPOSTUnprocessableEntityException
     */
    public function responsibleProducersPOST(?Model\CreateResponsibleProducerRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ResponsibleProducersPOST($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to delete a responsible producer created by you. The responsible producer can be deleted only if it is not assigned to any offer, otherwise the request is rejected and the responsible producer is not deleted. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param string $id responsible producer ID
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsibleProducerDELETEUnauthorizedException
     * @throws Exception\ResponsibleProducerDELETEForbiddenException
     * @throws Exception\ResponsibleProducerDELETENotFoundException
     * @throws Exception\ResponsibleProducerDELETEConflictException
     * @throws Exception\ResponsibleProducerDELETEUnprocessableEntityException
     */
    public function responsibleProducerDELETE(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ResponsibleProducerDELETE($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a responsible producer for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param string $id responsible producer ID
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ResponsibleProducerResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsibleProducerGETUnauthorizedException
     * @throws Exception\ResponsibleProducerGETForbiddenException
     * @throws Exception\ResponsibleProducerGETNotFoundException
     * @throws Exception\ResponsibleProducerGETUnprocessableEntityException
     */
    public function responsibleProducerGET(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ResponsibleProducerGET($id, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to update the responsible producer for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param string $id responsible producer ID
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Content-Type": string, //Content type of the request body.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ResponsibleProducerResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ResponsibleProducersPUTBadRequestException
     * @throws Exception\ResponsibleProducersPUTUnauthorizedException
     * @throws Exception\ResponsibleProducersPUTForbiddenException
     * @throws Exception\ResponsibleProducersPUTUnprocessableEntityException
     */
    public function responsibleProducersPUT(string $id, ?Model\UpdateResponsibleProducerRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ResponsibleProducersPUT($id, $requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get a list of all delivery methods currently available on the platform, as well as those that have already been discontinued. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-cennik-dostaw" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-add-shipping-rates" target="_blank">EN</a>.
     *
     * @param array{
     *    "marketplace"?: string, //Allows to filter delivery methods by marketplace id.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleDeliveryMethodsGetResponse200|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetListOfDeliveryMethodsUsingGETUnauthorizedException
     */
    public function getListOfDeliveryMethodsUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetListOfDeliveryMethodsUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get additional services group for a given ID. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-wybrana-grupe-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-a-group-of-additional-services-for-a-given-id" target="_blank">EN</a>.
     *
     * @param string $groupId additional Service Group ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalServicesGroupResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAdditionalServicesGroupUsingGETUnauthorizedException
     * @throws Exception\GetAdditionalServicesGroupUsingGETNotFoundException
     */
    public function getAdditionalServicesGroupUsingGET(string $groupId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAdditionalServicesGroupUsingGET($groupId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify existing additional service group. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zaktualizowac-grupe-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-additional-service-group" target="_blank">EN</a>.
     *
     * @param string $groupId additional service group ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalServicesGroupResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ModifyAdditionalServicesGroupUsingPUTUnauthorizedException
     * @throws Exception\ModifyAdditionalServicesGroupUsingPUTNotFoundException
     */
    public function modifyAdditionalServicesGroupUsingPUT(string $groupId, ?Model\AdditionalServicesGroupRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ModifyAdditionalServicesGroupUsingPUT($groupId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get translations for additional service group. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId additional Service Group ID
     * @param array{
     *    "language"?: string, //IETF language tag. When provided, the response will contain translations in only that language (if exists).
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalServiceGroupTranslationResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAdditionalServiceGroupTranslationsUnauthorizedException
     * @throws Exception\GetAdditionalServiceGroupTranslationsNotFoundException
     */
    public function getAdditionalServiceGroupTranslations(string $groupId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAdditionalServiceGroupTranslations($groupId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to delete the translation for specified additional service group and language. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId  additional service group ID
     * @param string $language IETF Language tag
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteAdditionalServiceGroupTranslationUnauthorizedException
     * @throws Exception\DeleteAdditionalServiceGroupTranslationForbiddenException
     * @throws Exception\DeleteAdditionalServiceGroupTranslationNotFoundException
     */
    public function deleteAdditionalServiceGroupTranslation(string $groupId, string $language, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteAdditionalServiceGroupTranslation($groupId, $language, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create/update translation for additional service group and specified language. It is allowed to provide an incomplete list of services that belong to the group. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#tlumaczenia-uslug-dodatkowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#additional-services-translations" target="_blank">EN</a>.
     *
     * @param string $groupId  additional Service Group ID
     * @param string $language IETF Language tag
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalServiceGroupTranslationPatchResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateAdditionalServiceGroupTranslationUnauthorizedException
     * @throws Exception\UpdateAdditionalServiceGroupTranslationNotFoundException
     */
    public function updateAdditionalServiceGroupTranslation(string $groupId, string $language, ?Model\AdditionalServicesGroupTranslationRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateAdditionalServiceGroupTranslation($groupId, $language, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get selected size table. Read more: <a href="../../news/tabele-rozmiarow-w-rest-api-LRV05q2dGtV" target="_blank">PL</a> / <a href="../../news/size-tables-in-rest-api-D7KP4DE1BH3" target="_blank">EN</a>.
     *
     * @param string $tableId table identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PublicTableDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetTableUsingGETUnauthorizedException
     * @throws Exception\GetTableUsingGETForbiddenException
     * @throws Exception\GetTableUsingGETNotFoundException
     */
    public function getTableUsingGET(string $tableId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetTableUsingGET($tableId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to update selected size table. Read more: <a href="../../news/tabele-rozmiarow-zmieniamy-istniejacy-zasob-i-dodajemy-nowe-zasoby-do-ich-obslugi-k1nyd21A4fP" target="_blank">PL</a> / <a href="../../news/size-tables-we-change-the-existing-resource-and-add-new-resources-to-handle-them-jn91bynlbC9" target="_blank">EN</a>.
     *
     * @param string $tableId table identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PublicTableDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ModifyTableUsingPUTUnauthorizedException
     * @throws Exception\ModifyTableUsingPUTForbiddenException
     * @throws Exception\ModifyTableUsingPUTNotFoundException
     */
    public function modifyTableUsingPUT(string $tableId, ?Model\SizeTablePutRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ModifyTableUsingPUT($tableId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get all size tables assigned to a seller account. Read more: <a href="../../news/tabele-rozmiarow-w-rest-api-LRV05q2dGtV" target="_blank">PL</a> / <a href="../../news/size-tables-in-rest-api-D7KP4DE1BH3" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PublicTablesDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetTablesUsingGETUnauthorizedException
     * @throws Exception\GetTablesUsingGETForbiddenException
     * @throws Exception\GetTablesUsingGETNotFoundException
     */
    public function getTablesUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetTablesUsingGET($headerParameters), $fetch);
    }

    /**
     * Use this resource to create size table. Read more: <a href="../../news/tabele-rozmiarow-zmieniamy-istniejacy-zasob-i-dodajemy-nowe-zasoby-do-ich-obslugi-k1nyd21A4fP" target="_blank">PL</a> / <a href="../../news/size-tables-we-change-the-existing-resource-and-add-new-resources-to-handle-them-jn91bynlbC9" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PublicTableDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateTableUsingPOSTUnauthorizedException
     * @throws Exception\CreateTableUsingPOSTForbiddenException
     * @throws Exception\CreateTableUsingPOSTNotFoundException
     */
    public function createTableUsingPOST(?Model\SizeTablePostRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateTableUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get all size tables templates. Read more: <a href="../../news/tabele-rozmiarow-zmieniamy-istniejacy-zasob-i-dodajemy-nowe-zasoby-do-ich-obslugi-k1nyd21A4fP" target="_blank">PL</a> / <a href="../../news/size-tables-we-change-the-existing-resource-and-add-new-resources-to-handle-them-jn91bynlbC9" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SizeTableTemplatesResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetTablesTemplatesUsingGETUnauthorizedException
     * @throws Exception\GetTablesTemplatesUsingGETForbiddenException
     */
    public function getTablesTemplatesUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetTablesTemplatesUsingGET($headerParameters), $fetch);
    }

    /**
     * Use this resource to get the seller's return policies. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ReturnPoliciesListReturnPolicyV1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPublicSellerListingUsingGET1UnauthorizedException
     * @throws Exception\GetPublicSellerListingUsingGET1ForbiddenException
     * @throws Exception\GetPublicSellerListingUsingGET1NotFoundException
     */
    public function getPublicSellerListingUsingGET1(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPublicSellerListingUsingGET1($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a return policy definition. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-warunkach-zwrotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-return-policy-information" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ReturnPolicyResponseV1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTBadRequestException
     * @throws Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTUnauthorizedException
     * @throws Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTForbiddenException
     * @throws Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTUnprocessableEntityException
     */
    public function createAfterSalesServiceReturnPolicyUsingPOST(?Model\ReturnPolicyRequestV1 $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateAfterSalesServiceReturnPolicyUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to delete a return policy definition.
     *
     * @param string $returnPolicyId the ID of the return policy
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ReturnPolicyResponseV1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEBadRequestException
     * @throws Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEUnauthorizedException
     * @throws Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEForbiddenException
     * @throws Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETENotFoundException
     */
    public function deleteAfterSalesServiceReturnPolicyUsingDELETE(string $returnPolicyId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteAfterSalesServiceReturnPolicyUsingDELETE($returnPolicyId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a return policy details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $returnPolicyId the ID of the return policy
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ReturnPolicyResponseV1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAfterSalesServiceReturnPolicyUsingGETUnauthorizedException
     * @throws Exception\GetAfterSalesServiceReturnPolicyUsingGETForbiddenException
     * @throws Exception\GetAfterSalesServiceReturnPolicyUsingGETNotFoundException
     */
    public function getAfterSalesServiceReturnPolicyUsingGET(string $returnPolicyId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAfterSalesServiceReturnPolicyUsingGET($returnPolicyId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify the return policy details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-zwrotu" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-return-policy-information" target="_blank">EN</a>.
     *
     * @param string $returnPolicyId the ID of the return policy
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ReturnPolicyResponseV1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTBadRequestException
     * @throws Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnauthorizedException
     * @throws Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTForbiddenException
     * @throws Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTNotFoundException
     * @throws Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnprocessableEntityException
     */
    public function updateAfterSalesServiceReturnPolicyUsingPUT(string $returnPolicyId, ?Model\ReturnPolicyUpdateRequestV1 $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateAfterSalesServiceReturnPolicyUsingPUT($returnPolicyId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the seller's implied warranties. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-reklamacji-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-implied-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ImpliedWarrantiesListImpliedWarrantyBasic|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPublicSellerListingUsingGETUnauthorizedException
     * @throws Exception\GetPublicSellerListingUsingGETForbiddenException
     * @throws Exception\GetPublicSellerListingUsingGETNotFoundException
     */
    public function getPublicSellerListingUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPublicSellerListingUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create an implied warranty definition. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-warunkach-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-implied-warranty-information" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ImpliedWarrantyResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTBadRequestException
     * @throws Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTUnauthorizedException
     * @throws Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTForbiddenException
     * @throws Exception\CreateAfterSalesServiceImpliedWarrantyUsingPOSTUnprocessableEntityException
     */
    public function createAfterSalesServiceImpliedWarrantyUsingPOST(?Model\ImpliedWarrantyRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateAfterSalesServiceImpliedWarrantyUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get an implied warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-reklamacji-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-implied-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $impliedWarrantyId the ID of the implied warranty
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ImpliedWarrantyResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAfterSalesServiceImpliedWarrantyUsingGETUnauthorizedException
     * @throws Exception\GetAfterSalesServiceImpliedWarrantyUsingGETForbiddenException
     * @throws Exception\GetAfterSalesServiceImpliedWarrantyUsingGETNotFoundException
     */
    public function getAfterSalesServiceImpliedWarrantyUsingGET(string $impliedWarrantyId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAfterSalesServiceImpliedWarrantyUsingGET($impliedWarrantyId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify the implied warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-implied-warranty-information" target="_blank">EN</a>.
     *
     * @param string $impliedWarrantyId the ID of the implied warranty
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ImpliedWarrantyResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTBadRequestException
     * @throws Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTUnauthorizedException
     * @throws Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTForbiddenException
     * @throws Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTNotFoundException
     * @throws Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTUnprocessableEntityException
     */
    public function updateAfterSalesServiceImpliedWarrantyUsingPUT(string $impliedWarrantyId, ?Model\ImpliedWarrantyRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateAfterSalesServiceImpliedWarrantyUsingPUT($impliedWarrantyId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the seller's warranties. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-informacje-o-gwarancjach-przypisanych-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\WarrantiesListWarrantyBasic|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPublicSellerListingUsingGET2UnauthorizedException
     * @throws Exception\GetPublicSellerListingUsingGET2ForbiddenException
     * @throws Exception\GetPublicSellerListingUsingGET2NotFoundException
     */
    public function getPublicSellerListingUsingGET2(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPublicSellerListingUsingGET2($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a warranty definition. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-warranty-information" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\WarrantyResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateAfterSalesServiceWarrantyUsingPOSTBadRequestException
     * @throws Exception\CreateAfterSalesServiceWarrantyUsingPOSTUnauthorizedException
     * @throws Exception\CreateAfterSalesServiceWarrantyUsingPOSTForbiddenException
     * @throws Exception\CreateAfterSalesServiceWarrantyUsingPOSTUnprocessableEntityException
     */
    public function createAfterSalesServiceWarrantyUsingPOST(?Model\WarrantyRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateAfterSalesServiceWarrantyUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-informacje-o-gwarancjach-przypisanych-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $warrantyId the ID of the warranty
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\WarrantyResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAfterSalesServiceWarrantyUsingGETUnauthorizedException
     * @throws Exception\GetAfterSalesServiceWarrantyUsingGETForbiddenException
     * @throws Exception\GetAfterSalesServiceWarrantyUsingGETNotFoundException
     */
    public function getAfterSalesServiceWarrantyUsingGET(string $warrantyId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAfterSalesServiceWarrantyUsingGET($warrantyId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify the warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-warranty-information" target="_blank">EN</a>.
     *
     * @param string $warrantyId the ID of the warranty
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\WarrantyResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateAfterSalesServiceWarrantyUsingPUTBadRequestException
     * @throws Exception\UpdateAfterSalesServiceWarrantyUsingPUTUnauthorizedException
     * @throws Exception\UpdateAfterSalesServiceWarrantyUsingPUTForbiddenException
     * @throws Exception\UpdateAfterSalesServiceWarrantyUsingPUTNotFoundException
     * @throws Exception\UpdateAfterSalesServiceWarrantyUsingPUTUnprocessableEntityException
     */
    public function updateAfterSalesServiceWarrantyUsingPUT(string $warrantyId, ?Model\WarrantyRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateAfterSalesServiceWarrantyUsingPUT($warrantyId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * You can attach PDF files to warranties.
     * Uploading attachments flow:
     *   1. Create an attachment object to receive an upload URL (*POST /after-sales-service-conditions/attachments*),
     *   2. Use the upload URL to submit the PDF file (*PUT /after-sales-service-conditions/attachments/{attachmentId}*),
     *   3. Create (or update) warranty with attachment (*POST /after-sales-service-conditions/warranties*).
     *
     *   Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AfterSalesServicesAttachment|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTBadRequestException
     * @throws Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnauthorizedException
     * @throws Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTForbiddenException
     * @throws Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnsupportedMediaTypeException
     * @throws Exception\CreateAfterSalesServiceConditionsAttachmentUsingPOSTUnprocessableEntityException
     */
    public function createAfterSalesServiceConditionsAttachmentUsingPOST(?Model\AfterSalesServiceConditionsAttachmentsPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateAfterSalesServiceConditionsAttachmentUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Upload an after sale services attachment.
     * This operation should be used after creating an offer attachment with *POST /sale/offer-attachments*
     * **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /after-sales-service-conditions/attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information" target="_blank">EN</a>.
     *
     * @param string                                                 $attachmentId the ID of the attachment
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AfterSalesServicesAttachment|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTBadRequestException
     * @throws Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnauthorizedException
     * @throws Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTForbiddenException
     * @throws Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTNotFoundException
     * @throws Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTRequestEntityTooLargeException
     * @throws Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnprocessableEntityException
     */
    public function uploadAfterSalesServiceConditionsAttachmentUsingPUT(string $attachmentId, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadAfterSalesServiceConditionsAttachmentUsingPUT($attachmentId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * This endpoint returns current offer quotes (listing and promo fees) cycles for authenticated user and list of offers. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#data-naliczenia-kolejnej-oplaty" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#check-when-a-fee-is-charged" target="_blank">EN</a>.
     *
     * @param array{
     *    "offer.id": array, //List of offer Ids, maximum 20 values.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferQuotesDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\OfferQuotesPublicUsingGETBadRequestException
     * @throws Exception\OfferQuotesPublicUsingGETUnauthorizedException
     * @throws Exception\OfferQuotesPublicUsingGETForbiddenException
     * @throws Exception\OfferQuotesPublicUsingGETServiceUnavailableException
     */
    public function offerQuotesPublicUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\OfferQuotesPublicUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Upload image to our servers.
     * You can choose from two upload options:
     *   * \- provide a link and we will download an image for you
     *   * \- send an image as binary data
     * **Important!** Remember to use dedicated domain for upload, i.e.
     *   * \- https://upload.allegro.pl for Production
     *   * \- https://upload.allegro.pl.allegrosandbox.pl for Sandbox
     * Read more about the rules for photos in an offer's gallery and description: <a href="https://help.allegro.com/pl/sell/a/zasady-dla-zdjec-w-galerii-i-w-opisie-8dvWz3eo4T5?marketplaceId=allegro-pl" target="_blank">PL</a> / <a href="https://help.allegro.com/en/sell/a/rules-for-images-in-the-gallery-and-in-descriptions-8dvWB8Y2PIq" target="_blank">EN</a>.
     *
     * @param Model\OfferImageLinkUploadRequest|string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array{
     *    "isAiCoCreated"?: bool, //Sets the uploaded image to be marked as "AI". For a JSON request body (`application/vnd.allegro.public.v1+json`), this flag can also be provided in the request body. If both the query parameter and the request body are provided, their values must not conflict, otherwise a `400` response is returned.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferImageUploadResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UploadOfferImageUsingPOSTBadRequestException
     * @throws Exception\UploadOfferImageUsingPOSTUnauthorizedException
     * @throws Exception\UploadOfferImageUsingPOSTForbiddenException
     * @throws Exception\UploadOfferImageUsingPOSTRequestEntityTooLargeException
     * @throws Exception\UploadOfferImageUsingPOSTUnsupportedMediaTypeException
     * @throws Exception\UploadOfferImageUsingPOSTUnprocessableEntityException
     */
    public function uploadOfferImageUsingPOST($requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadOfferImageUsingPOST($requestBody, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * You can attach pdf, jpeg or png files to your offers. We will present them under the offer description in the Additional information section.
     * You can attach multiple files to one offer – one per each type from the list:
     *   * Guide (MANUAL). Allowed media types: PDF
     *   * Special offer terms (SPECIAL_OFFER_RULES). Allowed media types: PDF
     *   * Competition terms (COMPETITION_RULES). Allowed media types: PDF
     *   * Book excerpt (BOOK_EXCERPT). Allowed media types: PDF
     *   * Manual (USER_MANUAL). Allowed media types: PDF
     *   * Installation manual (INSTALLATION_INSTRUCTIONS). Allowed media types: PDF
     *   * Game manual (GAME_INSTRUCTIONS). Allowed media types: PDF
     *   * Energy label (ENERGY_LABEL). Allowed media types: JPEG, JPG, PNG
     *   * Product information sheet (PRODUCT_INFORMATION_SHEET). Allowed media types: PDF
     *   * Tire label (TIRE_LABEL). Allowed media types: JPEG, JPG, PNG
     *   * Data processing sheet - software (SOFTWARE_DATA_PROCESSING). Allowed media types: PDF
     *   * Data processing sheet - device (HARDWARE_DATA_PROCESSING). Allowed media types: PDF
     *   * Plant Protection Products (PPPs) license (PLANT_PROTECTION_PRODUCTS_AUTHORIZATION). Allowed media types: PDF
     * You can attach up to 20 files to one product for:
     *   * Safety information manual (SAFETY_INFORMATION_MANUAL). Allowed media types: PDF, JPEG, JPG, PNG
     * Uploading attachments flow:
     *   1. Create an attachment object to receive an upload URL (*POST /sale/offer-attachments*),
     *   2. Use the upload URL to submit the file (*PUT /sale/offer-attachments/{attachmentId}*),
     *   3. Add attachments to the offer (*PATCH /sale/product-offers/{offerId}*).
     * Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zalaczniki" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#attachments" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferAttachment|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateOfferAttachmentUsingPOSTBadRequestException
     * @throws Exception\CreateOfferAttachmentUsingPOSTUnauthorizedException
     * @throws Exception\CreateOfferAttachmentUsingPOSTUnsupportedMediaTypeException
     * @throws Exception\CreateOfferAttachmentUsingPOSTUnprocessableEntityException
     */
    public function createOfferAttachmentUsingPOST(?Model\OfferAttachmentRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateOfferAttachmentUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Get details of an offer attachments, including download link, by attachment identifier ("attachmentId"). The attachment id can be retrieved by querying a particular offer, for example by using <a href="#operation/getProductOffer">`GET /sale/product-offers/{offerId}`</a>. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zalaczniki" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#attachments" target="_blank">EN</a>.
     *
     * @param string $attachmentId the ID of the attachment
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferAttachment|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOfferAttachmentForbiddenException
     * @throws Exception\GetOfferAttachmentNotFoundException
     */
    public function getOfferAttachment(string $attachmentId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOfferAttachment($attachmentId, $headerParameters), $fetch);
    }

    /**
     * Upload an offer attachment.
     * This operation should be used after creating an offer attachment with *POST /sale/offer-attachments*
     * **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/offer-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zalaczniki" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#attachments" target="_blank">EN</a>.
     *
     * @param string                                                 $attachmentId the ID of the attachment
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferAttachment|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UploadOfferAttachmentUsingPUTBadRequestException
     * @throws Exception\UploadOfferAttachmentUsingPUTUnauthorizedException
     * @throws Exception\UploadOfferAttachmentUsingPUTUnsupportedMediaTypeException
     */
    public function uploadOfferAttachmentUsingPUT(string $attachmentId, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadOfferAttachmentUsingPUT($attachmentId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to return events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#dziennik-zdarzen" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#event-log" target="_blank">EN</a>.
     *
     * @param array{
     *    "from"?: string, //You can use the event ID to retrieve subsequent chunks of events.
     *    "type"?: array, //Specify array of event types for filtering. Allowed values are:
     * `BOUGHT`: purchase without checkout form filled in
     * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change
     * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing
     * `BUYER_CANCELLED`: purchase was cancelled by buyer
     * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed
     * `AUTO_CANCELLED`: purchase was cancelled automatically by Allegro.
     *    "limit"?: int, //The maximum number of events returned in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OrderEventsList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOrderEventsUsingGETUnauthorizedException
     * @throws Exception\GetOrderEventsUsingGETForbiddenException
     * @throws Exception\GetOrderEventsUsingGETUnprocessableEntityException
     */
    public function getOrderEventsUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOrderEventsUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to returns object that contains event id and occurrence date of the latest event. It gives you current starting point for reading events. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-znalezc-najnowsze-zdarzenie" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-find-the-newest-event" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OrderEventStats|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOrderEventsStatisticsUsingGETUnauthorizedException
     */
    public function getOrderEventsStatisticsUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOrderEventsStatisticsUsingGET($headerParameters), $fetch);
    }

    /**
     * Use this resource to get an order list. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#lista-zamowien" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#order-list" target="_blank">EN</a>.
     *
     * @param array{
     *    "offset"?: int, //Index of first returned checkout-form from all search results.
     *    "limit"?: int, //Maximum number of checkout-forms in response.
     *    "status"?: string, //Specify status value that checkout-forms must have to be included in the output. Allowed values are:
     * `BOUGHT`: purchase without checkout form filled in.
     * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change.
     * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.
     * `CANCELLED`: purchase cancelled by buyer.
     *    "fulfillment.status"?: string, //Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:
     * `NEW`
     * `PROCESSING`
     * `READY_FOR_SHIPMENT`
     * `READY_FOR_PICKUP`
     * `SENT`
     * `PICKED_UP`
     * `CANCELLED`
     * `SUSPENDED`
     * `RETURNED`.
     *    "fulfillment.provider.id"?: string, //Specify filter for order management provider. Allowed values are:
     * `SELLER`: for orders managed directly by seller
     * `ALLEGRO`: for orders managed by Allegro warehouse (One Fulfillment).
     *    "fulfillment.shipmentSummary.lineItemsSent"?: string, //Specify filter for line items sending status. Allowed values are:
     * `NONE`: none of line items have tracking number specified
     * `SOME`: some of line items have tracking number specified
     * `ALL`: all of line items have tracking number specified.
     *    "lineItems.boughtAt.lte"?: string, //Latest line item bought date. The upper bound of date time range from which checkout forms will be taken.
     *    "lineItems.boughtAt.gte"?: string, //Latest line item bought date. The lower bound of date time range from which checkout forms will be taken.
     *    "payment.id"?: string, //Find checkout-forms having specified payment id.
     *    "surcharges.id"?: string, //Find checkout-forms having specified surcharge id.
     *    "delivery.method.id"?: string, //Find checkout-forms having specified delivery method id.
     *    "buyer.login"?: string, //Find checkout-forms having specified buyer login.
     *    "marketplace.id"?: string, //Find checkout-forms of orders purchased on specified marketplace.
     *    "updatedAt.lte"?: string, //Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken.
     *    "updatedAt.gte"?: string, //Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken.
     *    "sort"?: string, //The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by line item boughtAt date, descending.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CheckoutForms|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetListOfOrdersUsingGETBadRequestException
     * @throws Exception\GetListOfOrdersUsingGETUnauthorizedException
     * @throws Exception\GetListOfOrdersUsingGETNotAcceptableException
     * @throws Exception\GetListOfOrdersUsingGETUnprocessableEntityException
     */
    public function getListOfOrdersUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetListOfOrdersUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get an order details. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#szczegoly-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#order-details" target="_blank">EN</a>.
     *
     * @param string $id checkout form identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CheckoutForm|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOrdersDetailsUsingGETBadRequestException
     * @throws Exception\GetOrdersDetailsUsingGETUnauthorizedException
     * @throws Exception\GetOrdersDetailsUsingGETNotFoundException
     * @throws Exception\GetOrdersDetailsUsingGETNotAcceptableException
     * @throws Exception\GetOrdersDetailsUsingGETUnprocessableEntityException
     */
    public function getOrdersDetailsUsingGET(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOrdersDetailsUsingGET($id, $headerParameters), $fetch);
    }

    /**
     * Shipping carriers are essential to provide accurate tracking experience for customers. Use this resource to get a list of all available shipping carriers. This resource is rate limited to 50 requests per second.
     *
     * The response of this resource can be stored in accordance with returned caching headers. Read more: <a href="../../news/nowy-zasob-do-pobrania-identyfikatorow-przewoznikow-8dmljjGRGUE" target="_blank">PL</a> / <a href="../../news/new-resource-to-retrieve-available-delivery-company-id-VL6zDDdr4hk" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OrdersShippingCarriersResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOrdersCarriersUsingGETUnauthorizedException
     * @throws Exception\GetOrdersCarriersUsingGETNotFoundException
     */
    public function getOrdersCarriersUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOrdersCarriersUsingGET($headerParameters), $fetch);
    }

    /**
     * Get a list of parcel tracking numbers currently assigned to the order. Orders can be retrieved using REST API resource GET /order/checkout-forms. Please note that the shipment list may contain parcel tracking numbers added through other channels such as Moje Allegro or by the carrier that delivers the parcel. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-numery-przesylek-dodane-do-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#retrieving-tracking-numbers" target="_blank">EN</a>. This resource is rate limited to 50 requests per second.
     *
     * @param string $id order identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CheckoutFormOrderWaybillResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOrderShipmentsUsingGETUnauthorizedException
     * @throws Exception\GetOrderShipmentsUsingGETNotFoundException
     */
    public function getOrderShipmentsUsingGET(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOrderShipmentsUsingGET($id, $headerParameters), $fetch);
    }

    /**
     * Add a parcel tracking number (shipment) to given order line items. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-numer-przesylki-do-przedmiotu-w-zamowieniu" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#add-tracking-number-to-order" target="_blank">EN</a>. This resource is rate limited to 50 requests per second.
     *
     * @param string $id order identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CheckoutFormAddWaybillCreated|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateOrderShipmentsUsingPOSTBadRequestException
     * @throws Exception\CreateOrderShipmentsUsingPOSTUnauthorizedException
     * @throws Exception\CreateOrderShipmentsUsingPOSTNotFoundException
     * @throws Exception\CreateOrderShipmentsUsingPOSTConflictException
     * @throws Exception\CreateOrderShipmentsUsingPOSTUnprocessableEntityException
     */
    public function createOrderShipmentsUsingPOST(string $id, ?Model\CheckoutFormAddWaybillRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateOrderShipmentsUsingPOST($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use to set seller order status. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#zmiana-statusu-realizacji-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#order-fulfillment-status-change" target="_blank">EN</a>.
     *
     * @param string $id order identifier
     * @param array{
     *    "checkoutForm.revision"?: string, //Checkout form revision.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\SetOrderFulfillmentUsingPUTUnauthorizedException
     * @throws Exception\SetOrderFulfillmentUsingPUTNotFoundException
     * @throws Exception\SetOrderFulfillmentUsingPUTConflictException
     * @throws Exception\SetOrderFulfillmentUsingPUTUnprocessableEntityException
     */
    public function setOrderFulfillmentUsingPUT(string $id, ?Model\CheckoutFormFulfillment $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SetOrderFulfillmentUsingPUT($id, $requestBody, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use to set serial numbers in the given line items of seller order. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#zmiana-statusu-realizacji-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#order-fulfillment-status-change" target="_blank">EN</a>.
     *
     * @param string $id order identifier
     * @param array{
     *    "checkoutForm.revision"?: string, //Checkout form revision.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\SetOrderLineItemsSerialNumbersUsingPOSTUnauthorizedException
     * @throws Exception\SetOrderLineItemsSerialNumbersUsingPOSTNotFoundException
     * @throws Exception\SetOrderLineItemsSerialNumbersUsingPOSTConflictException
     * @throws Exception\SetOrderLineItemsSerialNumbersUsingPOSTUnprocessableEntityException
     */
    public function setOrderLineItemsSerialNumbersUsingPOST(string $id, ?Model\CheckoutFormLineItemsSetSerialNumbersRequest $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SetOrderLineItemsSerialNumbersUsingPOST($id, $requestBody, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use to get invoices details including antivirus scan results and EPT invoice verification status. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-informacje-o-dokumentach-rozliczeniowych-dodanych-do-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-download-information-about-billing-documents-added-to-orders" target="_blank">EN</a>.
     *
     * @param string $id order identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CheckoutFormsOrderInvoices|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOrderInvoicesDetailsForbiddenException
     * @throws Exception\GetOrderInvoicesDetailsNotFoundException
     */
    public function getOrderInvoicesDetails(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOrderInvoicesDetails($id, $headerParameters), $fetch);
    }

    /**
     * Use to add new invoice metadata. Before you send an invoice file, you need to initialize the invoice instance with the required parameters. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-fakture-do-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-add-an-invoice-to-orders" target="_blank">EN</a>.
     *
     * @param string $id order identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CheckFormsNewOrderInvoiceId|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\AddOrderInvoicesMetadataForbiddenException
     * @throws Exception\AddOrderInvoicesMetadataNotFoundException
     * @throws Exception\AddOrderInvoicesMetadataConflictException
     * @throws Exception\AddOrderInvoicesMetadataUnprocessableEntityException
     * @throws Exception\AddOrderInvoicesMetadataTooManyRequestsException
     */
    public function addOrderInvoicesMetadata(string $id, ?Model\CheckFormsNewOrderInvoice $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AddOrderInvoicesMetadata($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use to upload invoice file to match created invoice metadata. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-fakture-do-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#add-an-invoice-to-the-order" target="_blank">EN</a>.
     *
     * @param string                                                 $id          order identifier
     * @param string                                                 $invoiceId   invoice identifier
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UploadOrderInvoiceFileForbiddenException
     * @throws Exception\UploadOrderInvoiceFileNotFoundException
     * @throws Exception\UploadOrderInvoiceFileConflictException
     * @throws Exception\UploadOrderInvoiceFileRequestEntityTooLargeException
     * @throws Exception\UploadOrderInvoiceFileUnprocessableEntityException
     */
    public function uploadOrderInvoiceFile(string $id, string $invoiceId, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadOrderInvoiceFile($id, $invoiceId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use to add an invoice to the order in a single request - the invoice file together with its metadata are sent together, instead of the two-step flow (add invoice metadata, then upload invoice file). Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-dodac-fakture-do-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-add-an-invoice-to-orders" target="_blank">EN</a>.
     *
     * @param string $orderId order identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CheckFormsNewOrderInvoiceId|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UploadOrderInvoiceFileWithMetadataBadRequestException
     * @throws Exception\UploadOrderInvoiceFileWithMetadataForbiddenException
     * @throws Exception\UploadOrderInvoiceFileWithMetadataNotFoundException
     * @throws Exception\UploadOrderInvoiceFileWithMetadataConflictException
     * @throws Exception\UploadOrderInvoiceFileWithMetadataRequestEntityTooLargeException
     * @throws Exception\UploadOrderInvoiceFileWithMetadataUnprocessableEntityException
     * @throws Exception\UploadOrderInvoiceFileWithMetadataTooManyRequestsException
     */
    public function uploadOrderInvoiceFileWithMetadata(string $orderId, ?Model\NewOrderInvoiceFileWithMetadata $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadOrderInvoiceFileWithMetadata($orderId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Used to upload a URL to a billing document. You can add up to 10 links.
     *
     * @param string $orderId order identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UploadOrderBillingDocumentLinkForbiddenException
     * @throws Exception\UploadOrderBillingDocumentLinkNotFoundException
     * @throws Exception\UploadOrderBillingDocumentLinkConflictException
     * @throws Exception\UploadOrderBillingDocumentLinkUnprocessableEntityException
     */
    public function uploadOrderBillingDocumentLink(string $orderId, ?Model\NewOrderBillingDocumentLink $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadOrderBillingDocumentLink($orderId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Get a list of Allegro pickup drop off points. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-liste-punktow-allegro" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-list-of-allegro-pickup-drop-off-points" target="_blank">EN</a>.
     *
     * @param array{
     *    "carriers"?: array, //List of carrier ids to filter the drop off/pick up points to only the ones where any of the listed carriers operate. In case of an empty list, all points are returned.
     * } $queryParameters
     * @param array{
     *    "If-Modified-Since"?: string, //Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Information about date (the same HTTP-date format) of last modified data is available in response - `Last-Modified`.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AllegroPickupDropOffPointsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAllegroPickupDropOffPointsGETBadRequestException
     * @throws Exception\GetAllegroPickupDropOffPointsGETUnauthorizedException
     */
    public function getAllegroPickupDropOffPointsGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAllegroPickupDropOffPointsGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Get tracking history for parcels. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-historie-statusow-przesylek" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-parcels-statuses-history" target="_blank">EN</a>.
     *
     * @param string $carrierId carrier identifier
     * @param array{
     *    "waybill": array, //Waybill number (parcel tracking number). Example: `waybill=AAA0000E5D201&waybill=BBB00000E5D202` - returns parcel tracking history for `AAA0000E5D201` as well as for `BBB00000E5D202`.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CarrierParcelTrackingResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetParcelTrackingUsingGETBadRequestException
     * @throws Exception\GetParcelTrackingUsingGETUnauthorizedException
     */
    public function getParcelTrackingUsingGET(string $carrierId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetParcelTrackingUsingGET($carrierId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the list of your disputes and claims ordered by descending opened date. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#lista-dyskusji-i-reklamacji-na-koncie" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#all-disputes-and-claims" target="_blank">EN</a>.
     *
     * @param array{
     *    "checkoutForm.id"?: string, //Checkout form identifier.
     *    "limit"?: int, //The maximum number of issues in a response.
     *    "offset"?: int, //Index of first returned issue.
     *    "status"?: array, //Filter issues with given set of statuses.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of subject field.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PostPurchaseIssueListResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetListOfIssuesUsingGETUnauthorizedException
     * @throws Exception\GetListOfIssuesUsingGETNotFoundException
     * @throws Exception\GetListOfIssuesUsingGETUnprocessableEntityException
     */
    public function getListOfIssuesUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetListOfIssuesUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a single dispute or claim. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#szczegolowe-informacje-o-dyskusji-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#detailed-information-about-the-dispute-claim" target="_blank">EN</a>.
     *
     * @param string $issueId dispute or claim identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of subject field.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PostPurchaseIssue|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetIssueUsingGETUnauthorizedException
     * @throws Exception\GetIssueUsingGETForbiddenException
     * @throws Exception\GetIssueUsingGETNotFoundException
     */
    public function getIssueUsingGET(string $issueId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetIssueUsingGET($issueId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the list of messages and state changes within a dispute or claim. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#wiadomosci-z-dyskusji-i-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#disputes-and-claims-messages" target="_blank">EN</a>.
     *
     * @param string $issueId dispute or claim identifier
     * @param array{
     *    "limit"?: int, //The maximum number of messages within issue returned in a response.
     *    "offset"?: int, //Index of first returned message within issue.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PostPurchaseIssueChatResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetChatFromIssueUsingGETUnauthorizedException
     * @throws Exception\GetChatFromIssueUsingGETForbiddenException
     * @throws Exception\GetChatFromIssueUsingGETNotFoundException
     */
    public function getChatFromIssueUsingGET(string $issueId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetChatFromIssueUsingGET($issueId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to post a message in certain issue. At least one of fields: 'text', 'attachment' has to be present. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#nowa-wiadomosc-w-dyskusji-lub-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#new-message-in-dispute-or-claim" target="_blank">EN</a>.
     *
     * @param string $issueId dispute or claim identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PostPurchaseIssueMessage|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\AddMessageToIssueUsingPOSTBadRequestException
     * @throws Exception\AddMessageToIssueUsingPOSTUnauthorizedException
     * @throws Exception\AddMessageToIssueUsingPOSTForbiddenException
     * @throws Exception\AddMessageToIssueUsingPOSTNotFoundException
     * @throws Exception\AddMessageToIssueUsingPOSTConflictException
     * @throws Exception\AddMessageToIssueUsingPOSTUnprocessableEntityException
     */
    public function addMessageToIssueUsingPOST(string $issueId, ?Model\MessageRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AddMessageToIssueUsingPOST($issueId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Change the formal status of a claim, for example accept or reject it. Not a valid operation for disputes. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#zmien-status-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#change-claim-status" target="_blank">EN</a>.
     *
     * @param string $issueId claim identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ChangeStatusOfIssueUsingPOSTBadRequestException
     * @throws Exception\ChangeStatusOfIssueUsingPOSTUnauthorizedException
     * @throws Exception\ChangeStatusOfIssueUsingPOSTForbiddenException
     * @throws Exception\ChangeStatusOfIssueUsingPOSTNotFoundException
     */
    public function changeStatusOfIssueUsingPOST(string $issueId, ?Model\ClaimStatusChangeRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ChangeStatusOfIssueUsingPOST($issueId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to post an attachment declaration. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#deklaracja-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#attachment-declaration" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PostPurchaseIssueAttachmentId|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateAnIssueAttachmentUsingPOSTUnauthorizedException
     * @throws Exception\CreateAnIssueAttachmentUsingPOSTForbiddenException
     * @throws Exception\CreateAnIssueAttachmentUsingPOSTUnprocessableEntityException
     */
    public function createAnIssueAttachmentUsingPOST(?Model\AttachmentDeclaration $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateAnIssueAttachmentUsingPOST($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get an attachment. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#pobranie-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#attachment-related-to-dispute-claim" target="_blank">EN</a>.
     *
     * @param string $attachmentId attachment identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetIssueAttachmentUsingGETUnauthorizedException
     * @throws Exception\GetIssueAttachmentUsingGETForbiddenException
     * @throws Exception\GetIssueAttachmentUsingGETNotFoundException
     */
    public function getIssueAttachmentUsingGET(string $attachmentId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetIssueAttachmentUsingGET($attachmentId, $headerParameters), $fetch);
    }

    /**
     * Upload a post purchase issue message attachment.
     * This operation should be used after creating an attachment declaration with *POST /sale/issues/attachments*
     * **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/issues/attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dodanie-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#adding-an-attachment" target="_blank">EN</a>.
     *
     * @param string                                                 $attachmentId attachment identifier
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PostPurchaseIssueAttachmentId|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UploadIssueAttachmentUsingPUTBadRequestException
     * @throws Exception\UploadIssueAttachmentUsingPUTUnauthorizedException
     * @throws Exception\UploadIssueAttachmentUsingPUTRequestEntityTooLargeException
     * @throws Exception\UploadIssueAttachmentUsingPUTUnsupportedMediaTypeException
     * @throws Exception\UploadIssueAttachmentUsingPUTUnprocessableEntityException
     */
    public function uploadIssueAttachmentUsingPUT(string $attachmentId, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadIssueAttachmentUsingPUT($attachmentId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of tags defined by the specified user (Defaults: limit = 1000, offset = 0). Read more: <a href="../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //The limit of elements in the response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TagListResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ListSellerTagsGET1UnauthorizedException
     * @throws Exception\ListSellerTagsGET1ForbiddenException
     */
    public function listSellerTagsGET1(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListSellerTagsGET1($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a new tag. You can create up to 100 tags. Read more: <a href="../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TagId|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateTagPOST1BadRequestException
     * @throws Exception\CreateTagPOST1UnprocessableEntityException
     * @throws Exception\CreateTagPOST1UnauthorizedException
     * @throws Exception\CreateTagPOST1ForbiddenException
     */
    public function createTagPOST1(?Model\TagRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateTagPOST1($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to delete the tag. Read more: <a href="../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param string $tagId tag identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header *\/*|application/vnd.allegro.public.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteTagUsingDELETEUnauthorizedException
     * @throws Exception\DeleteTagUsingDELETEForbiddenException
     */
    public function deleteTagUsingDELETE(string $tagId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\DeleteTagUsingDELETE($tagId, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to update a tag. Read more: <a href="../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>. This resource is rate limited to 1 million changes per hour.
     *
     * @param string $tagId tag identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateTagPUTUnprocessableEntityException
     * @throws Exception\UpdateTagPUTUnauthorizedException
     * @throws Exception\UpdateTagPUTForbiddenException
     * @throws Exception\UpdateTagPUTNotFoundException
     */
    public function updateTagPUT(string $tagId, ?Model\TagRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateTagPUT($tagId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of tags assigned to offer. Read more: <a href="../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TagListResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ListAssignedOfferTagsGETUnauthorizedException
     * @throws Exception\ListAssignedOfferTagsGETForbiddenException
     * @throws Exception\ListAssignedOfferTagsGETNotFoundException
     */
    public function listAssignedOfferTagsGET(string $offerId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListAssignedOfferTagsGET($offerId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to assign a tag to offer. Read more: <a href="../../news/nowe-zasoby-zarzadzaj-tagami-i-zalacznikami-w-ofertach-1nzlmKLPyHl" target="_blank">PL</a> / <a href="../../news/new-resources-manage-tags-and-attachments-in-offers-WvGz12BXrHL" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\AssignTagToOfferPOSTBadRequestException
     * @throws Exception\AssignTagToOfferPOSTForbiddenException
     * @throws Exception\AssignTagToOfferPOSTUnprocessableEntityException
     * @throws Exception\AssignTagToOfferPOSTUnauthorizedException
     * @throws Exception\AssignTagToOfferPOSTNotFoundException
     */
    public function assignTagToOfferPOST(string $offerId, ?Model\TagIdsRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AssignTagToOfferPOST($offerId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get offer rating. Read more: <a href="../../news/nowy-zasob-do-pobrania-oceny-produktu-q018mmPe0H7" target="_blank">PL</a> / <a href="../../news/new-resource-to-retrieve-product-rating-q018mmPrWUX" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferRating|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\OfferRatingGETForbiddenException
     * @throws Exception\OfferRatingGETNotFoundException
     * @throws Exception\OfferRatingGETUnauthorizedException
     */
    public function offerRatingGET(string $offerId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\OfferRatingGET($offerId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve all available offer promotion packages. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-dostepne-opcje-promowania" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-available-promo-options" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AvailablePromotionPackages|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAvailableOfferPromotionPackagesUnauthorizedException
     */
    public function getAvailableOfferPromotionPackages(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAvailableOfferPromotionPackages($headerParameters), $fetch);
    }

    /**
     * Use this resource to modify offer promotion packages. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-zmienic-opcje-promowania-w-pojedynczej-ofercie" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-a-single-offer" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferPromoOptions|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ModifyOfferPromoOptionsUsingPOSTUnauthorizedException
     * @throws Exception\ModifyOfferPromoOptionsUsingPOSTForbiddenException
     * @throws Exception\ModifyOfferPromoOptionsUsingPOSTUnprocessableEntityException
     */
    public function modifyOfferPromoOptionsUsingPOST(string $offerId, ?Model\PromoOptionsModifications $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ModifyOfferPromoOptionsUsingPOST($offerId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get promotion packages assigned to an offer. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-opcje-promowania-przypisane-do-oferty" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-promo-options-assigned-to-an-offer" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferPromoOptions|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOfferPromoOptionsUsingGETUnauthorizedException
     * @throws Exception\GetOfferPromoOptionsUsingGETForbiddenException
     */
    public function getOfferPromoOptionsUsingGET(string $offerId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOfferPromoOptionsUsingGET($offerId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve promo options for seller offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-opcje-promowania-dla-wielu-ofert" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-available-promo-options-for-multiple-offers" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //Limit of promo options per page.
     *    "offset"?: int, //Distance between the beginning of the document and the point from which promo options are returned.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferPromoOptionsForSeller|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPromoOptionsForSellerOffersUsingGETBadRequestException
     * @throws Exception\GetPromoOptionsForSellerOffersUsingGETUnauthorizedException
     */
    public function getPromoOptionsForSellerOffersUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPromoOptionsForSellerOffersUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers and errors. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-szczegolowy-raport-zadania" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-a-detailed-report-of-your-task" target="_blank">EN</a>.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PromoGeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPromoModificationCommandResultUsingGETUnauthorizedException
     * @throws Exception\GetPromoModificationCommandResultUsingGETForbiddenException
     * @throws Exception\GetPromoModificationCommandResultUsingGETNotFoundException
     */
    public function getPromoModificationCommandResultUsingGET(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPromoModificationCommandResultUsingGET($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to modify promotion packages on multiple offers at once. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-lub-edytowac-opcje-promowania-na-wielu-ofertach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-or-change-promo-options-in-multiple-offers" target="_blank">EN</a>.
     *
     * @param string $commandId Command identifier. Must be a UUID.
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PromoGeneralReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\PromoModificationCommandUsingPUTUnauthorizedException
     * @throws Exception\PromoModificationCommandUsingPUTConflictException
     * @throws Exception\PromoModificationCommandUsingPUTUnprocessableEntityException
     */
    public function promoModificationCommandUsingPUT(string $commandId, ?Model\PromoOptionsCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PromoModificationCommandUsingPUT($commandId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve the result of an offer modification command. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-szczegolowy-raport-zadania" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-a-detailed-report-of-your-task" target="_blank">EN</a>.
     *
     * @param string $commandId command identifier
     * @param array{
     *    "limit"?: int, //The limit of returned items.
     *    "offset"?: int, //The offset of returned items.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PromoModificationReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPromoModificationCommandDetailedResultUsingGETUnauthorizedException
     * @throws Exception\GetPromoModificationCommandDetailedResultUsingGETForbiddenException
     * @throws Exception\GetPromoModificationCommandDetailedResultUsingGETNotFoundException
     */
    public function getPromoModificationCommandDetailedResultUsingGET(string $commandId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPromoModificationCommandDetailedResultUsingGET($commandId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a full Smart! offer classification report of one of your offers. Please keep in mind you have to meet Smart! seller conditions first - for more details, use *GET /sale/smart*. To learn more about Smart! offer requirements, see our knowledge base article: [PL](https://help.allegro.com/pl/sell/a/allegro-smart-na-allegro-pl-informacje-dla-sprzedajacych-9g0rWRXKxHG#jakie-warunki-musisz-spelnic-aby-zyskac-oznaczenie-smart) / [EN](https://help.allegro.com/en/sell/a/allegro-smart-on-allegro-pl-information-for-sellers-LR8j8Y26GTR#what-requirements-you-need-to-meet-to-get-the-smart-badge). Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#kwalifikacja-oferty" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#offer-qualification" target="_blank">EN</a>.
     *
     * @param string $offerId offer identifier
     * @param array{
     *    "marketplaceId"?: string, //Marketplace for which offer classification report will be returned. If not specified, the result of the offer's base marketplace will be returned.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SmartOfferClassificationReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOfferSmartClassificationGETBadRequestException
     * @throws Exception\GetOfferSmartClassificationGETUnauthorizedException
     * @throws Exception\GetOfferSmartClassificationGETForbiddenException
     * @throws Exception\GetOfferSmartClassificationGETNotFoundException
     * @throws Exception\GetOfferSmartClassificationGETUnprocessableEntityException
     */
    public function getOfferSmartClassificationGET(string $offerId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOfferSmartClassificationGET($offerId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of products according to provided parameters. At least ean or phrase parameter is required. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-znalezc-produkt" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-find-a-product" target="_blank">EN</a>. This resource is limited with Leaky Bucket mechanism, read more <a href="../../tutorials/informacje-podstawowe-b21569boAI1#ograniczenie-liczby-zapytan-limity" target="_blank">PL</a> / <a href="../../tutorials/basic-information-VL6YelvVKTn#limiting-the-number-of-queries-limits" target="_blank">EN</a>.
     *
     * @param array{
     *    "phrase"?: string, //Search phrase.
     *    "mode"?: string, //Search mode. If not specified, we are searching by GTIN, MPN, product's name, parameters, etc.
     * - `GTIN` - restricts the search filtering to GTINs (Global Trade Item Number), e.g. EAN, ISBN, UPC.
     * - `MPN` - restricts the search filtering to MPNs (Manufacturer Part Number).
     *    "language"?: string, //Language indicates the language for searching products. Allows to specify the language of the given phrase.
     *    "category.id"?: string, //The category identifier to filter results. This can only be used when searching by phrase.
     *    "Dynamic filters"?: array, //You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:
     * ````
     * {
     * "id": "127448",
     * "name": "Kolor",
     * "type": "SINGLE",
     * "values": [
     * {
     * "name": "biały",
     * "value": "127448_2"
     * },
     * {
     * "name": "czarny",
     * "value": "127448_1"
     * }
     * ]
     * }
     * ````
     * You can use 'Kolor' filter to query results, i.e.:
     * `127448=127448_2` for "biały"
     * `127448=127448_1` for "czarny".
     *    "page.id"?: string, //A "cursor" to the next set of results.
     *    "searchFeatures"?: string, //Enables additional search options: - *SIMILAR_CATEGORIES* - searching in the indicated category (category.id) and in 'similar categories' (works only if category.id is a leaf category).
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GetSaleProductsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetSaleProductsBadRequestException
     * @throws Exception\GetSaleProductsUnauthorizedException
     * @throws Exception\GetSaleProductsUnprocessableEntityException
     */
    public function getSaleProducts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSaleProducts($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve all data of the particular product. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-pobrac-pelne-dane-o-produkcie" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-retrieve-product-data" target="_blank">EN</a>. This resource is limited with <a href="../../tutorials/basic-information-VL6YelvVKTn#limiting-the-number-of-queries-limits" target="_blank">Leaky Bucket</a> mechanism.
     *
     * @param string $productId the product identifier
     * @param array{
     *    "category.id"?: string, //The similar category identifier. You can choose a category from 'similar categories' to filter the list of parameters available in the category context.
     *    "language"?: string, //The language version of product. You can indicate the language for the returned product data.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleProductDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetSaleProductUnauthorizedException
     * @throws Exception\GetSaleProductNotFoundException
     * @throws Exception\GetSaleProductUnprocessableEntityException
     */
    public function getSaleProduct(string $productId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSaleProduct($productId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to propose a product. You can add up to 20,000 new products to the Catalog each month. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-utworzyc-nowy-produkt" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-create-a-product" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ProductProposalsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ProposeSaleProductBadRequestException
     * @throws Exception\ProposeSaleProductUnauthorizedException
     * @throws Exception\ProposeSaleProductForbiddenException
     * @throws Exception\ProposeSaleProductConflictException
     * @throws Exception\ProposeSaleProductUnprocessableEntityException
     */
    public function proposeSaleProduct(?Model\ProductProposalsRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ProposeSaleProduct($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to propose changes in product. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-zglosic-blad-w-produkcie" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-report-incorrect-data-in-a-product" target="_blank">EN</a>. This resource is limited to 100 suggestions per day for a single user.
     *
     * @param string $productId the product identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ProductChangeProposalDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ProductChangeProposalBadRequestException
     * @throws Exception\ProductChangeProposalUnauthorizedException
     * @throws Exception\ProductChangeProposalNotFoundException
     * @throws Exception\ProductChangeProposalUnprocessableEntityException
     */
    public function productChangeProposal(string $productId, ?Model\ProductChangeProposalRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ProductChangeProposal($productId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve all data of the particular product changes proposal. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#jak-zglosic-blad-w-produkcie" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#how-to-report-incorrect-data-in-a-product" target="_blank">EN</a>.
     *
     * @param string $changeProposalId the product changes proposal identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ProductChangeProposalDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetProductChangeProposalUnauthorizedException
     * @throws Exception\GetProductChangeProposalForbiddenException
     * @throws Exception\GetProductChangeProposalNotFoundException
     */
    public function getProductChangeProposal(string $changeProposalId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetProductChangeProposal($changeProposalId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get information about required parameters or parameters scheduled to become required that are not filled in offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-nieuzupelnione-parametry-w-ofertach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-unfilled-parameters-in-offers" target="_blank">EN</a>.
     *
     * @param array{
     *    "offer.id"?: array, //List of offer ids. If empty all offers with unfilled parameters will be returned.
     *    "parameterType"?: string, //Filter by parameter type.
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //The limit of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\UnfilledParametersResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOffersUnfilledParametersUsingGET1BadRequestException
     * @throws Exception\GetOffersUnfilledParametersUsingGET1UnauthorizedException
     * @throws Exception\GetOffersUnfilledParametersUsingGET1ForbiddenException
     */
    public function getOffersUnfilledParametersUsingGET1(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOffersUnfilledParametersUsingGET1($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Compatibility list is available in particular categories, this resource allows to get the list of these categories with additional details. Read more: <a href="../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-sprawdzic-czy-w-danej-kategorii-moge-dodac-sekcje-pasuje-do-do-oferty" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#which-categories-support-compatibility-section" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CompatibilityListSupportedCategoriesDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCategoriesThatSupportCompatibilityListUnauthorizedException
     */
    public function getCategoriesThatSupportCompatibilityList(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCategoriesThatSupportCompatibilityList($headerParameters), $fetch);
    }

    /**
     * Resource allows to fetch compatibility list suggestion for given offer or product. Read more: <a href="../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-wyszukac-sugerowana-sekcje-compatibilitylist" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#how-to-search-for-the-suggested-compatibility-section" target="_blank">EN</a>.
     *
     * @param array{
     *    "offer.id"?: string, //Offer id on the basis of which we will return the suggested compatibility list.
     *    "product.id"?: string, //Product id on the basis of which we will return the suggested compatibility list.
     *    "language"?: string, //Locale on the basis of which we will return the suggested compatibility list. For product-based suggestions if missing pl-PL will be used. For offer-based suggestions if missing offer language will be used.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CompatibilityList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCompatibilityListSuggestionBadRequestException
     * @throws Exception\GetCompatibilityListSuggestionUnauthorizedException
     * @throws Exception\GetCompatibilityListSuggestionNotFoundException
     */
    public function getCompatibilityListSuggestion(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetCompatibilityListSuggestion($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Compatible products are organized in groups, this resource allows to browse these groups. Read more: <a href="../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-zarzadzac-sekcja-pasuje-do-zintegrowana-z-baza-pojazdow" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#managing-the-compatibility-section-compatibilitylist-integrated-vehicle-database" target="_blank">EN</a>.
     *
     * @param array{
     *    "type": string, //Type of compatible products. You can find available types in the response for the GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
     *    "limit"?: int, //The limit of returned items.
     *    "offset"?: int, //The offset of returned items.
     * } $queryParameters
     * @param array{
     *    "If-Modified-Since"?: string, //Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CompatibleProductsGroupsDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCompatibleProductsGroupsBadRequestException
     * @throws Exception\GetCompatibleProductsGroupsUnauthorizedException
     * @throws Exception\GetCompatibleProductsGroupsUnprocessableEntityException
     */
    public function getCompatibleProductsGroups(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetCompatibleProductsGroups($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Resource allows to fetch compatible products of given type. Read more: <a href="../../tutorials/jak-zarzadzac-sekcja-pasuje-do-E7Zj6gAEGil#jak-zarzadzac-sekcja-pasuje-do-zintegrowana-z-baza-pojazdow" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-compatibility-section-v8WbL1wV0Hz#managing-the-compatibility-section-compatibilitylist-integrated-vehicle-database" target="_blank">EN</a>.
     *
     * @param array{
     *    "type": string, //Type of compatible products. You can find available types in the response for the GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get">supported-categories</a> resource. You can use value provided in `itemsType`, for categories where `inputType=ID`.
     *    "group.id"?: string, //Group identifier from `/sale/compatible-products/groups` resource. Parameter is required when parameter `tecdoc.kTypNr` or `tecdoc.nTypNr` or `phrase` is not specified.
     *    "tecdoc.kTypNr"?: string, //Identifier of passenger vehicle (kTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
     *    "tecdoc.nTypNr"?: string, //Identifier of commercial vehicle (nTypNr) from TecDoc database. When used, `group.id` parameter is ignored.
     *    "phrase"?: string, //Query for compatible products. When used, parameters: `group.id`, `limit`, `offset` and header `If-Modified-Since` are ignored.
     *    "limit"?: int, //The limit of returned items. If `phrase` parameter is present, parameter is ignored and maximum value is set to `200`.
     *    "offset"?: int, //The offset of returned items. If `phrase` parameter is present, parameter is ignored.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     *    "If-Modified-Since"?: string, //Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Header is ignored if `phrase` parameter is used.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CompatibleProductsListDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCompatibleProductsBadRequestException
     * @throws Exception\GetCompatibleProductsUnauthorizedException
     * @throws Exception\GetCompatibleProductsUnprocessableEntityException
     */
    public function getCompatibleProducts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetCompatibleProducts($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get a list of all additional email addresses assigned to account. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-adresy-e-mail" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-email-addresses" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalEmailsResponse|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getListOfAdditionalEmailsUsingGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetListOfAdditionalEmailsUsingGET($headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to add a new additional email address to account. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-dodac-adres-e-mail" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-add-an-additional-email" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalEmail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function addAdditionalEmailUsingPOST(?Model\AdditionalEmailRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\AddAdditionalEmailUsingPOST($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to delete one of additional emails. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-usunac-adres-e-mail" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-remove-e-mail" target="_blank">EN</a>.
     *
     * @param string $emailId id of the additional email to be deleted
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteAdditionalEmailUsingDELETEUnauthorizedException
     */
    public function deleteAdditionalEmailUsingDELETE(string $emailId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\DeleteAdditionalEmailUsingDELETE($emailId, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to retrieve a single additional email. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#jak-pobrac-szczegolowe-informacje-o-adresie-e-mail" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#how-to-retrieve-e-mail-details" target="_blank">EN</a>.
     *
     * @param string $emailId id of the additional email
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|*\/*
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdditionalEmail|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAdditionalEmailUsingGETUnauthorizedException
     */
    public function getAdditionalEmailUsingGET(string $emailId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetAdditionalEmailUsingGET($emailId, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this endpoint to get the list of the seller payment operations. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-platniczych" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#payment-operations" target="_blank">EN</a>.
     *
     * @param array{
     *    "wallet.type"?: string, //Type of the wallet: * AVAILABLE - operations available for payout. * WAITING - operations temporarily suspended for payout.
     *    "wallet.paymentOperator"?: string, //Payment operator: * PAYU - operations processed by PAYU operator. * P24 - operations processed by PRZELEWY24 operator. * AF - operations processed by Allegro Finance operator. * AF_P24 - operations processed by Allegro Finance with PRZELEWY24. * AF_PAYU - operations processed by Allegro Finance with PAYU.
     *    "payment.id"?: string, //The payment ID.
     *    "participant.login"?: string, //Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer.
     *    "occurredAt.gte"?: string, //The minimum date and time of operation occurrence in ISO 8601 format.
     *    "occurredAt.lte"?: string, //The maximum date and time of operation occurrence in ISO 8601 format.
     *    "group"?: array, //Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE, LOAN_DEDUCTION_INCREASE, COMPENSATION, COMPENSATION_COD_INCREASE, TOP_UP, PAYOUT_SWEEP_INCREASE, PAYOUT_SWEEP_CANCEL_INCREASE. * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE, LOAN_DEDUCTION_CHARGE, COMPENSATION_COD_CHARGE, PAYOUT_SWEEP_CHARGE, PAYOUT_SWEEP_CANCEL_CHARGE. * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION, PROVIDER_REFUND_TRANSFER_CHARGE, PROVIDER_REFUND_TRANSFER_INCREASE. * BLOCKADES - BLOCKADE, BLOCKADE_RELEASE.
     *    "marketplaceId"?: string, //The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces. Note, that there are operations not assigned to any marketplace.
     *    "currency"?: string, //Currency of the operations.
     *    "limit"?: int, //Number of returned operations.
     *    "offset"?: int, //Index of the first returned payment operation from all search results.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaymentOperations|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPaymentsOperationHistoryUnauthorizedException
     * @throws Exception\GetPaymentsOperationHistoryUnprocessableEntityException
     */
    public function getPaymentsOperationHistory(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPaymentsOperationHistory($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve current user's bid information. Read more: <a href="../../news/nowe-zasoby-zloz-oferte-kupna-w-licytacji-q018m02vDT1" target="_blank">PL</a> / <a href="../../news/new-resources-place-a-bid-in-an-auction-rjWwEj1e7sG" target="_blank">EN</a>.
     *
     * @param string $offerId the offer ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MyBidResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetBidNotFoundException
     */
    public function getBid(string $offerId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetBid($offerId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to place a bid in an auction. Read more: <a href="../../news/nowe-zasoby-zloz-oferte-kupna-w-licytacji-q018m02vDT1" target="_blank">PL</a> / <a href="../../news/new-resources-place-a-bid-in-an-auction-rjWwEj1e7sG" target="_blank">EN</a>.
     *
     * @param string $offerId the offer ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MyBidResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\PlaceBidBadRequestException
     * @throws Exception\PlaceBidUnauthorizedException
     * @throws Exception\PlaceBidNotFoundException
     * @throws Exception\PlaceBidUnprocessableEntityException
     */
    public function placeBid(string $offerId, ?Model\BiddingOffersOfferIdBidPutBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PlaceBid($offerId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this endpoint to get events from the last 24 hours concerning changes in the authorized seller's offers.
     * At present we support the following events:
     *   - OFFER_ACTIVATED - offer is visible on site and available for purchase, occurs when offer status changes from ACTIVATING to ACTIVE.
     *   - OFFER_CHANGED - occurs when offer's fields have been changed e.g. description or photos, but does not apply to shipping rates and dispatch time.
     *   - OFFER_ENDED - offer is no longer available for purchase, occurs when offer status changes from ACTIVE to ENDED.
     *   - OFFER_STOCK_CHANGED - stock in an offer was changed either via purchase or by seller.
     *   - OFFER_PRICE_CHANGED - occurs when price in an offer was changed.
     *   - OFFER_ARCHIVED - offer is no longer available on listing and has been archived.
     *   - OFFER_BID_PLACED - bid was placed on the offer.
     *   - OFFER_BID_CANCELED - bid for offer was canceled.
     *   - OFFER_TRANSLATION_UPDATED - translation of offer was updated.
     *   - OFFER_VISIBILITY_CHANGED - visibility of offer was changed on marketplaces.
     *   - OFFER_DELIVERY_COUNTRIES_BLOCKED - the offer has been blocked in selected countries.
     * Returned events may occur by actions made via browser or API. The resource allows you to get events concerning active offers and offers scheduled for activation (status ACTIVE and ACTIVATING). Returned events do not concern offers in INACTIVE and ENDED status (the exception is OFFER_ARCHIVED event). External id is returned for all event types except OFFER_BID_PLACED and OFFER_BID_CANCELED. Please note that one change may result in more than one event. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#dziennik-zdarzen-w-ofertach-sprzedawcy" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#event-journal-concerning-changes-in-seller-s-offers" target="_blank">EN</a>.
     *
     * @param array{
     *    "from"?: string, //The ID of the last seen event. Events that occured after the given event will be returned.
     *    "limit"?: int, //The number of events that will be returned in the response.
     *    "type"?: array, //The types of events that will be returned in the response. All types of events are returned by default.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SellerOfferEventsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOfferEventsBadRequestException
     * @throws Exception\GetOfferEventsUnauthorizedException
     */
    public function getOfferEvents(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetOfferEvents($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Badge campaigns are another way to promote your offers. You can apply for a badge, which - depending on a type - will be displayed on your offer page of on the list of offers.
     * First - use this resource to get a list of all available badge campaigns at the moment, then use *POST /sale/badges* to apply for badge. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-dostepnych-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-available-campaigns" target="_blank">EN</a>.
     *
     * @param array{
     *    "marketplace.id"?: string, //The marketplace of campaigns.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GetBadgeCampaignsList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\BadgeCampaignsGetAllBadRequestException
     * @throws Exception\BadgeCampaignsGetAllUnauthorizedException
     * @throws Exception\BadgeCampaignsGetAllForbiddenException
     */
    public function badgeCampaignsGetAll(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BadgeCampaignsGetAll($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of badges in authorized seller's offers. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#kampanie-przypisane-do-ofert" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#check-badges-assigned-to-offers" target="_blank">EN</a>.
     *
     * @param array{
     *    "offer.id"?: string, //Offer ID.
     *    "marketplace.id": string, //The marketplace of badges.
     *    "offset"?: int, //Offset.
     *    "limit"?: int, //The maximum number of badges returned in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BadgesList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetBadgesBadRequestException
     * @throws Exception\GetBadgesUnauthorizedException
     * @throws Exception\GetBadgesForbiddenException
     */
    public function getBadges(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetBadges($queryParameters, $headerParameters), $fetch);
    }

    /**
     * This resource allows you to apply for a badge. Most badges involve additional fee charged.
     * Your badge application will be verified and you will be notified about the verification status via e-mail. You can use *Location* provided in header of the response to track your application status. Application will be removed after 30 days when status of the application was changed form PROCESSED or DECLINED.
     * Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#zglos-oferte-do-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#submit-offer-to-a-campaign" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BadgeApplication|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\PostBadgesBadRequestException
     * @throws Exception\PostBadgesUnauthorizedException
     * @throws Exception\PostBadgesForbiddenException
     * @throws Exception\PostBadgesUnprocessableEntityException
     */
    public function postBadges(?Model\BadgeApplicationRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostBadges($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a badge application details. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#pobierz-dane-zgloszenie" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#retrieve-campaign-application" target="_blank">EN</a>.
     *
     * @param string $applicationId badge application ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BadgeApplication|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\BadgeApplicationsGetOneUnauthorizedException
     * @throws Exception\BadgeApplicationsGetOneForbiddenException
     * @throws Exception\BadgeApplicationsGetOneNotFoundException
     */
    public function badgeApplicationsGetOne(string $applicationId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BadgeApplicationsGetOne($applicationId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of badge applications. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#pobierz-swoje-zgloszenia" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#retrieve-all-campaign-applications" target="_blank">EN</a>.
     *
     * @param array{
     *    "campaign.id"?: string, //Campaign ID.
     *    "offer.id"?: string, //Offer ID.
     *    "offset"?: int, //Offset.
     *    "limit"?: int, //The maximum number of applications returned in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BadgeApplications|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\BadgeApplicationsGetAllBadRequestException
     * @throws Exception\BadgeApplicationsGetAllUnauthorizedException
     * @throws Exception\BadgeApplicationsGetAllForbiddenException
     */
    public function badgeApplicationsGetAll(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BadgeApplicationsGetAll($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get badge operation details. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#zmiana-ceny-i-zakonczenie-oznaczenia" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#change-price-and-finish-badge" target="_blank">EN</a>.
     *
     * @param string $operationId badge operation ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BadgeOperation|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\BadgeOperationsGetOneUnauthorizedException
     * @throws Exception\BadgeOperationsGetOneForbiddenException
     * @throws Exception\BadgeOperationsGetOneNotFoundException
     */
    public function badgeOperationsGetOne(string $operationId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BadgeOperationsGetOne($operationId, $headerParameters), $fetch);
    }

    /**
     * This resource allows you to update a campaign badge for the given offer. You can use *Location* provided in header of the response to track your update status. Update offer price in a campaign or finish marking an offer in a campaign.
     * Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#zmiana-ceny-i-zakonczenie-oznaczenia" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#change-price-and-finish-badge" target="_blank">EN</a>.
     *
     * @param string     $offerId     offer ID
     * @param string     $campaignId  campaign ID
     * @param mixed|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SaleBadgesOffersOfferIdCampaignsCampaignIdPatchResponse202|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\PatchBadgeBadRequestException
     * @throws Exception\PatchBadgeUnauthorizedException
     * @throws Exception\PatchBadgeForbiddenException
     * @throws Exception\PatchBadgeNotFoundException
     * @throws Exception\PatchBadgeConflictException
     * @throws Exception\PatchBadgeUnprocessableEntityException
     */
    public function patchBadge(string $offerId, string $campaignId, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PatchBadge($offerId, $campaignId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Get a list of refunded payments. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-zwrotow-platnosci" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-a-list-of-refunded-payment" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //Number of returned operations.
     *    "offset"?: int, //Index of the first returned payment operation from all search results.
     *    "id"?: string, //ID of the refund.
     *    "payment.id"?: string, //ID of the payment.
     *    "order.id"?: string, //ID of the order.
     *    "occurredAt.gte"?: string, //Minimum date and time when the refund occurred provided in ISO 8601 format.
     *    "occurredAt.lte"?: string, //Maximum date and time when the refund occurred provided in ISO 8601 format.
     *    "status"?: array, //Current status of payment refund.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaymentsRefundsGetResponse200|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetRefundedPaymentsUnauthorizedException
     * @throws Exception\GetRefundedPaymentsForbiddenException
     * @throws Exception\GetRefundedPaymentsUnprocessableEntityException
     */
    public function getRefundedPayments(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetRefundedPayments($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this endpoint to initiate a refund of a payment. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-wykonac-zwrot-platnosci" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-refund-a-payment" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RefundDetails|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\InitiateRefundBadRequestException
     * @throws Exception\InitiateRefundUnauthorizedException
     * @throws Exception\InitiateRefundUnprocessableEntityException
     * @throws Exception\InitiateRefundForbiddenException
     * @throws Exception\InitiateRefundNotFoundException
     */
    public function initiateRefund(?Model\InitializeRefund $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\InitiateRefund($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of billing entries. The billing entries are sorted in descending order (newest first) by the date on which they occurred. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-billingowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#billing-operations" target="_blank">EN</a>.
     *
     * @param array{
     *    "marketplaceId"?: string, //The marketplace ID where the operation took place. By default, this is the marketplace ID where the user is registered. **Note:** The Business marketplace is not separate - it defaults to the main marketplace for the given country.
     *    "occurredAt.gte"?: string, //Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later.
     *    "occurredAt.lte"?: string, //Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier.
     *    "type.id"?: array, //List of billing types by which billing entries are filtered.
     *    "offer.id"?: string, //Offer ID by which billing entries are filtered. Can be either a numeric ID or a UUID.
     *    "order.id"?: string, //Order UUID by which billing entries are filtered.
     *    "limit"?: int, //Number of returned operations.
     *    "offset"?: int, //Index of the first returned payment operation from all search results.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BillingEntries|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetBillingEntriesUnauthorizedException
     * @throws Exception\GetBillingEntriesNotAcceptableException
     * @throws Exception\GetBillingEntriesUnprocessableEntityException
     */
    public function getBillingEntries(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetBillingEntries($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of all billing types. Type names are localized according to the "Accept-Language" header. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-billingowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#billing-operations" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BillingType[]|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetBillingTypesUnauthorizedException
     */
    public function getBillingTypes(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetBillingTypes($headerParameters), $fetch);
    }

    /**
     * Use this resource to cancel a refund application. This cannot be undone. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-anulowac-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-cancel-sale-commission-refund" target="_blank">EN</a>.
     *
     * @param string $claimId refund application ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CancelRefundApplicationBadRequestException
     * @throws Exception\CancelRefundApplicationUnauthorizedException
     * @throws Exception\CancelRefundApplicationForbiddenException
     * @throws Exception\CancelRefundApplicationNotFoundException
     * @throws Exception\CancelRefundApplicationNotAcceptableException
     * @throws Exception\CancelRefundApplicationUnprocessableEntityException
     */
    public function cancelRefundApplication(string $claimId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CancelRefundApplication($claimId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get refund application details. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-pojedynczy-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-single-sale-commission-refund" target="_blank">EN</a>.
     *
     * @param string $claimId refund application ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RefundClaim|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetRefundApplicationBadRequestException
     * @throws Exception\GetRefundApplicationUnauthorizedException
     * @throws Exception\GetRefundApplicationForbiddenException
     * @throws Exception\GetRefundApplicationNotFoundException
     * @throws Exception\GetRefundApplicationNotAcceptableException
     * @throws Exception\GetRefundApplicationUnprocessableEntityException
     */
    public function getRefundApplication(string $claimId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetRefundApplication($claimId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of refund applications based on the provided query parameters. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-utworzonych-wnioskow-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-list-of-sale-commission-refunds" target="_blank">EN</a>.
     *
     * @param array{
     *    "lineItem.offer.id"?: string, //ID of the offer associated with the refund application.
     *    "buyer.id"?: string, //Id of the buyer that made the purchase associated with the refund application.
     *    "status"?: string, //Status of the refund application.
     *    "limit"?: int, //Maximum number of returned refund applications in response.
     *    "offset"?: int, //Index of the first returned refund application from all search results.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OrderRefundClaimsGetResponse200|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetRefundApplicationsBadRequestException
     * @throws Exception\GetRefundApplicationsUnauthorizedException
     * @throws Exception\GetRefundApplicationsForbiddenException
     * @throws Exception\GetRefundApplicationsNotAcceptableException
     * @throws Exception\GetRefundApplicationsUnprocessableEntityException
     */
    public function getRefundApplications(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetRefundApplications($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a refund application. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-utworzyc-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-create-a-sale-commission-refund-application" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RefundClaimResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateRefundApplicationBadRequestException
     * @throws Exception\CreateRefundApplicationUnauthorizedException
     * @throws Exception\CreateRefundApplicationForbiddenException
     * @throws Exception\CreateRefundApplicationNotAcceptableException
     * @throws Exception\CreateRefundApplicationUnprocessableEntityException
     */
    public function createRefundApplication(?Model\RefundClaimRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateRefundApplication($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to search fundraising campaigns. Read more: <a href="../../news/wystaw-oferte-charytatywna-na-allegro-MR87PBxZySY" target="_blank">PL</a> / <a href="../../news/list-a-charity-offer-on-allegro-LRV0572GOhr" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit": int, //Maximum number of returned results.
     *    "phrase": string, //Fundraising campaign name or it's Organization name prefix to search for.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FundraisingCampaigns|null : \Psr\Http\Message\ResponseInterface)
     */
    public function searchFundraisingCampaigns(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SearchFundraisingCampaigns($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve two order characteristics. The first is a pre-populated request body for creating a shipment in SwA. The second is a list of possible delivery types for processing the order, including their limits. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-proponowane-dane-i-ustawienia-dostawy-dla-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-the-proposed-delivery-details-and-settings-for-an-order" target="_blank">EN</a>.
     *
     * @param string $orderId order ID
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\DeliveryProposalDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetDeliveryProposalsUnauthorizedException
     * @throws Exception\GetDeliveryProposalsForbiddenException
     * @throws Exception\GetDeliveryProposalsGatewayTimeoutException
     */
    public function getDeliveryProposals(string $orderId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDeliveryProposals($orderId), $fetch);
    }

    /**
     * Use this resource to get delivery services available for user. It returns services provided by Allegro and contracts with carriers owned by user and configured by GUI. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-liste-uslug-dostawy" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-a-list-of-delivery-services" target="_blank">EN</a>.<br/> This resource is deprecated and will be removed in Q1 2027. Consider using the new resource '/shipment-management/delivery-proposals/{orderId}' resource instead.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\DeliveryServicesDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetDeliveryServicesUnauthorizedException
     * @throws Exception\GetDeliveryServicesForbiddenException
     * @throws Exception\GetDeliveryServicesGatewayTimeoutException
     */
    public function getDeliveryServices(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDeliveryServices($headerParameters), $fetch);
    }

    /**
     * Use this resource to create shipment for delivery. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-utworzyc-nowa-paczke" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-create-a-new-shipment" target="_blank">EN</a>. Please check also new resource '/shipment-management/delivery-proposals/{orderId}' to get prefilled request body for this resource.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ShipmentCreateCommandDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateNewShipmentBadRequestException
     * @throws Exception\CreateNewShipmentUnauthorizedException
     * @throws Exception\CreateNewShipmentForbiddenException
     * @throws Exception\CreateNewShipmentGatewayTimeoutException
     */
    public function createNewShipment(?Model\ShipmentCreateCommandDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateNewShipment($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get shipment creation status. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-utworzenia-paczki" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-the-creation-status-of-a-shipment" target="_blank">EN</a>.
     *
     * @param string $commandId command UUID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CreateShipmentCommandStatusDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetShipmentCreationStatusBadRequestException
     * @throws Exception\GetShipmentCreationStatusUnauthorizedException
     * @throws Exception\GetShipmentCreationStatusForbiddenException
     * @throws Exception\GetShipmentCreationStatusNotFoundException
     * @throws Exception\GetShipmentCreationStatusGatewayTimeoutException
     */
    public function getShipmentCreationStatus(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetShipmentCreationStatus($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to cancel parcel. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-anulowac-paczke" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-cancel-a-shipment" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ShipmentCancelCommandDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CancelShipmentBadRequestException
     * @throws Exception\CancelShipmentUnauthorizedException
     * @throws Exception\CancelShipmentForbiddenException
     */
    public function cancelShipment(?Model\ShipmentCancelCommandDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CancelShipment($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get parcel cancellation status. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-anulowania-paczki" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-shipment-cancellation-status" target="_blank">EN</a>.
     *
     * @param string $commandId command UUID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CancelShipmentCommandStatusDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetShipmentCancellationStatusBadRequestException
     * @throws Exception\GetShipmentCancellationStatusUnauthorizedException
     * @throws Exception\GetShipmentCancellationStatusForbiddenException
     * @throws Exception\GetShipmentCancellationStatusNotFoundException
     * @throws Exception\GetShipmentCancellationStatusGatewayTimeoutException
     */
    public function getShipmentCancellationStatus(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetShipmentCancellationStatus($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get parcel details. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-szczegolowe-informacje-o-paczce" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-shipment-details" target="_blank">EN</a>.
     *
     * @param string $shipmentId shipment id
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ShipmentDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetShipmentDetailsBadRequestException
     * @throws Exception\GetShipmentDetailsUnauthorizedException
     * @throws Exception\GetShipmentDetailsForbiddenException
     * @throws Exception\GetShipmentDetailsNotFoundException
     * @throws Exception\GetShipmentDetailsGatewayTimeoutException
     */
    public function getShipmentDetails(string $shipmentId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetShipmentDetails($shipmentId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get label for created shipment. <br/>Returned content type depends on created shipment. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-utworzyc-etykiete-na-paczke" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-create-a-label-for-shipment" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/octet-stream|application/vnd.allegro.public.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetShipmentLabelsBadRequestException
     * @throws Exception\GetShipmentLabelsUnauthorizedException
     * @throws Exception\GetShipmentLabelsForbiddenException
     * @throws Exception\GetShipmentLabelsNotFoundException
     * @throws Exception\GetShipmentLabelsGatewayTimeoutException
     */
    public function getShipmentLabels(?Model\LabelRequestDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetShipmentLabels($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Protocol availability depends on Carrier. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-pobrac-protokol-nadania-przesylek" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-retrieve-shipment-protocol" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/octet-stream|application/vnd.allegro.public.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetShipmentProtocolUnauthorizedException
     * @throws Exception\GetShipmentProtocolBadRequestException
     * @throws Exception\GetShipmentProtocolForbiddenException
     * @throws Exception\GetShipmentProtocolNotFoundException
     * @throws Exception\GetShipmentProtocolGatewayTimeoutException
     */
    public function getShipmentProtocol(?Model\ShipmentIdsDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetShipmentProtocol($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get parcels pickup date proposals. Pickup takes place, when courier arrives to take parcels for shipment. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-proponowana-date-odbioru-paczek-przez-kuriera" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-pickup-date-proposals" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PickupProposalsResponseDto[]|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPickupProposalsBadRequestException
     * @throws Exception\GetPickupProposalsUnauthorizedException
     * @throws Exception\GetPickupProposalsForbiddenException
     * @throws Exception\GetPickupProposalsGatewayTimeoutException
     */
    public function getPickupProposals(?Model\PickupProposalsRequestDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPickupProposals($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to request a pickup of shipments. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-zamowic-odbior-paczek-przez-kuriera" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-request-shipment-pickup-by-a-courier" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PickupCreateCommandDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreatePickupBadRequestException
     * @throws Exception\CreatePickupUnauthorizedException
     * @throws Exception\CreatePickupForbiddenException
     */
    public function createPickup(?Model\PickupCreateCommandDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreatePickup($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get pickup request status. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-zamowienia-odbioru-paczek" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-shipment-pickup-request-status" target="_blank">EN</a>.
     *
     * @param string $commandId command UUID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CreatePickupCommandStatusDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreatePickupStatusBadRequestException
     * @throws Exception\CreatePickupStatusUnauthorizedException
     * @throws Exception\CreatePickupStatusForbiddenException
     * @throws Exception\CreatePickupStatusNotFoundException
     * @throws Exception\CreatePickupStatusGatewayTimeoutException
     */
    public function createPickupStatus(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreatePickupStatus($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get pickup details. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-zamowienia-odbioru-paczek" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-shipment-pickup-request-status" target="_blank">EN</a>.
     *
     * @param string $pickupId pickup ID
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PickupDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetPickupDetailsBadRequestException
     * @throws Exception\GetPickupDetailsUnauthorizedException
     * @throws Exception\GetPickupDetailsForbiddenException
     * @throws Exception\GetPickupDetailsNotFoundException
     * @throws Exception\GetPickupDetailsGatewayTimeoutException
     */
    public function getPickupDetails(string $pickupId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPickupDetails($pickupId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to receive suggested categories for given phrase. This resource is rate limited to 5 requests per second. Read more: <a href="../../news/udostepnilismy-nowy-zasob-dzieki-ktoremu-sprawdzisz-sugerowane-kategorie-dla-podanej-frazy-4RAl9jwX1FW" target="_blank">PL</a> / <a href="../../news/we-have-introduced-a-new-resource-that-allows-you-to-retrieve-the-suggested-categories-for-the-given-phrase-v8Wdy1EOyF0" target="_blank">EN</a>.
     *
     * @param array{
     *    "name": string, //Product name for which you want to get suggested categories.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategorySuggestionResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CategorySuggestionUsingGETUnauthorizedException
     * @throws Exception\CategorySuggestionUsingGETForbiddenException
     * @throws Exception\CategorySuggestionUsingGETNotAcceptableException
     * @throws Exception\CategorySuggestionUsingGETUnprocessableEntityException
     */
    public function categorySuggestionUsingGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CategorySuggestionUsingGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to receive tax settings for a given leaf category. Based on received settings you may set VAT tax settings for your offers. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#opcje-faktury-i-stawki-vat" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#invoice-and-vat-settings" target="_blank">EN</a>.
     *
     * @param array{
     *    "category.id": string, //An identifier of a leaf category for which all available tax settings will be returned.
     *    "countryCode"?: array, //Country code for which tax settings will be returned. If not provided settings for all countries will be returned.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CategoryTaxSettings|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetTaxSettingsForCategoryBadRequestException
     * @throws Exception\GetTaxSettingsForCategoryUnauthorizedException
     * @throws Exception\GetTaxSettingsForCategoryForbiddenException
     * @throws Exception\GetTaxSettingsForCategoryNotFoundException
     * @throws Exception\GetTaxSettingsForCategoryNotAcceptableException
     */
    public function getTaxSettingsForCategory(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetTaxSettingsForCategory($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to retrieve the account participation status for all supported marketplaces in the Allegro Prices program. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-pobrac-aktualny-status-uczestnictwa-w-programie" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-retrieve-the-current-program-participation-status" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AllegroPricesAccountParticipationResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAccountParticipationUnauthorizedException
     */
    public function getAccountParticipation(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAccountParticipation($headerParameters), $fetch);
    }

    /**
     * Use this resource to update the account participation status for one or more marketplaces in the Allegro Prices program. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-zmienic-status-uczestnictwa-w-programie" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-change-the-program-participation-status" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AllegroPricesAccountParticipationResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateAccountParticipationBadRequestException
     * @throws Exception\UpdateAccountParticipationUnauthorizedException
     * @throws Exception\UpdateAccountParticipationUnprocessableEntityException
     */
    public function updateAccountParticipation(?Model\AllegroPricesAccountParticipationRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateAccountParticipation($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to submit a command to add offers to the Allegro Prices program. Returns a command ID that can be used to track the processing status. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-zlecic-dodanie-ofert-do-programu" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-submit-a-command-to-add-offers-to-the-program" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SubsidyManageOffersCommandResult|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\SubmitOfferCommandsBadRequestException
     * @throws Exception\SubmitOfferCommandsUnauthorizedException
     * @throws Exception\SubmitOfferCommandsConflictException
     * @throws Exception\SubmitOfferCommandsUnprocessableEntityException
     */
    public function submitOfferCommands(?Model\SubsidySubmitOffersCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SubmitOfferCommands($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve the status and details of a previously submitted offer command. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-zlecic-dodanie-ofert-do-programu" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-submit-a-command-to-add-offers-to-the-program" target="_blank">EN</a>.
     *
     * @param string $commandId the unique identifier of the command
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SubsidySubmitOffersCommandPreview|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetSubmitOfferCommandStatusBadRequestException
     * @throws Exception\GetSubmitOfferCommandStatusUnauthorizedException
     * @throws Exception\GetSubmitOfferCommandStatusNotFoundException
     */
    public function getSubmitOfferCommandStatus(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSubmitOfferCommandStatus($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to submit a command to exclude offers from the Allegro Prices program. Returns a command ID that can be used to track the processing status. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-zlecic-wykluczenie-ofert-z-programu" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-submit-a-command-to-exclude-offers-from-the-program" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SubsidyManageOffersCommandResult|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExcludeOfferCommandsBadRequestException
     * @throws Exception\ExcludeOfferCommandsUnauthorizedException
     * @throws Exception\ExcludeOfferCommandsConflictException
     * @throws Exception\ExcludeOfferCommandsUnprocessableEntityException
     */
    public function excludeOfferCommands(?Model\SubsidyExcludeOffersCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ExcludeOfferCommands($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve the status and details of a previously submitted exclusion command. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-zlecic-wykluczenie-ofert-z-programu" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-submit-a-command-to-exclude-offers-from-the-program" target="_blank">EN</a>.
     *
     * @param string $commandId the unique identifier of the command
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SubsidyExcludeOffersCommandPreview|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetExcludeOfferCommandStatusBadRequestException
     * @throws Exception\GetExcludeOfferCommandStatusUnauthorizedException
     * @throws Exception\GetExcludeOfferCommandStatusNotFoundException
     */
    public function getExcludeOfferCommandStatus(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetExcludeOfferCommandStatus($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to retrieve a list of offers and their status in the Allegro Prices program with optional filtering and pagination. Allows filtering by offer IDs, marketplace, and scope (WITH_DECLARATION, DISCOUNTED, or EXCLUDED). Only offers in ACTIVATING, ACTIVE, or ENDED statuses are considered. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-pobrac-liste-ofert-i-ich-obecny-status-w-programie" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-retrieve-a-list-of-offers-and-their-status-in-the-program" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\OfferStatusQueryResponseDto|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAllegroPricesOffersBadRequestException
     * @throws Exception\GetAllegroPricesOffersUnauthorizedException
     * @throws Exception\GetAllegroPricesOffersUnprocessableEntityException
     */
    public function getAllegroPricesOffers(?Model\OfferStatusQueryRequestDto $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAllegroPricesOffers($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a command for submitting an offer. Offer will be submitted to the AlleDiscount campaign only if command is processed successfully. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-zglosic-oferte-do-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-submit-an-offer-to-a-campaign" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AlleDiscountSubmitCommandResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\SubmitOfferToAlleDiscountCommandsBadRequestException
     * @throws Exception\SubmitOfferToAlleDiscountCommandsUnauthorizedException
     * @throws Exception\SubmitOfferToAlleDiscountCommandsConflictException
     */
    public function submitOfferToAlleDiscountCommands(?Model\AlleDiscountSubmitCommandRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SubmitOfferToAlleDiscountCommands($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get information about the submit offer command execution status. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-sprawdzic-status-zgloszenia-oferty-do-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-check-the-status-of-an-offer-submission-to-a-campaign" target="_blank">EN</a>.
     *
     * @param string $commandId command id in UUID format, must be unique
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AlleDiscountGetSubmitCommandResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetSubmitOfferToAlleDiscountCommandsStatusUnauthorizedException
     * @throws Exception\GetSubmitOfferToAlleDiscountCommandsStatusNotFoundException
     */
    public function getSubmitOfferToAlleDiscountCommandsStatus(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSubmitOfferToAlleDiscountCommandsStatus($commandId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to create a command for withdrawing an offer from specific campaign. Offer will be withdrawn from the AlleDiscount campaign only if command is processed successfully. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-wycofac-oferte-z-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-withdraw-an-offer-from-a-campaign" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AlleDiscountWithdrawCommandResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\WithdrawOfferFromAlleDiscountCommandsBadRequestException
     * @throws Exception\WithdrawOfferFromAlleDiscountCommandsUnauthorizedException
     * @throws Exception\WithdrawOfferFromAlleDiscountCommandsConflictException
     */
    public function withdrawOfferFromAlleDiscountCommands(?Model\AlleDiscountWithdrawCommandRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\WithdrawOfferFromAlleDiscountCommands($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get information about the withdrawal command execution status. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-sprawdzic-status-wycofania-oferty-z-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-check-the-withdrawal-status-of-an-offer-from-a-campaign" target="_blank">EN</a>.
     *
     * @param string $commandId command id in UUID format, must be unique
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AlleDiscountGetWithdrawCommandResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetWithdrawOfferFromAlleDiscountCommandsStatusUnauthorizedException
     * @throws Exception\GetWithdrawOfferFromAlleDiscountCommandsStatusNotFoundException
     */
    public function getWithdrawOfferFromAlleDiscountCommandsStatus(string $commandId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetWithdrawOfferFromAlleDiscountCommandsStatus($commandId, $headerParameters), $fetch);
    }

    /**
     * Endpoint returning info about offers that can be submitted to a given AlleDiscount campaign. Only offer linked to the product in published list of goods (products) can be submitted to a given AlleDiscount campaign. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-ofert-kwalifikujacych-sie-do-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-offers-eligible-for-the-selected-campaign" target="_blank">EN</a>.
     *
     * @param string $campaignId campaign id to list offers from
     * @param array{
     *    "limit"?: int, //Maximum number of offers returned in the eligibleOffers list; max value is 200.
     *    "offset"?: int, //The number of offers to skip while listing the results.
     *    "meetsConditions"?: bool, //If true, filters offers that only meet conditions of the campaign.
     *    "offerId"?: string, //ID of an offer; if the offer with the given ID exists, returns at most one element in the eligibleOffers list.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AlleDiscountListEligibleResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOffersEligibleForAlleDiscountBadRequestException
     * @throws Exception\GetOffersEligibleForAlleDiscountUnauthorizedException
     * @throws Exception\GetOffersEligibleForAlleDiscountForbiddenException
     * @throws Exception\GetOffersEligibleForAlleDiscountNotFoundException
     */
    public function getOffersEligibleForAlleDiscount(string $campaignId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOffersEligibleForAlleDiscount($campaignId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Endpoint returning info about offer participations for a given AlleDiscount campaign. With this endpoint you are able to validate if the offer participates in AlleDiscount and if it has lowered price on the platform. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-ofert-zgloszonych-do-wybranej-kampanii" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-offers-submitted-for-the-selected-campaign" target="_blank">EN</a>.
     *
     * @param string $campaignId campaign id to list offers from
     * @param array{
     *    "limit"?: int, //Maximum number of offers returned in the eligibleOffers list; max value is 200.
     *    "offset"?: int, //The number of offers to skip while listing the results.
     *    "offerId"?: string, //ID of an offer; if the offer with the given ID exists, returns at most one element in the submittedOffers list.
     *    "participationId"?: string, //Id of the participation, returns at most one element in the submittedOffers list.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AlleDiscountListSubmittedResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetOffersSubmittedToAlleDiscountBadRequestException
     * @throws Exception\GetOffersSubmittedToAlleDiscountUnauthorizedException
     * @throws Exception\GetOffersSubmittedToAlleDiscountForbiddenException
     * @throws Exception\GetOffersSubmittedToAlleDiscountNotFoundException
     */
    public function getOffersSubmittedToAlleDiscount(string $campaignId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOffersSubmittedToAlleDiscount($campaignId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * List current AlleDiscount campaigns. Each campaign has its own list of goods (products) that indicate which offers can be submitted to it. Read more: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-dostepnych-kampanii-alleobnizka" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-available-allediscount-campaigns" target="_blank">EN</a>.
     *
     * @param array{
     *    "campaignId"?: string, //Id of the searched campaign. If present, returns at most one entry.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AlleDiscountListCampaignsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAlleDiscountCampaignsNotFoundException
     * @throws Exception\GetAlleDiscountCampaignsBadRequestException
     * @throws Exception\GetAlleDiscountCampaignsUnauthorizedException
     */
    public function getAlleDiscountCampaigns(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAlleDiscountCampaigns($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a full Smart! seller classification report. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#kwalifikacja-sprzedawcy" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#seller-qualification" target="_blank">EN</a>.
     *
     * @param array{
     *    "marketplaceId"?: string, //Marketplace for which seller classification report will be returned. If not specified, the classification result for the seller's registration marketplace will be returned.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SmartSellerClassificationReport|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetSellerSmartClassificationGETUnauthorizedException
     * @throws Exception\GetSellerSmartClassificationGETNotFoundException
     * @throws Exception\GetSellerSmartClassificationGETUnprocessableEntityException
     */
    public function getSellerSmartClassificationGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSellerSmartClassificationGET($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get information about all the marketplaces on the platform. Read more: <a href="../../tutorials/wystawianie-i-zarzadzanie-oferta-w-serwisach-zagranicznych-wwzjP4M8gTZ#serwis-bazowy-uzytkownika-oraz-lista-dostepnych-serwisow" target="_blank">PL</a> / <a href="../../tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn#user-s-base-marketplace-and-list-of-available-marketplaces" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AllegroMarketplaces|null : \Psr\Http\Message\ResponseInterface)
     */
    public function marketplacesGET(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MarketplacesGET($headerParameters), $fetch);
    }

    /**
     * Use this resource to get the list of user threads sorted by last message date, starting from newest. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-watkow-na-koncie" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-threads" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //The maximum number of threads returned in the response.
     *    "offset"?: int, //Index of the first returned thread from all results. Available only for content version 'application/vnd.allegro.public.v1+json'.
     *    "page.id"?: string, //ID of the page of threads to retrieve. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     *    "read"?: bool, //Filters threads by read status. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     *    "status"?: string, //Filters threads by status. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     *    "type"?: array, //Filters threads by their type. Available only for content version 'application/vnd.allegro.beta.v1+json'. If omitted, threads of all types are returned. If you pass multiple values, the response includes threads whose type matches any of them.
     *    "orderId"?: string, //Filters POST_PURCHASE_ISSUE threads by order identifier. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ThreadsList|Model\ThreadsListVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ListThreadsGETUnauthorizedException
     * @throws Exception\ListThreadsGETUnprocessableEntityException
     */
    public function listThreadsGET(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ListThreadsGET($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get thread with provided identifier. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-danym-watku" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-thread" target="_blank">EN</a>.
     *
     * @param string $threadId identifier of thread to get
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Thread|Model\ThreadVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetThreadGETUnauthorizedException
     * @throws Exception\GetThreadGETNotFoundException
     */
    public function getThreadGET(string $threadId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetThreadGET($threadId, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to mark thread with provided identifier as read. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-wiadomosci" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-message" target="_blank">EN</a>.
     *
     * @param string                                               $threadId    identifier of thread to be marked
     * @param Model\ThreadReadFlag|Model\ThreadReadFlagVBeta1|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Thread|Model\ThreadReadFlagVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ChangeReadFlagOnThreadPUTUnauthorizedException
     * @throws Exception\ChangeReadFlagOnThreadPUTForbiddenException
     * @throws Exception\ChangeReadFlagOnThreadPUTNotFoundException
     * @throws Exception\ChangeReadFlagOnThreadPUTUnprocessableEntityException
     */
    public function changeReadFlagOnThreadPUT(string $threadId, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ChangeReadFlagOnThreadPUT($threadId, $requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to write new message to recipient. This resource is rate limited to 1 request per second for a user. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#nowa-wiadomosc" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-a-new-message" target="_blank">EN</a>.
     *
     * @param Model\NewMessage|Model\NewMessageVBeta1|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Message|Model\MessageVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\NewMessagePOSTUnauthorizedException
     * @throws Exception\NewMessagePOSTUnprocessableEntityException
     */
    public function newMessagePOST($requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\NewMessagePOST($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to list messages in thread with provided identifier. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-wiadomosci-dla-wybranego-watku" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-the-messages-for-the-particular-thread" target="_blank">EN</a>.
     *
     * @param string $threadId identifier of thread to get messages from
     * @param array{
     *    "limit"?: int, //The maximum number of messages returned in the response.
     *    "offset"?: int, //Index of the first returned message from all results. Available only for content version 'application/vnd.allegro.public.v1+json'.
     *    "before"?: string, //Message creation date before filter parameter (exclusive) - cannot be used with offset. Available only for content version 'application/vnd.allegro.public.v1+json'.
     *    "after"?: string, //Message creation date after filter parameter (exclusive). Available only for content version 'application/vnd.allegro.public.v1+json'.
     *    "page.id"?: string, //ID of the page of messages to retrieve. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MessagesList|Model\MessagesListVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ListMessagesGETUnauthorizedException
     * @throws Exception\ListMessagesGETForbiddenException
     * @throws Exception\ListMessagesGETNotFoundException
     * @throws Exception\ListMessagesGETUnprocessableEntityException
     */
    public function listMessagesGET(string $threadId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\ListMessagesGET($threadId, $queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to write new message in existing thread. This resource is rate limited to 1 request per second for a user. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#nowa-wiadomosc" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-a-new-message" target="_blank">EN</a>.
     *
     * @param string $threadId identifier of thread to write message to
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Message|Model\MessageVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\NewMessageInThreadPOSTUnauthorizedException
     * @throws Exception\NewMessageInThreadPOSTForbiddenException
     * @throws Exception\NewMessageInThreadPOSTNotFoundException
     * @throws Exception\NewMessageInThreadPOSTUnprocessableEntityException
     */
    public function newMessageInThreadPOST(string $threadId, ?Model\NewMessageInThread $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\NewMessageInThreadPOST($threadId, $requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to delete message with provided identifier. This resource is deprecated and will be removed in the future. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#usuniecie-wiadomosci" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#delete-a-message" target="_blank">EN</a>.
     *
     * @param string $messageId identifier of the message to delete
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteMessageDELETEUnauthorizedException
     * @throws Exception\DeleteMessageDELETEForbiddenException
     * @throws Exception\DeleteMessageDELETENotFoundException
     */
    public function deleteMessageDELETE(string $messageId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteMessageDELETE($messageId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get message with provided identifier. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-wiadomosci" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-message" target="_blank">EN</a>.
     *
     * @param string $messageId identifier of message to be returned
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Message|Model\MessageVBeta1|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetMessageGETUnauthorizedException
     * @throws Exception\GetMessageGETNotFoundException
     */
    public function getMessageGET(string $messageId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetMessageGET($messageId, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to add attachment declaration before uploading. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#deklaracja-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#attachment-declaration" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MessageAttachmentId|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\NewAttachmentDeclarationPOSTUnauthorizedException
     * @throws Exception\NewAttachmentDeclarationPOSTUnsupportedMediaTypeException
     * @throws Exception\NewAttachmentDeclarationPOSTUnprocessableEntityException
     */
    public function newAttachmentDeclarationPOST(?Model\NewAttachmentDeclaration $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\NewAttachmentDeclarationPOST($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to download attachment with provided identifier. You can retrieve attachments uploaded within the last 6 months. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#pobranie-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#attachment-related-to-the-message" target="_blank">EN</a>.
     *
     * @param string $attachmentId identifier of the attachment that will be downloaded
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DownloadAttachmentGETUnauthorizedException
     * @throws Exception\DownloadAttachmentGETNotFoundException
     */
    public function downloadAttachmentGET(string $attachmentId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DownloadAttachmentGET($attachmentId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to upload attachment using identifier that was declared. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#dodanie-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-an-attachment" target="_blank">EN</a>.
     *
     * @param string                                                 $attachmentId the identifier of attachment that will be uploaded
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MessageAttachmentId|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UploadAttachmentPUTUnauthorizedException
     * @throws Exception\UploadAttachmentPUTForbiddenException
     * @throws Exception\UploadAttachmentPUTNotFoundException
     * @throws Exception\UploadAttachmentPUTRequestEntityTooLargeException
     * @throws Exception\UploadAttachmentPUTUnsupportedMediaTypeException
     */
    public function uploadAttachmentPUT(string $attachmentId, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\UploadAttachmentPUT($attachmentId, $requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get all customer returns filtered by query parameters. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-zwrotow" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-customer-returns-list" target="_blank">EN</a>. This resource is limited to 25 requests per second for a single user and 50 requests per second for clientId.
     *
     * @param array{
     *    "customerReturnId"?: string, //One or more customer return id's.
     *    "orderId"?: string, //One or more order id's.
     *    "buyer.email"?: string, //One or more buyer emails.
     *    "buyer.login"?: string, //One or more buyer logins.
     *    "items.offerId"?: string, //One or more returned item offer id's.
     *    "items.name"?: string, //One or more item names.
     *    "parcels.waybill"?: string, //One or more waybill id's.
     *    "parcels.transportingWaybill"?: string, //Waybill ids as generated by carriers physically transporting the parcel. Will be null if there's only one carrier involved in a parcel shipment.
     *    "parcels.carrierId"?: string, //One or more carrier id's.
     *    "parcels.transportingCarrierId"?: string, //Carrier id of a carrier physically transporting the parcel. Will be null if there's only one carrier involved in a parcel shipment.
     *    "parcels.sender.phoneNumber"?: string, //One or more phone numbers.
     *    "referenceNumber"?: string, //One or more reference numbers.
     *    "from"?: string, //The ID of the last seen customer return. Customer returns created after the given customer return will be returned.
     *    "createdAt.gte"?: string, //Date of the return in ISO 8601 format to search by greater or equal.
     *    "createdAt.lte"?: string, //Date of the return in ISO 8601 format to search by lower or equal.
     *    "marketplaceId"?: string, //The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces.
     *    "status"?: string, //Current return timeline statuses. The allowed values are:
     * CREATED
     * DISPATCHED
     * IN_TRANSIT
     * DELIVERED
     * FINISHED
     * FINISHED_APT
     * REJECTED
     * COMMISSION_REFUND_CLAIMED
     * COMMISSION_REFUNDED
     * WAREHOUSE_DELIVERED
     * WAREHOUSE_VERIFICATION.
     *    "limit"?: int, //Limit of customer returns per page.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CustomerReturnResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCustomerReturnsBadRequestException
     * @throws Exception\GetCustomerReturnsUnauthorizedException
     * @throws Exception\GetCustomerReturnsForbiddenException
     * @throws Exception\GetCustomerReturnsNotAcceptableException
     */
    public function getCustomerReturns(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCustomerReturns($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get customer returns by its identifier. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-szczegolowe-informacje-o-zwrocie" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-detailed-information-about-customer-return" target="_blank">EN</a>.
     *
     * @param string $customerReturnId id of the customer return
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CustomerReturn|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCustomerReturnByIdBadRequestException
     * @throws Exception\GetCustomerReturnByIdUnauthorizedException
     * @throws Exception\GetCustomerReturnByIdForbiddenException
     * @throws Exception\GetCustomerReturnByIdNotFoundException
     * @throws Exception\GetCustomerReturnByIdNotAcceptableException
     */
    public function getCustomerReturnById(string $customerReturnId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCustomerReturnById($customerReturnId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to reject customer return refund with provided reason. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-odmowic-zwrotu-wplaty" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-reject-customer-return-refund" target="_blank">EN</a>.
     *
     * @param string $customerReturnId id of the customer return
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CustomerReturn|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\RejectCustomerReturnRefundBadRequestException
     * @throws Exception\RejectCustomerReturnRefundUnauthorizedException
     * @throws Exception\RejectCustomerReturnRefundForbiddenException
     * @throws Exception\RejectCustomerReturnRefundNotAcceptableException
     * @throws Exception\RejectCustomerReturnRefundUnprocessableEntityException
     */
    public function rejectCustomerReturnRefund(string $customerReturnId, ?Model\CustomerReturnRefundRejectionRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RejectCustomerReturnRefund($customerReturnId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of Advance Ship Notices. The list is ordered by **createdAt** property. Default **offset** is 0, default **limit** is 50. A list can be filtered by statuses. Multiple status query parameters are allowed. In such cases, filters are joined with **OR** logical operator. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-przegladac-utworzone-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-get-created-advance-ship-notices" target="_blank">EN</a>.
     *
     * @param array{
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //Maximum number of elements in response.
     *    "status"?: array, //A status of the Advance Ship Notices in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdvanceShipNoticeList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAdvanceShipNoticesUnauthorizedException
     * @throws Exception\GetAdvanceShipNoticesForbiddenException
     * @throws Exception\GetAdvanceShipNoticesUnprocessableEntityException
     */
    public function getAdvanceShipNotices(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetAdvanceShipNotices($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to create an Advance Ship Notice. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#utworz-draft-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-a-draft-of-the-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CreateAdvanceShipNoticeResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateAdvanceShipNoticeBadRequestException
     * @throws Exception\CreateAdvanceShipNoticeUnauthorizedException
     * @throws Exception\CreateAdvanceShipNoticeForbiddenException
     * @throws Exception\CreateAdvanceShipNoticeUnprocessableEntityException
     */
    public function createAdvanceShipNotice(?Model\CreateAdvanceShipNoticeRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\CreateAdvanceShipNotice($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get refund dispositions for returns handled in One Fulfillment. The response contains data from the last 90 days only. The response contains both buyer returns and operational returns. When there is no matching disposition, the `report` array is empty. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-pobrac-raport-dyspozycji-zwrotu-srodkow" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-retrieve-the-refund-disposition-report" target="_blank">EN</a>.
     *
     * @param array{
     *    "createdAt.gte"?: string, //Date of the return in ISO 8601 format to search by greater or equal.
     *    "createdAt.lte"?: string, //Date of the return in ISO 8601 format to search by lower or equal.
     *    "limit"?: int, //Maximum number of elements in response.
     *    "offset"?: int, //The offset of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FulfillmentRefundDispositionsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetRefundDispositionsReportUnauthorizedException
     * @throws Exception\GetRefundDispositionsReportForbiddenException
     * @throws Exception\GetRefundDispositionsReportNotAcceptableException
     * @throws Exception\GetRefundDispositionsReportUnprocessableEntityException
     */
    public function getRefundDispositionsReport(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetRefundDispositionsReport($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to delete an Advance Ship Notice. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-usunac-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-delete-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id an identifier of the Advance Ship Notice to delete
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\DeleteAdvanceShipNoticeUnauthorizedException
     * @throws Exception\DeleteAdvanceShipNoticeForbiddenException
     * @throws Exception\DeleteAdvanceShipNoticeNotFoundException
     * @throws Exception\DeleteAdvanceShipNoticeUnprocessableEntityException
     */
    public function deleteAdvanceShipNotice(string $id = '0b488a23-bc99-470d-8842-0c585adf2479', array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteAdvanceShipNotice($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get an Advance Ship Notice. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-przegladac-utworzone-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-get-created-advance-ship-notices" target="_blank">EN</a>.
     *
     * @param string $id the identifier of returned Advance Ship Notice
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdvanceShipNoticeResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAdvanceShipNoticeUnauthorizedException
     * @throws Exception\GetAdvanceShipNoticeForbiddenException
     * @throws Exception\GetAdvanceShipNoticeNotFoundException
     */
    public function getAdvanceShipNotice(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAdvanceShipNotice($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to update an Advance Ship Notice.
     * If a client wants to update read-only property, an error is returned (only in cases when sent value will be different than actual on the server). Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#uzupelnij-dane-o-awizo" target="_blank">PL</a> / <a href="../../one-fulfillment-by-allegro-4R9dXyMPlc9#complete-the-data-of-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id an identifier of Advance Ship Notice
     * @param array{
     *    "if-match": string, //A current version of Advance Ship Notice (e.g. from etag header obtained via get).
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdvanceShipNoticeResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateAdvanceShipNoticeBadRequestException
     * @throws Exception\UpdateAdvanceShipNoticeUnauthorizedException
     * @throws Exception\UpdateAdvanceShipNoticeForbiddenException
     * @throws Exception\UpdateAdvanceShipNoticePreconditionFailedException
     * @throws Exception\UpdateAdvanceShipNoticeUnprocessableEntityException
     */
    public function updateAdvanceShipNotice(string $id, ?Model\AdvanceShipNotice $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\UpdateAdvanceShipNotice($id, $requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to cancel an Advance Ship Notice in IN_TRANSIT status. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#anuluj-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#cancel-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id an identifier of the Advance Ship Notice to cancel
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CancelAdvanceShipNoticeUnauthorizedException
     * @throws Exception\CancelAdvanceShipNoticeForbiddenException
     * @throws Exception\CancelAdvanceShipNoticeNotFoundException
     * @throws Exception\CancelAdvanceShipNoticeUnprocessableEntityException
     */
    public function cancelAdvanceShipNotice(string $id = '0b488a23-bc99-470d-8842-0c585adf2479', array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CancelAdvanceShipNotice($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get labels for Advance Ship Notice. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#pobierz-oznaczenia-na-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#download-labels-for-asn" target="_blank">EN</a>.
     *
     * @param string $id an identifier of the Advance Ship Notice
     * @param array{
     *    "accept": string, //Content-type of generated labels.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/pdf|x-application/zpl
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAdvanceShipNoticeLabelsUnauthorizedException
     * @throws Exception\GetAdvanceShipNoticeLabelsForbiddenException
     * @throws Exception\GetAdvanceShipNoticeLabelsNotFoundException
     */
    public function getAdvanceShipNoticeLabels(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetAdvanceShipNoticeLabels($id, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get submit status of the Advance Ship Notice. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $commandId an identifier of the command
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SubmitCommand|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetSubmitCommandUnauthorizedException
     * @throws Exception\GetSubmitCommandForbiddenException
     * @throws Exception\GetSubmitCommandUnprocessableEntityException
     */
    public function getSubmitCommand(string $commandId = '882202c8-15ab-4a83-aeef-29ea505bf0d0', array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetSubmitCommand($commandId, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to submit the Advance Ship Notice. After this operation, updates of the Advance Ship Notice are limited to selected properties only. See <a href="../../documentation#operation/updateSubmittedAdvanceShipNotice">PUT /fulfillment/advance-ship-notices/{id}/submitted</a>. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $commandId the identifier of the command
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SubmitCommand|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\SubmitCommandUnauthorizedException
     * @throws Exception\SubmitCommandUnprocessableEntityException
     */
    public function submitCommand(string $commandId = '725432a9-ae9e-43de-b8c5-7430606a81a4', ?Model\SubmitCommand $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\SubmitCommand($commandId, $requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to update already submitted Advance Ship Notice. Update is allowed only when Advance Ship Notice is in "IN_TRANSIT" status. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#edytuj-zakonczone-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#edit-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id an identifier of Advance Ship Notice
     * @param array{
     *    "if-match": string, //A current version of Advance Ship Notice (e.g. from etag header obtained via get).
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AdvanceShipNoticeResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateSubmittedAdvanceShipNoticeBadRequestException
     * @throws Exception\UpdateSubmittedAdvanceShipNoticeUnauthorizedException
     * @throws Exception\UpdateSubmittedAdvanceShipNoticeForbiddenException
     * @throws Exception\UpdateSubmittedAdvanceShipNoticePreconditionFailedException
     * @throws Exception\UpdateSubmittedAdvanceShipNoticeUnprocessableEntityException
     */
    public function updateSubmittedAdvanceShipNotice(string $id, ?Model\UpdateSubmittedAdvanceShipNoticeRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\UpdateSubmittedAdvanceShipNotice($id, $requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get a list of the products belonging to the seller, which are in Allegro Warehouse. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-pobrac-aktualne-stany-magazynowe" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#get-available-stock" target="_blank">EN</a>.
     *
     * @param array{
     *    "offset"?: int, //The offset of elements in the response. Ignored for text/csv content type.
     *    "limit"?: int, //Maximum number of elements in response. Ignored for text/csv content type.
     *    "phrase"?: string, //Filtering search results by product name.
     *    "sort"?: string, //Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type.
     * Possible values for the "sort" parameter:
     * -available - sorting by quantity of available products (descending)
     * available - sorting by quantity of available products (ascending)
     * -unfulfillable - sorting by quantity of unfulfillable products (descending)
     * unfulfillable - sorting by quantity of unfulfillable products (ascending)
     * -name - sorting by product’s name (descending)
     * name - sorting by product’s name (ascending)
     * lastFourteenDaysSalesAverage - sorting by product last fourteen days average sales (ascending)
     * -lastFourteenDaysSalesAverage - sorting by product last fourteen days average sales (descending)
     * reserve - sorting by reserve.outOfStockIn field (ascending)
     * -reserve - sorting by reserve.outOfStockIn field (descending)
     * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)
     * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)
     * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then CHARGED ordered by amountGross ascending.
     * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then NOT_APPLICABLE.
     *    "productId"?: string, //Filtering search results by fulfillment product identifier. Ignored for text/csv content type.
     *    "productAvailability"?: array, //Filtering search results by availability.
     *    "productStatus"?: string, //Filtering search results by status.
     *    "asnStatus"?: string, //Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don't have related ASN with products on it are returned.
     *    "outOfStockInFrom"?: int, //Filter by products with outOfStockIn greater than or equal.
     *    "outOfStockInTo"?: int, //Filter by products with outOfStockIn less than or equal.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|text/csv|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\StockProductList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetFulfillmentStockUnauthorizedException
     * @throws Exception\GetFulfillmentStockForbiddenException
     * @throws Exception\GetFulfillmentStockUnprocessableEntityException
     */
    public function getFulfillmentStock(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetFulfillmentStock($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get list of parcels and included items for a given order. Items include detailed information such as expiration dates and serial numbers. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-obslugiwac-zamowienia" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-handle-orders" target="_blank">EN</a>.
     *
     * @param string $orderId the Allegro's platform order identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FulfillmentOrder|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetFulfillmentOrderParcelsNotFoundException
     * @throws Exception\GetFulfillmentOrderParcelsUnauthorizedException
     */
    public function getFulfillmentOrderParcels(string $orderId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFulfillmentOrderParcels($orderId, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get a list of products that can be added to Advance Ship Notice. The list contains products for which the seller has created offers and is ordered by product's name. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#sprawdz-dostepne-produkty-do-awizacji" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#check-available-products-for-asn" target="_blank">EN</a>.
     *
     * @param array{
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //Maximum number of elements in response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AvailableProductsList|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAvailableProductsUnauthorizedException
     * @throws Exception\GetAvailableProductsForbiddenException
     * @throws Exception\GetAvailableProductsUnprocessableEntityException
     */
    public function getAvailableProducts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\GetAvailableProducts($queryParameters, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to check the state of Advance Ship Notice receiving in Fulfillment Center in real time. The response contains a receiving progress and information about particular items - their quantities and conditions. While the Advance Ship Notice is in UNPACKING state, report is updated dynamically, which might result in different responses even at short time intervals. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#sprawdz-postep-odbioru-awizo-przez-magazyn" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#check-current-state-and-details-of-advance-ship-notice-receiving" target="_blank">EN</a>.
     *
     * @param string $id an identifier of advance ship notice
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ReceivingState|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetAdvanceShipNoticeReceivingStateUnauthorizedException
     * @throws Exception\GetAdvanceShipNoticeReceivingStateForbiddenException
     * @throws Exception\GetAdvanceShipNoticeReceivingStateNotFoundException
     */
    public function getAdvanceShipNoticeReceivingState(string $id = '712fa46c-7d4a-4ba0-b094-b5d1d4f6155d', array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAdvanceShipNoticeReceivingState($id, $headerParameters), $fetch);
    }

    /**
     * Use this resource to get the warehouse assigned to the seller.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FulfillmentWarehouse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetFulfillmentWarehouseUnauthorizedException
     * @throws Exception\GetFulfillmentWarehouseForbiddenException
     * @throws Exception\GetFulfillmentWarehouseNotFoundException
     */
    public function getFulfillmentWarehouse(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFulfillmentWarehouse($headerParameters), $fetch);
    }

    /**
     * Use this resource to get tax identification number with verification status. After adding or updating the tax identification number the status will be NOT_VERIFIED and you will have to wait for acceptance status to start selling. Read more: <a href="../../news/one-fulfillment-umozliwiamy-zarzadzanie-numerem-identyfikacji-podatkowej-vat-6M2xgdAmGFM" target="_blank">PL</a> / <a href="../../news/one-fulfillment-we-allow-you-to-manage-your-vat-identification-number-Pgj9WXjWwcm" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TaxIdResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetTaxIdUnauthorizedException
     * @throws Exception\GetTaxIdForbiddenException
     * @throws Exception\GetTaxIdNotFoundException
     */
    public function getTaxId(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetTaxId($headerParameters), $fetch);
    }

    /**
     * Use this resource to add tax identification number. For international sellers only. Read more: <a href="../../news/one-fulfillment-umozliwiamy-zarzadzanie-numerem-identyfikacji-podatkowej-vat-6M2xgdAmGFM" target="_blank">PL</a> / <a href="../../news/one-fulfillment-we-allow-you-to-manage-your-vat-identification-number-Pgj9WXjWwcm" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\AddTaxIdUnauthorizedException
     * @throws Exception\AddTaxIdForbiddenException
     * @throws Exception\AddTaxIdNotFoundException
     * @throws Exception\AddTaxIdUnprocessableEntityException
     */
    public function addTaxId(?Model\TaxIdRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AddTaxId($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to update tax identification number. For international sellers only. Read more: <a href="../../news/one-fulfillment-umozliwiamy-zarzadzanie-numerem-identyfikacji-podatkowej-vat-6M2xgdAmGFM" target="_blank">PL</a> / <a href="../../news/one-fulfillment-we-allow-you-to-manage-your-vat-identification-number-Pgj9WXjWwcm" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\UpdateTaxIdUnauthorizedException
     * @throws Exception\UpdateTaxIdForbiddenException
     * @throws Exception\UpdateTaxIdUnprocessableEntityException
     * @throws Exception\UpdateTaxIdNotFoundException
     */
    public function updateTaxId(?Model\TaxIdRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateTaxId($requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this resource to find your CPS (Cost Per Sale) conversions for specific filters. The response contains a list of CPS conversions that correspond with the specified parameters. Read more: <a href="../../tutorials/afiliacja-0A1bPnwVwUq#jak-pobrac-informacje-o-konwersji-cps" target="_blank">PL</a> / <a href="../../tutorials/affiliation-8do60yLKPIq#how-to-retrieve-cps-conversion-information" target="_blank">EN</a>.
     *
     * @param array{
     *    "orderCreatedAt.gte"?: string, //The minimum date and time of order creation in ISO 8601 format.
     *    "orderCreatedAt.lte"?: string, //The maximum date and time of order creation in ISO 8601 format.
     *    "lastModifiedAt.gte"?: string, //The minimum date and time of the latest conversion modification in ISO 8601 format.
     *    "lastModifiedAt.lte"?: string, //The maximum date and time of the latest conversion modification in ISO 8601 format.
     *    "status"?: string, //Conversion status. The allowed values are:
     * CREATED
     * REJECTED
     * CONFIRMED.
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //Maximum number of elements in response.
     *    "includePublisherUrlParameters"?: array, //Comma-separated keys of the ‘publisherUrlParameters’ map which will be included in the response. By default the map is empty.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CpsConversionResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetCpsConversionsBadRequestException
     * @throws Exception\GetCpsConversionsUnauthorizedException
     * @throws Exception\GetCpsConversionsForbiddenException
     * @throws Exception\GetCpsConversionsUnprocessableEntityException
     */
    public function getCpsConversions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCpsConversions($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this resource to read your current removal preference. Removal preference is associated with system removal order at the moment of removal order is created. It means there can be not yet fulfilled removal orders associated with previously set removal preference. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#pobierz-aktualne-ustawienia-sposobu-usuniecia-towaru-z-magazynu" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#retrieve-current-settings-for-how-to-remove-goods-from-the-warehouse" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FulfillmentRemovalPreference|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetFulfillmentRemovalPreferencesUnauthorizedException
     * @throws Exception\GetFulfillmentRemovalPreferencesForbiddenException
     * @throws Exception\GetFulfillmentRemovalPreferencesNotFoundException
     */
    public function getFulfillmentRemovalPreferences(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetFulfillmentRemovalPreferences($headerParameters), $fetch);
    }

    /**
     * Use this resource to create new active removal preference. From the moment the preference is set, it becomes the active one, and all new system removal orders will be associated with this preference. Removal preference is associated with system removal order at the moment of removal order is created. It means there can be not yet fulfilled removal orders associated with previously set removal preference. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#utworz-lub-edytuj-ustawienia-sposobu-usuniecia-towaru-z-magazynu" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-or-edit-settings-for-how-to-remove-goods-from-the-warehouse" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array  $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\FulfillmentRemovalPreference|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\CreateFulfillmentRemovalPreferencesUnauthorizedException
     * @throws Exception\CreateFulfillmentRemovalPreferencesForbiddenException
     * @throws Exception\CreateFulfillmentRemovalPreferencesUnprocessableEntityException
     */
    public function createFulfillmentRemovalPreferences(?Model\FulfillmentRemovalPreference $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new Endpoint\CreateFulfillmentRemovalPreferences($requestBody, $headerParameters, $accept), $fetch);
    }

    /**
     * Use this resource to get enabled deposit types available when creating an offer. The pricing mode determines whether the deposit has a fixed catalog price (`FIXED`) or requires a seller-provided price in the configured currency (`CUSTOM`). Read more: <a href="../../news/1-pazdziernika-2025-dostosujemy-allegro-api-do-rozporzadzenia-o-systemie-kaucyjnym-m0mLB4XM9Ib" target="_blank">PL</a> / <a href="../../news/on-october-1-2025-we-will-adapt-Allegro-API-to-the-deposit-system-regulation-m0mLB4XM9Ib" target="_blank">EN</a>.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\DepositTypeResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\GetDepositTypesUnauthorizedException
     * @throws Exception\GetDepositTypesForbiddenException
     * @throws Exception\GetDepositTypesNotFoundException
     */
    public function getDepositTypes(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDepositTypes($headerParameters), $fetch);
    }

    /**
     * Use this resource to parse raw, free-text ingredients declarations into structured ingredient lists for one or more products. Every submitted product text is parsed independently. The response contains parsed items together with errors and warnings detected for each product.
     *
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ParseIngredientsResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ParseIngredientsBadRequestException
     * @throws Exception\ParseIngredientsUnauthorizedException
     * @throws Exception\ParseIngredientsForbiddenException
     */
    public function parseIngredients(?Model\ParseIngredientsRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ParseIngredients($requestBody, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        }
        if ($applyServerPlugins) {
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.{environment}');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
        }
        if (\count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new Runtime\Client\FormEncoder()]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
