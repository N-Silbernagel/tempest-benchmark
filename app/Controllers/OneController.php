<?php

declare(strict_types=1);

namespace App\Controllers;

use Tempest\Http\GenericResponse;
use Tempest\Http\Get;
use Tempest\Http\Response;
use Tempest\Http\Status;

final readonly class OneController
{
    #[Get('/abc')]
    public function a(): Response
    {
        return new GenericResponse(Status::OK, 'what');
    }

    #[Get('/user/{userId}')]
    public function b(): Response
    {
        return new GenericResponse(Status::OK, 'user');
    }

    #[Get('/profile/{profileId}')]
    public function c(): Response
    {
        return new GenericResponse(Status::OK, 'profile');
    }

    #[Get('/documents/{documentId}')]
    public function d(): Response
    {
        return new GenericResponse(Status::OK, 'documents');
    }

    #[Get('/items/{itemId}')]
    public function e(): Response
    {
        return new GenericResponse(Status::OK, 'items');
    }

    #[Get('/orders/{orderId}')]
    public function f(): Response
    {
        return new GenericResponse(Status::OK, 'orders');
    }

    #[Get('/products/{productId}')]
    public function g(): Response
    {
        return new GenericResponse(Status::OK, 'products');
    }

    #[Get('/categories/{categoryId}')]
    public function h(): Response
    {
        return new GenericResponse(Status::OK, 'categories');
    }

    #[Get('/status/{status}')]
    public function i(): Response
    {
        return new GenericResponse(Status::OK, 'status');
    }

    #[Get('/search/{query}')]
    public function j(): Response
    {
        return new GenericResponse(Status::OK, 'search');
    }

    #[Get('/notifications/{notificationId}')]
    public function k(): Response
    {
        return new GenericResponse(Status::OK, 'notifications');
    }

    #[Get('/settings')]
    public function l(): Response
    {
        return new GenericResponse(Status::OK, 'settings');
    }

    #[Get('/help')]
    public function m(): Response
    {
        return new GenericResponse(Status::OK, 'help');
    }

    #[Get('/feedback')]
    public function n(): Response
    {
        return new GenericResponse(Status::OK, 'feedback');
    }

    #[Get('/reports/{reportId}')]
    public function o(): Response
    {
        return new GenericResponse(Status::OK, 'reports');
    }

    #[Get('/invoices/{invoiceId}')]
    public function p(): Response
    {
        return new GenericResponse(Status::OK, 'invoices');
    }

    #[Get('/shipping/{shippingId}')]
    public function q(): Response
    {
        return new GenericResponse(Status::OK, 'shipping');
    }

    #[Get('/payment/{paymentId}')]
    public function r(): Response
    {
        return new GenericResponse(Status::OK, 'payment');
    }

    #[Get('/support/tickets/{ticketId}')]
    public function s(Id $ticketId): Response
    {
        return new GenericResponse(Status::OK, 'support');
    }

    #[Get('/downloads/{downloadId}/file/{fileId}')]
    public function t(Id $downloadId, Id $fileId): Response
    {
        return new GenericResponse(Status::OK, 'downloads');
    }

    #[Get('/logs/{logId}')]
    public function u(Id $logId): Response
    {
        return new GenericResponse(Status::OK, 'logs');
    }
}
