<?php

class ClientFacade
{

    public function getAllClientData($clientId)
    {
        return array(
            $clientId,
            $this->ClientAddress($clientId),
            $this->getMostPayedFor($clientId),
            $this->getPaymentHistory($clientId),
        );
    }

    private function ClientAddress($clientId)
    {
        $clientShippingAddress = '';

        $clientPersonalData    = new ClientPersonalData($clienId);
        $clientShippingAddress = $clientPersonalData->getAddress();
        $clientShippingAddress .= ',' . $clientPersonalData->getCountry();
        $clientShippingAddress .= ',' . $clientPersonalData->getPostalCode();

        return $clientShippingAddress;
    }

    private function getMostPayedFor($clientId)
    {
        $topPayments = new TopPayments();
        return $topPayments->findMaxForClientWithId($clientId);

    }

    private function getPaymentHistory($clientId)
    {
        $paymentHIstory = new PaymentHistory();
        return $paymentHIstory->findPaymentsForClient($clientId);

    }
}
